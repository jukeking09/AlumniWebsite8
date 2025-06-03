<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Event</title>
    {{-- @include('fragments.topbar') --}}
    @include('fragments.navbar')
    @include('imports.headimport')

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .form-label {
            font-weight: 600;
        }

        .form-control.is-invalid {
            border-color: #dc3545;
        }

        .invalid-feedback {
            color: #dc3545;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
        }

        .btn-primary {
            border-radius: 6px;
        }

        .card {
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="container form-container">
        <div class="card shadow bg-white p-4">
            <h2 class="mb-4 text-center">Add New Event</h2>
            <form action="{{ route('events.store') }}" method="POST">
                @csrf

                <!-- Title -->
                <div class="mb-3">
                    <label for="event_name" class="form-label">Event Title</label>
                    <input 
                        type="text" 
                        class="form-control @error('event_name') is-invalid @enderror" 
                        id="event_name" 
                        name="event_name" 
                        value="{{ old('event_name') }}" 
                        required>
                    @error('event_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="event_description" class="form-label">Description</label>
                    <textarea 
                        class="form-control @error('event_description') is-invalid @enderror" 
                        id="event_description" 
                        name="event_description" 
                        rows="4" 
                        required>{{ old('event_description') }}</textarea>
                    @error('event_description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Date -->
                <div class="mb-3">
                    <label for="event_date" class="form-label">Event Date</label>
                    <input 
                        type="date" 
                        class="form-control @error('event_date') is-invalid @enderror" 
                        id="event_date" 
                        name="event_date" 
                        value="{{ old('event_date') }}" 
                        required>
                    @error('event_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Event Time From -->
                <div class="mb-3">
                    <label for="event_time_from" class="form-label">Event Time From</label>
                    <input 
                        type="time" 
                        class="form-control @error('event_time_from') is-invalid @enderror" 
                        id="event_time_from" 
                        name="event_time_from" 
                        value="{{ old('event_time_from') }}">
                    @error('event_time_from')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Event Time To -->
                <div class="mb-3">
                    <label for="event_time_to" class="form-label">Event Time To</label>
                    <input 
                        type="time" 
                        class="form-control @error('event_time_to') is-invalid @enderror" 
                        id="event_time_to" 
                        name="event_time_to" 
                        value="{{ old('event_time_to') }}">
                    @error('event_time_to')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Add Event</button>
                </div>
            </form>
        </div>
    </div>
    @include('fragments.footer')
    @include('imports.footimport')
</body>
</html>
