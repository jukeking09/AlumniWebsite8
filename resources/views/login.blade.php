<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <style>
        .register a {
            color:var(--bs-green)!important;
        }
    </style>
    @include('imports.headimport')
</head>
<body>
    @include('fragments.spinner')
    @include('fragments.topbar')
    @include('fragments.navbar')

    <div class="container mt-5" style="max-width: 420px;">
        <h1 class="mb-4 text-center">Login</h1>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login.authenticate') }}" method="POST" novalidate>
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input 
                    type="email" 
                    class="form-control @error('email') is-invalid @enderror" 
                    id="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                    autofocus
                >
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input 
                    type="password" 
                    class="form-control @error('password') is-invalid @enderror" 
                    id="password" 
                    name="password" 
                    required
                >
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <p class="mt-3 text-center fw-bold register">
            Don't have an account? 
            <a href="{{ route('register') }}">Register here</a>
        </p>
    </div>

    @include('fragments.footer')
    @include('imports.footimport')
</body>
</html>
