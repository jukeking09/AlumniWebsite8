<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body { padding-left: 220px; }
        #sidebar-wrapper { z-index: 1000; }
    </style>
</head>
<body>
    @include('admin.sidebar')
    <div class="container mt-5">
        <h2 class="mb-4">Admin Dashboard</h2>
        <div class="alert alert-info">Welcome to the admin dashboard!</div>
    </div>
</body>
</html>