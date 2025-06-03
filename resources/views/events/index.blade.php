<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    @include('imports.headimport') {{-- Ensure this includes Bootstrap CSS --}}
    <style>
        .event-card {
            transition: transform 0.2s ease-in-out;
        }
        .event-card:hover {
            transform: scale(1.02);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body>
    @include('fragments.topbar')
    @include('fragments.navbar')

    <div class="container mt-5">
        <h1 class="mb-4">Events</h1>

        @if($events->isEmpty())
            <div class="alert alert-info">No events found.</div>
        @else
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach($events as $event)
                    <div class="col">
                        <a href="{{ route('events.show', $event->id) }}" class="text-decoration-none text-dark">
                            <div class="card event-card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $event->event_name }}</h5>
                                    <p class="card-text text-truncate">{{ $event->event_description }}</p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            {{ \Carbon\Carbon::parse($event->event_date)->format('F j, Y') }}
                                            @if($event->event_time)
                                                | {{ \Carbon\Carbon::parse($event->event_time)->format('g:i A') }}
                                            @endif
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>
@include('fragments.footer')