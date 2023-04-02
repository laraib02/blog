@extends('frontend.layouts.app')
@section('content')


    <div class=" baner-img-contact  text-center">
        <div class="baner-color-team">
            <div class="team-baner-text">
                <h3 class="text-white fw-5 fs-1">
                    Contact Us
                </h3>
                <h5 class="text-white mt-4 fs-5">
                    Home <span style="color: #16a8aa;"> > </span> contact
                </h5>
            </div>
        </div>
    </div>



    <!-- baner end  -->

    <!-- <div class="container-fluid Make-Appointment"> -->
    <div class="container Make-Appointment-container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12 form-col ">
                <div class="form bg-white ">
                    <div class="input-group">
                        <input type="text" placeholder="Your Name" class="form-control">
                    </div>
                    <div class="input-group">
                        <input type="email" placeholder="Your Email" class="form-control mt-4">
                    </div>
                    <div class="input-group">
                        <input type="email" placeholder="Your Subject" class="form-control mt-4">
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
                        <span class="pb-3 appointment-heading ">
                            Contact Us
                        </span>
                </h5>
                <h2 class=" mt-5">
                    Get In Touch With Bizkeep
                </h2>
                <p class="mt-4" style="  letter-spacing: 0.5px;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                </p>
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12">
                        <ul>
                            <li class="media">
                                <div>
                                    <i class="fa fa-building mr-3" style="background-color: #16a8aa;"></i>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1" style="color: #14305d;">Denpasar</h5>
                                    <small>Jl. Raya Puputan No 142, Denpasar</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12">

                        <ul>
                            <li class="media">
                                <div>
                                    <i class="fa fa-building mr-3" style="background-color: #16a8aa;"></i>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1" style="color: #14305d;">Canggu</h5>
                                    <small>Jl. Raya Puputan No 142, Denpasar</small>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>
                <div class="row mt-5 pb-3" style="border-bottom: 1px solid rgba(128, 128, 128, 0.185);">
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12">
                        <ul>
                            <li class="media">
                                <div>
                                    <i class="fa fa-phone mr-3" style="background-color: #16a8aa;"></i>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1" style="color: #14305d;">Call Us</h5>
                                    <small>
                                        (021) 4582 - 3695</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-12">

                        <ul>
                            <li class="media">
                                <div>
                                    <i class="fa fa-envelope mr-3" style="background-color: #16a8aa;"></i>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1" style="color: #14305d;">
                                        Email Information</h5>
                                    <small>

                                        support@domain.com</small>
                                </div>
                            </li>
                        </ul>

                    </div>


                </div>
                <h4 style="color: #14305d;" class="mt-4">Follow Our Social Media</h4>
                <div class="contact-links mt-2">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""> <i class="fa fa-twitter clr-change"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>

                    <a href=""><i class="fa fa-linkedin clr-change"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>


@endsection
