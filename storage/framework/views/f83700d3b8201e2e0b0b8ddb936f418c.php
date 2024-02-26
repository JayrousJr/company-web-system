<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
     <meta name="description" content="Clouds9 Tech offers top-notch Web & Mobile App Design, Multimedia, Graphics Design, Digital Marketing, Social Media Management and Network Security services. Transform your digital presence with our expertise.">
    <meta name="keywords" content="Clouds9 Tech, Web design, Mobile app design, Multimedia, Graphics design, Network security, IT services, Digital Marketing, Social Media Management">
    <meta name="author" content="Clouds9 Tech">

    <meta name="description" content="This site has been created by Cloud9 Tech Team under best developers and is fully funcioning. Joshua Jayrous - Chief Designer and Programmer, Edrick Katabarula - Principle Designer and Editor, Erick Alex - Security engineer, Briyson Lema - Designer and Programmer">
    
    <meta content="" name="keywords">
    
    <title><?php echo e(env('APP_NAME')); ?></title>
    <!-- Favicons -->
    <link href="/storage/img/logo/icon.webp" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    
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

            <!-- <h1 class="logo me-auto"><a href="index.html"><?php echo e(env('APP_NAME')); ?></a></h1> -->
            <a href="index.html" class="logo me-auto"><img src="/storage/img/logo/logo.webp" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo e(route('home')); ?>#about">About</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo e(route('home')); ?>#services">Services</a></li>
                    <li><a class="nav-link   scrollto" href="<?php echo e(route('home')); ?>#portfolio">Projects</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo e(route('home')); ?>#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo e(route('home')); ?>#contact">Contact</a></li>
                    <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                    <li class="dropdown"><a href="#">
                            <img src="<?php echo e(Auth::user()->profile_photo_path ? '/storage/'.Auth::user()->profile_photo_path : '/storage/img/logo/profile.jpg'); ?>" width="30px" height="auto" class="rounded-circle img-fluid">
                            <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?php echo e('/dashboard'); ?>">My Account</a></li>
                            <li>
                                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                    Out</a>
                            </li>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </ul>
                    </li>
                    <?php else: ?>

                    <li class="dropdown"><a href="#"><span class="bi bi-person"></span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?php echo e(route('login')); ?>">Log In</a></li>
                            <?php if(Route::has('register')): ?>
                            <li><a href="<?php echo e(url('/register')); ?>">Sign Up</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                    <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header --><?php /**PATH D:\Projects\company-web-system\resources\views/site/partials/header.blade.php ENDPATH**/ ?>