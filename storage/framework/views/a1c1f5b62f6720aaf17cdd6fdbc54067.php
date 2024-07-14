<!-- ======= Footer ======= -->
<footer id="footer">



    <div class="footer-top bg-light">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3><?php echo e(config("company.name")); ?></h3>
                    <p>
                        <?php echo e(config("company.address.street")); ?>, 
                         <?php echo e(config("company.address.city")); ?>, 
                          <?php echo e(config("company.address.country")); ?><br><br>
                        <strong>Phone:</strong> <a href="tel:<?php echo e(config('company.phone')); ?>"><?php echo e(config("company.phone")); ?></a><br>
                        <strong>Phone:</strong> <a href="tel:<?php echo e(config('company.phone1')); ?>"><?php echo e(config("company.phone1")); ?></a><br>
                        <strong>Email:</strong>  <a href="mailto:<?php echo e(config('company.email')); ?>"><?php echo e(config("company.email")); ?></a><br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(route('home')); ?>#about">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(route('home')); ?>#services">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(route('terms.show')); ?>">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(route('policy.show')); ?>">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                    <?php $__currentLoopData = $servicegen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(route('service',$data->id)); ?>"><?php echo e($data->service_name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p>Check in our social networks</p>
                    <div class="social-links mt-3">
                         <?php $__currentLoopData = $social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e($item->link); ?>" target="_blank" class="twitter">
                                <i class="bx bxl-<?php echo e($item->icon); ?>"></i>
                            </a>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <?php echo ' ' . date('Y'); ?> <strong><span><?php echo e(env('APP_NAME')); ?></span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="<?php echo e(config('company.link')); ?>"><?php echo e(env('APP_NAME')); ?></a>
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
</html><?php /**PATH F:\Projects\company-web-system\resources\views//site/partials/footer.blade.php ENDPATH**/ ?>