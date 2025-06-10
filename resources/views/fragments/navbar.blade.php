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
                    <a href="#about" class="h5 nav-item nav-link" id="link-about">About</a>
                   
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
                                @endif
                                @if(auth()->check() && auth()->user()->role->role_name === 'user')
                                    <a href="{{ route('users-dashboard') }}" class="dropdown-item">Dashboard</a>
                                    <a href="{{ route('generateIdCard', ['id' => auth()->user()->id]) }}" class="dropdown-item">Generate ID Card</a>
                                @endif
                                @if(auth()->check() && auth()->user()->role->role_name === 'admin')
                                    <a href="{{ route('admin.dashboard') }}" class="dropdown-item">Dashboard</a>
                                @endif
                                <a href="{{ route('profile.edit') }}" class="dropdown-item">Edit Profile</a>
                                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="dropdown-item btn" style="width: 100%; text-decoration: none;">
                                        <span class="text-danger">Logout</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>
        </nav>
    </div>
</div>