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
                    <div class="col-md-3">
                        <label for="title_id" class="form-label">Title</label>
                        <select class="form-select @error('title_id') is-invalid @enderror" name="title_id" id="title_id" required>
                            <option value="">Select Title</option>
                            @foreach ($titles as $id => $name)
                                <option value="{{ $id }}" {{ old('title_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                            @endforeach
                        </select>
                        @error('title_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-5">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                        @error('first_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                        @error('last_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <!-- Password and Confirm Password -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" required minlength="8">
                        @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        <div id="passwordError" class="d-none text-danger">Password must be at least 8 characters long and include at least one special character.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" 
                            name="password_confirmation" required disabled>
                        <div id="passwordMismatch" class="d-none text-danger">Passwords do not match.</div>
                    </div>
                </div>

                <!-- Country Code & Contact -->
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="country_code_id" class="form-label">Country Code</label>
                        <select class="form-select @error('country_code_id') is-invalid @enderror" name="country_code_id" id="country_code_id" required>
                            <option value="">Select Code</option>
                            @foreach ($countryCodes as $id => $code)
                                <option value="{{ $id }}" {{ old('country_code_id') == $id ? 'selected' : '' }}>{{ $code }}</option>
                            @endforeach
                        </select>
                        @error('country_code_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-9">
                        <label for="contact_number" class="form-label">Contact Number</label>
                        <input type="tel" class="form-control @error('contact_number') is-invalid @enderror" id="contact_number" name="contact_number" value="{{ old('contact_number') }}" required pattern="\d{10}" maxlength="10">
                        @error('contact_number') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        <div class="form-text">Enter exactly 10 digits</div>
                    </div>
                </div>

                <!-- Passing Out Year, Course, Department -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="year_of_passing" class="form-label">Passing Out Year</label>
                        <select class="form-select @error('year_of_passing') is-invalid @enderror" id="year_of_passing" name="year_of_passing" required>
                            <option value="">Select Year</option>
                            @for ($year = date('Y'); $year >= 1934; $year--)
                                <option value="{{ $year }}" {{ old('year_of_passing') == $year ? 'selected' : '' }}>{{ $year }}</option>
                            @endfor
                        </select>
                        @error('year_of_passing') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="course_id" class="form-label">Course</label>
                        <select class="form-select @error('course_id') is-invalid @enderror" id="course_id" name="course_id" required>
                            <option value="">Select Course</option>
                            @foreach ($courses as $id => $name)
                                <option value="{{ $id }}" {{ old('course_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                            @endforeach
                            <option value="Other">Other</option>
                        </select>
                        @error('course_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="department_id" class="form-label">Department</label>
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
                    <label for="address" class="form-label">Current Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}" required>
                    @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <!-- Designation -->
                <div class="mb-3">
                    <label for="designation" class="form-label">Current Designation</label>
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
                <div class="mb-3">
                    <label for="photo" class="form-label">Upload Photo <span class="fw-bold">(Max Size : 2mb)</span></label>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" accept=".jpg,.jpeg,.png,.webp" required>
                    @error('photo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <!-- Research Areas -->
                <div class="mb-3">
                    <label for="research_areas" class="form-label">Areas of Interest</label>
                    <textarea class="form-control" id="research_areas" name="research_areas" rows="3" required></textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-end">
                    <button type="submit" class="btn btn-success">Register</button>
                </div>
            </form>
            <div class="mt-3 text-center">
                <a href="{{ route('login') }}">Already have an account? Login here</a>
            </div>
        </div>
    </div>
</div>


    @include('fragments.footer')
    @include('imports.footimport') <!-- Make sure Bootstrap JS is included here -->
</body>
</html>
