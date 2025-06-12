<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Publication</title>
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
        .form-container {
            max-width: 600px;
            margin: 50px auto;
        }
    </style>
</head>
<body>
    @include('imports.headimport')
    @include('fragments.navbar')
    {{-- @include('fragments.spinner')
    @include('fragments.topbar')
    @include('fragments.navbar') --}}
    <div class="form-container mt-5">
        <h1 class="mb-4 text-center">Add Publications</h1>
        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded bg-white">
            @csrf
         <!-- Title -->
            <div class="mb-3">
                <label for="article_title" class="form-label">Title:</label>
                <input 
                    type="text" 
                    id="article_title" 
                    name="article_title" 
                    class="form-control @error('article_title') is-invalid @enderror" 
                    value="{{ old('article_title') }}" 
                    required>
                @error('article_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="article_description" class="form-label">Description:</label>
                <textarea 
                    id="article_description" 
                    name="article_description" 
                    class="form-control @error('article_description') is-invalid @enderror" 
                    rows="4" 
                    required>{{ old('article_description') }}</textarea>
                @error('article_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image Upload -->
            <div class="mb-3">
                <label for="article_image_path" class="form-label">Upload Cover Image (If Any):</label>
                <input 
                    type="file" 
                    id="article_image_path" 
                    name="article_image_path" 
                    class="form-control @error('article_image_path') is-invalid @enderror"
                    accept=".jpg, .jpeg, .png, .gif">
                <div class="form-text text-muted">Accepted types: JPG, JPEG, PNG, GIF, WEBP. Max size: 2MB.</div>
                @error('article_image_path')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Document Upload -->
            <div class="mb-3">
                <label for="article_path" class="form-label">Upload Document:</label>
                <input 
                    type="file" 
                    id="article_path" 
                    name="article_path" 
                    class="form-control @error('article_path') is-invalid @enderror" 
                    accept=".pdf, .doc, .docx">
                <div class="form-text text-muted">Accepted types: PDF, DOC, DOCX.</div>
                @error('article_path')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Add Publication</button>
            </div>
        </form>
    </div>
    @include('fragments.footer')
    @include('imports.footimport')
</body>
</html>