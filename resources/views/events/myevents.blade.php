<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('fragments.navbar')
    @include('imports.headimport')
    <div class="container py-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <span>My Events</span>
            <a href="{{ route('events.create') }}" ><button class="btn btn-light btn-sm">Add New Event</button></a>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($events->count())
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Date & Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                                <tr>
                                    <td>{{ $event->event_name }}</td>
                                    <td>{{ Str::limit($event->event_description, 50) }}</td>
                                    <td>{{ \Carbon\Carbon::parse($event->event_date)->format('F j, Y g:i A') }}</td>
                                    <td>
                                        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-sm btn-warning mb-1">Edit</a>

                                        {{-- Check if event date has passed --}}
                                        @if(\Carbon\Carbon::parse($event->event_date)->isPast())
                                            <a href="{{ route('events.uploadImages', $event->id) }}" class="btn btn-sm btn-info mb-1">Add Images</a>
                                        @else
                                            <button class="btn btn-sm btn-secondary mb-1" disabled>Event Not Yet Finished</button>
                                        @endif

                                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this event?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-muted">You have not created any events yet.</p>
            @endif
        </div>
    </div>
</div>
    @include('fragments.footer')
    @include('imports.footimport')
</body>
</html>