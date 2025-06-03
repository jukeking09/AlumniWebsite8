<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobs</title>
</head>
<body>
    @include('imports.headimport')
    <!-- Spinner -->
    @include('fragments.spinner')

    <!-- Topbar -->
    @include('fragments.topbar')

    <!-- Navbar -->
    @include('fragments.navbar')

    <div class="container py-5">
        <div class="text-center mb-4">
            <h1 class="h3">Job Listings</h1>
        </div>
        <div class="container mb-4">
            <form method="GET" action="{{ route('jobs') }}" class="row g-2 align-items-end">
                <div class="col-md-4">
                    <label for="job_type" class="form-label">Filter by Job Type</label>
                    <select name="job_type" id="job_type" class="form-select">
                        <option value="">All Types</option>
                        <option value="job" {{ request('job_type') == 'job' ? 'selected' : '' }}>Job</option>
                        <option value="internship" {{ request('job_type') == 'internship' ? 'selected' : '' }}>Internship</option>
                    </select>
                </div>
                <div class="col-md-auto">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </form>
        </div>
        @if($jobs->count())
            <div class="row">
                @foreach($jobs as $job)
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h3 class="card-title text-primary">{{ $job->job_title }}</h3>
                                <p class="card-text text-dark">{{ $job->job_description }}</p>
                                <p class="text-muted"><em>Posted on: {{ $job->created_at->format('Y-m-d') }}</em></p>
                                <a href="{{ route('jobs.show', $job->id) }}" class="btn btn-outline-primary btn-sm">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-warning text-center" role="alert">
                <p class="mb-0">No jobs found.</p>
            </div>
        @endif
    </div>
    @include('fragments.footer')
    @include('imports.footimport')
</body>
</html>