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
            <li class="list-group-item">{{ $country->code }} - {{ $country->country_name }}</li>
        @endforeach
    </ul>
</div>
</body>
</html>