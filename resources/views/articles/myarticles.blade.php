<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Articles</title>
    <style>
        .list-group-item {
            background-color: #ffffff;
        }

        .list-group-item h5 {
            font-weight: 600;
        }

        .shadow-sm {
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-outline-info {
            color: #0dcaf0;
            border-color: #0dcaf0;
        }

        .btn-outline-warning {
            color: #ffc107;
            border-color: #ffc107;
        }

        .btn-outline-danger {
            color: #dc3545;
            border-color: #dc3545;
        }
    </style>
</head>
<body>
    @include('imports.headimport')
    {{-- @include('fragments.spinner')
    @include('fragments.topbar')
    @include('fragments.navbar') --}}
    <div class="container mt-5">
        <h1 class="text-center mb-4">My Articles</h1>

        @if($articles->count())
            <div class="list-group">
                @foreach($articles as $article)
                    <div class="list-group-item list-group-item-action mb-3 shadow-sm rounded">
                        <h5 class="mb-1">{{ $article->article_title }}</h5>
                        <p class="mb-2">{{ $article->article_description }}</p>
                        <small class="text-muted">Posted on: {{ $article->created_at->format('Y-m-d') }}</small>
                        <div class="mt-3 d-flex justify-content-between">
                            <div>
                                <a href="{{ route('articles.show', $article->id) }}" class="btn btn-sm btn-outline-info">View</a>
                                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
                            </div>
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-warning text-center" role="alert">
                No articles found.
            </div>
        @endif
    </div>
</body>

</html>