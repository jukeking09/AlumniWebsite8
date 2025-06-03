<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images For Event</title>
</head>
<body>
    <div class="container">
    <h2>Upload Images for Event: {{ $event->event_name }}</h2>

    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('events.uploadImages', $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="event_images" class="form-label">Select Images</label>
            <input type="file" name="event_images[]" id="event_images" class="form-control @error('event_images') is-invalid @enderror" multiple accept="image/*" required>
            @error('event_images')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Upload Images</button>
    </form>
</div>
</body>
</html>