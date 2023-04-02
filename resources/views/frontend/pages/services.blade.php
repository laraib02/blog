@extends('frontend.layouts.app')
@section('content')

    <div class=" baner-img-service text-center">
        <div class="baner-color-service">
            <div class="services-baner-text">
                <h3 class="text-white fw-5 fs-1">
                    Services
                </h3>
                <h5 class="text-white mt-4 fs-5">
                    Home <span style="color: #16a8aa;"> > </span> Services
                </h5>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center ">
        <h5>
            <span class="Services pb-2">
                Our Services
            </span>
        </h5>
        <div class="row mt-4 mb-4">
            <h2 class="mt-3">
                What Service We Offer
            </h2>
            <p class="mt-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore
                et dolore magna aliqua
            </p>
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
    <div class="container-fluid Make-Appointment">
        <div class="container Make-Appointment-container">
            <div class="row" >
                <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12 form-col ">
                    <div class="form bg-white ">
                        <div class="input-group">
                            <input type="text" placeholder="Your Name" class="form-control">
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12">
                                <div class="input-group">
                                    <input type="number" placeholder="Your Phone" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12">
                                <div class="input-group">
                                    <input type="email" placeholder="Your Email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <select class="form-select mt-4">
                                <option selected value="" disabled>Select Service</option>
                                <option>Book Keeping</option>
                                <option>Book Keeping</option>
                                <option>Book Keeping</option>
                                <option>Book Keeping</option>
                                <option>Book Keeping</option>
                                <option>Book Keeping</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <textarea name="" id="" cols="30" rows="6" placeholder="Your Message"
                                      class="form-control mt-4"></textarea>
                        </div>
                        <button class="btn t p-2 w-50 mt-4" type="submit">
                            Make Appointment

                        </button>

                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12 appointment-description">
                    <h5>
                        <span class="pb-3 appointment-heading text-white">
                            Make Appointment
                        </span>
                    </h5>
                    <h2 class="text-white mt-5">
                        Needs Professional Bookkeeper? Make Appointment Now
                    </h2>
                    <p class="text-white mt-4" style="  letter-spacing: 0.5px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim adiqua minim veniam quis nostrud exercitation ullamco incididunt
                        magna
                    </p>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12 text-white">
                            <h4>
                                Denpasar, Bali
                            </h4>
                            <i class="fa fa-map-marker fs-6 mt-3" aria-hidden="true" style="color: #16a8aa;"></i> &nbsp;
                            <a class="text-white text-decoration-none mt-3"> Jl. Raya Puputan No 142</a> <br>
                            <i class="fa fa-envelope fs-6 mt-3" aria-hidden="true" style="color: #16a8aa;"></i> &nbsp;
                            <a class="text-white text-decoration-none mt-3"> support@domain.com</a> <br>
                            <i class="fa fa-phone fs-6 mt-3" style="color: #16a8aa;"></i> &nbsp;
                            <a class="text-white text-decoration-none mt-3"> (021) 4582 - 3695</a>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12 text-white">
                            <h4>
                                Canggu, Bali
                            </h4>
                            <i class="fa fa-map-marker fs-6 mt-3" aria-hidden="true" style="color: #16a8aa;"></i> &nbsp;
                            <a class="text-white text-decoration-none mt-3"> Jl. Raya Puputan No 142</a> <br>
                            <i class="fa fa-envelope fs-6 mt-3" aria-hidden="true" style="color: #16a8aa;"></i> &nbsp;
                            <a class="text-white text-decoration-none mt-3"> support@domain.com</a> <br>
                            <i class="fa fa-phone fs-6 mt-3" style="color: #16a8aa;"></i> &nbsp;
                            <a class="text-white text-decoration-none mt-3"> (021) 4582 - 3695</a>
                        </div>
                        <div class="serivce-page-carousel mt-4">
                            <div class="carousel" data-flickity='{ "autoPlay": 1500 }'
                                 style="background-color:#ffffff ;">
                                <div class="carousel-cell pt-4 fs-5" style="background-color: white; width: 30%;">
                                    <a href="">
                                        <img src="{{asset('frontend/assets/img/Domoo.png')}}" alt="" class="  w-100"
                                             style="opacity: 0.50; height: auto; max-width: 100%;">
                                    </a>
                                </div>
                                <div class="carousel-cell pt-4 fs-5" style="background-color: white; width: 30%;">
                                    <a href="">
                                        <img src="{{asset('frontend/assets/img/Garret.png')}}" alt="" class="  w-100"
                                             style="opacity: 0.50; height: auto; max-width: 100%;">
                                    </a>
                                </div>
                                <div class="carousel-cell pt-4 fs-5" style="background-color: white; width: 30%;">
                                    <a href="">
                                        <img src="{{asset('frontend/assets/img/Parka.png')}}" alt="" class="  w-100"
                                             style="opacity: 0.50; height: auto; max-width: 100%;">
                                    </a>
                                </div>
                                <div class="carousel-cell pt-4 fs-5" style="background-color: white; width: 30%;">
                                    <a href="">
                                        <img src="{{asset('frontend/assets/img/square-pixel-VVLG4M3.png')}}" alt="" class="  w-100"
                                             style="opacity: 0.50; height: auto; max-width: 100%;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container process-container " style="margin-top: 18%;">
        <h5>
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
                    <p class="mt-3" style="color: #14305de7;">
                        Lorem ipsum dolor sit amet, consectetu adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua quis nostrud exerci
                    </p>
                </div>
            </div>
        </div>
    </div>
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
    <div class="container our-pricing-container text-center">
        <h5>
            <span class="pb-2 our-pricing-heading">
                Our Pricing
            </span>
        </h5>
        <h2 style="color: #14305d;" class="mt-5">
            Affordable Pricing Plans
        </h2>
        <p style="color: #14305dd5;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et
            dolore magna aliqua
        </p>
        <div class="container " style="margin-top: 10%;">
            <div class="row mt-5 text-center ">
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12 ">
                    <div class="card pt-5 pb-5 " style="box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.1);">
                        <div class="container">
                            <div class="card-p-border">
                                <h3 style="color: #14305d;">
                                    <i class="fa fa-users" style="color: #16a8aa;"></i> &nbsp;
                                    Personal Plan
                                </h3>
                                <p class="mt-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                </p>
                            </div>
                            <div class="our-pricing-links">
                                <i class="fa fa-check mt-5" style="color: #16a8aa;"></i> &nbsp;
                                <a href="" class="text-decoration-none">Email Support</a>
                            </div>
                            <div class="our-pricing-links">
                                <i class="fa fa-check mt-4" style="color: #16a8aa;"></i> &nbsp;
                                <a href="" class="text-decoration-none">2 Hours Consultaion</a>
                            </div>
                            <div class="our-pricing-links">
                                <i class="fa fa-check mt-4" style="color: #16a8aa;"></i> &nbsp;
                                <a href="" class="text-decoration-none">1 Month Maintenance</a>
                            </div>
                            <div class="our-pricing-links">
                                <i class="fa fa-check mt-4" style="color: #16a8aa;"></i> &nbsp;
                                <a href="" class="text-decoration-none">24/7 Customer Support</a>
                            </div>
                            <h1 style="color: #14305d;" class="mt-4">
                                $59<sub class="text-secondary fs-6">/ month</sub>
                            </h1>
                            <button class="btn w-75 mt-4 our-pricing-button">
                                Get Started
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12"
                     style="margin-top: -3%; margin-bottom: -3%;">
                    <div class="card  pt-5 pb-5"
                         style="box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.1); background-color: #14305d;">
                        <div class="container ">
                            <div class="card-p-border">
                                <h3 style="color: #ffffff;">
                                    <i class="fa fa-users" style="color: #16a8aa;"></i> &nbsp;

                                    Advanced Plan
                                </h3>
                                <p class="mt-4 text-light ">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                </p>
                            </div>
                            <div class="our-pricing-links">
                                <i class="fa fa-check mt-5" style="color: #16a8aa;"></i> &nbsp;
                                <a href="" class="text-decoration-none text-light">Email Support</a>
                            </div>
                            <div class="our-pricing-links">
                                <i class="fa fa-check mt-4" style="color: #16a8aa;"></i> &nbsp;
                                <a href="" class="text-decoration-none text-light">2 Hours Consultaion</a>
                            </div>
                            <div class="our-pricing-links">
                                <i class="fa fa-check mt-4" style="color: #16a8aa;"></i> &nbsp;
                                <a href="" class="text-decoration-none text-light">1 Month Maintenance</a>
                            </div>
                            <div class="our-pricing-links">
                                <i class="fa fa-check mt-4" style="color: #16a8aa;"></i> &nbsp;
                                <a href="" class="text-decoration-none text-light">24/7 Customer Support</a>
                            </div>
                            <h1 style="color:#16a8aa;" class="mt-4">
                                $99<sub class="text-light fs-6">/ month</sub>

                            </h1>
                            <button class="btn w-75 mt-4 our-pricing-button1">
                                Get Started
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12 ">
                    <div class="card pt-5 pb-5" style="box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.1);">
                        <div class="container">
                            <div class="card-p-border">
                                <h3 style="color:#14305d;">
                                    <i class="fa fa-users" style="color: #16a8aa;"></i> &nbsp;
                                    Business Plan
                                </h3>
                                <p class="mt-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                </p>
                            </div>
                            <div class="our-pricing-links">
                                <i class="fa fa-check mt-5" style="color: #16a8aa;"></i> &nbsp;
                                <a href="" class="text-decoration-none">Email Support</a>
                            </div>
                            <div class="our-pricing-links">
                                <i class="fa fa-check mt-4" style="color: #16a8aa;"></i> &nbsp;
                                <a href="" class="text-decoration-none">2 Hours Consultaion</a>
                            </div>
                            <div class="our-pricing-links">
                                <i class="fa fa-check mt-4" style="color: #16a8aa;"></i> &nbsp;
                                <a href="" class="text-decoration-none">1 Month Maintenance</a>
                            </div>
                            <div class="our-pricing-links">
                                <i class="fa fa-check mt-4" style="color: #16a8aa;"></i> &nbsp;
                                <a href="" class="text-decoration-none">24/7 Customer Support</a>
                            </div>
                            <h1 style="color: #14305d;" class="mt-4">
                                $79<sub class="text-secondary fs-6">/ month</sub>
                            </h1>
                            <button class="btn w-75 mt-4 our-pricing-button">
                                Get Started
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
