<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Member Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @include('imports.headimport')
    @include('fragments.topbar')
    @include('fragments.navbar')
    @include('imports.footimport')
</head>
<body>
<div class="container mt-5">
    <div class="text-center mb-4">
        <h1 class="display-4">Dashboard</h1>
        <p class="lead text-muted">Welcome to your dashboard, {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}!</p>
    </div>

    <div class="row text-center mt-5">
        <!-- Jobs Section -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg">
                <div class="card-body py-5">
                    <h5 class="card-title">Manage Opportunities</h5>
                    <p class="card-text text-muted">Create or manage your Opportunity listings.</p>
                    <a href="{{ route('jobs.create') }}" class="btn btn-primary mb-2 w-100">Add Opportunities</a>
                    <a href="{{ route('jobs.myJobs') }}" class="btn btn-secondary w-100">View My Posted Opportunities</a>
                </div>
            </div>
        </div>

        <!-- Articles Section -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg">
                <div class="card-body py-5">
                    <h5 class="card-title">Manage Publications</h5>
                    <p class="card-text text-muted">Add or edit your Publications.</p>
                    <a href="{{ route('articles.create') }}" class="btn btn-primary mb-2 w-100">Add Publications</a>
                    <a href="{{ route('articles.myArticles') }}" class="btn btn-secondary w-100">View My Publications</a>
                </div>
            </div>
        </div>

        <!-- Events Section -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg">
                <div class="card-body py-5">
                    <h5 class="card-title">Manage Events</h5>
                    <p class="card-text text-muted">Add and manage your posted events.</p>
                    <a href="{{ route('events.create') }}" class="btn btn-primary mb-2 w-100">Add Event</a>
                    <a href="{{ route('events.myEvents') }}" class="btn btn-secondary w-100">View My Events</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

