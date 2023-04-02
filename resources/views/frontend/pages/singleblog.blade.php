@extends('frontend/layouts.app')
@section('content')

    <!-- baner start  -->

    <div class=" baner-img-singelblog  text-center">
        <div class="baner-color-singelblog">
            <div class="singelblog-baner-text">
                <h4 class="text-white fw-5 fs-2">
                    How Your Firm Defines CAS Will Determine Your Growth Strategy
                </h4>
                <h5 class="text-white mt-5 fs-5">
                    <i class="fa fa-user" style="color: #16a8aa;"></i>
                    <span>
                        John Doe
                    </span> &nbsp;
                    <i class="fa fa-calendar" style="color: #16a8aa;"></i>
                    <span>
                        November 25, 2021
                    </span> &nbsp;
                    <i class="fa fa-folder" style="color: #16a8aa;"></i>
                    <span>

                        Strategy
                    </span>
                </h5>
            </div>
        </div>
    </div>

    <!-- baner end  -->
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-8 col-lg-8 col-xl-8 col-sm-12 col-xs-12">
                <div class="card">
                    <img src="{{asset('assets/frontend/img/business-trainer-explainig-strategy-of-development-e1638180959911.jpg')}}"
                         class="card-img-top" alt="...">
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit.
                        </p>
                        <p class="mt-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>

                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                        <img src="{{asset('assets/frontend/img/partner-meeting-of-business-team-colleagues-consultation-and-discussion-marketing-plan-meeting.jpg')}}"
                             alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                        <i class="fa fa-check" style="color: #16a8aa;"></i>
                        <span>
                            Quisque aliquet nibh sit amet lectus
                        </span> <br>
                        <i class="fa fa-check mt-3" style="color: #16a8aa;"></i>
                        <span>
                            Nulla at metus ultricies, placerat augue
                        </span> <br>
                        <i class="fa fa-check mt-3" style="color: #16a8aa;"></i>
                        <span>
                            Curabitur mollis ex vestibulum
                        </span> <br>
                        <i class="fa fa-check mt-3" style="color: #16a8aa;"></i>
                        <span>
                            Quisque aliquet nibh sit amet lectus auctor
                        </span>
                        <p class="mt-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <p class="mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>

                <div class="row mt-5 singleblog-line">
                    <span>
                        <span class="pt-2">
                            Tags :
                        </span>
                        <strong class="pt-2">
                            Growth
                        </strong>
                        <span class="float-end">
                            Share This :
                            <span class="single-blog-links">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-whatsapp"></i>
                            </span>
                        </span>
                    </span>


                </div>
                <h2 style="color: #14305d;" class="mt-4">
                    Leave a Reply
                </h2>
                <p class="mt-3">
                    Your email address will not be published. Required fields are marked *
                </p>
                <form action="" class="singblog-form">
                    <lable style="color: #14305d;">
                        <strong>Comment *</strong>
                    </lable>
                    <textarea name="" id="" cols="30" rows="8" class="form-control mt-3 mb-3">

                    </textarea>
                    <lable style="color: #14305d;">
                        <strong>Name *</strong>
                    </lable>
                    <input type="text" class="form-control mt-3 mb-3">
                    <lable style="color: #14305d;">
                        <strong>Email *</strong>
                    </lable>
                    <input type="email" class="form-control mt-3 mb-3">
                    <lable style="color: #14305d;">
                        <strong>Website </strong>
                    </lable>
                    <input type="url" class="form-control mt-3 mb-3">
                    <button class="btn " type="submit">
                        POST COMMENT
                    </button>
                </form>
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
