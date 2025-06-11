<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Event</title> <!-- fixed closing tag -->
</head>
<body>
    @include('imports.headimport')
    {{-- @include('fragments.topbar') --}}
    @include('fragments.navbar')

    <div class="container my-5">
        <h1 class="mb-4 text-center">Edit Event</h1>

        <div class="d-flex justify-content-center">
            <form action="{{ route('events.update', $event->id) }}" method="POST" class="shadow p-4 rounded bg-white" style="width: 100%; max-width: 500px;" enctype="multipart/form-data">
                @csrf <!-- Required for PUT requests -->
                <input type="hidden" name="id" value="{{ $event->id }}">

                <div class="mb-3">
                    <label for="event_name" class="form-label">Event Title</label>
                    <input type="text" class="form-control @error('event_name') is-invalid @enderror" id="event_name" name="event_name" value="{{ old('event_name', $event->event_name) }}" required>
                    @error('event_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="event_description" class="form-label">Description</label>
                    <textarea class="form-control @error('event_description') is-invalid @enderror" id="event_description" name="event_description" rows="4" required>{{ old('event_description', $event->event_description) }}</textarea>
                    @error('event_description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="event_date" class="form-label">Event Date</label>
                    <input type="date" class="form-control @error('event_date') is-invalid @enderror" id="event_date" name="event_date" value="{{ old('event_date', $event->event_date) }}" required>
                    @error('event_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="event_time_from" class="form-label">Event Time From</label>
                    <input 
                        type="time" 
                        class="form-control @error('event_time_from') is-invalid @enderror" 
                        id="event_time_from" 
                        name="event_time_from" 
                        value="{{ old('event_time_from', $event->event_time_from) }}">
                    @error('event_time_from')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="event_time_to" class="form-label">Event Time To</label>
                    <input 
                        type="time" 
                        class="form-control @error('event_time_to') is-invalid @enderror" 
                        id="event_time_to" 
                        name="event_time_to" 
                        value="{{ old('event_time_to', $event->event_time_to) }}">
                    @error('event_time_to')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image_path" class="form-label">Event Image</label>
                    <input type="file" class="form-control @error('image_path') is-invalid @enderror" id="image_path" name="image_path" accept="image/*">
                    @if($event->image_path)
                        <div class="col-md-3 col-sm-6 col-12">
                        <div class="card">
                            <img src="{{ route('event-image.show', basename($event->image_path)) }}" alt="Event Image" class="card-img-top rounded" />
                        </div>
                    </div>
                    @endif
                    @error('image_path')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text">Leave blank to keep the current image.</small>
                </div>
                
                <button type="submit" class="btn btn-primary w-100">Update Event</button>
            </form>
        </div>
    </div>
        @include('fragments.footer')
    @include('imports.footimport')
</body>
</html>
