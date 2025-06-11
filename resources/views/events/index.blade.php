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

    <div class="container py-5">
    <div class="text-center mb-4">
            <h1 class="h3">Events</h1>
        </div>
    @if($events->isEmpty())
        <div class="alert alert-info text-center">No events found.</div>
    @else
        <div class="row">
            @foreach($events as $event)
                <div class="col-md-6 mb-4">
                    <a href="{{ route('events.show', $event->id) }}" class="text-decoration-none">
                        <div class="card shadow-sm event-card">
                            <div class="card-body">
                                <div class="row align-items-center mb-4">
                                    @if($event->image_path)
                                        <div class="col-md-5 mb-3 mb-md-0">
                                            <img src="{{ route('event-image.show', basename($event->image_path)) }}" alt="Event Image" class="img-fluid rounded w-100 h-100 object-fit-cover" style="min-height:250px;max-height:350px;object-fit:cover;">
                                        </div>
                                        <div class="col-md-7">
                                            <h5 class="card-title text-primary fw-bold">{{ $event->event_name }}</h5>
                                            <p class="card-text text-dark">{{ $event->event_description }}</p>
                                            <p class="card-text">
                                                <small class="text-secondary">
                                                    {{ \Carbon\Carbon::parse($event->event_date)->format('F j, Y') }}
                                                    @if($event->event_time)
                                                        | {{ \Carbon\Carbon::parse($event->event_time)->format('g:i A') }}
                                                    @endif
                                                </small>
                                            </p>
                                        </div>
                                    @else
                                        <div class="col-12">
                                            <h5 class="card-title text-primary fw-bold">{{ $event->event_name }}</h5>
                                            <p class="card-text text-dark">{{ $event->event_description }}</p>
                                            <p class="card-text">
                                                <small class="text-secondary">
                                                    {{ \Carbon\Carbon::parse($event->event_date)->format('F j, Y') }}
                                                    @if($event->event_time)
                                                        | {{ \Carbon\Carbon::parse($event->event_time)->format('g:i A') }}
                                                    @endif
                                                </small>
                                            </p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer bg-white border-0 text-center">
                                <button class="btn btn-outline-primary btn-sm">View Details</button>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @endif
</div>
    @include('fragments.footer')
    @include('imports.footimport')
</body>
</html>
