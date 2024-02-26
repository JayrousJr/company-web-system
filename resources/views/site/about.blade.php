@include('site/partials/header')


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{route('home')}}">Home</a></li>
                <li>About Us</li>
            </ol>
            <h2>About {{env('APP_NAME')}}</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <h2>
                What is {{env("APP_NAME")}}
            </h2>
            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        Welcome to {{env('APP_NAME')}}, your one-stop-shop for all your Web design, Graphic Design,
                        Multimedia, Network security, Digital Marketing and Social Media Management.
                    </p>
                    <p>We are a dynamic and innovative company based in Tanzania, dedicated to providing our clients
                        with the highest quality services and solutions.</p>
                    <p>Our team of experts has years of experience in web design, graphic design, entertainment, and
                        network security. We understand the importance of having a strong online presence, and we strive
                        to create visually appealing and responsive websites that will help you stand out from the
                        competition.</p>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Welcome to our company! We specialize in website design, Multi Media, Graphics Design, and
                        Network Security. Our team of experts has years of experience in these fields, and we are
                        dedicated to providing our clients with the best service possible.
                    </p>
                    <p>We pride ourselves on our customer service and attention to detail. Whether you're a small
                        business or a large corporation, we have the expertise to meet your needs. Contact us today to
                        discuss your project and see how we can help you succeed."</p>
                </div>
            </div>
            <div class="row content">
                <div class="col-12 pt-lg-2">
                    <h2>
                        Services Offered at {{env("APP_NAME")}}
                    </h2>
                </div>
                <div class="col-lg-6">
                    <h4>Web and Mobile application Design</h4>
                    <p>
                        Our website design services include custom design, e-commerce solutions, and responsive design
                        for mobile devices. We also provide mobile application development and. Our software team is
                        skilled in creating stunning visuals for websites and mobile application.
                    </p>
                    <!--  another service -->
                    <h4>Graphics Design</h4>
                    <p>Our graphic design services include logo design, brochure design, packaging design, and more. We
                        are dedicated to creating beautiful and effective designs that will help you promote your brand
                        and connect with your target audience</p>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h4>Multimedia</h4>
                    <p>
                        We also offer multimedia services, including music production, video production, and event
                        planning. Our team of talented professionals will work with you to create an unforgettable
                        experience for your audience.
                    </p>
                    <!--  another service -->

                    <h4>Network Security</h4>
                    <p>
                        We take network security very seriously and offer a range of services to protect your business
                        from cyber threats. We provide penetration testing, incident response, and security consulting
                        services to ensure your data is secure.
                    </p>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('site/partials/footer')