<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Executive Members</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
@include('admin.sidebar')
<div class="container mt-5">
    <h2 class="mb-4">Executive Members</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered table-striped mb-5">
        <thead>
            <tr>
                <th>Name</th>
                <th>Post</th>
                <th>Picture</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @foreach($executiveMembers as $member)
            <tr>
                <td>{{ $member->name }}</td>
                <td>{{ $member->post }}</td>
                <td>
                    @if($member->picture)
                        <img src="{{ route('admin.executive_members.image', basename($member->picture)) }}" alt="{{ $member->name }}" width="80">
                    @else
                        N/A
                    @endif
                </td>
                <td>
                    <form action="{{ $member->active ? route('admin.executive_members.disable', $member->id) : route('admin.executive_members.enable', $member->id) }}" method="POST" style="display:inline">
                        @csrf
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="activeSwitch{{ $member->id }}" name="active"
                                onchange="this.form.submit()" {{ $member->active ? 'checked' : '' }}>
                            <label class="form-check-label" for="activeSwitch{{ $member->id }}">
                                {{ $member->active ? 'Enabled' : 'Disabled' }}
                            </label>
                        </div>
                    </form>
                    <button type="button" class="btn btn-sm btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#editExecutiveModal{{ $member->id }}">Edit</button>
                </td>
            </tr>
            <!-- Edit Modal -->
            <div class="modal fade" id="editExecutiveModal{{ $member->id }}" tabindex="-1" aria-labelledby="editExecutiveModalLabel{{ $member->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('admin.executive_members.update', $member->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-header">
                                <h5 class="modal-title" id="editExecutiveModalLabel{{ $member->id }}">Edit Executive Member</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="name{{ $member->id }}" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name{{ $member->id }}" name="name" value="{{ $member->name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="post{{ $member->id }}" class="form-label">Post</label>
                                    <input type="text" class="form-control" id="post{{ $member->id }}" name="post" value="{{ $member->post }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="picture{{ $member->id }}" class="form-label">Picture (leave blank to keep current)</label>
                                    <input type="file" class="form-control" id="picture{{ $member->id }}" name="picture" accept="image/*">
                                    @if($member->picture)
                                        <img src="{{ route('admin.executive_members.image', basename($member->picture)) }}" alt="Current" width="60" class="mt-2">
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
        </tbody>
    </table>
    <h3>Add Executive Member</h3>
    <form action="{{ route('admin.executive_members.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="post" class="form-label">Post</label>
            <input type="text" class="form-control @error('post') is-invalid @enderror" id="post" name="post" required>
            @error('post') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="picture" class="form-label">Picture</label>
            <input type="file" class="form-control @error('picture') is-invalid @enderror" id="picture" name="picture" accept="image/*" required>
            @error('picture') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn btn-success">Add Member</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
