@extends('frontend.layouts.app')
@section('content')
    <div class=" baner-img-cases text-center">
        <div class="baner-color-cases">
            <div class="cases-baner-text">
                <h3 class="text-white fw-5 fs-1">
                    Our Cases
                </h3>
                <h5 class="text-white mt-4 fs-5">
                    Home <span style="color: #16a8aa;"> > </span> Cases
                </h5>
            </div>
        </div>
    </div>



    <!-- baner end  -->


    <div class="container case-absolute-page mt-5 text-center">
        <h5 class="mt-5">
        <span class="case-heading pb-3">
            Our Cases
        </span>
        </h5>
        <h2 style="color: #14305d;" class=" mt-5">
            Let’s See Our Latest Project
        </h2>
        <p class="p-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et
            dolore magna aliqua
        </p>
        <div class="row ">
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12 case-absolute-hoverpage"
                 onmouseover="hover(this)">
                <img src="{{asset('frontend/assets/img/financial-services-e1638180715159.jpg')}}" alt="" class=" ">
                <div  class=" h-100 ">
                    <h3 class="text-white pt-5">
                        Investment Management
                    </h3>
                    <small class=" fs-6" style="color:gray;">
                        Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                    </small>

                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12 case-absolute-hoverpage"
                 onmouseover="hover(this)">
                <img src="{{asset('frontend/assets/img/business-team-collaboration-discussing-working-analysis-with-financial-data-and-marketing-growth-e1638181040353.jpg')}}"
                     alt="" class="">
                <div  class=" h-100 ">
                    <h3 class="text-white pt-5">
                        Investment Management
                    </h3>
                    <small class=" fs-6" >
                        Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                    </small>

                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12 case-absolute-hoverpage"
                 onmouseover="hover(this)">
                <img src="{{asset('frontend/assets/img/financial-statistics-e1638180991833.jpg')}}" alt="" class="">
                <div  class=" h-100 ">
                    <h3 class="text-white pt-5">
                        Investment Management
                    </h3>
                    <small class=" fs-6" style="color:gray;">
                        Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                    </small>

                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12 case-absolute-hoverpage"
                 onmouseover="hover(this)">
                <img src="{{asset('frontend/assets/img/business-team-casual-collaboration-discussing-working-analysis-with-financial-data-and-marketing-e1638180979952.jpg')}}" alt="" class=" ">
                <div  class=" h-100 ">
                    <h3 class="text-white pt-5">
                        Investment Management
                    </h3>
                    <small class=" fs-6" style="color:gray;">
                        Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                    </small>

                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12 case-absolute-hoverpage"
                 onmouseover="hover(this)">
                <img src="{{asset('frontend/assets/img/businesswoman-leader-team-conference-on-meeting-presentation-to-planning-investment-project-working-e1638181156188.jpg')}}"
                     alt="" class="">
                <div  class=" h-100 ">
                    <h3 class="text-white pt-5">
                        Investment Management
                    </h3>
                    <small class=" fs-6" >
                        Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                    </small>

                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12 case-absolute-hoverpage"
                 onmouseover="hover(this)">
                <img src="{{asset('frontend/assets/img/partner-meeting-of-business-team-colleagues-consultation-and-discussion-marketing-plan-meeting-e1638181179493.jpg')}}" alt="" class="">
                <div  class=" h-100 ">
                    <h3 class="text-white pt-5">
                        Investment Management
                    </h3>
                    <small class=" fs-6" style="color:gray;">
                        Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                    </small>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid choose-us" style="margin-top: 10%; padding-bottom: 12%;">
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
                            2,245 +
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
                            3,452 +
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
                            25 +
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
                            120 +
                        </h2>
                        <h6>
                            Professional Team
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container process-container" style="margin-top: 15%;">
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
@endsection
