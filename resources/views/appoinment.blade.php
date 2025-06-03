<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Appoinment - SAC Alumni Association</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    @include('imports.headimport')
</head>
<body>
    <!-- Spinner -->
    @include('fragments.spinner')

    <!-- Topbar -->
    @include('fragments.topbar')

    <!-- Navbar -->
    @include('fragments.navbar')


    <!-- Appoinment Start -->
    <div class="pt-6 pb-6">
        <div class="container-fluid appoinment py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container pt-5">
                <div class="row gy-5 gx-0">
                    <div class="col-lg-6 pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="display-6 text-uppercase text-white mb-4">We Complete Welding & Metal Projects in Time</h1>
                        <p class="text-white mb-5 wow fadeIn" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor.</p>
                        <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.5s">
                            <div class="btn-lg-square bg-white">
                                <i class="bi bi-geo-alt text-dark fs-3"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="text-white text-uppercase">Office Address</h6>
                                <span class="text-white">123 Street, New York, USA</span>
                            </div>
                        </div>
                        <hr class="bg-body">
                        <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.6s">
                            <div class="btn-lg-square bg-white">
                                <i class="bi bi-clock text-dark fs-3"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="text-white text-uppercase">Office Time</h6>
                                <span class="text-white">Mon-Sat 09am-5pm, Sun Closed</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-n5 wow fadeIn" data-wow-delay="0.7s">
                        <div class="bg-white p-5">
                            <h2 class="text-uppercase mb-4">Online Appoinment</h2>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0 bg-light" id="mail" placeholder="Your Email">
                                        <label for="mail">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="mobile" placeholder="Your Mobile">
                                        <label for="mobile">Your Mobile</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <select class="form-select border-0 bg-light" id="service">
                                            <option selected>Steel Welding</option>
                                            <option value="">Pipe Welding</option>
                                        </select>
                                        <label for="service">Choose A Service</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0 bg-light" placeholder="Leave a message here" id="message" style="height: 130px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appoinment End -->
    

    <div class="container-fluid text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="#">Your Site Name</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
   
    @include('fragments.footer')
    
    @include('imports.footimport')
</body>
</html>
