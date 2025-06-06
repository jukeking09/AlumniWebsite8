<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Job</title>
     <style>
        .form-control.is-invalid {
            border-color: #e3342f;
        }

        .form-label {
            font-weight: 600;
        }

        .btn {
            border-radius: 8px;
        }

        .shadow {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    @include('imports.headimport')
    {{-- @include('fragments.spinner')
    @include('fragments.topbar')
    @include('fragments.navbar') --}}
     <div class="container mt-5">
        <h1 class="mb-4 text-center">Add Job/Internship</h1>
        <form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded bg-white">
            @csrf

            <!-- Job Title -->
            <div class="mb-3">
                <label for="job_title" class="form-label">Title:</label>
                <input 
                    type="text" 
                    id="job_title" 
                    name="job_title" 
                    class="form-control @error('job_title') is-invalid @enderror" 
                    value="{{ old('job_title') }}" 
                    required>
                @error('job_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Job Description -->
            <div class="mb-3">
                <label for="job_description" class="form-label">Description:</label>
                <textarea 
                    id="job_description" 
                    name="job_description" 
                    class="form-control @error('job_description') is-invalid @enderror" 
                    rows="4" 
                    required>{{ old('job_description') }}</textarea>
                @error('job_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Company Email -->
            <div class="mb-3">
                <label for="company_email" class="form-label">Company Email:</label>
                <input 
                    type="email" 
                    id="company_email" 
                    name="company_email" 
                    class="form-control @error('company_email') is-invalid @enderror" 
                    value="{{ old('company_email') }}" 
                    required>
                @error('company_email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Company Name -->
            <div class="mb-3">
                <label for="company_name" class="form-label">Company Name:</label>
                <input 
                    type="text" 
                    id="company_name" 
                    name="company_name" 
                    class="form-control @error('company_name') is-invalid @enderror" 
                    value="{{ old('company_name') }}" 
                    required>
                @error('company_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- Job Type -->
            <div class="mb-3">
                <label for="job_type" class="form-label">Type:</label>
                <select id="job_type" name="job_type" class="form-control" required>
                    <option value="">Select</option>
                    <option value="internship">Internship</option>
                    <option value="job">Job</option>
                </select>
            </div>

            <!-- Job PDF Upload -->
            <div class="mb-3">
                <label for="job_pdf" class="form-label">Upload PDF:</label>
                <input type="file" name="pdf" id="pdf" class="form-control" accept="application/pdf">
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Add</button>
            </div>
        </form>
    </div>
    @include('imports.footimport')
</body>
</html>