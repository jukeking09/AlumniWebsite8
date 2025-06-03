<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Department</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    @include('admin.sidebar')
<div class="container mt-5">
    <h2>Add Department</h2>
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
    <form action="{{ route('admin.departments.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Department Name</label>
            <input type="text" name="department_name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Add Department</button>
    </form>
    <h4 class="mt-4">All Departments</h4>
    <ul class="list-group mt-3">
        @foreach($departments as $department)
            <li class="list-group-item">{{ $department->department_name }}</li>
        @endforeach
    </ul>
</div>
</body>
</html>