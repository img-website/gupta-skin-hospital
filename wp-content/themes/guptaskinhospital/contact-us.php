<?php
/* Template Name: Contact Us */
get_header();

$primary_call_link = get_field('primary_call_phone_link', 'option') ?: '';
if (empty($primary_call_link)) { $primary_call_link = 'tel:+919876543210'; }
$book_section = get_field('book_appointment_section', 'option') ?: [];
$location_address = $book_section['location_address'] ?? '';
$map_embed = $book_section['appointment_map_embed'] ?? '';
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
                    <?php if ($location_address): ?>
                        <div class="mt-5">
                            <h3 class="mb-3">Address</h3>
                            <p><?php echo esc_html($location_address); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if (!empty($map_embed)): ?>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="google-map-iframe" style="border-radius: 10px; overflow: hidden;">
                        <iframe src="<?php echo esc_url($map_embed); ?>" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
