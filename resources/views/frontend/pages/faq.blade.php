@extends('frontend.layouts.app')
@section('content')

    <!-- baner start  -->

    <div class=" baner-img-faq  text-center">
        <div class="baner-color-faq">
            <div class="faq-baner-text">
                <h3 class="text-white fw-5 fs-1">
                    FAQ
                </h3>
                <h5 class="text-white mt-4 fs-5">
                    Home <span style="color: #16a8aa;"> > </span> FAQ
                </h5>
            </div>
        </div>
    </div>



    <!-- baner end  -->



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
