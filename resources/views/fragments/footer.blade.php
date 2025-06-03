    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <h5 class="text-uppercase text-light mb-4 ms-4">Contact Us</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Bomfyle Road, East Khasi Hills, Shillong, Meghalaya-793001, India</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+91 364 2223558 / +91 364 2222558</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>alumni@anthonys.ac.in</p>
                    <div class="d-flex pt-3 ms-5">
                        <a class="btn btn-square btn-light me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        {{-- <a class="btn btn-square btn-light me-2" href=""><i class="fab fa-youtube"></i></a> --}}
                        <a class="btn btn-square btn-light me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h5 class="text-uppercase text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link {{ Route::currentRouteName() == 'home' ? 'fw-bold' : '' }}" href="{{ route('home') }}">About Us</a>
                    <a class="btn btn-link {{ Route::currentRouteName() == 'constitution' ? 'fw-bold' : '' }}" href="{{ route('constitution') }}">Constitution</a>
                    <a class="btn btn-link {{ Route::currentRouteName() == 'jobs' ? 'fw-bold' : '' }}" href="{{ route('jobs') }}">Opportunities</a>
                    <a class="btn btn-link {{ Route::currentRouteName() == 'articles' ? 'fw-bold' : '' }}" href="{{ route('articles') }}">Publications</a>
                    <a class="btn btn-link {{ Route::currentRouteName() == 'events' ? 'fw-bold' : '' }}" href="{{ route('events') }}">Events</a>
                    <a class="btn btn-link {{ Route::currentRouteName() == 'giveback' ? 'fw-bold' : '' }}" href="{{ route('giveback') }}">Give Back</a>
                    <a class="btn btn-link {{ Route::currentRouteName() == 'connect' ? 'fw-bold' : '' }}" href="{{ route('connect') }}">Contact Us</a>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase text-light mb-4">Business Hours</h5>
                    <p class="text-uppercase mb-0">Monday - Friday</p>
                    <p>09:00 am - 07:00 pm</p>
                    <p class="text-uppercase mb-0">Saturday</p>
                    <p>09:00 am - 12:00 pm</p>
                    <p class="text-uppercase mb-0">Sunday</p>
                    <p>Closed</p>
                </div> -->
                <!-- <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase text-light mb-4">Gallery</h5>
                    <div class="row g-1">
                        <div class="col-4">
                            <img class="img-fluid" src="{{ asset('img/service-1.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid" src="{{ asset('img/service-2.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid" src="{{ asset('img/service-3.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid" src="{{ asset('img/service-4.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid" src="{{ asset('img/service-5.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid" src="{{ asset('img/service-6.jpg') }}" alt="">
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Footer End -->