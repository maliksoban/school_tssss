<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{config('app.name')}}</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/logo_small.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    
    <script src="js/jquery.min.js"></script>

</head>

<body>
<!-- ##### Preloader ##### -->
<div id="preloader">
    <i class="circle-preloader"></i>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="header-content h-100 d-flex align-items-center justify-content-between">
                        <div class="academy-logo">
                            <a href="/"><img src="{{asset('img/core-img/logo21.png')}}" alt="logo" style="vertical-align: middle; width: 100%; height: 100%;" ></a>
                        </div>
                        <div class="login-content">
                            @if (Route::has('login'))
                                @auth
                                    <a class="btn btn-primary text-white" href="{{ url('/home') }}">@lang('My Account')</a>
                                @else
                                    <a class="btn btn-success text-white" href="{{ route('login') }}">@lang('Login')</a>
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="academy-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="academyNav">

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="/">Home</a></li>
{{--                                <li><a href="#">Pages</a>--}}
{{--                                    <ul class="dropdown">--}}
{{--                                        <li><a href="/">Home</a></li>--}}
{{--                                        <li><a href="/about">About Us</a></li>--}}
{{--                                        <li><a href="course.html">Course</a></li>--}}
{{--                                        <li><a href="blog.html">Blog</a></li>--}}
{{--                                        <li><a href="contact.html">Contact</a></li>--}}
{{--                                        <li><a href="elements.html">Elements</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li><a href="#">Mega Menu</a>--}}
{{--                                    <div class="megamenu">--}}
{{--                                        <ul class="single-mega cn-col-4">--}}
{{--                                            <li><a href="#">Home</a></li>--}}
{{--                                            <li><a href="#">Services &amp; Features</a></li>--}}
{{--                                            <li><a href="#">Accordions and tabs</a></li>--}}
{{--                                            <li><a href="#">Menu ideas</a></li>--}}
{{--                                            <li><a href="#">Students Gallery</a></li>--}}
{{--                                        </ul>--}}
{{--                                        <ul class="single-mega cn-col-4">--}}
{{--                                            <li><a href="#">Home</a></li>--}}
{{--                                            <li><a href="#">Services &amp; Features</a></li>--}}
{{--                                            <li><a href="#">Accordions and tabs</a></li>--}}
{{--                                            <li><a href="#">Menu ideas</a></li>--}}
{{--                                            <li><a href="#">Students Gallery</a></li>--}}
{{--                                        </ul>--}}
{{--                                        <ul class="single-mega cn-col-4">--}}
{{--                                            <li><a href="#">Home</a></li>--}}
{{--                                            <li><a href="#">Services &amp; Features</a></li>--}}
{{--                                            <li><a href="#">Accordions and tabs</a></li>--}}
{{--                                            <li><a href="#">Menu ideas</a></li>--}}
{{--                                            <li><a href="#">Students Gallery</a></li>--}}
{{--                                        </ul>--}}
{{--                                        <div class="single-mega cn-col-4">--}}
{{--                                            <img src="img/bg-img/bg-1.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
                                <li><a href="/gallery">Gallery</a></li>
                                <li><a href="/about">About Us</a></li>
                                
                                <!--<li><a href="/contact">Contact</a></li>-->
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>

                    <!-- Calling Info -->
                    <div class="calling-info">
                        <div class="call-center">
                            <a href="tel:+92572542710"><i class="icon-telephone-2"></i> <span>(+92) 572 542710</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->
