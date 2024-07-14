<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description"
        content="Legolas Technologies offers top-notch Web & Mobile App Design, Multimedia, Graphics Design, Digital Marketing, Social Media Management and Network Security services. Transform your digital presence with our expertise.">
    <meta name="keywords"
        content="Legolas Technologies, Web design, Mobile app design, Multimedia, Graphics design, Network security, IT services, Digital Marketing, Social Media Management">
    <meta name="author" content="Legolas Technologies">
    <meta name="description" content="Legolas Technologies">
    <meta name="description" content="Website">
    <meta name="description" content="Mobile">
    <meta name="description" content="App">
    <meta name="description" content="Computer">
    <meta name="description" content="Tovuti">
    <meta name="description" content="www">
    <meta name="description" content="Joshua Jayrous">
    <meta name="description" content="Multi Media">
    <meta name="description"
        content="This site has been created by Cloud9 Tech Team under best developers and is fully funcioning. Joshua Jayrous - Chief Designer and Programmer, Edrick Katabarula - Principle Designer and Editor, Erick Alex - Security engineer, Briyson Lema - Designer and Programmer">

    <meta content="" name="keywords">

    <title>{{env('APP_NAME')}}</title>
    <!-- Favicons -->
    <link href="/storage/img/logo/icon.png" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">


    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- site Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
    .nav-links {
        color: #ffc107;
    }

    .success {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1000;
        padding: 15px;
        text-align: center;
        width: 300px;
        background-color: #4CAF50;
        border: 1px solid #fff;
        color: #fff;
        border-radius: 5px;
    }

    .error {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1000;
        padding: 15px;
        text-align: center;
        width: 300px;
        background-color: red;
        border: 1px solid #fff;
        color: #fff;
        border-radius: 5px;
    }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center">

            {{-- <!-- <h1 class="logo me-auto"><a href="index.html">{{env('APP_NAME')}}</a></h1> --> --}}
            <a href="{{route('home')}}" class="logo me-auto"><img src="/storage/img/logo/logo.png" alt=""
                    class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{route('home')}}">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{route('home')}}#about">About</a></li>
                    <li><a class="nav-link scrollto" href="{{route('home')}}#services">Services</a></li>
                    <li><a class="nav-link   scrollto" href="{{route('home')}}#portfolio">Projects</a></li>
                    <li><a class="nav-link scrollto" href="{{route('home')}}#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="{{route('home')}}#contact">Contact</a></li>
                    @if (Route::has('login'))
                    @auth
                    <li class="dropdown"><a href="#">
                            <img src="{{Auth::user()->profile_photo_path ? '/storage/'.Auth::user()->profile_photo_path : '/storage/img/logo/profile.jpg'}}"
                                width="30px" height="auto" class="rounded-circle img-fluid">
                            <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{'/dashboard'}}">My Account</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                    Out</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    @else

                    <li class="dropdown"><a href="#"><span class="bi bi-person"></span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('login') }}">Log In</a></li>
                            @if (Route::has('register'))
                            <li><a href="{{ url('/register') }}">Sign Up</a></li>
                            @endif
                        </ul>
                    </li>
                    @endauth
                    @endif
                    <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->