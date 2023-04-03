<!-- top header -->
<div class="header-border ">
    <div class="light container pb-2 pt-2 " id="header">
            <span>
                <i class="fa fa-phone "> </i>
            </span>
        <span class="text-secondary text-decoration-none">
                Need Professional Bookkeeper?
            </span>
        <a href="" class="bolder">
            Book Schedule Now
        </a>
        <span class=" float-end icons" id=" ">
                <a href="" class="m-3"><i class="fa fa-facebook"></i></a>
                <a href="" class="m-3"><i class="fa fa-twitter"></i></a>
                <a href="" class="m-3"><i class="fa fa-linkedin"></i></a>
                <a href="" class="m-3"><i class="fa fa-instagram"></i></a>
            </span>
    </div>
</div>
<!-- nav bar -->


<div class="container nav-container">
    <nav class="navbar navbar-expand-lg navbar-light p-0 ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{asset('frontend/assets/img/logo-2RGW3B.png')}}" alt="" id="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-uppercase">
                    <li class="nav-item header-links">
                        <a class="nav-link  {{Request::is('/') ? 'active' : ''}}" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item header-links">
                        <a class="nav-link {{Request::is('services') ? 'active' : ''}}"  href="{{url('services')}}">Services</a>
                    </li>
                    <li class="nav-item header-links">
                        <a class="nav-link {{Request::is('cases') ? 'active' : ''}}" href="{{url('cases')}}">Cases</a>
                    </li>`
                    <li class="nav-item dropdown header-links">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item {{Request::is('about') ? 'active' : ''}}" href="{{url('about')}}">About us</a></li>
                            <li><a class="dropdown-item {{Request::is('pricing') ? 'active' : ''}}" href="{{url('pricing')}}">Pricing</a></li>
                            <li><a class="dropdown-item {{Request::is('team') ? 'active' : ''}}" href="{{url('team')}}">Team</a></li>
                            <li><a class="dropdown-item {{Request::is('faq') ? 'active' : ''}}" href="{{url('faq')}}">FAQ</a></li>
                            <li><a class="dropdown-item {{Request::is('404') ? 'active' : ''}}" href="{{url('404')}}">404 page</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown header-links">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Blog
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item {{Request::is('blog') ? 'active' : ''}}" href="{{url('blog')}}">Blog</a></li>
                            <li><a class="dropdown-item {{Request::is('singleblog') ? 'active' : ''}}" href="{{url('singleblog')}}">Singel Blog</a></li>
                        </ul>
                    </li>
                    <li class="nav-item header-links">
                        <a class="nav-link {{Request::is('contact') ? 'active' : ''}}" href="{{url('contact')}}" tabindex="-1">Contact</a>
                    </li>
                </ul>
                <ul class="nav nav-tabs" id="side-btn">
                    <div class="text-light" id="header-button">
                        <div class="d-flex justify-content-end">
                                <span class="m-4 mt-4">
                                    <i class="fa fa-comments text-light" aria-hidden="true"
                                       style="font-size: 46px;"></i>
                                </span>
                            <span class="m-2 pt-3 pr-3">
                                    <p>Get Consultation<br>
                                        (021) 4582 - 3695</p>
                                </span>
                        </div>
                    </div>
                </ul>

            </div>
        </div>
    </nav>
</div>
