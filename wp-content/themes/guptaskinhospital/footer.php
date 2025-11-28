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
?>

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
