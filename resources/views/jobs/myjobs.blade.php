<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Opportunities</title>
    <style>
        .list-group-item {
            border: none;
        }

        .btn {
            border-radius: 6px;
            font-size: 0.9rem;
        }

        .shadow-sm {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .alert {
            border-radius: 8px;
        }
    </style>
</head>
<body>
    @include('imports.headimport')
    @include('fragments.spinner')
    @include('fragments.topbar')
    @include('fragments.navbar')
    <div class="container mt-5">
        <h1 class="mb-4 text-center">My Opportunities</h1>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>   
        @endif
        @if($jobs->count())
            <ul class="list-group">
                @foreach($jobs as $job)
                    <li class="list-group-item mb-3 shadow-sm rounded">
                        <div class="d-flex justify-content-between align-items-center py-3">
                            <div>
                                <strong class="h5">{{ $job->job_title }}</strong>
                                <p class="mb-1 text-muted">{{ $job->job_description }}</p>
                                <small class="text-secondary">Posted on: {{ $job->created_at->format('Y-m-d') }}</small>
                            </div>
                            <div>
                                <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                                <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
            <div class="alert alert-info text-center mt-4">
                <p>No Opportunities posted yet!</p>
            </div>
        @endif
    </div>
    @include('imports.footimport')
</body>
</html>