<!-- ======= Footer ======= -->
<footer id="footer">



    <div class="footer-top bg-light">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>{{config("company.name")}}</h3>
                    <p>
                        {{config("company.address.street")}}, 
                         {{config("company.address.city")}}, 
                          {{config("company.address.country")}}<br><br>
                        <strong>Phone:</strong> <a href="tel:{{config('company.phone')}}">{{config("company.phone")}}</a><br>
                        <strong>Phone:</strong> <a href="tel:{{config('company.phone1')}}">{{config("company.phone1")}}</a><br>
                        <strong>Email:</strong>  <a href="mailto:{{config('company.email')}}">{{config("company.email")}}</a><br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('home')}}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('home')}}#about">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('home')}}#services">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('terms.show')}}">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('policy.show')}}">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                    @foreach($servicegen as $data)
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('service',$data->id)}}">{{$data->service_name}}</a></li>
                    @endforeach
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p>Check in our social networks</p>
                    <div class="social-links mt-3">
                         @foreach ($social as $item)
                            <a href="{{$item->link}}" target="_blank" class="twitter">
                                <i class="bx bxl-{{$item->icon}}"></i>
                            </a>
                         @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <?php echo ' ' . date('Y'); ?> <strong><span>{{env('APP_NAME')}}</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="{{config('company.link')}}">{{env('APP_NAME')}}</a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>




</body>

<!-- Vendor JS Files -->
<scriptt src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/main.js"></script>
<script>
window.addEventListener("load",function(){
	setTimeout(
	function open(event){
		document.querySelector("#fade").style.display="none";
	},	7000)
});
</script>
</html>