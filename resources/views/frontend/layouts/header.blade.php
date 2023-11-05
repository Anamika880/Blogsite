<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800|Old+Standard+TT:400,400i,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('toastr/toastr.css') }}">

</head>
<style>
    img {
        vertical-align: middle;
        border-style: none;
        height: 60px;
        width: 110px;
        border-radius: 46%;
    }

    .sticky img {
        width: 48%;
        transition-duration: 0.5s;
        padding: 6px 0;
    }
</style>

<body>
    <!-- Header section Start -->
    <header class="top">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
             <a class="{{ request()->is('/') ? 'active' : '' }}" href="/">Home</a> 
             
            <a class="{{ Request::routeIs('Blogs') ? 'active' : '' }}" href="{{route('Blogs')}}">Blog</a>
            @if(Auth::check())
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item text-primary"><i class="mdi mdi-logout ml-1"></i>Signout</button>
            </form>
            @else
            <a class="{{ Request::routeIs('login') ? 'active' : '' }}" href="{{route('login')}}">Login</a>
            @endif
            <a class="{{ request()->is('register') ? 'active' : '' }}" href="{{route('register')}}">Register</a> 
        </div>
        <!-- Nav section Start -->
        <nav id="navbar">
            <!-- container Start-->
            <div class="container">
                <!--Row Start-->
                <div class="row">
                    <div class="col-lg-5 col-md-5 align-self-center left-side">
                        <!-- <p>Do Yoga, Live Young <span>Call us at <a href="tel:+91 77194 69605">+91 77194 69605</a></span></p> -->
                    </div>
                    <div class="col-lg-2 col-md-2 col-5 align-self-center logo">
                        <!-- <a href="/"><img src="{{asset('frontend/images/nav-logo.png')}}" alt="logo"></a> -->
                    </div>
                    <div class="col-lg-5 col-md-5 col-7 align-self-center right-side">
                        <div class="social-icons square">
                            <!-- Page Content -->
                            <div id="page-content-wrapper">
                                <span class="slide-menu" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="social-icons another">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <!--Row Ended-->
            </div>
            <!-- container Ended-->
        </nav>
        <!-- Nav section Ended -->
        <img class="border-img" src="{{asset('frontend/images/border.png')}}" width="100%" alt="">
    </header>
    <!-- Header section Ended-->