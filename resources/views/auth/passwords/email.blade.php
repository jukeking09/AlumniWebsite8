<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
     <style>
     @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    @include('imports.headimport')
</head>
<body>
    @include('fragments.topbar')
    @include('fragments.navbar')
        <div class="container mt-5 p-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-header">Reset Password</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('password.email') }}" id="resetpassform">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Send Password Reset Link</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <!-- Bootstrap Modal -->
<div class="modal fade" id="loadingModal" tabindex="-1" aria-labelledby="loadingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center">
            <div class="modal-body">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <p class="mt-3">Sending mail...</p>
            </div>
        </div>
    </div>
</div>
    <script>
    document.getElementById('resetpassform').addEventListener('submit', function (e) {
        // Prevent default scrolling and open modal
        e.preventDefault();

        // Show the modal
        const loadingModal = new bootstrap.Modal(document.getElementById('loadingModal'), {
            backdrop: 'static', // Disable closing modal on click outside
            keyboard: false     // Disable closing modal with keyboard
        });

        loadingModal.show();

        // Allow form to proceed after showing the modal
        setTimeout(() => this.submit(), 100); // Small delay to show the modal before submission
    });
</script>
            @include('fragments.footer')
    @include('imports.footimport')
    </body>
</html>
