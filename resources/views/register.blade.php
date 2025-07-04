<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register</title>
    @include('imports.headimport')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
    const passwordField = document.getElementById("password");
    const confirmPasswordField = document.getElementById("password_confirmation");
    const form = document.getElementById("registerform");
    const passwordError = document.getElementById("passwordError");
    const passwordMismatch = document.getElementById("passwordMismatch");

    // alert(passwordField);
    // alert(confirmPasswordField);
    // alert(form);
    // alert(passwordError);
    // alert(passwordMismatch);

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
        const specialCharRegex = /[!@#$%^&*(),.?":{}|<>+-_=]/;
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
    else{
        // Show the modal
        const loadingModal = new bootstrap.Modal(document.getElementById('loadingModal'), {
            backdrop: 'static', // Disable closing modal on click outside
            keyboard: false     // Disable closing modal with keyboard
        });

        loadingModal.show();

        // Allow form to proceed after showing the modal
        setTimeout(() => this.submit(), 100); // Small delay to show the modal before submission
    
    }
});
});
    </script>
    <style>
        .login a{
            color: var(--bs-blue)!important;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    @include('fragments.spinner')
    @include('fragments.topbar')
    @include('fragments.navbar')

    <div class="container mt-5 mb-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary">
            <h4 class="mb-0 text-white text-center py-3">Alumni Registration Form</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data" id="registerform" novalidate>
                @csrf

                <!-- Title, First Name, Last Name -->
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="title_id" class="form-label">Title<span class="text-danger">*</span></label>
                        <select class="form-select @error('title_id') is-invalid @enderror" name="title_id" id="title_id" required>
                            <option value="">Select Title</option>
                            @foreach ($titles as $id => $name)
                                <option value="{{ $id }}" {{ old('title_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                            @endforeach
                        </select>
                        @error('title_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="first_name" class="form-label">First Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                        @error('first_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="last_name" class="form-label">Last Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                        @error('last_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <!-- Email -->
                    <div class="col-md-4">
                        <label for="email" class="form-label">Email Address<span class="text-danger">*</span></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                

                <!-- Password and Confirm Password -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" required minlength="8">
                        @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        <div id="passwordError" class="d-none text-danger">Password must be at least 8 characters long and include at least one special character.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="password_confirmation" class="form-label">Confirm Password<span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="password_confirmation" 
                            name="password_confirmation" required disabled>
                        <div id="passwordMismatch" class="d-none text-danger">Passwords do not match.</div>
                    </div>
                </div>

                <!-- Country Code & Contact -->
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="country_code_id" class="form-label">Country Code<span class="text-danger">*</span></label>
                        <select class="form-select @error('country_code_id') is-invalid @enderror" name="country_code_id" id="country_code_id" required>
                            <option value="">Select Code</option>
                            @foreach ($countryCodes as $id => $code)
                                <option value="{{ $id }}" 
                                    {{ (old('country_code_id') == $id) || (!old('country_code_id') && $id == '60') ? 'selected' : '' }}>{{ $code }}</option>
                            @endforeach
                        </select>
                        @error('country_code_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-9">
                        <label for="contact_number" class="form-label">Contact Number<span class="text-danger">*</span></label>
                        <input type="tel" class="form-control @error('contact_number') is-invalid @enderror" id="contact_number" name="contact_number" value="{{ old('contact_number') }}" required pattern="\d{10}" maxlength="10">
                        @error('contact_number') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        <div class="form-text">Enter exactly 10 digits</div>
                    </div>
                </div>

                <!-- Passing Out Year, Course, Department -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="year_of_passing" class="form-label">Passing Out Year<span class="text-danger">*</span></label>
                        <select class="form-select @error('year_of_passing') is-invalid @enderror" id="year_of_passing" name="year_of_passing" required>
                            <option value="">Select Year</option>
                            <option value="{{ date('Y') }}" {{ old('year_of_passing') == date('Y') ? 'selected' : '' }}>Staff</option>
                            @for ($year = date('Y'); $year >= 1934; $year--)
                                <option value="{{ $year }}" {{ old('year_of_passing') == $year ? 'selected' : '' }}>{{ $year }}</option>
                            @endfor
                        </select>
                        @error('year_of_passing') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="course_id" class="form-label">Course<span class="text-danger">*</span></label>
                        <select class="form-select @error('course_id') is-invalid @enderror" id="course_id" name="course_id" required>
                            <option value="">Select Course</option>
                            @foreach ($courses as $id => $name)
                                <option value="{{ $id }}" {{ old('course_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                            @endforeach
                        </select>
                        @error('course_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="department_id" class="form-label">Department<span class="text-danger">*</span></label>
                        <select class="form-select @error('department_id') is-invalid @enderror" id="department_id" name="department_id" required>
                            <option value="">Select Department</option>
                            @foreach ($departments as $id => $name)
                                <option value="{{ $id }}" {{ old('department_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                            @endforeach
                        </select>
                        @error('department_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <!-- Current Address -->
                <div class="mb-3">
                    <label for="address" class="form-label">Current Address<span class="text-danger">*</span></label>
                    <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}" required></textarea>
                    @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="row">
                    <!-- Designation -->
                    <div class="mb-3 col-md-3">
                        <label for="designation" class="form-label">Current Designation<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('designation') is-invalid @enderror" id="designation" name="designation" value="{{ old('designation') }}" required>
                        @error('designation') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <!-- Organization -->
                    {{-- <div class="mb-3">
                        <label for="designation" class="form-label">Current Organization</label>
                        <input type="text" class="form-control @error('organization') is-invalid @enderror" id="organization" name="organization" value="{{ old('organization') }}" required>
                        @error('organization') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div> --}}

                    <!-- Photo -->
                    <div class="mb-3 col-md-3">
                        <label for="photo" class="form-label">Upload Photo<span class="text-danger">*</span> <span class="fw-bold">(Max Size : 3MB)</span></label>
                        <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" accept=".jpg,.jpeg,.png,.webp" required>
                        @error('photo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <!-- Research Areas -->
                <div class="mb-3">
                    <label for="area_of_interest" class="form-label">Areas of Interest/Occupation/Current Work/Research<span class="text-danger">*</span></label>
                    <textarea class="form-control" id="area_of_interest" name="area_of_interest" rows="3" required></textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Register</button>
                </div>
            </form>
            <div class="mt-3 text-center fw-bold login">
                <a href="{{ route('login') }}">Already have an account? Login here</a>
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
                <p class="mt-3">Registering, please be patient...</p>
            </div>
        </div>
    </div>
</div>
</div>


    @include('fragments.footer')
    @include('imports.footimport') <!-- Make sure Bootstrap JS is included here -->
</body>
</html>
