<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand d-lg-none">
                <h1 class="fw-bold m-0">SACSAA</h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ route('home') }}" class="h5 nav-item nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">Home</a>
                    {{-- <a href="{{ route('about') }}" class="nav-item nav-link {{Route::currentRouteName() == 'about' ? 'active' : ''}}">About</a> --}}
                    <a href="{{ route('home') }}#about" class="h5 nav-item nav-link">About</a>
                   
                    <a href="{{ route('constitution') }}" class="h5 nav-item nav-link {{ Route::currentRouteName() == 'constitution' ? 'active' : '' }}">Constitution</a>
                    <a href="{{ route('executivebody') }}" class="h5 nav-item nav-link {{ Route::currentRouteName() == 'executivebody' ? 'active' : '' }}">Executive Body</a>
                    <a href="{{ route('giveback') }}" class="h5 nav-item nav-link {{ Route::currentRouteName() == 'giveback' ? 'active' : '' }}">Give Back</a>
                    <a href="{{ route('jobs') }}" class="h5 nav-item nav-link {{ Route::currentRouteName() == 'jobs' ? 'active' : '' }}">Opportunities</a>
                    <a href="{{ route('articles') }}" class="h5 nav-item nav-link {{ Route::currentRouteName() == 'articles' ? 'active' : '' }}">Publications</a>
                    <a href="{{ route('connect') }}" class="h5 nav-item nav-link {{ Route::currentRouteName() == 'connect' ? 'active' : '' }}">Connect To Us</a>
                    <a href="{{ route('events') }}" class="h5 nav-item nav-link {{ Route::currentRouteName() == 'events' ? 'active' : '' }}">Events</a>
                     @guest
                        <a href="{{ route('login') }}" class="h5 nav-item nav-link {{ Route::currentRouteName() == 'login' ? 'active' : '' }}">Login</a>
                        {{-- <a href="{{ route('register') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'register' ? 'active' : '' }}">Join</a> --}}
                    @endguest
                    @auth
                        <div class="nav-item dropdown">
                            <a href="#" class="h5 nav-link dropdown-toggle {{ in_array(Route::currentRouteName(), ['dashboard', 'profile']) ? 'active' : '' }}" data-bs-toggle="dropdown">Profile</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">

                                @if(auth()->check() && auth()->user()->role->role_name === 'member')
                                    <a href="{{ route('member.dashboard') }}" class="dropdown-item">Dashboard</a>
                                     <a href="{{ route('generateIdCard', ['id' => auth()->user()->id]) }}" class="dropdown-item">Generate ID Card</a>
                                     <a href="{{ route('profile.edit') }}" class="dropdown-item">Edit Profile</a>
                                @endif
                                @if(auth()->check() && auth()->user()->role->role_name === 'user')
                                    <a href="{{ route('users-dashboard') }}" class="dropdown-item">Dashboard</a>
                                    <a href="{{ route('generateIdCard', ['id' => auth()->user()->id]) }}" class="dropdown-item">Generate ID Card</a>
                                    <a href="{{ route('profile.edit') }}" class="dropdown-item">Edit Profile</a>
                                @endif
                                @if(auth()->check() && auth()->user()->role->role_name === 'admin')
                                    <a href="{{ route('admin.dashboard') }}" class="dropdown-item">Dashboard</a>
                                @endif
                                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="dropdown-item btn" id="logout-btn"style="width: 100%; text-decoration: none; font-weight:400;text-transform: capitalize;">
                                        <span class>Logout</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endauth
                    @auth
                   <button class="h5 nav-link btn btn-link" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="bi bi-search"></i> Search Alumni
                    </button>
                    @endauth
                    <style>
                    /* Responsive dropdown for search 
                    @media (max-width: 500px) {
                        .search-dropdown-menu {
                            min-width: 90vw !important;
                            max-width: 98vw !important;
                            left: 5px !important;
                            right: 5px !important;
                        }
                    }*/
                    </style>
                    {{-- <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            // Prevent dropdown from closing when clicking inside the form
                            const dropdownForm = document.querySelector('#searchDropdown + .dropdown-menu form');

                            if (dropdownForm) {
                                dropdownForm.addEventListener('click', function (e) {
                                    e.stopPropagation();
                                });

                                // Prevent closing when interacting with autocomplete suggestions
                                dropdownForm.querySelectorAll('input, select').forEach((input) => {
                                    input.addEventListener('keydown', (e) => {
                                        e.stopPropagation();
                                    });
                                });
                            }
                        });
                    </script> --}}
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="searchModalLabel">Search Alumni</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('users.search') }}" method="GET" class="d-flex flex-column gap-3">
                    <input type="text" name="name" class="form-control" placeholder="Name">

                    <select name="department_id" class="form-select">
                        <option value="">All Departments</option>
                        @foreach($departments as $dept)
                            <option value="{{ $dept->id }}">{{ $dept->department_name }}</option>
                        @endforeach
                    </select>

                    <select name="year" class="form-select">
                        <option value="">All Years</option>
                        @for($y = now()->year; $y >= 1934; $y--)
                            <option value="{{ $y }}">{{ $y }}</option>
                        @endfor
                    </select>

                    <input type="text" name="interest" class="form-control" placeholder="Area of Interest">

                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>
