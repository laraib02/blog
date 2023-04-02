@extends('frontend.layouts.app')
@section('content')


    <div class=" baner-img-about text-center">
        <div class="baner-color-about">
            <div class="about-baner-text">
                <h3 class="text-white fw-5 fs-1">
                    About Us
                </h3>
                <h5 class="text-white mt-4 fs-5">
                    Home <span style="color: #16a8aa;"> > </span> About us
                </h5>
            </div>
        </div>
    </div>



    <!-- baner end  -->

    <div class="container " style="margin-top: 7%;">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12 " style="padding-right: 1rem;">
                <h5 class=" " data-aos="fade-left">
                    <span class="team-about pb-2">
                        About Bookeeper
                    </span>
                </h5>
                <h3 class="mt-4" data-aos="fade-up">We Have 25 Years of Experience in Bookkeeping Service Company</h3>
                <P class="mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                </P>
                <div class="row mt-4">
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12 " style="color: #14315f;">
                        <h5>
                            <i class="fa fa-bar-chart" style="color: #16a8aa;"></i> &nbsp;
                            Advanced Analytics
                        </h5>
                        <p style="color: #14305dd7;">
                            Lorem ipsum dolor sit amet cons adipiscing elit sed doesmo
                        </p>

                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12">

                        <h5>
                            <i class="fa fa-certificate" style="color: #16a8aa;"></i> &nbsp;
                            Certified Company
                        </h5>
                        <p style="color: #14305dd7;">
                            Lorem ipsum dolor sit amet cons adipiscing elit sed doesmo
                        </p>

                    </div>


                </div>
                <div class="row mt-4">
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12 " style="color: #14315f;">
                        <h5>
                            <i class="fa  fa-lightbulb-o" style="color: #16a8aa;"></i> &nbsp;
                            High Knowledge
                        </h5>
                        <p style="color: #14305dd7;">
                            Lorem ipsum dolor sit amet cons adipiscing elit sed doesmo
                        </p>

                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12 ">

                        <h5>
                            <i class="fa fa-book" style="color: #16a8aa;"></i> &nbsp;
                            Professional Bookkeeper
                        </h5>
                        <p style="color: #14305dd7;">
                            Lorem ipsum dolor sit amet cons adipiscing elit sed doesmo
                        </p>

                    </div>


                </div>
                <div class="row">
                    <div class="col-4" style="border-right: 1px solid rgba(128, 128, 128, 0.384);">
                        <img src="{{asset('frontend/assets/img/signature.png')}}" alt="" class="img-fluid mt-3" style="opacity: 0.50;">
                    </div>
                    <div class="col-4">
                        <strong style="color: #14315f;" class="mt-5">
                            Freddy Mcphee
                        </strong>
                        <p class="fs-6 mt-3">CEO Bizkeep</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                <div class="about-img-bg">

                </div>
            </div>
        </div>
    </div>

    <!-- counter container  -->

    <div class="container-fluid pb-5 " style="background-color: #14315f; margin-top: 10%;">
        <div class="container  bg-transparent counter-section" data-aos="fade-up" style="padding-top: 10%;">
            <div class="row p-4 text-center " style="margin-top: 8%;">
                <div class="col-md-3 col-lg-3 col-xl-3 col-xs-6 col-sm-6 ">
                    <h1>
                        <i class="fa fa-globe" style="color: #16a8aa;"></i>
                    </h1>
                    <h2 data-purecounter-start="0" data-purecounter-end="2245" data-purecounter-duration="3"
                        class="fw-5 purecounter text-white">
                        2,245+
                    </h2>
                    <h6 class="text-light">
                        Happy Clients
                    </h6>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 col-xs-6 col-sm-6 ">
                    <h1>
                        <i class="fa fa-book" style="color: #16a8aa;"></i>
                    </h1>
                    <h2 data-purecounter-start="0" data-purecounter-end="3452" data-purecounter-duration="3"
                        class="fw-5 purecounter text-white">
                        3,452+
                    </h2>
                    <h6 class="text-light">
                        Cases Completed
                    </h6>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 col-xs-6 col-sm-6 ">
                    <h1>
                        <i class="fa fa-certificate" style="color: #16a8aa;"></i>
                    </h1>
                    <h2 data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="3"
                        class="fw-5 purecounter text-white">
                        25+
                    </h2>
                    <h6 class="text-light">
                        Years Of Experience
                    </h6>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 col-xs-6 col-sm-6 ">
                    <h1>
                        <i class="fa fa-users" style="color: #16a8aa;"></i>
                    </h1>
                    <h2 data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="3"
                        class="fw-5 purecounter text-white">
                        120+
                    </h2>
                    <h6 class="text-light">
                        Professional Team
                    </h6>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 col-xs-12 float-start">
                        <div class="our-vision">
                            <div class="row">
                                <div class="col-2 mt-2">
                                    <i class="fa fa-arrows fs-1" aria-hidden="true" style="color: #16a8aa;"></i>
                                </div>
                                <div class="col-10">
                                    <h3 style="color: #14315f;">
                                        Our Vision & Mission
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 col-xs-12 float-end">
                        <div class="our-vision1">
                            <div class="row">
                                <div class="col-2 mt-2">
                                    <i class="fa fa-trophy fs-1" aria-hidden="true" style="color: #ffffff;"></i>
                                </div>
                                <div class="col-10">
                                    <h3>
                                        Our Vision & Mission
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- team  -->
    <div class="container text-center" style="margin-top: 6%;">
        <h5>
            <span class="team-heading pb-3">
                Our Team
            </span>
        </h5>
        <h3 style="color: #14305d; " class="fw-5 mt-5">
            Meet Our Professional Team
        </h3>
        <p class="fw-5 mt-3">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>tempor incididunt ut labore et
            dolore magna aliqua
        </p>
        <div class="row ">
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12 " onmouseover="hover(this)">
                <div class="team-absolute-hoverpage">
                    <img src="{{asset('frontend/assets/img/business-agent-LTX7Y7U.jpg')}}" alt="" class="">
                    <div class=" h-100 hover-div">

                        <div class="team-social-links">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                        </div>

                    </div>
                </div>
                <div class="team-title">
                    <h4 class="" style="color: #14315f;">
                        Archer Barlow
                    </h4>
                    <p>
                        Tax Consultant
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12 " onmouseover="hover(this)">
                <div class="team-absolute-hoverpage">
                    <img src="{{asset('frontend/assets/img/group-picture-of-businessman-posing-in-office-ZKA6TFS.jpg')}}" alt="" class="">
                    <div class=" h-100 hover-div">

                        <div class="team-social-links">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                        </div>

                    </div>
                </div>
                <div class="team-title">
                    <h4 class="" style="color: #14315f;">
                        Freddy Mcphee
                    </h4>
                    <p>
                        CEO & Founder
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12 " onmouseover="hover(this)">
                <div class="team-absolute-hoverpage">
                    <img src="{{asset('frontend/assets/img/positive-young-female-intern-in-glasses-PZFBQ3S.jpg')}}" alt="" class="">
                    <div class=" h-100 hover-div">

                        <div class="team-social-links">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                        </div>

                    </div>
                </div>
                <div class="team-title">
                    <h4 class="" style="color: #14315f;">
                        Valerie Allison
                    </h4>
                    <p>
                        HR Manager
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials start  -->

    <div class=" testimonials-bg-img text-center text-white">
        <div class=" testimonials-bg-clr">
            <div class="testimonials-text">
                <h5>
                    <span class="pb-2">
                        Testimonials
                    </span>
                </h5>
                <h2 class="mt-4">
                    <strong>
                        We Are Trusted Over 16+ Countries Worldwide
                    </strong>
                </h2>
                <p class="mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut
                    labore et dolore magna aliqua
                </p>
            </div>

        </div>
        <div class="container absolute-carousel">
            <div class="carousel" data-flickity='{ "autoPlay": 1500 }' style="background-color: rgba(0, 0, 0, 0);">
                <div class="carousel-cell fs-5"
                     style="width: 33%; color: white; box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.1) ; text-align:left; padding: 30px;">
                    <small style="color:#14305db4;" class="fs-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua
                    </small>
                    <div>
                        <img src="{{asset('frontend/assets/img/confident-businessman-QWVC4G6.jpg')}}" alt="" class=" h-5">
                        <span>
                            <strong style="color: #14305db4;" class="fs-6">
                                Gerald Flynn
                            </strong>
                            <i class="fa fa-quote-right float-end fs-1 mt-4" style="color: #16a8aa;"
                               aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
                <div class="carousel-cell pt-4 fs-5"
                     style="width: 33%; color: white; box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.1) ; text-align:left; padding: 30px;">
                    <small style="color: #14305db4;" class="fs-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua
                    </small>
                    <div>
                        <img src="{{asset('frontend/assets/img/ceo-of-company-in-business-offices-Y45NYU5.jpg')}}" alt="" class=" h-5">
                        <span>
                            <strong style="color: #14305db4;" class="fs-6">
                                Gerald Flynn
                            </strong>
                            <i class="fa fa-quote-right float-end fs-1 mt-4" style="color: #16a8aa;"
                               aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
                <div class="carousel-cell pt-4 fs-5"
                     style="width: 33%; color: white; box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.1) ; text-align:left; padding: 30px;">
                    <small style="color: #14305db4;" class="fs-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua
                    </small>
                    <div>
                        <img src="{{asset('frontend/assets/img/business-agent-LTX7Y7U.jpg')}}" alt="" class=" h-5">
                        <span>
                            <strong style="color: #14305db4;" class="fs-6">
                                Gerald Flynn
                            </strong>
                            <i class="fa fa-quote-right float-end fs-1 mt-4" style="color: #16a8aa;"
                               aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
                <div class="carousel-cell pt-4 fs-5"
                     style="width: 33%; color: white; box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.1) ; text-align:left; padding: 30px;">
                    <small style="color: #14305db4;" class="fs-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua
                    </small>
                    <div>
                        <img src="{{asset('frontend/assets/img/testimonial-83S5W35.jpg')}}" alt="" class=" h-5">
                        <span>
                            <strong style="color: #14305db4;" class="fs-6">
                                Gerald Flynn
                            </strong>
                            <i class="fa fa-quote-right float-end fs-1 mt-4" style="color: #16a8aa;"
                               aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
                <div class="carousel-cell pt-4 fs-5"
                     style="width: 33%; color: white; box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.1) ; text-align:left; padding: 30px;">
                    <small style="color: #14305db4;" class="fs-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua
                    </small>
                    <div>
                        <img src="{{asset('frontend/assets/img/testimonial-A8E2W8S.jpg')}}" alt="" class=" h-5">
                        <span>
                            <strong style="color: #14305db4;" class="fs-6">
                                Gerald Flynn
                            </strong>
                            <i class="fa fa-quote-right float-end fs-1 mt-4" style="color: #16a8aa;"
                               aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
                <div class="carousel-cell pt-4 fs-5"
                     style="width: 33%; color: white; box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.1) ; text-align:left; padding: 30px;">
                    <small style="color: #14305db4;" class="fs-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua
                    </small>
                    <div>
                        <img src="{{asset('frontend/assets/img/group-picture-of-businessman-posing-in-office-ZKA6TFS.jpg')}}" alt=""
                             class=" h-5">
                        <span>
                            <strong style="color: #14305db4;" class="fs-6">
                                Gerald Flynn
                            </strong>
                            <i class="fa fa-quote-right float-end fs-1 mt-4" style="color: #16a8aa;"
                               aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials end  -->

    <div class="container text-center blog-container " style="color: #14315f; margin-top: 10%;">
        <h5>
            <span class="pb-3">
                Our Blog
            </span>
        </h5>
        <h2 class="mt-5">
            Latest Blog & Articles
        </h2>
        <p class="mt-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et
            dolore magna aliqua
        </p>
        <div class="row blog-cards mt-5">
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12">
                <div class="card">
                    <img src="{{asset('frontend/assets/img/business-trainer-explainig-strategy-of-development-e1638180959911.jpg')}}"
                         class="card-img-top" alt="...">
                    <div class="card-body">
                        <strong>
                            <a href="" class="text-decoration-none" style="color:#14305d;">
                                How Your Firm Defines CAS Will Determine Your Growth Strategy
                            </a>

                        </strong>
                        <small class="mt-4">November 25, 2021</small>
                        <p class="mt-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua....
                        </p>
                        <a href="" class="text-decoration-none" style="color: #16a8aa;">
                            Read me &nbsp;<i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12">
                <div class="card">
                    <img src="{{asset('frontend/assets/img/analyzing-financial-diagram.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <strong>
                            <a href="" class="text-decoration-none" style="color:#14305d;">
                                How Bookkeeping Fits Into CAS You Should Set it to Autopilot
                            </a>

                        </strong>
                        <small class="mt-4">November 25, 2021</small>
                        <p class="mt-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua....
                        </p>
                        <a href="" class="text-decoration-none" style="color: #16a8aa;">
                            Read me &nbsp;<i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12">
                <div class="card">
                    <img src="{{asset('frontend/assets/img/managers-working-with-financial-chart-e1638180766443.jpg')}}" class="card-img-top"
                         alt="...">
                    <div class="card-body">
                        <strong>
                            <a href="" class="text-decoration-none" style="color:#14305d;">
                                Want Happy Accounting Clients? These Strategies Will Help You
                            </a>

                        </strong>
                        <small class="mt-4">November 25, 2021</small>
                        <p class="mt-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua....
                        </p>
                        <a href="" class="text-decoration-none" style="color: #16a8aa;">
                            Read me &nbsp;<i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
