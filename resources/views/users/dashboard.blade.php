<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    
<style>
    .card {
        border: none;
        border-radius: 12px;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.2);
    }

    .btn {
        border-radius: 8px;
        font-size: 1rem;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-secondary {
        background-color: #6c757d;
        border: none;
    }
</style>
</head>
<body>
    
</body>
    @include('imports.headimport')
    @include('fragments.spinner')
    @include('fragments.topbar')
    @include('fragments.navbar')

    <div class="container mt-5">
    <div class="text-center mb-4">
        <h1 class="display-4">Dashboard</h1>
        <p class="lead text-muted">Welcome to your dashboard, {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}!</p>
        {{-- <p>Your email: <span class="font-weight-bold">{{ auth()->user()->email }}</span></p> --}}
    </div>

    <div class="row justify-content-center text-center mt-5">
    <!-- Jobs Section -->
    <div class="col-md-4 mb-4">
        <div class="card shadow-lg">
            <div class="card-body py-5">
                <h5 class="card-title">Manage Opportunities</h5>
                <p class="card-text text-muted">Create or manage your Opportunity listings..</p>
                <a href="{{ route('jobs.create') }}" class="btn btn-primary mb-2 w-100">Add Opportunities</a>
                <a href="{{ route('jobs.myJobs') }}" class="btn btn-secondary w-100">View My Posted Opportunities</a>
            </div>
        </div>
    </div>
</div>
    @include('imports.footimport')
</html>