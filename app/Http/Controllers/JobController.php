<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    // Display a listing of jobs posted by other users
    public function index(Request $request)
    {
        $query = Job::where('user_id', '!=', Auth::id());

        if ($request->filled('job_type')) {
            $query->where('job_type', $request->job_type);
        }

        $jobs = $query->latest()->get();

        return view('jobs.index', compact('jobs'));
    }

    // Display a listing of jobs posted by the authenticated user
    public function myJobs()
    {
        $jobs = Job::where('user_id', Auth::id())->latest()->get();
        return view('jobs.myjobs', compact('jobs'));
    }

    // Show the form for creating a new job
    public function create()
    {
        return view('jobs.add');
    }

    // Store a newly created job in storage
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'job_title' => 'required|string|max:255',
            'job_description' => 'required|string',
            'company_email' => 'required|email',
            'company_name' => 'required|string|max:255',
            'job_type' => 'required|in:job,internship',
            'pdf' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $pdfPath = null;

        if ($request->hasFile('pdf')) {
            $pdfPath = $request->file('pdf')->store('jobs/pdfs', 'private');
        }

        Job::create([
            'job_title' => $request->job_title,
            'job_description' => $request->job_description,
            'company_email' => $request->company_email,
            'company_name' => $request->company_name,
            'job_type' => $request->job_type,
            'pdf_path' => $pdfPath,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('jobs.myJobs')->with('success', 'Job posted successfully.');
    }

    // Show the form for editing the specified job
    public function edit($id)
    {
        $job = Job::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return view('jobs.edit', compact('job'));
    }

    // Update the specified job in storage
    public function update(Request $request, $id)
    {
        $job = Job::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        $validator = Validator::make($request->all(), [
            'job_title' => 'required|string|max:255',
            'job_description' => 'required|string',
            'company_email' => 'required|email',
            'company_name' => 'required|string|max:255',
            'job_type' => 'required|in:job,internship',
            'pdf' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        if(validator($request->all())->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pdfPath = $job->pdf_path;

        if ($request->hasFile('pdf')) {
            // Always delete the old PDF if it exists
            if ($job->pdf_path && Storage::disk('private')->exists($job->pdf_path)) {
                Storage::disk('private')->delete($job->pdf_path);
            }
            $pdfPath = $request->file('pdf')->store('jobs/pdfs', 'private');
        }

        $job->update([
            'job_title' => $request->job_title,
            'job_description' => $request->job_description,
            'company_email' => $request->company_email,
            'company_name' => $request->company_name,
            'job_type' => $request->job_type,
            'pdf_path' => $pdfPath,
        ]);

        return redirect()->route('jobs.myJobs')->with('success', 'Job updated successfully.');
    }

    // Remove the specified job from storage
    public function destroy($id)
    {
        $job = Job::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $job->delete();

        return redirect()->route('jobs.myJobs')->with('success', 'Job deleted successfully.');
    }

    // Show details of a job posted by another user
    public function show($id)
    {
        $job = Job::where('id', $id)
            ->where('user_id', '!=', Auth::id())
            ->firstOrFail();

        return view('jobs.show', compact('job'));
    }

    public function downloadPdf($filename)
    {
        // The PDF is stored in 'jobs/pdfs' on the 'private' disk
        $path = 'jobs/pdfs/' . $filename;

        if (!Storage::disk('private')->exists($path)) {
            abort(404);
        }

        return response()->file(storage_path('app/private/' . $path));
    }
}