<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opportunity Details</title>
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
        <div class="card shadow-lg">
            <div class="card-header bg-primary">
                <h1 class="py-3 mb-0 text-white text-center">{{ $job->job_title }}</h1>
            </div>
            <div class="card-body">
                <p class="mb-3"><strong>Description:</strong> {{ $job->job_description }}</p>
                <p class="mb-3"><strong>Company Email:</strong> <a href="mailto:{{ $job->company_email }}" class="text-decoration-none">{{ $job->company_email }}</a></p>
                <p class="mb-3"><strong>Company Name:</strong> {{ $job->company_name }}</p>
                <p class=""><strong>Posted on:</strong> {{ $job->created_at->format('Y-m-d') }}</p>
                @if($job->pdf_path)
                    <a href="{{ route('jobs.viewPdf', basename($job->pdf_path)) }}" target="_blank">View PDF</a>
                @endif
            </div>
        </div>
    </div>
    @include('fragments.footer')
    @include('imports.footimport')
</body>
</html>