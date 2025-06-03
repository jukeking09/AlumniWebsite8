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
            </tr>
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
</body>
</html>
