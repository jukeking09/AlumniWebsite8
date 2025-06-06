<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Event Details</title>
</head>
<body>
    @include('imports.headimport')
    @include('fragments.topbar')
    @include('fragments.navbar')
    <div class="container mt-5 p-5">
    <div class="card shadow-lg p-4">
        <h1 class="mb-4 text-center text-primary">{{ $event->event_name }}</h1>
            <p class="mb-1"><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}</p>
            
            @php
                $eventDate = \Carbon\Carbon::parse($event->event_date);
                $startDateTime = $eventDate->copy()->setTimeFromTimeString($event->event_time_from);
                $endDateTime = $eventDate->copy()->setTimeFromTimeString($event->event_time_to);
            @endphp
            
            <p class="mb-1"><strong>Event starts:</strong> {{ $startDateTime->format('d M Y, h:i A') }}</p>
            <p class="mb-1"><strong>Event ends:</strong> {{ $endDateTime->format('h:i A') }}</p>

        <div class="mb-4">
            <p class="text-justify">{{ $event->event_description }}</p>
        </div>

        @if($event->images->count() > 0)
            <h3 class="mt-4 text-center">Event Photos</h3>
            <div class="row g-3 mt-3">
                @foreach($event->images as $image)
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card">
                            <img src="{{ route('event-image.show', basename($image->image_path)) }}" alt="Event Image" class="card-img-top rounded" />
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    </div>
    @include('fragments.footer')
    @include('imports.footimport')
</body>
</html>
