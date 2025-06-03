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

    <div class="container mt-5">
        <h1 class="mb-4">{{ $event->event_name }}</h1>

        <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}</p>

        @php
            // Use Carbon::parse for date, then set time for start and end
            $eventDate = \Carbon\Carbon::parse($event->event_date);
            $startDateTime = $eventDate->copy()->setTimeFromTimeString($event->event_time_from);
            $endDateTime = $eventDate->copy()->setTimeFromTimeString($event->event_time_to);
        @endphp

        <p><strong>Event starts:</strong> {{ $startDateTime->format('d M Y, h:i A') }}</p>
        <p><strong>Event ends:</strong> {{ $endDateTime->format('h:i A') }}</p>

        <p>{{ $event->event_description }}</p>

        @if($event->images->count() > 0)
            <h3 class="mt-4">Event Photos</h3>
            <div class="row">
                @foreach($event->images as $image)
                    <div class="col-md-3 mb-3">
                        <img src="{{ route('event-image.show', basename($image->image_path)) }}" alt="Event Image" class="img-fluid rounded" />
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>
