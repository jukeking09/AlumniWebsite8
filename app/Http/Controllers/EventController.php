<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use Carbon\Carbon;
use App\Models\EventImage;
class EventController extends Controller
{
    public function index()
    {
        // Logic to fetch and display events
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.add');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'event_name' => 'required|string|max:255',
            'event_description' => 'required|string',
            'event_date' => 'required|date',
            'event_time_from' => 'required|date_format:H:i',
            'event_time_to' => 'required|date_format:H:i|after:event_time_from',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Event::create([
            'event_name' => $request->event_name,
            'event_description' => $request->event_description,
            'event_date' => $request->event_date,
            'event_time_from' => $request->event_time_from,
            'event_time_to' => $request->event_time_to,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('events')->with('success', 'Event created successfully.');
    }

    public function show($id)
    {
        $event = Event::with('images')->findOrFail($id);
        return view('events.show', compact('event'));
    }

    public function edit($id)
    {
        // Logic to edit a specific event
        if (!Event::find($id)) {
            return redirect()->route('events')->with('error', 'Event not found.');
        }
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'event_name' => 'required|string|max:255',
            'event_description' => 'required|string',
            'event_date' => 'required|date',
            'event_time_from' => 'required|date_format:H:i',
            'event_time_to' => 'required|date_format:H:i|after:event_time_from',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $event->update([
            'event_name' => $request->event_name,
            'event_description' => $request->event_description,
            'event_date' => $request->event_date,
            'event_time_from' => $request->event_time_from,
            'event_time_to' => $request->event_time_to,
        ]);

        return redirect()->route('events')->with('success', 'Event updated successfully.');
    }

    public function showUploadImagesForm($id)
    {
        $event = Event::findOrFail($id);

        // Only allow if event date has passed
        if (Carbon::parse($event->event_date)->isFuture()) {
            return redirect()->route('events.show', $id)->with('error', 'You can upload images only after the event date.');
        }

        return view('events.upload_images', compact('event'));
    }

    // New method to handle image uploads
    public function uploadImages(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        if (Carbon::parse($event->event_date)->isFuture()) {
            return redirect()->route('events.show', $id)->with('error', 'You can upload images only after the event date.');
        }

        // Count current images for this event
        $currentImageCount = $event->images()->count();

        $validator = Validator::make($request->all(), [
            'event_images' => 'required|array|max:' . max(0, 5 - $currentImageCount),
            'event_images.*' => 'required|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('event_images')) {
            foreach ($request->file('event_images') as $image) {
                $path = $image->store('events/images', 'private');
                $event->images()->create([
                    'image_path' => $path,
                ]);
            }
        }

        // After upload, check if user exceeded the limit (should not happen, but just in case)
        if ($event->images()->count() > 5) {
            // Optionally, delete the extra images or show an error
            return redirect()->route('events.show', $id)->with('error', 'You cannot have more than 5 images for this event.');
        }

        return redirect()->route('events.show', $id)->with('success', 'Images uploaded successfully.');
    }

    public function destroy($id)
    {
        // Logic to delete a specific event
        if (!Event::find($id)) {
            return redirect()->route('events')->with('error', 'Event not found.');
        }
        Event::destroy($id);
        return redirect()->route('events')->with('success', 'Event deleted successfully.');
    }

    public function myEvents() {
        $events = Event::where('user_id', auth()->id())->get();
        return view('events.myevents', compact('events'));
    }

    // Serve event images securely from private storage
    public function showEventImage($filename)
    {
        $path = storage_path('app/private/events/images/' . $filename);
        if (!file_exists($path)) {
            abort(404);
        }
        return response()->file($path);
    }
}