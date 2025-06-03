<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles</title>
    <style>
        .article-image{
            min-width: 200px!important;
            max-width: 300px!important;
            height: auto!important;
        }
    </style>
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
            <h1 class="h3">Articles</h1>
        </div>

        @if($articles->count())
            <div class="row">
                @foreach($articles as $article)
                    <div class="col-md-12 mb-4">
                        <div class="card shadow-sm">
                            <div class="row">
                                <div class="col-md-5 col-sm-12">
                                    <img src="{{ route('articles.image', basename($article->article_image_path)) }}" class="article-image rounded-start" alt="Article Image">
                                </div>
                                <div class="col-md-5 col-sm-12">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary">{{ $article->article_title }}</h5>
                                        <p class="card-text text-dark">{{ $article->article_description }}</p>
                                        <p class="text-muted"><em>Posted on: {{ $article->created_at->format('Y-m-d') }}</em></p>
                                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-outline-primary btn-sm">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-warning text-center" role="alert">
                <p class="mb-0">No articles found.</p>
            </div>
        @endif
    </div>


    @include('fragments.footer')
    @include('imports.footimport')
</body>
</html>