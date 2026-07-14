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

// Scrolling Ticker; primary call link for Contact / Book Appointment buttons
$scrolling_ticker = get_field('scrolling_ticker', 'option') ?: [];
$primary_call_link = get_field('primary_call_phone_link', 'option') ?: '';
if (empty($primary_call_link)) {
    $primary_call_link = 'tel:+919876543210';
}

// Footer map (shown on every page) + mobile app button — Footer Settings → Map & App.
$footer_show_map      = get_field('footer_show_map', 'option');
$footer_show_map      = ($footer_show_map === null || $footer_show_map === '') ? true : (bool) $footer_show_map;
$footer_map_embed     = function_exists('gsh_get_footer_map_embed') ? gsh_get_footer_map_embed() : '';
$footer_map_title     = get_field('footer_map_title', 'option') ?: 'Find Us in Alwar';
$footer_directions    = function_exists('gsh_get_directions_url') ? gsh_get_directions_url() : '';
$book_section_footer  = get_field('book_appointment_section', 'option') ?: [];
$footer_map_address   = $book_section_footer['location_address'] ?? '';

$app_enabled     = function_exists('gsh_is_app_enabled') ? gsh_is_app_enabled() : false;
$app_url         = function_exists('gsh_get_app_url') ? gsh_get_app_url() : '';
$app_label       = function_exists('gsh_get_app_label') ? gsh_get_app_label() : 'Download Our App';
$app_description = get_field('app_description', 'option') ?: 'Book appointments and view reports on your phone.';
?>

