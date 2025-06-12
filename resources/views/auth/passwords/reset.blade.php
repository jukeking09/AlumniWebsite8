<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
    @include('imports.headimport')
</head>
<body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-header">Set New Password</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('password.update') }}" id="registerform">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <input type="hidden" name="email" value="{{ $email }}">
    <div class="mb-3">
        <label for="password" class="form-label">New Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autofocus>
        <div id="passwordError" class="text-danger d-none">Password must be at least 8 characters long and contain at least one special character.</div>
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password-confirm" class="form-label">Confirm Password</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required disabled>
        <div id="passwordMismatch" class="text-danger d-none">Passwords do not match.</div>
    </div>
    <button type="submit" class="btn btn-primary w-100">Reset Password</button>
</form>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const passwordField = document.getElementById("password");
        const confirmPasswordField = document.getElementById("password-confirm");
        const form = document.getElementById("registerform");
        const passwordError = document.getElementById("passwordError");
        const passwordMismatch = document.getElementById("passwordMismatch");

        // Enable Confirm Password Field When Password is Entered
        passwordField.addEventListener("input", () => {
            if (passwordField.value.length > 0) {
                confirmPasswordField.disabled = false;
            } else {
                confirmPasswordField.disabled = true;
                confirmPasswordField.value = ""; // Clear the confirm password field
                passwordMismatch.classList.add("d-none");
            }
        });

        // Validate Password Strength
        function isPasswordStrong(password) {
            const specialCharRegex = /[!@#$%^&*(),.?":{}|<>]/;
            return password.length >= 8 && specialCharRegex.test(password);
        }

        // Check if Password and Confirm Password Match on Form Submit
        form.addEventListener("submit", (event) => {
            const password = passwordField.value;
            const confirmPassword = confirmPasswordField.value;

            let valid = true;
            let firstErrorField = null;

            // Validate password strength
            if (!isPasswordStrong(password)) {
                passwordError.classList.remove("d-none");
                if (!firstErrorField) firstErrorField = passwordField; // Set first error field
                valid = false;
            } else {
                passwordError.classList.add("d-none");
            }

            // Validate password match
            if (password !== confirmPassword) {
                passwordMismatch.classList.remove("d-none");
                if (!firstErrorField) firstErrorField = confirmPasswordField; // Set first error field
                valid = false;
            } else {
                passwordMismatch.classList.add("d-none");
            }

            // Prevent form submission if validation fails
            if (!valid) {
                event.preventDefault(); // Stop form submission

                // Scroll to the first error field
                if (firstErrorField) {
                    firstErrorField.scrollIntoView({
                        behavior: "smooth",
                        block: "center"
                    });
                    firstErrorField.focus(); // Optional: Focus on the field for convenience
                }
            }
        });
    });
</script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
