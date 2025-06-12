<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images For Event</title>
</head>
<body>
    @include('fragments.navbar')
    @include('imports.headimport')
    <div class="container">
        <div class="card p-5 m-5">
            <h2 class="text-center">Upload Images for Event: <span class="text-primary">{{ $event->event_name }}</span></h2>

    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
            <div class="card-body">
                @if($event->images->count() >= 5)
                    <div class="alert alert-info text-center">
                        You have reached the maximum of 5 images for this event. You cannot upload more images.
                    </div>
                @else
                    <form action="{{ route('events.uploadImages', $event->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="event_images" class="form-label">Select Images</label>
                            <input type="file" name="event_images[]" id="event_images" class="form-control @error('event_images') is-invalid @enderror" multiple accept="image/*" required onchange="checkFileCount(this)">
                            <div class="form-text text-muted">Accepted types: JPG, JPEG, PNG, GIF, WEBP. Max size: 2MB per image. You can select up to 5 files. No Underscores in filename</div>
                            @error('event_images')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Upload Images</button>
                    </form>
                @endif
            </div>
    
        </div>
</div>
    @include('fragments.footer')
    @include('imports.footimport')
    <script>
        function checkFileCount(input) {
            if (input.files.length > 5) {
                alert('You can upload a maximum of 5 images.');
                input.value = '';
            }
        }
    </script>
</body>
</html>