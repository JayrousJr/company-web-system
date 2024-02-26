@include('/site/partials/header')

@if(session('success'))
<div class="success" id="fade">
     {{session('success')}}
</div>
@endif 

@if(session('error'))
<div class="error" id="fade">
    {{session('error')}}
</div>
@endif


<!-- Pop ups -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h1>The home of outstanding computer solutions</h1>
                <h2>Your one-stop-shop for all your Software, graphic design, and
                    network security needs</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="/storage/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row" data-aos="zoom-in">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="/storage/img/clients/techclouds.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="/storage/img/clients/familyfarmin.jpg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="/storage/img/clients/familypool.jpg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="/storage/img/clients/tnstore.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="/storage/img/clients/fps.jpeg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="/storage/img/clients/logos.png" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About Us</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        We are a dynamic and innovative company based in Tanzania, dedicated to providing our clients
                        with the highest quality services and solutions.
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Web & Mobile Application development
                        </li>
                        <li><i class="ri-check-double-line"></i> Graphics Design and Multimedia</li>
                        <li><i class="ri-check-double-line"></i> Network Security</li>
                        <li><i class="ri-check-double-line"></i> Digital Marketing and Social Media Management</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        We pride ourselves on our customer service and attention to detail. Whether you're a small
                        business or a large corporation, we have the expertise to meet your needs. Contact us today to
                        discuss your project and see how we can help you succeed."
                    </p>
                    <a href="{{route('about')}}" class="btn-learn-more">More About Us</a>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <h3>Why Should You Choose <strong>{{config('company.name')}}</strong> To Get Your Job Done</h3>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li> 
                                <a data-bs-toggle="collapse" class="collapse"
                                    data-bs-target="#accordion-list-1"><span>01</span> Comprehensive Expertise<i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>
                                       At <strong>{{config('company.name')}}</strong>, we boast a diverse team of highly skilled professionals proficient in various aspects of technology, from website design and development to cybersecurity. With our comprehensive expertise, we offer holistic solutions to meet all your technological needs under one roof, saving you time and resources.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                    class="collapsed"><span>02</span> Innovative Solutions <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                         We pride ourselves on our commitment to innovation. At <strong>{{config('company.name')}}</strong>, we don't just follow trends; we set them. Our team stays ahead of the curve, leveraging cutting-edge technologies and creative approaches to deliver innovative solutions that exceed expectations. When you choose us, you can trust that you're getting the latest and most effective solutions tailored to your specific requirements.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                    class="collapsed"><span>03</span> Exceptional Customer Service <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Your satisfaction is our top priority at <strong>{{config('company.name')}}</strong>. We prioritize clear communication, attentive listening, and responsive support throughout every stage of your project. Our dedicated team is committed to understanding your needs and delivering results that not only meet but exceed your expectations. With <strong>{{config('company.name')}}</strong>, you can expect a seamless and enjoyable experience from start to finish.
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                    style='background-image: url("/storage/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">
                    &nbsp;</div>
            </div>

        </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
                <p>Pick among of our best service here at <strong>{{config('company.name')}}</strong>.</p>
            </div>

            <div class="row">
                @foreach($servicegen as $data)
                <div class="col-xl-3 col-md-6 col-sm-12 d-flex align-items-stretch mb-4" data-aos="zoom-in"
                    data-aos-delay="100">
                    <div class="icon-box">
                        <!-- <i class="bx bxl-dribbble"></i> -->
                        <div class="icon"><img src="/storage/img/logo/icon.png" width="40px" height="auto"></div>
                        <h4><a href="{{route('service',$data->id)}}">{{$data->service_name}}</a></h4>
                        <p>{!! \Illuminate\Support\Str::limit(strip_tags($data->service_description), 100)!!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio ">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Projects</h2>
                <p>Our Projects </p>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                @foreach($servicegen as $data)
                <li data-filter=".filter-{{$data->service_class}}">{{$data->service_class}}</li>
                @endforeach
            </ul>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach($project as $data)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{$data->projectClass}}">
                    @if(count($data->projectImage) > 0)
                    <div class="portfolio-img">
                        <img src="/storage/{{$data->projectImage[0]}}" class="img-fluid" alt="">
                    </div>
                    @endif
                    <div class="portfolio-info">
                        <h4>{{$data->clientName}}</h4>
                        <p>{{$data->projectClass}}</p>
                        @if(count($data->projectImage) > 0)
                        <a href="/storage/{{$data->projectImage[0]}}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="{{$data->clientName}}">
                            <i class="bx bx-plus"></i>
                        </a>
                        @endif

                        <a href="{{route('project',$data->id)}}" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team  section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <p>Our team of Programmers and developers <strong>{{config('company.name')}}</strong> Team.</p>
            </div>

            <div class="row">


                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center  ml-4 mr-4">
                        @foreach($users as $data)
                        <div class="swiper-slide">
                            <div class="col-md-6 offset-md-3 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
                                <div class="member d-flex align-items-start">
                                    <div class="pic">
                                        <img src="/storage/{{$data->profile_photo_path}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>{{$data->name}}</h4>
                                        <span>{{$data->profession}}</span>
                                        <p>Approved Staff Member at <strong><strong>{{config('company.name')}}</strong></strong> Company</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section><!-- End Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>If you have any questions, you can </p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                            data-bs-target="#faq-list-1">How can i make a service request when i need One? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                               To make a service request when you need one is just easy as this. First of all you need to have a verified <strong>{{config('company.name')}}</strong> Account. You need to Log in to your account or just create one for free. Then you can continue by choosing one of the <a href="#services" style="display:inline;"> service of your interest Here.</a> Then it will take you to a more detailed page containing the details of the Service you have selected. You will have to fill a simple service request for then you are all done. We will receive the email of your request and more over you will receive the confirmation email as well. 
                            </p>
                        </div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> 
                        <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-2" class="collapsed">Do i need to have a <strong>{{config('company.name')}}</strong> Account?
                            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Having an account at <strong>{{config('company.name')}}</strong> is not so necessary, but it is important if you want to ask for services, Send us message and if you want to make a move towards <strong>{{config('company.name')}}</strong>. Having an account will help you to manage your informations about <strong>{{config('company.name')}}</strong> as well as we provide a useful dashboard for all our users who have active accounts. So it is worthy having an account.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-3" class="collapsed">How can i create an account?
                            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Do not worry, it is very easy to create an account. Just click a user icon on the main navigation (at the top of the website), and then Sign Up. You will be asked to enter your name, email and password. Please enter the valid email because we will send an email verification code to verify the email, also enter a strong password to keep your self secured. After successiful creating an account. 
                            </p>
                            <p>
                                You can now log in to your account and be able to access all the materials offered by <strong>{{config('company.name')}}</strong>. Do not forget to access your dashboard because it has a variety of more useful thing for you. You can see all the messages you have communicated to us, you can see all the services you have ever asked and more over you can be able to change your informations like name, profile picture and password. You can also enforce the 2FA technique to secure your account.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-4" class="collapsed">What Services do you offer? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                               <strong>{{config('company.name')}}</strong> is a Software Developing, Graphics Design, Cyber Security and Multimedia application Developing company. We intend to bring to you the very fine Products that not only you will like them but they will bring significant changes to your working place and change the experience. We have best people for any task you will want to accomplish. We welcome you to try us! 
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="500">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-5" class="collapsed">Can i trust you with my job? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                The trust is one thing we are building to our custoers hearts, we are not ready to lose the trust fro our customers. You can trust us with your Job.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact  section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Do you have any Questions? Feel free to reach our custommer support center. Leave us with a compliment, and we will get back to you shortly</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>{{config("company.address.street")}}, {{config("company.address.city")}}, {{config("company.address.country")}}</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p><a href="mailto:{{config('company.email')}}">{{config("company.email")}}</a></p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>
                                <a href="tel:{{config('company.email')}}">{{config("company.phone")}}</a><br>
                          <a href="tel:{{config('company.email')}}">{{config("company.phone1")}}</a>
                        </p>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d197.90302312856812!2d33.41309651916197!3d-8.936953555586548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2stz!4v1705178855506!5m2!1sen!2stz"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="{{route('send')}}" method="post" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                    type="text" placeholder='Name appears here' readonly
                                    value="{{ Auth::check() ? Auth::user()->name : '' }}">
                                {{-- <input type="hidden" name="user_id" value="{{ Auth::check() ? Auth::user()->id : '' }}"> --}}
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                    type="email" placeholder='Email appears here' readonly
                                    value="{{ Auth::check() ? Auth::user()->email : '' }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input class="form-control @error('subject') is-invalid @enderror" name="subject"
                                id="subject" type="text" placeholder='Enter Subject'>
                            @error('subject')
                            <span class=" invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control w-100 @error('message') is-invalid @enderror" name="message"
                                id="message" rows="10" placeholder='Write your notes or questions here...'></textarea>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="text-center">
                            @if(Route::has('login'))
                            @auth
                            <button type="submit">Send Message</button>
                            @else
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#login">
                                Send Message
                            </button>
                            @endauth
                            @endif
                            <!-- <input type="submit" value="Send Message" class="btn btn-outline-primary btn-md"> -->
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

    <div class="modal" id="login" role="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body bg-light">
                    <p class="lead">Sorry, <strong>{{config('company.name')}}</strong> requires you to have an active account so that you can send a
                        Message
                    </p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary float-left" href="{{ route('login') }}">Log in</a>
                    <a class="btn btn-primary float-right" href="{{ url('/register') }}">Register</a>
                </div>
            </div>
        </div>
    </div>
</main><!-- End #main -->

@include('/site/partials/footer')