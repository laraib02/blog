@extends('frontend.layouts.app')
@section('content')

    <div class="container-fluid baneer">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-4 col-sm-4" id="baneer-color">

            </div>
            <div class="col-md-8 col-lg-8 col-xl-8 col-xs-8 col-sm-8" id="baneer-img">

            </div>

            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-4 col-sm-4 offset-md-2 " id="position">
                <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
                     data-aos-easing="ease-in-out" class="card mt-5">
                    <h1 data-aos="fade-left" class="m-5 mb-4">
                        <span style="color: #14305d;">
                            Bookkeeping <br> Services To Elvolve Your
                        </span>
                        <span style="color: #16a8aa;">CAS Practice</span>
                    </h1>
                    <p data-aos="fade-left" class="m-5 mt-0 mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Error, omnis!
                        Eveniet dolore inventore id eius vero asperiores a natus recusandae.</p>
                    <span data-aos="fade-left">
                        <button class="btn  m-5 mt-0 text-white" id="banner-card-btn">
                            Contact Us
                        </button>
                        <!-- <button class="btn  m-5 mt-0 text-white" id="banner-card-btn">
                                    <a href=""><i class="fa fa-play m-5 mt-0 mb-4" aria-hidden="true"></i></a>
                                </button> -->
                    </span>
                    <!-- <span>

                            </span> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row mt-5">
            <div data-aos-easing="ease-in-out" class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12 mt-5"
                 id="team-img">
                <img src="{{asset('frontend/assets/img/group-of-successful-multiethnic-business-team-e1638180882937.jpg')}}" alt="">

            </div>


            <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12 mt-3 p-4">
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
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12">
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempo incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim</p>
                        <div class="check-circle">
                            <p>
                                <i class='fa fa-check-circle'></i> &nbsp; Constant Improvement
                            </p>
                            <p>
                                <i class='fa fa-check-circle'></i> &nbsp; Commitment to Customers
                            </p>
                            <p>
                                <i class='fa fa-check-circle'></i> &nbsp; Best Quality You Can Get
                            </p>
                            <p>
                                <i class='fa fa-check-circle'></i> &nbsp; High Level Of Knowledge
                            </p>
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12 p-4" style="background-color: #14305d;">
                        <h5 class=" text-white mt-3">
                            <i class="fa fa-line-chart " aria-hidden="true" style=" color: #16a8aa;"></i> &nbsp;
                            Advanced Analytics
                        </h5>
                        <p class="text-light">
                            Lorem ipsum dolor sit amet cons adipiscing elit sed doesmo
                        </p>
                        <h5 class=" text-white">
                            <i class="fa fa-certificate " aria-hidden="true" style=" color: #16a8aa;"></i> &nbsp;
                            Certified Company
                        </h5>
                        <p class="text-light">
                            Lorem ipsum dolor sit amet cons adipiscing elit sed doesmo
                        </p>

                    </div>
                    <div class="mt-4" id="sec-banner">
                        <button class="btn text-white" id="banner-card-btn">
                            More About us
                        </button>
                        <!-- <a>Freddy Mcphee <br> CEO Bizkeep</a> -->
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12 mt-5 position-relative p-5 text-white"
                 style="background-color:#061835;">
                <h5 >
                    <span class="who-we-are  pb-3">
                        Who we are
                    </span>
                </h5>
                <h2 class="pt-4">We Provide Perfect Solution For All Bookkeeping Services</h2>
                <p class=" pt-4 fs-5 text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    xercitation ullamco laboris</p>
                <div class="row">

                    <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12">
                        <div>
                            <span class="fw-bold">
                                Saving You Time
                            </span>
                            <span class="text-secondary m-5 p-2">
                                90%
                            </span>
                        </div>
                        <div class="progress mt-2">
                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="50"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-4">
                            <span class="fw-bold">
                                Trusted Company
                            </span>
                            <span class="text-secondary m-5">
                                94%
                            </span>
                        </div>
                        <div class="progress mt-2">
                            <div class="progress-bar" role="progressbar" style="width: 94%; color: #16a8aa;"
                                 aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-4 check-icon">
                            <p>
                                <i class='fa fa-check'></i> &nbsp; Constant Improvement
                            </p>
                            <p>
                                <i class='fa fa-check'></i> &nbsp; Commitment to Customers
                            </p>
                            <p>
                                <i class='fa fa-check'></i> &nbsp; Best Quality You Can Get
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12" style="background-color: #16a8aa;">
                        <p>
                            <i class="fa fa-user fs-1 m-4" aria-hidden="true" style="color: #14315f;"></i>

                        </p>
                        <h4 class="m-4 mt-0">
                            You Run Your Business, We Will Handle Your Bookkeeping
                        </h4>
                    </div>
                    <div id="view-btn">
                        <button class="btn  w-25 m-3">
                            View Project
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12  p-0 " id="team-img">
                <img src="{{asset('frontend/assets/img/entrepreneurs-and-business-people-conference-in-modern-meeting-room-e1638180939182.jpg')}}"
                     alt="" id="enterpenur-img" class="rounded-end">
            </div>
        </div>
    </div>
    <div class="container mt-5 ">
        <h5 >
            <span class="Services pb-2">
                Our Services
            </span>
        </h5>
        <div class="row mt-4">
            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-12 col-sm-12">
                <h2>
                    What Service We Offer
                </h2>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua
                </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 col-xs-12 col-sm-12">
                <div id="services-btn">
                    <button class="btn  m-3 float-end">
                        All Services
                    </button>
                </div>
            </div>
        </div>
        <div class="row mt-3" data-aos="fade-right">
            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-12 col-sm-12 " id="bussiness-card">
                <img src="{{asset('frontend/assets/img/partner-meeting-of-business-team-colleagues-consultation-and-discussion-marketing-plan-meeting-e1638181179493.jpg')}}"
                     alt="" class="img-fluid">
                <div class="card text-center text-center w-75" id="services-card1">

                    <h5 style="color: #14305d;">
                        <i class="fa fa-book fs-1 p-2" style="color: #16a8aa;"></i> <br>
                        Online Bookkeeping
                    </h5>
                    <p class="p-2">
                        Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do eiusmod tempor incididunt
                    </p>
                    <a href="#" class="text-decoration-none" style="color: #16a8aa;">
                        Read More &nbsp;<i class="fa fa-arrow-right"></i>
                    </a>

                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-12 col-sm-12" id="bussiness-card">
                <img src="{{asset('frontend/assets/img/financial-services-e1638180715159.jpg')}}" alt="" class="img-fluid">
                <div class="card text-center text-center w-75" id="services-card1">

                    <h5 style="color: #14305d;">
                        <i class="fa fa-calculator fs-1 p-2" style="color: #16a8aa;"></i> <br>
                        Tax Preparation
                    </h5>
                    <p class="p-2">
                        Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do eiusmod tempor incididunt
                    </p>
                    <a href="#" class="text-decoration-none" style="color: #16a8aa;">
                        Read More &nbsp;<i class="fa fa-arrow-right"></i>
                    </a>

                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-12 col-sm-12" id="bussiness-card">
                <img src="{{asset('frontend/assets/img/two-business-partnership-coworkers-analysis-strategy-with-discussing-a-financial-planning-graph-and-e1638181148665-pgru0uh76lotlkdufb71qzsuposlsbw99mbmhji87k.jpg')}}"
                     alt="" class="img-fluid">
                <div class="card text-center text-center w-75" id="services-card1">

                    <h5 style="color: #14305d;">
                        <i class="fa fa-bar-chart fs-1 p-2" style="color: #16a8aa;"></i> <br>
                        Financial Planning
                    </h5>
                    <p class="p-2">
                        Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do eiusmod tempor incididunt
                    </p>
                    <a href="#" class="text-decoration-none" style="color: #16a8aa;">
                        Read More &nbsp;<i class="fa fa-arrow-right"></i>
                    </a>

                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-left" style="margin-top: 20%;" id="service-card-row">
            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-12 col-sm-12" id="bussiness-card">
                <img src="{{asset('frontend/assets/img/two-business-partnership-coworkers-analysis-strategy-with-discussing-a-financial-planning-graph-and-e1638181148665-pgru0uh76lotlkdufb71qzsuposlsbw99mbmhji87k.jpg')}}"
                     alt="" class="img-fluid">
                <div class="card text-center text-center w-75" id="services-card1">

                    <h5 style="color: #14305d;">
                        <i class="fa fa-laptop fs-1 p-2" style="color: #16a8aa;"></i> <br>
                        Payroll Data Entry
                    </h5>
                    <p class="p-2">
                        Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do eiusmod tempor incididunt
                    </p>
                    <a href="#" class="text-decoration-none" style="color: #16a8aa;">
                        Read More &nbsp;<i class="fa fa-arrow-right"></i>
                    </a>

                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-12 col-sm-12 " id="bussiness-card">
                <img src="{{asset('frontend/assets/img/two-business-partnership-coworkers-analysis-strategy-with-discussing-a-financial-planning-graph-and-e1638181148665-pgru0uh76lotlkdufb71qzsuposlsbw99mbmhji87k.jpg')}}"
                     alt="" class="img-fluid">
                <div class="card text-center text-center w-75" id="services-card1">

                    <h5 style="color: #14305d;">
                        <i class="fa fa-users fs-1 p-2" style="color: #16a8aa;"></i> <br>

                        Investment Planning
                    </h5>
                    <p class="p-2">
                        Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do eiusmod tempor incididunt
                    </p>
                    <a href="#" class="text-decoration-none" style="color: #16a8aa;">
                        Read More &nbsp;<i class="fa fa-arrow-right"></i>
                    </a>

                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-12 col-sm-12 " id="bussiness-card">
                <img src="{{asset('frontend/assets/img/two-business-partnership-coworkers-analysis-strategy-with-discussing-a-financial-planning-graph-and-e1638181148665-pgru0uh76lotlkdufb71qzsuposlsbw99mbmhji87k.jpg')}}"
                     alt="" class="img-fluid">
                <div class="card text-center text-center w-75" id="services-card1">

                    <h5 style="color: #14305d;">
                        <i class="fa fa-bar-chart fs-1 p-2" style="color: #16a8aa;"></i> <br>
                        Accounts Outsourcing
                    </h5>
                    <p class="p-2">
                        Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do eiusmod tempor incididunt
                    </p>
                    <a href="#" class="text-decoration-none" style="color: #16a8aa;">
                        Read More &nbsp;<i class="fa fa-arrow-right"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid choose-us" style="margin-top: 15%; padding-bottom: 12%;">
        <div class="container choose-container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12 mt-5">
                    <h5>
                        <span class=" choose-us-heading pb-3 text-white ">
                            Why Choose Us
                        </span>
                    </h5>
                    <h2 class="text-white mt-4">
                        2,000+ Business Company Doing Bookkeeping On Bizkeep
                    </h2>
                    <p class="mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    </p>

                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12 mt-5 p-2">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12 bg-white">
                            <div class="row  p-3 pt-4">
                                <div class="col-md-4 col-lg-4 col-xl-4 col-xs-12 col-sm-12 ">
                                    <i class="fa fa-globe fs-1 float-end pt-2" aria-hidden="true"
                                       style="color:#16a8aa ;"></i>
                                </div>
                                <div class="col-md-8 col-lg-8 col-xl-8 col-xs-12 col-sm-12 ">
                                    <h4 style="color: #061938;">
                                        Professional Bookkeeper
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12" style="background-color: #16a8aa;">
                            <div class="row   p-3 pt-4">
                                <div class="col-md-4 col-lg-4 col-xl-4 col-xs-12 col-sm-12 ">
                                    <i class="fa fa-comments fs-1 float-end pt-2" aria-hidden="true"
                                       style="color:#ffffff ;"></i>
                                </div>
                                <div class="col-md-8 col-lg-8 col-xl-8 col-xs-12 col-sm-12 ">
                                    <h4 class="text-white">
                                        Free Consultations
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12" style="background-color: #16a8aa;">
                            <div class="row p-3 pt-4">
                                <div class="col-md-4 col-lg-4 col-xl-4 col-xs-12 col-sm-12 ">
                                    <i class="fa fa-clock-o fs-1 float-end pt-2" aria-hidden="true"
                                       style="color:#ffffff ;"></i>
                                </div>
                                <div class="col-md-8 col-lg-8 col-xl-8 col-xs-12 col-sm-12 ">
                                    <h4 class="text-white">

                                        Saving You Time
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12 bg-white ">
                            <div class="row p-3 pt-4">
                                <div class="col-md-4 col-lg-4 col-xl-4 col-xs-12 col-sm-12 ">
                                    <i class="fa fa-certificate fs-1 float-end pt-2" aria-hidden="true"
                                       style="color:#16a8aa ;"></i>
                                </div>
                                <div class="col-md-8 col-lg-8 col-xl-8 col-xs-12 col-sm-12 ">
                                    <h4 style="color: #061938;">
                                        Best Quality Service
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container choose-absolute-container bg-white counter-section" data-aos="fade-up">
                <div class="row p-4 text-center ">
                    <div class="col-md-3 col-lg-3 col-xl-3 col-xs-6 col-sm-6 ">
                        <h1>
                            <i class="fa fa-globe" style="color: #16a8aa;"></i>
                        </h1>
                        <h2 data-purecounter-start="0" data-purecounter-end="2245" data-purecounter-duration="3"
                            class="fw-5 purecounter" style="color: #14305d;">
                            2,245+
                        </h2>
                        <h6>
                            Happy Clients
                        </h6>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 col-xs-6 col-sm-6 ">
                        <h1>
                            <i class="fa fa-book" style="color: #16a8aa;"></i>
                        </h1>
                        <h2 data-purecounter-start="0" data-purecounter-end="3452" data-purecounter-duration="3"
                            class="fw-5 purecounter" style="color: #14305d;">
                            3,452+
                        </h2>
                        <h6>
                            Cases Completed
                        </h6>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 col-xs-6 col-sm-6 ">
                        <h1>
                            <i class="fa fa-certificate" style="color: #16a8aa;"></i>
                        </h1>
                        <h2 data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="3"
                            class="fw-5 purecounter" style="color: #14305d;">
                            25+
                        </h2>
                        <h6>
                            Years Of Experience
                        </h6>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 col-xs-6 col-sm-6 ">
                        <h1>
                            <i class="fa fa-users" style="color: #16a8aa;"></i>
                        </h1>
                        <h2 data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="3"
                            class="fw-5 purecounter" style="color: #14305d;">
                            120+
                        </h2>
                        <h6>
                            Professional Team
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid  cases-container">
        <h5 >
            <span class="case-heading pb-3">
                Our Cases
            </span>
        </h5>
        <h2 style="color: #14305d;" class=" mt-5">
            Let’s See Our Latest Project
        </h2>
        <p class="p-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et
            dolore magna aliqua
        </p>

    </div>
    <div class="container-fluid Testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12">
                    <h5 >
                        <span class="pb-3 span">
                            Testimonials
                        </span>
                    </h5>
                    <h1 class="text-white mt-5">
                        We Are Trusted Over 16+ Countries Worldwide
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12">
                    <div class="carousel" data-flickity='{ "autoPlay": 1500 }'>
                        <div class="carousel-cell pt-4 fs-5">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam
                            </p>
                            <div>
                                <img src="{{asset('frontend/assets/img/confident-businessman-QWVC4G6.jpg')}}" alt="" class=" h-5">
                                <span>
                                    <strong style="color: #14305d;">
                                        Gerald Flynn
                                    </strong>
                                    <a class="fs-6 text-decoration-none text-secondary">(Enterpenure)</a>
                                    <i class="fa fa-quote-right float-end fs-1 mt-4" style="color: #16a8aa;"
                                       aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="carousel-cell pt-4 fs-5">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam
                            </p>
                            <div>
                                <img src="{{asset('frontend/assets/img/confident-businessman-QWVC4G6.jpg')}}" alt="" class=" h-5">
                                <span>
                                    <strong style="color: #14305d;">
                                        Gerald Flynn
                                    </strong>
                                    <a class="fs-6 text-decoration-none text-secondary">(Enterpenure)</a>
                                    <i class="fa fa-quote-right float-end fs-1 mt-4" style="color: #16a8aa;"
                                       aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="carousel-cell pt-4 fs-5">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam
                            </p>
                            <div>
                                <img src="{{asset('frontend/assets/img/confident-businessman-QWVC4G6.jpg')}}" alt="" class=" h-5">
                                <span>
                                    <strong style="color: #14305d;">
                                        Gerald Flynn
                                    </strong>
                                    <a class="fs-6 text-decoration-none text-secondary">(Enterpenure)</a>
                                    <i class="fa fa-quote-right float-end fs-1 mt-4" style="color: #16a8aa;"
                                       aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid case-absolute">
            <div class="row ">
                <div class="col-md-3 col-lg-3 col-xl-3 col-sm-12 col-xs-12 case-absolute-hover"
                     onmouseover="hover(this)">
                    <img src="{{asset('frontend/assets/img/financial-services-e1638180715159.jpg')}}" alt="" class=" ">
                    <div class=" h-100">
                        <h4 class="text-white pt-5">
                            Investment Management
                        </h4>
                        <p   style="color:gray;">
                            Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                        </p>

                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 col-sm-12 col-xs-12 case-absolute-hover"
                     onmouseover="hover(this)">
                    <img src="{{asset('frontend/assets/img/business-team-collaboration-discussing-working-analysis-with-financial-data-and-marketing-growth-e1638181040353.jpg')}}"
                         alt="" class="">
                    <div class=" h-100 pt-5">
                        <h4 class="text-white">
                            Investment Management
                        </h4>
                        <p   style="color:gray;">
                            Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                        </p>

                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 col-sm-12 col-xs-12 case-absolute-hover"
                     onmouseover="hover(this)">
                    <img src="{{asset('frontend/assets/img/financial-statistics-e1638180991833.jpg')}}" alt="" class="">
                    <div class=" h-100 pt-5">
                        <h4 class="text-white ">
                            Investment Management
                        </h4>
                        <p   style="color:gray;">
                            Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                        </p>

                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 col-sm-12 col-xs-12  case-absolute-hover"
                     onmouseover="hover(this)">
                    <img src="{{asset('frontend/assets/img/business-team-casual-collaboration-discussing-working-analysis-with-financial-data-and-marketing-e1638180979952.jpg')}}"
                         alt="" class="">
                    <div class=" h-100 pt-5">
                        <h4 class="text-white">
                            Investment Management
                        </h4>
                        <p   style="color:gray;">
                            Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                        </p>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container process-container">
        <h5 >
            <span class="process-heading pb-3">
                Our Process
            </span>
        </h5>
        <h2 style="color: #14305d;" class="mt-5">
            Easy Steps To Get Your Solutions
        </h2>
        <p class="p-2 mt-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et
            dolore magna aliqua
        </p>
        <div class="container number-container text-center ">
            <div class="row " style="justify-content: center;">
                <div class="col-1 p-2 ">
                    <h3 class="color-numbers">
                        01.
                    </h3>
                </div>
                <div class="col-4 p-2 border-div">

                </div>
                <div class="col-1  p-2">
                    <h3 class="color-numbers">
                        02.
                    </h3>
                </div>
                <div class="col-4 p-2 border-div">

                </div>
                <div class="col-1 p-2">
                    <h3 class="color-numbers">
                        03.
                    </h3>
                </div>

            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12 bg-white">
                <div class="card p-4 process-cards">
                    <i class="fa fa-mobile " aria-hidden="true" style="color: #16a8aa; font-size: 60px;"></i>
                    <h5 style="color: #14305d;" class="mt-4">
                        Make An Appointment
                    </h5>
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet, consectetu adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua quis nostrud exerci
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12">
                <div class=" card p-4 process-cards" style="background-color: #061938;">
                    <i class="fa fa-users " aria-hidden="true" style="color: #16a8aa; font-size: 60px;"></i>
                    <h5 class="mt-4 text-white ">
                        Get Consultation
                    </h5>
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet, consectetu adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua quis nostrud exerci
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12 bg-white">
                <div class="card p-4 process-cards">

                    <i class="fa fa-thumbs-up " aria-hidden="true" style="color: #16a8aa; font-size: 60px;"></i>
                    <h5 style="color: #14305d;" class="mt-4">
                        Your Problem Solved
                    </h5>
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet, consectetu adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua quis nostrud exerci
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class=" video-bg">
        <div class=" video-color">
            <div class="text-center">
                <a>
                    <i class="fa fa-play bg-white mt-5" aria-hidden="true"></i>
                </a>
                <h2 class="text-white mt-5 fw-5">
                    Still Confused About Our Features? Get A Consultation
                </h2>
                <p class="text-white mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <br>
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                </p>
                <span>
                    <button class="btn  m-5 mt-2 ">
                        Contact Us
                    </button>
                </span>
            </div>
        </div>
    </div>
    <div class="container text-center blog-container " style="color: #14315f;">
        <h5 >
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
