<?php
$footer_branding      = get_field('footer_branding', 'option');
$footer_logo_id       = $footer_branding['footer_logo'] ?? null;
$footer_description   = $footer_branding['footer_description'] ?? '';
$footer_logo_url      = $footer_logo_id ? wp_get_attachment_image_url($footer_logo_id, 'full') : '';
$footer_logo_alt      = $footer_logo_id ? get_post_meta($footer_logo_id, '_wp_attachment_image_alt', true) : '';

$footer_contact_cards = get_field('footer_contact_cards', 'option') ?: [];
$footer_get_in_touch  = get_field('footer_get_in_touch', 'option') ?: [];
$footer_quick_links   = get_field('footer_quick_links', 'option') ?: [];
$footer_social_links  = get_field('footer_social_links', 'option') ?: [];
$footer_social_title  = get_field('footer_social_title', 'option') ?: 'Follow us on social';
$footer_copyright     = get_field('footer_copyright_text', 'option') ?: 'Copyright © ' . date('Y') . ' All Rights Reserved.';
$theme_uri            = get_template_directory_uri();

// Get global footer sections (Book Appointment & Scrolling Ticker)
$book_appointment_section = get_field('book_appointment_section', 'option') ?: [];
$appointment_contacts = get_field('appointment_contacts', 'option') ?: [];
$scrolling_ticker = get_field('scrolling_ticker', 'option') ?: [];
?>

<!-- Book Appointment Start -->
<div class="book-appointment bg-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 order-lg-1 order-2">
                <!-- Booking Appointment Content Start -->
                <div class="book-appointment-content">
                    <!-- Booking Contact List Start -->
                    <div class="booking-contact-list">
                        <!-- Booking Contact Item Start -->
                        <div class="booking-contact-item wow fadeInUp">
                            <div class="icon-box">
                                <i class="<?php echo esc_attr($book_appointment_section['location_icon'] ?? 'fa-solid fa-location-dot'); ?>"></i>
                            </div>
                            <div class="booking-contact-content">
                                <p><?php echo esc_html($book_appointment_section['location_address'] ?? '2464 Royal Ln. Mesa, New Jersey 45463'); ?></p>
                            </div>
                        </div>
                        <!-- Booking Contact Item End -->
                        
                        <!-- Booking Contact Item Start -->
                        <?php if (!empty($appointment_contacts)): ?>
                            <?php foreach ($appointment_contacts as $index => $contact): ?>
                                <div class="booking-contact-item wow fadeInUp" data-wow-delay="<?php echo esc_attr(($index + 1) * 0.1 + 0.2); ?>s">
                                    <div class="icon-box">
                                        <i class="<?php echo esc_attr($contact['contact_icon'] ?? 'fa-solid fa-phone'); ?>"></i>
                                    </div>
                                    <div class="booking-contact-content">
                                        <p><a href="<?php echo esc_url($contact['contact_phone_link'] ?? '#'); ?>"><?php echo esc_html($contact['contact_phone']); ?></a></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <!-- Booking Contact Item End -->
                    </div>
                    <!-- Booking Contact List End -->
                    
                    <!-- Google Map Start -->
                    <div class="google-map-iframe">
                        <?php if (!empty($book_appointment_section['appointment_map_embed'])): ?>
                            <iframe src="<?php echo wp_kses_post($book_appointment_section['appointment_map_embed']); ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php endif; ?>
                    </div>
                    <!-- Google Map End -->
                </div>
                <!-- Booking Appointment Content End -->
            </div>

            <div class="col-lg-7 order-lg-2 order-1">
                <!-- Booking Form Box Start -->
                <div class="booking-form-box">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp"><?php echo esc_html($book_appointment_section['appointment_subtitle'] ?? 'Book a appointment'); ?></h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo esc_html($book_appointment_section['appointment_title'] ?? 'Reach out to us today!'); ?></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($book_appointment_section['appointment_description'] ?? 'It\'s time to take control of your skin health! Booking your appointment is easy and fast. Choose a time that works for you and our dermatology experts will be ready.'); ?></p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Book Appointment Form Start -->
                    <div class="book-appointment-form wow fadeInUp" data-wow-delay="0.4s">
                        <form id="appointmentForm" action="#" method="POST" data-toggle="validator">
                            <div class="row">                                
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Full Name Here" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name ="email" class="form-control" id="email" placeholder="Email Address" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <select name="services" class="form-control form-select" id="services" required>
                                        <option value="" disabled selected>select service</option>
                                        <option value="general_dental_care">Dermal fillers</option>
                                        <option value="dental_implants">chemical peels</option>
                                        <option value="cosmetic_dentistry">Acne treatment</option>
                                        <option value="teeth_whitening">Skin tightening</option>
                                        <option value="pediatric_dental_care">Scar revision</option>
                                        <option value="advanced_oral_care">Wrinkle reduction</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="date" name="date" class="form-control" id="date" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="time" name="time" class="form-control" id="time" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <textarea name="message" class="form-control" id="message" rows="4" placeholder="Description here about service or your problem..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-default"><span><?php echo esc_html($book_appointment_section['appointment_button_text'] ?? 'send message'); ?></span></button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Book Appointment Form End -->
                </div>
                <!-- Booking Form Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Book Appointment End -->

