<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>About - SAC Alumni Association</title>
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

    
    <!-- About Start -->
    <div class="container-fluid pt-6 pb-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid w-100" src="{{ asset('img/about.jpg') }}">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 text-uppercase mb-4">Ultimate Welding and Quality Metal Solutions</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                    <div class="row g-5 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-xl-square bg-light me-3">
                                    <i class="fa fa-users-cog fa-2x text-primary"></i>
                                </div>
                                <h5 class="lh-base text-uppercase mb-0">Certified Expert & Team</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-xl-square bg-light me-3">
                                    <i class="fa fa-tachometer-alt fa-2x text-primary"></i>
                                </div>
                                <h5 class="lh-base text-uppercase mb-0">Fast & Reliable Services</h5>
                            </div>
                        </div>
                    </div>
                    <p><i class="fa fa-check-square text-primary me-3"></i>Many variations of passages of lorem ipsum</p>
                    <p><i class="fa fa-check-square text-primary me-3"></i>Many variations of passages of lorem ipsum</p>
                    <p><i class="fa fa-check-square text-primary me-3"></i>Many variations of passages of lorem ipsum</p>
                    <div class="border border-5 border-primary p-4 text-center mt-4">
                        <h4 class="lh-base text-uppercase mb-0">We’re Good in All Metal Works Using Quality Welding Tools</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Footer-->
    @include('fragments.footer')


    <div class="container-fluid text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="#">SAC Alumni</a>, All Right Reserved.
                </div>
            </div>
        </div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    @include('imports.footimport')
</body>
</html>
