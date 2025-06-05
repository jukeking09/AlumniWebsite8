<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Role</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    @include('admin.sidebar')
<div class="container mt-5">
    <h2>Add Role</h2>
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
    <form action="{{ route('admin.roles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Role Name</label>
            <input type="text" name="role_name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Add Role</button>
    </form>
    <h4 class="mt-4">All Roles</h4>
    <ul class="list-group mt-3">
        @foreach($roles as $role)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>{{ $role->role_name }}</span>
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editRoleModal{{ $role->id }}">Edit</button>
            </li>
            <!-- Edit Modal -->
            <div class="modal fade" id="editRoleModal{{ $role->id }}" tabindex="-1" aria-labelledby="editRoleModalLabel{{ $role->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-header">
                                <h5 class="modal-title" id="editRoleModalLabel{{ $role->id }}">Edit Role</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label>Role Name</label>
                                    <input type="text" name="role_name" class="form-control" value="{{ $role->role_name }}" required>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>