@extends('frontend.layouts.app')
@section('content')

    <!-- baner start  -->

    <div class=" baner-img-blog  text-center">
        <div class="baner-color-blog">
            <div class="blog-baner-text">
                <h3 class="text-white fw-5 fs-1">
                    Our Blog
                </h3>
                <h5 class="text-white mt-4 fs-5">
                    Home <span style="color: #16a8aa;"> > </span> Blog
                </h5>
            </div>
        </div>
    </div>



    <!-- baner end  -->


    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-8 col-lg-8 col-xl-8 col-sm-12 col-xs-12">
                <div class="card">
                    <img src="{{asset('frontend/assets/img/business-trainer-explainig-strategy-of-development-e1638180959911.jpg')}}"
                         class="card-img-top" alt="...">
                    <div class="card-body">
                        <strong>
                            <h3>
                                <a href="" class="text-decoration-none" style="color:#14305d; ">
                                    How Your Firm Defines CAS Will Determine Your Growth Strategy
                                </a>

                            </h3>
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
                <div class="card mt-5">
                    <img src="{{asset('frontend/assets/img/analyzing-financial-diagram.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <strong>
                            <h3>
                                <a href="" class="text-decoration-none" style="color:#14305d;">
                                    How Bookkeeping Fits Into CAS You Should Set it to Autopilot
                                </a>
                            </h3>

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
                <div class="card mt-5">
                    <img src="{{asset('frontend/assets/img/managers-working-with-financial-chart-e1638180766443.jpg')}}" class="card-img-top"
                         alt="...">
                    <div class="card-body">
                        <strong>
                            <h3>
                                <a href="" class="text-decoration-none" style="color:#14305d;">
                                    Want Happy Accounting Clients? These Strategies Will Help You
                                </a>

                            </h3>
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
                <div class=" text-center mt-5">
                    <button class="btn blog-btn">
                        Load More
                    </button>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12">
                <div class="card blog-card">
                    <h2 style="color: #14305d;">
                        Recent Posts
                    </h2>
                    <a href="" class="text-decoration-none mt-3">
                        Want Happy Accounting Clients? These Strategies Will Help You
                    </a>
                    <small> <i class="fa fa-clock-o"></i> November 25, 2021</small>
                    <a href="" class="text-decoration-none mt-3">
                        How Bookkeeping Fits Into CAS You Should Set it to Autopilot
                    </a>
                    <small> <i class="fa fa-clock-o"></i> November 25, 2021</small>
                    <a href="" class="text-decoration-none mt-3">
                        How Your Firm Defines CAS Will Determine Your Growth Strategy
                    </a>
                    <small> <i class="fa fa-clock-o"></i> November 25, 2021</small>
                </div>
                <div class="blog-crad-img">
                    <div class="blog-crad-clr">
                        <div class="blog-crad-text">
                            <strong>
                                <h3>
                                    Have Any Question?
                                </h3>
                            </strong>
                            <p class="mt-4">
                                Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore
                            </p>
                            <a>
                                <i class="fa fa-phone fs-5" style="color: #16a8aa;"></i> &nbsp; (021) 4582 - 3695
                            </a> <br>
                            <a>
                                <i class="fa fa-envelope fs-5 mt-2" style="color: #16a8aa;"></i> &nbsp;
                                support@domain.com
                            </a>

                        </div>
                    </div>
                </div>
                <div class="card blog-card mt-5" style="line-height: 40px;">
                    <h2 style="color: #14305d;">
                        Categories
                    </h2>
                    <a href="" class="text-decoration-none mt-3">
                        <strong><i class="fa fa-angle-right fs-4" style="color: #16a8aa;"></i></strong> &nbsp; &nbsp;
                        Strategy
                    </a>
                    <a href="" class="text-decoration-none mt-3">
                        <strong><i class="fa fa-angle-right fs-4" style="color: #16a8aa;"></i></strong> &nbsp; &nbsp;
                        Financial
                    </a>
                    <a href="" class="text-decoration-none mt-3">
                        <strong><i class="fa fa-angle-right fs-4" style="color: #16a8aa;"></i></strong> &nbsp; &nbsp;
                        Bookkeeping
                    </a>
                    <a href="" class="text-decoration-none mt-3">
                        <strong><i class="fa fa-angle-right fs-4" style="color: #16a8aa;"></i></strong> &nbsp; &nbsp;
                        Accounting
                    </a>
                </div>
            </div>
        </div>
    </div>



@endsection
