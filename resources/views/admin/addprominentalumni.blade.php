<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Prominent Alumni</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    @include('admin.sidebar')
    <div class="container mt-5">
        <h2 class="mb-4">Add Prominent Alumni</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('admin.prominent_alumni.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="alumniname" class="form-label">Alumni Name:</label>
                <input type="text" id="alumniname" name="alumniname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Photo:</label>
                <input type="file" id="photo" name="photo" class="form-control" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-success">Add Alumni</button>
        </form>

        <h4 class="mt-4">All Prominent Alumni</h4>
        <ul class="list-group mt-3">
            @foreach($prominentalumni as $alumni)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>
                        <strong>{{ $alumni->alumniname }}</strong> - {{ $alumni->description }}
                        @if($alumni->photo)
                            <img src="{{ route('admin.prominent_alumni.image', basename($alumni->photo)) }}" alt="{{ $alumni->alumniname }}" width="60" class="ms-2">
                        @endif
                    </span>
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editAlumniModal{{ $alumni->id }}">Edit</button>
                </li>
                <!-- Edit Modal -->
                <div class="modal fade" id="editAlumniModal{{ $alumni->id }}" tabindex="-1" aria-labelledby="editAlumniModalLabel{{ $alumni->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('admin.prominent_alumni.update', $alumni->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editAlumniModalLabel{{ $alumni->id }}">Edit Prominent Alumni</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="alumniname{{ $alumni->id }}" class="form-label">Alumni Name</label>
                                        <input type="text" class="form-control" id="alumniname{{ $alumni->id }}" name="alumniname" value="{{ $alumni->alumniname }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="description{{ $alumni->id }}" class="form-label">Description</label>
                                        <textarea class="form-control" id="description{{ $alumni->id }}" name="description" required>{{ $alumni->description }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="photo{{ $alumni->id }}" class="form-label">Photo (leave blank to keep current)</label>
                                        <input type="file" class="form-control" id="photo{{ $alumni->id }}" name="photo" accept="image/*">
                                        @if($alumni->photo)
                                            <img src="{{ route('admin.prominent_alumni.image', basename($alumni->photo)) }}" alt="Current" width="60" class="mt-2">
                                        @endif
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