<!-- Scrolling Ticker Section Start -->
<div class="our-scrolling-ticker">
    <!-- Scrolling Ticker Start -->
    <div class="scrolling-ticker-box">
        <?php if (!empty($scrolling_ticker)): ?>
            <?php foreach (array_chunk($scrolling_ticker, 1) as $chunk): ?>
                <div class="scrolling-content">
                    <?php foreach ($chunk as $item): ?>
                        <span>
                            <img src="<?php echo esc_url($theme_uri); ?>/images/asterisk-icon.svg" alt="">
                            <?php echo esc_html($item['ticker_text'] ?? 'Medical experts Women\'s health Skin Care Cardiac care'); ?>
                        </span>
                    <?php endforeach; ?>
                    <?php foreach ($chunk as $item): ?>
                        <span>
                            <img src="<?php echo esc_url($theme_uri); ?>/images/asterisk-icon.svg" alt="">
                            <?php echo esc_html($item['ticker_text'] ?? 'Medical experts Women\'s health Skin Care Cardiac care'); ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <!-- Scrolling Ticker End -->
</div>
<!-- Scrolling Ticker Section End -->

    <!-- Footer Main Start -->
    <footer class="footer-main bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- About Footer start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <?php if ($footer_logo_url) : ?>
                                <img src="<?php echo esc_url($footer_logo_url); ?>" alt="<?php echo esc_attr($footer_logo_alt ?: 'Footer Logo'); ?>">
                            <?php else : ?>
                                <img src="<?php echo esc_url($theme_uri . '/images/footer-logo.svg'); ?>" alt="Footer Logo">
                            <?php endif; ?>
                        </div>
                        <!-- Footer Logo End -->

                        <!-- Footer Contact Box Start -->
                        <div class="about-footer-content">
                            <p><?php echo esc_html($footer_description ?: 'With a passion for skin health, Dermal combines the latest technologies.'); ?></p>
                        </div>
                        <!-- Footer Contact Box End -->
                    </div>
                    <!-- About Footer End -->
                </div>

                <div class="col-lg-3 col-md-5">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>contact us</h3>

                        <?php if (!empty($footer_contact_cards)) : ?>
                            <?php foreach ($footer_contact_cards as $card) :
                                $icon_id    = $card['contact_icon'] ?? null;
                                $icon_url   = $icon_id ? wp_get_attachment_image_url($icon_id, 'thumbnail') : '';
                                $title      = $card['contact_title'] ?? '';
                                $subtitle   = $card['contact_subtitle'] ?? '';
                                $link_label = $card['contact_link_label'] ?? '';
                                $link       = $card['contact_link'] ?? '';
                            ?>
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <?php if ($icon_url) : ?>
                                            <img src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($title ?: 'Contact icon'); ?>">
                                        <?php else : ?>
                                            <img src="<?php echo esc_url($theme_uri . '/images/icon-phone.svg'); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="footer-contact-content">
                                        <?php if ($title) : ?>
                                            <h3><?php echo esc_html($title); ?></h3>
                                        <?php endif; ?>
                                        <?php if ($subtitle) : ?>
                                            <p><?php echo esc_html($subtitle); ?></p>
                                        <?php endif; ?>
                                        <?php if ($link && $link_label) : ?>
                                            <p><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($link_label); ?></a></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <div class="footer-contact-item">
                                <div class="icon-box">
                                    <img src="<?php echo esc_url($theme_uri . '/images/icon-phone.svg'); ?>" alt="">
                                </div>
                                <div class="footer-contact-content">
                                    <h3>For more information</h3>
                                    <p><a href="tel:+7025550122">(702) 555-0122</a></p>
                                </div>
                            </div>
                            <div class="footer-contact-item">
                                <div class="icon-box">
                                    <img src="<?php echo esc_url($theme_uri . '/images/icon-headphone.svg'); ?>" alt="">
                                </div>
                                <div class="footer-contact-content">
                                    <h3>Emergency toll free no</h3>
                                    <p><a href="tel:+2195550114">(219) 555-0114</a></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-3 col-md-4">
                    <!-- Footer Links start -->
                    <div class="footer-links">
                        <h3>get in touch</h3>
                        <?php
                        $location_text = $footer_get_in_touch['location_text'] ?? '6391 Elgin St. Santa Ana Celina, Delaware 10299';
                        $email_label   = $footer_get_in_touch['email_label'] ?? 'Email';
                        $email_address = $footer_get_in_touch['email_address'] ?? 'info@domain.com';
                        ?>
                        <div class="footer-contact-info-item">
                            <h3>Location</h3>
                            <p><?php echo esc_html($location_text); ?></p>
                        </div>
                        <div class="footer-contact-info-item">
                            <h3><?php echo esc_html($email_label); ?></h3>
                            <p><a href="mailto:<?php echo esc_attr($email_address); ?>"><?php echo esc_html($email_address); ?></a></p>
                        </div>
                    </div>
                    <!-- Footer Links end -->
                </div>

                <div class="col-lg-2 col-md-3">
                    <!-- Footer Links start -->
                    <div class="footer-links">
                        <h3>quick link</h3>
                        <ul>
                            <?php if (!empty($footer_quick_links)) : ?>
                                <?php foreach ($footer_quick_links as $link) :
                                    $label = $link['label'] ?? '';
                                    $url   = $link['url'] ?? '';
                                    if (!$label || !$url) {
                                        continue;
                                    }
                                ?>
                                    <li><a href="<?php echo esc_url($url); ?>"><?php echo esc_html($label); ?></a></li>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <li><a href="<?php echo esc_url(home_url()); ?>">Home</a></li>
                                <li><a href="<?php echo esc_url(home_url('/about')); ?>">About us</a></li>
                                <li><a href="<?php echo esc_url(home_url('/services')); ?>">our services</a></li>
                                <li><a href="<?php echo esc_url(home_url('/testimonials')); ?>">Client Reviews</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!-- Footer Links end -->
                </div>

                <div class="col-lg-12">
                    <!-- Footer Copyright Section Start -->
                    <div class="footer-copyright">
                        <div class="footer-copyright-text">
                            <p><?php echo esc_html($footer_copyright); ?></p>
                        </div>

                        <div class="footer-social-links">
                            <span><?php echo esc_html($footer_social_title); ?></span>
                            <ul>
                                <?php if (!empty($footer_social_links)) : ?>
                                    <?php foreach ($footer_social_links as $social) :
                                        $social_url  = $social['url'] ?? '';
                                        $icon_class  = $social['icon_class'] ?? '';
                                        if (!$social_url) {
                                            continue;
                                        }
                                    ?>
                                        <li>
                                            <a href="<?php echo esc_url($social_url); ?>" target="_blank" rel="noopener noreferrer">
                                                <?php if ($icon_class) : ?>
                                                    <i class="<?php echo esc_attr($icon_class); ?>"></i>
                                                <?php else : ?>
                                                    <span><?php echo esc_html($social['label'] ?? 'Social'); ?></span>
                                                <?php endif; ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
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
