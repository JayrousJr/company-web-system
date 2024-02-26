@include('/site/partials/header')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Project Details</li>
            </ol>
            <h2>{{$project->clientName}} {{$project->category}}</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Project Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            @foreach($project->projectImage as $image)
                            <div class="swiper-slide">
                                <img src="/storage/{{$image}}" alt="Project Image">
                            </div>
                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: {{$project->category}}</li>
                            <li><strong>Client</strong>: {{$project->clientName}}</li>
                            <li><strong>Project date</strong>: {{date("M, D Y", strtotime($project->projectDate))}}</li>
                            <li><strong>Project URL</strong>: <a href="#">{{$project->projectURL}}</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Project details</h2>
                        <p>{!!$project->projectDetails!!} </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('/site/partials/footer')