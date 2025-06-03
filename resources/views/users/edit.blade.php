<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
</head>
    <body>
    @include('imports.headimport')
    @include('fragments.topbar')
    @include('fragments.navbar')
        <div class="container mt-5 mb-5">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <div class="card shadow-lg">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white text-center py-3">Edit Profile</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        <!-- Title, First Name, Last Name -->
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="title_id" class="form-label">Title</label>
                                <select class="form-select @error('title_id') is-invalid @enderror" name="title_id" id="title_id" required>
                                    <option value="">Select Title</option>
                                    @foreach ($titles as $id => $name)
                                        <option value="{{ $id }}" {{ $user->title_id == $id ? 'selected' : '' }}>{{ $name }}</option>
                                    @endforeach
                                </select>
                                @error('title_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-5">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name', $user->first_name) }}" required>
                                @error('first_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name', $user->last_name) }}">
                                @error('last_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <!-- Contact Number & Country Code -->
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="country_code_id" class="form-label">Country Code</label>
                                <select class="form-select @error('country_code_id') is-invalid @enderror" name="country_code_id" id="country_code_id" required>
                                    <option value="">Select Code</option>
                                    @foreach ($countryCodes as $id => $code)
                                        <option value="{{ $id }}" {{ $user->country_code_id == $id ? 'selected' : '' }}>{{ $code }}</option>
                                    @endforeach
                                </select>
                                @error('country_code_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-9">
                                <label for="contact_number" class="form-label">Contact Number</label>
                                <input type="tel" class="form-control @error('contact_number') is-invalid @enderror" id="contact_number" name="contact_number" value="{{ old('contact_number', $user->contact_number) }}" required pattern="\d{10}" maxlength="10">
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
                                        <option value="{{ $year }}" {{ $user->year_of_passing == $year ? 'selected' : '' }}>{{ $year }}</option>
                                    @endfor
                                </select>
                                @error('year_of_passing') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="course_id" class="form-label">Course</label>
                                <select class="form-select @error('course_id') is-invalid @enderror" id="course_id" name="course_id" required>
                                    <option value="">Select Course</option>
                                    @foreach ($courses as $id => $name)
                                        <option value="{{ $id }}" {{ $user->course_id == $id ? 'selected' : '' }}>{{ $name }}</option>
                                    @endforeach
                                </select>
                                @error('course_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="department_id" class="form-label">Department</label>
                                <select class="form-select @error('department_id') is-invalid @enderror" id="department_id" name="department_id" required>
                                    <option value="">Select Department</option>
                                    @foreach ($departments as $id => $name)
                                        <option value="{{ $id }}" {{ $user->department_id == $id ? 'selected' : '' }}>{{ $name }}</option>
                                    @endforeach
                                </select>
                                @error('department_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <!-- Address -->
                        <div class="mb-3">
                            <label for="address" class="form-label">Current Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $user->address) }}" required>
                            @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <!-- Designation -->
                        <div class="mb-3">
                            <label for="designation" class="form-label">Current Designation</label>
                            <input type="text" class="form-control @error('designation') is-invalid @enderror" id="designation" name="designation" value="{{ old('designation', $user->designation) }}" required>
                            @error('designation') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <!-- Research Areas -->
                        <div class="mb-3">
                            <label for="research_areas" class="form-label">Areas of Interest</label>
                            <textarea class="form-control @error('research_areas') is-invalid @enderror" id="research_areas" name="research_areas" rows="3">{{ old('research_areas', $user->research_areas ?? '') }}</textarea>
                            @error('research_areas') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-success">Update Profile</button>
                            <a href="{{ route('profile') }}" class="btn btn-secondary">Cancel</a>
                            <a href="{{ route('profile.change-password') }}" class="btn btn-warning ms-2">Change Password</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
