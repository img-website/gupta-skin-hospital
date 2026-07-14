<?php
/* Template Name: Contact Us */
get_header();

$primary_call_link = get_field('primary_call_phone_link', 'option') ?: '';
if (empty($primary_call_link)) { $primary_call_link = 'tel:+919876543210'; }
$book_section = get_field('book_appointment_section', 'option') ?: [];
$location_address = $book_section['location_address'] ?? '';

// The map now lives in the footer on every page (Footer Settings → Map & App),
// so this page links to directions instead of embedding a second iframe.
$directions_url = function_exists('gsh_get_directions_url') ? gsh_get_directions_url() : '';
$app_enabled    = function_exists('gsh_is_app_enabled') ? gsh_is_app_enabled() : false;
$app_url        = function_exists('gsh_get_app_url') ? gsh_get_app_url() : '';
$app_label      = function_exists('gsh_get_app_label') ? gsh_get_app_label() : 'Download Our App';
?>
    <div class="page-header bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Contact Us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-us-page-content" style="padding: 60px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="mb-4">Call for Appointment or Enquiry</h2>
                    <?php
                    $phones = function_exists('gsh_get_phones_array') ? gsh_get_phones_array() : [];
                    if (!empty($phones)) : ?>
                        <div class="contact-phone-list mb-3">
                            <?php foreach ($phones as $ph) : ?>
                                <p class="mb-2"><?php if (!empty($ph['label'])) : ?><span><?php echo esc_html($ph['label']); ?>:</span> <?php endif; ?><a href="<?php echo esc_url($ph['tel']); ?>"><?php echo esc_html($ph['number']); ?></a></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <p class="mb-4">Tap a number above or the button below to call directly.</p>
                    <a href="<?php echo esc_url($primary_call_link); ?>" class="btn-default btn-call-cta" style="font-size: 1.2rem; padding: 16px 48px;"><span>Call Now</span></a>
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="contact-info-card">
                        <?php if ($location_address) : ?>
                            <div class="contact-info-block">
                                <h3><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Visit the Hospital</h3>
                                <address><?php echo esc_html($location_address); ?></address>
                                <?php if ($directions_url) : ?>
                                    <a class="contact-info-link" href="<?php echo esc_url($directions_url); ?>" target="_blank" rel="noopener noreferrer">Get Directions on Google Maps</a>
                                <?php endif; ?>
                                <p class="contact-info-note">The full map is at the bottom of this page.</p>
                            </div>
                        <?php endif; ?>

                        <?php if ($app_enabled && $app_url) : ?>
                            <div class="contact-info-block contact-info-app">
                                <h3><i class="fa-brands fa-google-play" aria-hidden="true"></i> Book from Your Phone</h3>
                                <p>Download our Android app to book appointments and stay in touch with the clinic.</p>
                                <a class="footer-app-btn" href="<?php echo esc_url($app_url); ?>" target="_blank" rel="noopener noreferrer">
                                    <i class="fa-brands fa-google-play" aria-hidden="true"></i>
                                    <span class="footer-app-btn-label">
                                        <small>GET IT ON</small>
                                        <strong><?php echo esc_html($app_label); ?></strong>
                                    </span>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
