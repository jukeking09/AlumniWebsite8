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
    </div>
</body>
</html>