<!-- Scrolling Ticker Section Start -->
<div class="our-scrolling-ticker">
    <!-- Scrolling Ticker Start -->
    <div class="scrolling-ticker-box">
        <?php if (!empty($scrolling_ticker)): ?>
            <?php foreach (array_chunk($scrolling_ticker, 1) as $chunk): ?>
                <div class="scrolling-content">
                    <?php foreach ($chunk as $item): ?>
                        <span>
                            <img loading="lazy" decoding="async" src="<?php echo esc_url($theme_uri); ?>/images/asterisk-icon.svg" alt="">
                            <?php echo esc_html($item['ticker_text'] ?? 'Medical experts Women\'s health Skin Care Cardiac care'); ?>
                        </span>
                    <?php endforeach; ?>
                    <?php foreach ($chunk as $item): ?>
                        <span>
                            <img loading="lazy" decoding="async" src="<?php echo esc_url($theme_uri); ?>/images/asterisk-icon.svg" alt="">
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

    <?php if ($footer_show_map && $footer_map_embed) : ?>
    <!-- Footer Map Start -->
    <section class="footer-map-section bg-section dark-section" aria-labelledby="footer-map-heading">
        <div class="container">
            <div class="footer-map-header">
                <div class="footer-map-heading-group">
                    <h2 id="footer-map-heading"><?php echo esc_html($footer_map_title); ?></h2>
                    <?php if ($footer_map_address) : ?>
                        <p><?php echo esc_html($footer_map_address); ?></p>
                    <?php endif; ?>
                </div>
                <?php if ($footer_directions) : ?>
                    <a class="footer-map-directions" href="<?php echo esc_url($footer_directions); ?>" target="_blank" rel="noopener noreferrer">
                        <i class="fa-solid fa-location-arrow" aria-hidden="true"></i> Get Directions
                    </a>
                <?php endif; ?>
            </div>

            <div class="footer-map-embed js-footer-map" data-map-src="<?php echo esc_url($footer_map_embed); ?>">
                <button type="button" class="footer-map-loader js-footer-map-load">
                    <span class="footer-map-loader-icon"><i class="fa-solid fa-location-dot" aria-hidden="true"></i></span>
                    <span class="footer-map-loader-text">Load map</span>
                </button>
                <noscript>
                    <?php // Without JS the loader button never goes away, and it would sit on top of the map. ?>
                    <style>.footer-map-loader { display: none; }</style>
                    <iframe src="<?php echo esc_url($footer_map_embed); ?>" title="Map showing the location of Gupta Skin &amp; Dental Hospital, Alwar" width="100%" height="360" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </noscript>
            </div>
        </div>
    </section>
    <!-- Footer Map End -->
    <?php endif; ?>

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
                                <img loading="lazy" decoding="async" src="<?php echo esc_url($footer_logo_url); ?>" alt="<?php echo esc_attr($footer_logo_alt ?: 'Footer Logo'); ?>">
                            <?php else : ?>
                                <img loading="lazy" decoding="async" src="<?php echo esc_url($theme_uri . '/images/footer-logo.svg'); ?>" alt="Footer Logo">
                            <?php endif; ?>
                        </div>
                        <!-- Footer Logo End -->

                        <!-- Footer Contact Box Start -->
                        <div class="about-footer-content">
                            <p><?php echo esc_html($footer_description ?: 'Gupta Skin And Dental Hospital offers expert dermatology care in Alwar—from medical skin treatments to cosmetic procedures. Your skin\'s health, our priority.'); ?></p>
                        </div>
                        <!-- Footer Contact Box End -->

                        <?php if ($app_enabled && $app_url) : ?>
                            <!-- Footer App Download Start -->
                            <div class="footer-app-download">
                                <?php if ($app_description) : ?>
                                    <p class="footer-app-text"><?php echo esc_html($app_description); ?></p>
                                <?php endif; ?>
                                <a class="footer-app-btn" href="<?php echo esc_url($app_url); ?>" target="_blank" rel="noopener noreferrer">
                                    <i class="fa-brands fa-google-play" aria-hidden="true"></i>
                                    <span class="footer-app-btn-label">
                                        <small>GET IT ON</small>
                                        <strong><?php echo esc_html($app_label); ?></strong>
                                    </span>
                                </a>
                            </div>
                            <!-- Footer App Download End -->
                        <?php endif; ?>
                    </div>
                    <!-- About Footer End -->
                </div>

                <div class="col-lg-3 col-md-5">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>contact us</h3>

                        <?php if (!empty($footer_contact_cards)) : ?>
                            <?php foreach ($footer_contact_cards as $card) :
                                $link = $card['contact_link'] ?? '';
                                if (stripos($link, 'mailto:') === 0) { continue; }
                                if (function_exists('gsh_fix_tel_link')) { $link = gsh_fix_tel_link($link); }
                                $icon_id    = $card['contact_icon'] ?? null;
                                $icon_url   = $icon_id ? wp_get_attachment_image_url($icon_id, 'thumbnail') : '';
                                $title      = $card['contact_title'] ?? '';
                                $subtitle   = $card['contact_subtitle'] ?? '';
                                $link_label = $card['contact_link_label'] ?? '';
                            ?>
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <?php if ($icon_url) : ?>
                                            <img loading="lazy" decoding="async" src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($title ?: 'Contact icon'); ?>">
                                        <?php else : ?>
                                            <img loading="lazy" decoding="async" src="<?php echo esc_url($theme_uri . '/images/icon-phone.svg'); ?>" alt="">
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
                        <?php else :
                            $phones = function_exists('gsh_get_phones_array') ? gsh_get_phones_array() : [];
                            if (!empty($phones)) :
                                foreach ($phones as $ph) : ?>
                                    <div class="footer-contact-item">
                                        <div class="icon-box">
                                            <img loading="lazy" decoding="async" src="<?php echo esc_url($theme_uri . '/images/icon-phone.svg'); ?>" alt="">
                                        </div>
                                        <div class="footer-contact-content">
                                            <h3><?php echo esc_html($ph['label'] !== '' ? $ph['label'] : 'Call us'); ?></h3>
                                            <p><a href="<?php echo esc_url($ph['tel']); ?>"><?php echo esc_html($ph['number']); ?></a></p>
                                        </div>
                                    </div>
                                <?php endforeach;
                            else : ?>
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <img loading="lazy" decoding="async" src="<?php echo esc_url($theme_uri . '/images/icon-phone.svg'); ?>" alt="">
                                    </div>
                                    <div class="footer-contact-content">
                                        <h3>Call us</h3>
                                        <p>Add numbers in Theme Settings → Book Appointment</p>
                                    </div>
                                </div>
                            <?php endif;
                        endif; ?>
                    </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-3 col-md-4">
                    <!-- Footer Links start -->
                    <div class="footer-links">
                        <h3>get in touch</h3>
                        <?php $location_text = $footer_get_in_touch['location_text'] ?? 'Gupta Skin And Dental Hospital, Alwar — Add full address in Footer Settings'; ?>
                        <div class="footer-contact-info-item">
                            <h3>Location</h3>
                            <p><?php echo esc_html($location_text); ?></p>
                        </div>
                        <?php
                        $phones = function_exists('gsh_get_phones_array') ? gsh_get_phones_array() : [];
                        if (!empty($phones)) : ?>
                            <!-- <div class="footer-contact-info-item">
                                <h3>Call us</h3>
                                <?php foreach ($phones as $ph) : ?>
                                    <p><?php if ($ph['label'] !== '') : ?><span><?php echo esc_html($ph['label']); ?>:</span> <?php endif; ?><a href="<?php echo esc_url($ph['tel']); ?>"><?php echo esc_html($ph['number']); ?></a></p>
                                <?php endforeach; ?>
                            </div> -->
                        <?php endif; ?>
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
                                    if (!$label || !$url) { continue; }
                                    $contact_page_url = function_exists('gsh_get_contact_page_url') ? gsh_get_contact_page_url() : '';
                                    $is_contact_page = $contact_page_url && function_exists('gsh_is_contact_page_link') && gsh_is_contact_page_link($url, $contact_page_url);
                                    if (!$is_contact_page && (stripos($url, 'contact') !== false || stripos($url, 'book-appointment') !== false)) { $url = $primary_call_link; }
                                ?>
                                    <li><a href="<?php echo esc_url($url); ?>"><?php echo esc_html($label); ?></a></li>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <li><a href="<?php echo esc_url(home_url()); ?>">Home</a></li>
                                <li><a href="<?php echo esc_url(home_url('/about')); ?>">About us</a></li>
                                <li><a href="<?php echo esc_url($primary_call_link); ?>">Contact / Call</a></li>
                                <li><a href="<?php echo esc_url(home_url('/gallery')); ?>">Gallery</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!-- Footer Links end -->
                </div>

                <div class="col-lg-12">
                    <!-- Footer Copyright Section Start -->
                    <div class="footer-copyright"><div class="footer-copyright-text">
                    <p><?php echo esc_html($footer_copyright); ?> &nbsp;|&nbsp; <span>Powered By</span> <img loading="lazy" decoding="async" width="90" src="<?php echo esc_url($theme_uri); ?>/images/img.webp" alt="Powered By IMG Global Infotech" title="Powered By IMG Global Infotech" ></p> 


                        <div class="footer-social-links">
                            <span><?php echo esc_html($footer_social_title); ?></span>
                            <ul>
                                <?php if (!empty($footer_social_links)) : ?>
                                    <?php foreach ($footer_social_links as $social) :
                                        // Older saved rows use social_link / social_icon; the current field group
                                        // uses url / icon_class. Accept either so existing data keeps rendering.
                                        $social_url = $social['url'] ?? '';
                                        if (!$social_url) { $social_url = $social['social_link'] ?? ''; }
                                        $icon_class = $social['icon_class'] ?? '';
                                        if (!$icon_class) { $icon_class = $social['social_icon'] ?? ''; }
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

    <?php if ($footer_show_map && $footer_map_embed) : ?>
    <script>
    (function () {
        var box = document.querySelector('.js-footer-map');
        if (!box || box.dataset.loaded) { return; }

        function loadMap() {
            if (box.dataset.loaded) { return; }
            box.dataset.loaded = '1';
            var iframe = document.createElement('iframe');
            iframe.src = box.dataset.mapSrc;
            iframe.title = 'Map showing the location of Gupta Skin & Dental Hospital, Alwar';
            iframe.width = '100%';
            iframe.height = '360';
            iframe.loading = 'lazy';
            iframe.referrerPolicy = 'no-referrer-when-downgrade';
            iframe.setAttribute('allowfullscreen', '');
            iframe.style.border = '0';
            box.innerHTML = '';
            box.appendChild(iframe);
        }

        var btn = box.querySelector('.js-footer-map-load');
        if (btn) { btn.addEventListener('click', loadMap); }

        if ('IntersectionObserver' in window) {
            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        loadMap();
                        observer.disconnect();
                    }
                });
            }, { rootMargin: '250px' });
            observer.observe(box);
        } else {
            loadMap();
        }
    })();
    </script>
    <?php endif; ?>

    <?php wp_footer(); ?>
</body>

</html>
