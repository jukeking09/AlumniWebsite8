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
            <li class="list-group-item">{{ $role->role_name }}</li>
        @endforeach
    </ul>
</div>
</body>
</html>