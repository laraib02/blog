@extends('frontend.layouts.app')
@section('section')

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(29, 40, 51, 0.8);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Domain Search Start -->
    <div class="container-xxl domain mb-5" style="margin-top: 90px;">
        <div class="container px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title position-relative text-center mx-auto mb-4 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">Search Your Domain</h1>
                        <p class="mb-1">Vero justo sed sed vero clita amet. Et justo vero sea diam elitr amet ipsum eos ipsum clita duo sed. Sed vero sea diam erat vero elitr sit clita.</p>
                    </div>
                    <div class="position-relative w-100 my-3 wow fadeInUp" data-wow-delay="0.3s">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your domain name">
                        <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Search</button>
                    </div>
                    <div class="row g-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <h5 class="fw-bold text-primary mb-1">.com</h5>
                            <p class="mb-0">$9.99/year</p>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <h5 class="fw-bold text-primary mb-1">.net</h5>
                            <p class="mb-0">$9.99/year</p>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <h5 class="fw-bold text-primary mb-1">.org</h5>
                            <p class="mb-0">$9.99/year</p>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <h5 class="fw-bold text-primary mb-1">.us</h5>
                            <p class="mb-0">$9.99/year</p>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <h5 class="fw-bold text-primary mb-1">.eu</h5>
                            <p class="mb-0">$9.99/year</p>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                            <h5 class="fw-bold text-primary mb-1">.co.uk</h5>
                            <p class="mb-0">$9.99/year</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Domain Search End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-title position-relative mb-4 pb-4">
                        <h1 class="mb-2">Welcome to GreenHost</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row g-3">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="bg-light rounded text-center p-4">
                                <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                <p class="mb-0">Experts</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="bg-light rounded text-center p-4">
                                <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                <p class="mb-0">Clients</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="bg-light rounded text-center p-4">
                                <i class="fa fa-check fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                <p class="mb-0">Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{asset('frontend/img/about.png')}}">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Pricing Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Our Hosting Plans</h1>
                <p class="mb-1">Vero justo sed sed vero clita amet. Et justo vero sea diam elitr amet ipsum eos ipsum clita duo sed. Sed vero sea diam erat vero elitr sit clita.</p>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="position-relative shadow rounded border-top border-5 border-primary">
                        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                            <i class="fa fa-share-alt text-white"></i>
                        </div>
                        <div class="text-center border-bottom p-4 pt-5">
                            <h4 class="fw-bold">Share Hosting</h4>
                            <p class="mb-0">Eirmod erat dolor amet est clita lorem erat justo rebum elitr eos</p>
                        </div>
                        <div class="text-center border-bottom p-4">
                            <p class="text-primary mb-1">Latest Offer - <strong>Save 30%</strong></p>
                            <h1 class="mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>2.49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <a class="btn btn-primary px-4 py-2" href="">Buy Now</a>
                        </div>
                        <div class="p-4">
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>100 GB Disk Space</p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Unlimited Bandwith</p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Upgrade to Positive SSL</p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Automatic Malware Removal</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>30 Days Money Back Guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="position-relative shadow rounded border-top border-5 border-secondary">
                        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-secondary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                            <i class="fa fa-server text-white"></i>
                        </div>
                        <div class="text-center border-bottom p-4 pt-5">
                            <h4 class="fw-bold">VPS Hosting</h4>
                            <p class="mb-0">Eirmod erat dolor amet est clita lorem erat justo rebum elitr eos</p>
                        </div>
                        <div class="text-center border-bottom p-4">
                            <p class="text-primary mb-1">Latest Offer - <strong>Save 30%</strong></p>
                            <h1 class="mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>5.49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <a class="btn btn-secondary px-4 py-2" href="">Buy Now</a>
                        </div>
                        <div class="p-4">
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>100 GB Disk Space</p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Unlimited Bandwith</p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Upgrade to Positive SSL</p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Automatic Malware Removal</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>30 Days Money Back Guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="position-relative shadow rounded border-top border-5 border-primary">
                        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                            <i class="fa fa-cog text-white"></i>
                        </div>
                        <div class="text-center border-bottom p-4 pt-5">
                            <h4 class="fw-bold">Dedi Hosting</h4>
                            <p class="mb-0">Eirmod erat dolor amet est clita lorem erat justo rebum elitr eos</p>
                        </div>
                        <div class="text-center border-bottom p-4">
                            <p class="text-primary mb-1">Latest Offer - <strong>Save 30%</strong></p>
                            <h1 class="mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>11.49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <a class="btn btn-primary px-4 py-2" href="">Buy Now</a>
                        </div>
                        <div class="p-4">
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>100 GB Disk Space</p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Unlimited Bandwith</p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Upgrade to Positive SSL</p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Automatic Malware Removal</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>30 Days Money Back Guarantee</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->


    <!-- Comparison Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Shared VS Dedicated Server</h1>
                <p class="mb-1">Vero justo sed sed vero clita amet. Et justo vero sea diam elitr amet ipsum eos
                    ipsum clita duo sed. Sed vero sea diam erat vero elitr sit clita.</p>
            </div>
            <div class="row g-5 comparison position-relative">
                <div class="col-lg-6 pe-lg-5">
                    <div class="section-title position-relative mx-auto mb-4 pb-4">
                        <h3 class="fw-bold mb-0">Shared Server</h3>
                    </div>
                    <div class="row gy-3 gx-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <i class="fa fa-server fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">99.99% Uptime</h5>
                            <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">100% Secured</h5>
                            <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-cog fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">Control Panel</h5>
                            <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-headset fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">24/7 Support</h5>
                            <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="section-title position-relative mx-auto mb-4 pb-4">
                        <h3 class="fw-bold mb-0">Dedicated Server</h3>
                    </div>
                    <div class="row gy-3 gx-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <i class="fa fa-server fa-3x text-secondary mb-3"></i>
                            <h5 class="fw-bold">99.99% Uptime</h5>
                            <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <i class="fa fa-shield-alt fa-3x text-secondary mb-3"></i>
                            <h5 class="fw-bold">100% Secured</h5>
                            <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-cog fa-3x text-secondary mb-3"></i>
                            <h5 class="fw-bold">Control Panel</h5>
                            <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-headset fa-3x text-secondary mb-3"></i>
                            <h5 class="fw-bold">24/7 Support</h5>
                            <p>Ipsum dolor diam stet stet kasd diam sea stet sed rebum dolor ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Comparison Start -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                    <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                    <p class="mt-3">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('frontend/img/testimonial-1.jpg')}}" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                    <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                    <p class="mt-3">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('frontend/img/testimonial-2.jpg')}}" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                    <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                    <p class="mt-3">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('frontend/img/testimonial-3.jpg')}}" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 mt-4">
                    <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                    <p class="mt-3">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('frontend/img/testimonial-4.jpg')}}" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Our Team Members</h1>
                <p class="mb-1">Vero justo sed sed vero clita amet. Et justo vero sea diam elitr amet ipsum eos
                    ipsum clita duo sed. Sed vero sea diam erat vero elitr sit clita.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                        <div class="text-center p-4">
                            <img class="img-fluid rounded-circle mb-4" src="{{asset('frontend/img/team-1.jpg')}}" alt="">
                            <h5 class="fw-bold mb-1">Full Name</h5>
                            <small>Designation</small>
                        </div>
                        <div class="d-flex justify-content-center bg-primary p-3">
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                        <div class="text-center p-4">
                            <img class="img-fluid rounded-circle mb-4" src="{{asset('frontend/img/team-2.jpg')}}" alt="">
                            <h5 class="fw-bold mb-1">Full Name</h5>
                            <small>Designation</small>
                        </div>
                        <div class="d-flex justify-content-center bg-primary p-3">
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                        <div class="text-center p-4">
                            <img class="img-fluid rounded-circle mb-4" src="{{asset('frontend/img/team-3.jpg')}}" alt="">
                            <h5 class="fw-bold mb-1">Full Name</h5>
                            <small>Designation</small>
                        </div>
                        <div class="d-flex justify-content-center bg-primary p-3">
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                        <div class="text-center p-4">
                            <img class="img-fluid rounded-circle mb-4" src="{{asset('frontend/img/team-4.jpg')}}" alt="">
                            <h5 class="fw-bold mb-1">Full Name</h5>
                            <small>Designation</small>
                        </div>
                        <div class="d-flex justify-content-center bg-primary p-3">
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
