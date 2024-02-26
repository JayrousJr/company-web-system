@include('site/partials/header')


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{route('home')}}#services">Home - Service</a></li>
                <li>{{$service->service_name}}</li>
            </ol>
            <h2>{{$service->service_name}}</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <div class="row content">
                <div class="col-6 pt-4 pt-lg-0">
                    <div class="service_desc">{!!$service->service_description!!}</div>
                </div>
                <div class="col-6 pt-4 pt-lg-0">
                    <h5>Our services</h5>
                    <ul class=" list-unstyled">
                        <li><i class="ri-check-double-line"></i> Web & Mobile Application development
                        </li>
                        <li><i class="ri-check-double-line"></i> Graphics Design and Multimedia</li>
                        <li><i class="ri-check-double-line"></i> Network Security</li>
                        <li><i class="ri-check-double-line"></i> Digital Marketing and Social Media Management</li>
                    </ul>
                </div>
            </div>
            <div class="row content">
                <div class="col-12 pt-4 pt-lg-0">
                    <p>Do you want this Service, Quick make a Request through clicking the button below and
                        filling the
                        simple form. But make sure you have an account, if no, just register one.</p>
                    <p>{{$service->service_more}}</p>

                    @if (Route::has('login'))
                    @auth
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#request">
                        Request Service
                    </button>
                    @else
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#account">
                        Request Service
                    </button>

                    @endauth
                    @endif
                </div>
            </div>
        </div>
    </section>


    <div class="modal" id="account" role="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body bg-light">
                    <p class="lead">It seems like you have no {{env('APP_NAME')}} Account yet, In order to make a service request
                        you must have an account.</p>
                    <p class="lead">Please either sign up or log in to continue..</p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary float-left" href="{{ route('login') }}">Log in</a>
                    <a class="btn btn-primary float-right" href="{{ url('/register') }}">Register</a>
                </div>
            </div>
        </div>
    </div>

    @if (Auth::user())
    <div class="modal" id="request" role="modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4>Service Ordering Form</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body bg-light">
                    <form class="" name="form" method="post" action="{{route('order')}}">
                        @csrf
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="customerName" class="form-control" required
                                        value="{{Auth::user()->name}}" readonly>
                                    <input type="hidden" name="clientId" class="form-control" required
                                        value="{{Auth::user()->id}}" readonly>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="text" name="customerEmail" class="form-control"
                                        value="{{Auth::user()->email}}" readonly>
                                </div>

                            </div>

                            <div class="form-group mt-4">
                                <label for="name">Service You Need</label>
                                <input type="text" name="serviceRequested" class="form-control" required
                                    placeholder="enter Details" value="{{$service->service_name}}" readonly>
                            </div>
                            <div class="form-group mt-4">
                                <label for="name">Extra details</label>
                                <textarea type="text" name="servicetDescription"
                                    class="form-control w-100 @error('servicetDescription') is-invalid @enderror"
                                    required
                                    placeholder="Please provide us with some details including what exactly you want and when will be best for you."
                                    rows="7"></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Order Now</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    @endif

</main><!-- End #main -->

@include('site/partials/footer')