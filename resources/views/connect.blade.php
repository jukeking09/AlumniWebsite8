<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Connect to Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    @include('imports.headimport')
    <!-- Favicon -->
</head>
<body>
    <!-- Spinner -->
    @include('fragments.spinner')

    <!-- Topbar -->
    @include('fragments.topbar')

    <!-- Navbar -->
    @include('fragments.navbar')

    <!-- Contact Start -->
    <div class="pt-3">
        <div class="container-fluid appoinment pb-6" data-wow-delay="0.1s">
            <div class="container pt-5">
                <div class="row gy-5 gx-0">
                    <div class="col-lg-6 pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="display-6 text-uppercase text-white mb-4">Have Any Query? Feel Free To Contact Us</h1>
                        <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.5s">
                            <div class="btn-lg-square bg-white">
                                <i class="bi bi-envelope-at text-dark fs-3"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="text-white text-uppercase">Mail Us</h6>
                                <span class="text-white">alumni@anthonys.ac.in</span>
                            </div>
                        </div>
                        <hr class="bg-body">
                        <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.6s">
                            <div class="btn-lg-square bg-white">
                                <i class="bi bi-telephone text-dark fs-3"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="text-white text-uppercase">Call Us</h6>
                                <span class="text-white">+91 364 2223558 / +91 364 2222558</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-n5 wow fadeIn" data-wow-delay="0.4s">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                    <div class="bg-white p-5">
                        <h2 class="text-uppercase mb-4">Contact Us</h2>
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="name" name="name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0 bg-light" id="email" name="email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="mobile" name="mobile" placeholder="Your Mobile" required pattern="\d{10}" maxlength="10">
                                        <label for="mobile">Your Mobile</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="subject" name="subject" placeholder="Subject" required>
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0 bg-light" placeholder="Leave a message here" id="message" name="message" style="height: 130px" required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 wow fadeInUp" data-wow-delay="0.5s">
            <iframe class="w-100 h-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.019706963129!2d91.88710977484962!3d25.571011116459488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37507e97cee24a2f%3A0xd94567a7ffb06314!2sSt.%20Anthony&#39;s%20College!5e0!3m2!1sen!2sin!4v1747415277010!5m2!1sen!2sin"
            frameborder="0" style="min-height: 500px; border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </div>
    </div>
    <!-- Contact End -->
    
    <!-- Footer -->
    @include('fragments.footer')

    <div class="container-fluid text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="#">SACSAA</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Back to Top -->
    @include('imports.footimport')
</body>
</html>
