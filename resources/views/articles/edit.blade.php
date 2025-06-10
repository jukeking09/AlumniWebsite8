<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Publication</title>
    <style>
        .form-label {
            font-weight: 600;
        }

        .form-control.is-invalid {
            border-color: #e3342f;
        }

        .btn {
            border-radius: 8px;
        }

        .shadow {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        small.text-muted {
            font-size: 0.85rem;
        }
    </style>
</head>
<body>
    @include('imports.headimport')
    {{-- @include('fragments.spinner')
    @include('fragments.topbar')
    @include('fragments.navbar') --}}
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Update Publication</h1>
        <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded bg-white">
            @csrf
            <!-- Title -->
            <div class="mb-3">
                <label for="article_title" class="form-label">Title:</label>
                <input 
                    type="text" 
                    id="article_title" 
                    name="article_title" 
                    value="{{ $article->article_title }}" 
                    class="form-control @error('article_title') is-invalid @enderror" 
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
                    required>{{ $article->article_description }}</textarea>
                @error('article_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image Upload -->
            <div class="mb-3">
                <label for="article_image_path" class="form-label">Upload New Image:</label>
                <input 
                    type="file" 
                    id="article_image_path" 
                    name="article_image_path" 
                    class="form-control @error('article_image_path') is-invalid @enderror" 
                    accept=".jpg, .jpeg, .png, .gif">
                <div class="form-text text-muted">Accepted types: JPG, JPEG, PNG, WEBP, GIF. Max size: 2MB. Leave empty to keep the current image.</div>
                @error('article_image_path')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Document Upload -->
            <div class="mb-3">
                <label for="article_path" class="form-label">Upload New Document:</label>
                <input 
                    type="file" 
                    id="article_path" 
                    name="article_path" 
                    class="form-control @error('article_path') is-invalid @enderror" 
                    accept=".pdf, .doc, .docx">
                <div class="form-text text-muted">Accepted types: PDF, DOC, DOCX. Leave empty to keep the current document.</div>
                @error('article_path')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Update Publication</button>
            </div>
        </form>
    </div>
</body>
</html>