<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Country Code</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    @include('admin.sidebar')
<div class="container mt-5">
    <h2>Add Country Code</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.country_codes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Code</label>
            <input type="text" name="code" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Country Name</label>
            <input type="text" name="country_name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Add Country</button>
    </form>
    <h4 class="mt-4">All Country Codes</h4>
    <ul class="list-group mt-3">
        @foreach($countryCodes as $country)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>{{ $country->code }} - {{ $country->country_name }}</span>
                <span>
                    <!-- Edit Button -->
                    <button type="button" class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#editCountryModal{{ $country->id }}">Edit</button>
                </span>
            </li>
            <!-- Edit Modal -->
            <div class="modal fade" id="editCountryModal{{ $country->id }}" tabindex="-1" aria-labelledby="editCountryModalLabel{{ $country->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('admin.country_codes.update', $country->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-header">
                                <h5 class="modal-title" id="editCountryModalLabel{{ $country->id }}">Edit Country Code</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label>Code</label>
                                    <input type="text" name="code" class="form-control @error('code') is-invalid @enderror" value="{{ $country->code }}" required>
                                    @error('code') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label>Country Name</label>
                                    <input type="text" name="country_name" class="form-control @error('country_name') is-invalid @enderror" value="{{ $country->country_name }}" required>
                                    @error('country_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label>Country Code</label>
                                    <input type="text" name="country_code" class="form-control @error('country_code') is-invalid @enderror" value="{{ old('country_code', $country->country_code) }}" required>
                                    @error('country_code')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </ul>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>