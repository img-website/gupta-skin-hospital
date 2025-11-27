
    <!-- Footer Main Start -->
    <footer class="footer-main bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- About Footer start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.svg" alt="">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- Footer Contact Box Start -->
                        <div class="about-footer-content">
                            <p>With a passion for skin health, Dermal combines the latest technologies.</p>
                        </div>
                        <!-- Footer Contact Box End -->

                        <!-- Footer Newsletters Form Start -->
                        <div class="footer-newsletters-form">
                            <form id="newslettersForm" action="#" method="POST">
                                <div class="form-group">
                                    <input type="email" name="mail" class="form-control"  id="mail" placeholder="Enter your email" required>
                                    <button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-white.svg" alt=""></button>
                                </div>
                            </form>
                        </div>
                        <!-- Footer Newsletters Form End -->
                    </div>
                    <!-- About Footer End -->
                </div>

                <div class="col-lg-3 col-md-5">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>contact us</h3>
                        
                        <!-- Footer Contact Item Start -->
                        <div class="footer-contact-item">
                            <div class="icon-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-phone.svg" alt="">
                            </div>
                            <div class="footer-contact-content">
                                <h3>For more information</h3>
                                <p><a href="tel:+7025550122">(702) 555-0122</a></p>
                            </div>
                        </div>
                        <!-- Footer Contact Item End -->
                        
                        <!-- Footer Contact Item Start -->
                        <div class="footer-contact-item">
                            <div class="icon-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-headphone.svg" alt="">
                            </div>
                            <div class="footer-contact-content">
                                <h3>Emergency toll free no</h3>
                                <p><a href="tel:+2195550114">(219) 555-0114</a></p>
                            </div>
                        </div>
                        <!-- Footer Contact Item End -->
                    </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-3 col-md-4">
                    <!-- Footer Links start -->
                    <div class="footer-links">
                        <h3>get in touch</h3>
                        
                        <!-- Footer Contact Info Item Start -->
                        <div class="footer-contact-info-item">
                            <h3>Location</h3>
                            <p>6391 Elgin St. Santa Ana Celina, Delaware 10299</p>
                        </div>
                        <!-- Footer Contact Info Item End -->
                        
                        <!-- Footer Contact Info Item Start -->
                        <div class="footer-contact-info-item">
                            <h3>Email</h3>
                            <p><a href="mailto:info@domain.com">info@domain.com</a></p>
                        </div>
                        <!-- Footer Contact Info Item End -->
                    </div>
                    <!-- Footer Links end -->
                </div>

                <div class="col-lg-2 col-md-3">
                    <!-- Footer Links start -->
                    <div class="footer-links">
                        <h3>quick link</h3>
                        <ul>
                            <li><a href="<?php echo home_url(); ?>">Home</a></li>
                            <li><a href="<?php echo home_url('/about'); ?>">About us</a></li>
                            <li><a href="<?php echo home_url('/services'); ?>">our services</a></li>
                            <li><a href="<?php echo home_url('/testimonials'); ?>">Client Reviews</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links end -->
                </div>

                <div class="col-lg-12">
                    <!-- Footer Copyright Section Start -->
                    <div class="footer-copyright">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright © <?php echo date('Y'); ?> All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright End -->

                        <!-- Footer Social Link Start -->
                        <div class="footer-social-links">
                            <span>Follow us on social</span>
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- Footer Social Link End -->
                    </div>
                    <!-- Footer Copyright Section End -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Main End -->

    <?php wp_footer(); ?>
</body>

</html>
