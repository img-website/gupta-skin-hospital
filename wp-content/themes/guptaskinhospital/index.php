<?php
/* Template Name: Home Page */
get_header();


// // Debug code - temporary
// echo '<pre>';
// echo 'Current Page ID: ' . get_the_ID() . "\n";
// $hero_section = get_field('hero_section');
// echo 'Hero Section Data: ';
// print_r($hero_section);
// echo '</pre>';
// // Remove this after debugging

// Get all ACF fields
$hero_section = get_field('hero_section') ?: [];
$about_section = get_field('about_section') ?: [];
$about_counters = get_field('about_counters') ?: [];
$why_choose_section = get_field('why_choose_section') ?: [];
$why_choose_items = get_field('why_choose_items') ?: [];
$hero_cta_items = get_field('hero_cta_items') ?: [];
$our_process_section = get_field('our_process_section') ?: [];
$process_list_items = get_field('process_list_items') ?: [];
$how_we_work_section = get_field('how_we_work_section') ?: [];
$how_work_steps = get_field('how_work_steps') ?: [];
$our_benefit_section = get_field('our_benefit_section') ?: [];
$benefit_items = get_field('benefit_items') ?: [];
$our_results_section = get_field('our_results_section') ?: [];
$transformation_images = get_field('transformation_images') ?: [];
$results_button = get_field('results_button') ?: [];
$faqs_section = get_field('faqs_section') ?: [];
$faq_items = get_field('faq_items') ?: [];
$testimonials_section = get_field('testimonials_section') ?: [];
$testimonial_items = get_field('testimonial_items') ?: [];
$book_appointment_section = get_field('book_appointment_section') ?: [];
$appointment_contacts = get_field('appointment_contacts') ?: [];
$scrolling_ticker = get_field('scrolling_ticker') ?: [];

$theme_uri = get_template_directory_uri();
?>

<!-- Hero Section Start -->
<div class="hero">
    <div class="hero-section bg-section dark-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h1 class="text-anime-style-3" data-cursor="-opaque">
                                <?php echo esc_html($hero_section['hero_title'] ?? 'Comprehensive care for your skin\'s health and beauty'); ?>
                            </h1>
                            <p class="wow fadeInUp">
                                <?php echo esc_html($hero_section['hero_description'] ?? 'At Logoipsum we believe in creating digital solution that drive real-world impact. From creative strategies to cutting-edge.'); ?>
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.2s">
                            <a href="<?php echo esc_url($hero_section['hero_button_link'] ?? '#'); ?>" class="btn-default btn-highlighted">
                                <?php echo esc_html($hero_section['hero_button_text'] ?? 'Book Appointment'); ?>
                            </a>
                        </div>
                        <!-- Hero Button End -->

                        <!-- Hero Content Body Start -->
                        <div class="hero-review-box wow fadeInUp" data-wow-delay="0.6s">
                            <div class="hero-review-box-title">
                                <h3>reviews</h3>
                            </div>                            
                            <div class="hero-review-item">
                                <div class="hero-review-image">
                                    <figure class="image-anime">
                                        <?php if (!empty($hero_section['hero_review_image'])): ?>
                                            <?php echo wp_get_attachment_image($hero_section['hero_review_image'], 'full', false, ['alt' => 'Review']); ?>
                                        <?php else: ?>
                                            <img src="<?php echo esc_url($theme_uri); ?>/images/hero-review-image.jpg" alt="">
                                        <?php endif; ?>
                                    </figure>
                                </div>
                                <div class="hero-review-item-content">
                                    <p><?php echo esc_html($hero_section['hero_review_text'] ?? 'I am beyond thrilled with the results of my facelift.'); ?></p>
                                    <span>
                                        <?php echo esc_html($hero_section['hero_review_rating'] ?? '5.0'); ?>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </div>
                            </div>                            
                        </div>
                        <!-- Hero Content Body End -->
                    </div>
                    <!-- Hero Content End -->
                </div>

                <div class="col-lg-7">
                    <!-- Hero Image Start -->
                    <div class="hero-image">
                        <figure>
                            <?php if (!empty($hero_section['hero_main_image'])): ?>
                                <?php echo wp_get_attachment_image($hero_section['hero_main_image'], 'full', false, ['alt' => 'Hero Image']); ?>
                            <?php else: ?>
                                <img src="<?php echo esc_url($theme_uri); ?>/images/hero-img.png" alt="">
                            <?php endif; ?>
                        </figure>

                        <!-- Hero Contact Circle Start -->
                        <div class="hero-contact-circle">
                            <a href="<?php echo home_url('/contact'); ?>">
                                <img src="<?php echo esc_url($theme_uri); ?>/images/hero-contact-circle.png" alt="">
                            </a>
                        </div>
                        <!-- Hero Contact Circle End -->
                    </div>
                    <!-- Hero Image End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->

<!-- Hero CTA Box Start -->
<div class="hero-cta-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-cta-info">
                    <?php if (!empty($hero_cta_items)): ?>
                        <?php foreach ($hero_cta_items as $index => $cta_item): ?>
                            <!-- Hero Cta Item Start -->
                            <div class="hero-cta-item wow fadeInUp" data-wow-delay="<?php echo esc_attr($index * 0.2); ?>s">
                                <!-- Hero Cta Item Header Start -->
                                <div class="hero-cta-item-header">
                                    <div class="icon-box">
                                        <?php if (!empty($cta_item['cta_icon'])): ?>
                                            <?php echo wp_get_attachment_image($cta_item['cta_icon'], 'thumbnail', false, ['alt' => $cta_item['cta_title'] ?? '']); ?>
                                        <?php else: ?>
                                            <img src="images/icon-contact-now.svg" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="hero-cta-item-title">
                                        <h3><?php echo esc_html($cta_item['cta_title'] ?? 'Contact Us'); ?></h3>
                                    </div>
                                </div>
                                <!-- Hero Cta Item Header End -->

                                <!-- Hero Cta Item Content Start -->
                                <div class="hero-cta-item-content">
                                    <?php if (!empty($cta_item['cta_items'])): ?>
                                        <?php foreach ($cta_item['cta_items'] as $item): ?>
                                            <p>
                                                <a href="<?php echo esc_url($item['cta_link'] ?? '#'); ?>">
                                                    <?php if (!empty($item['cta_label'])): ?>
                                                        <span><?php echo esc_html($item['cta_label']); ?></span>
                                                    <?php endif; ?>
                                                    <?php echo esc_html($item['cta_value'] ?? ''); ?>
                                                </a>
                                            </p>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <p><?php echo esc_html($cta_item['cta_content'] ?? ''); ?></p>
                                    <?php endif; ?>
                                </div>
                                <!-- Hero Cta Item Content End -->
                            </div>
                            <!-- Hero Cta Item End -->
                        <?php endforeach; ?>
                    <?php else: ?>
                        <!-- Default CTA Items -->
                        <!-- Hero Cta Item Start -->
                        <div class="hero-cta-item wow fadeInUp">
                            <!-- Hero Cta Item Header Start -->
                            <div class="hero-cta-item-header">
                                <div class="icon-box">
                                    <img src="images/icon-contact-now.svg" alt="">
                                </div>
                                <div class="hero-cta-item-title">
                                    <h3>Contact Us</h3>
                                </div>
                            </div>
                            <!-- Hero Cta Item Header End -->

                            <!-- Hero Cta Item Content Start -->
                            <div class="hero-cta-item-content">
                                <p><a href="mailto:info@domain.com"><span>Email:</span> info@domain.com</a></p>
                                <p><a href="mailto:123456789"><span>Phone:</span> (123) 465 - 798</a></p>
                            </div>
                            <!-- Hero Cta Item Content End -->
                        </div>
                        <!-- Hero Cta Item End -->

                        <!-- Hero Cta Item Start -->
                        <div class="hero-cta-item wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Hero Cta Item Header Start -->
                            <div class="hero-cta-item-header">
                                <div class="icon-box">
                                    <img src="images/icon-location.svg" alt="">
                                </div>
                                <div class="hero-cta-item-title">
                                    <h3>Our Location</h3>
                                </div>
                            </div>
                            <!-- Hero Cta Item Header End -->

                            <!-- Hero Cta Item Content Start -->
                            <div class="hero-cta-item-content">
                                <p>4517 Washington Ave. Manchester, Kentuckya 39495</p>
                            </div>
                            <!-- Hero Cta Item Content End -->
                        </div>
                        <!-- Hero Cta Item End -->

                        <!-- Hero Cta Item Start -->
                        <div class="hero-cta-item wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Hero Cta Item Header Start -->
                            <div class="hero-cta-item-header">
                                <div class="icon-box">
                                    <img src="images/icon-watch.svg" alt="">
                                </div>
                                <div class="hero-cta-item-title">
                                    <h3>Working Hours</h3>
                                </div>
                            </div>
                            <!-- Hero Cta Item Header End -->

                            <!-- Hero Cta Item Content Start -->
                            <div class="hero-cta-item-content">
                                <p>Monday - Friday : 9:00 am to 6:00 pm</p>
                                <p>Saturday : 11:00 am to 5pm</p>
                            </div>
                            <!-- Hero Cta Item Content End -->
                        </div>
                        <!-- Hero Cta Item End -->
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero CTA Box End -->

<!-- About Us Section Start -->
<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About Us Image Start -->
                <div class="about-us-image">
                    <div class="about-img-1">
                        <figure class="image-anime reveal">
                            <?php if (!empty($about_section['about_image_1'])): ?>
                                <?php echo wp_get_attachment_image($about_section['about_image_1'], 'full', false, ['alt' => 'About Image 1']); ?>
                            <?php else: ?>
                                <img src="<?php echo esc_url($theme_uri); ?>/images/about-image-1.jpg" alt="">
                            <?php endif; ?>
                        </figure>
                    </div>

                    <div class="about-img-2">
                        <figure class="image-anime reveal">
                            <?php if (!empty($about_section['about_image_2'])): ?>
                                <?php echo wp_get_attachment_image($about_section['about_image_2'], 'full', false, ['alt' => 'About Image 2']); ?>
                            <?php else: ?>
                                <img src="<?php echo esc_url($theme_uri); ?>/images/about-image-2.jpg" alt="">
                            <?php endif; ?>
                        </figure>
                    </div>

                    <div class="contact-us-circle">
                        <a href="<?php echo home_url('/contact'); ?>">
                            <img src="<?php echo esc_url($theme_uri); ?>/images/contact-us-circle.svg" alt="">
                        </a>
                    </div>
                </div>
                <!-- About Us Image End -->
            </div>

            <div class="col-lg-6">
                <!-- About Us Content Start -->
                <div class="about-us-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp"><?php echo esc_html($about_section['about_title'] ?? 'about us'); ?></h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            <?php echo esc_html($about_section['about_heading'] ?? 'Empowering Your Skin with Expert Care & Solutions'); ?>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            <?php echo esc_html($about_section['about_description'] ?? 'We\'re dedicated to helping you achieve and maintain beautiful, healthy skin. Trust us to provide exceptional care tailored to you.'); ?>
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Us Body Start -->
                    <div class="about-us-body">
                        <div class="about-body-content">
                            <div class="about-body-list wow fadeInUp" data-wow-delay="0.4s">
                                <ul>
                                    <?php if (!empty($about_section['about_list_items'])): ?>
                                        <?php foreach ($about_section['about_list_items'] as $list_item): ?>
                                            <li><?php echo esc_html($list_item['list_item_text']); ?></li>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <li>Commitment to Excellence in Skin Health</li>
                                        <li>State-of-the-Art Facility and Technology</li>
                                        <li>Trusted by Thousands of Satisfied Patients</li>
                                    <?php endif; ?>
                                </ul>
                            </div>

                            <div class="about-body-footer wow fadeInUp" data-wow-delay="0.6s">
                                <a href="<?php echo esc_url($about_section['about_button_link'] ?? '#'); ?>" class="btn-default">
                                    <?php echo esc_html($about_section['about_button_text'] ?? 'about more'); ?>
                                </a>
                                <!-- Video Play Button Start -->
                                <div class="about-video-button">
                                    <a href="<?php echo esc_url($about_section['video_url'] ?? 'https://www.youtube.com/watch?v=Y-x0efG1seA'); ?>" class="popup-video">
                                        <i class="fa-solid fa-play"></i>
                                        <?php echo esc_html($about_section['video_button_text'] ?? 'play session'); ?>
                                    </a>
                                </div>
                                <!-- Video Play Button End -->
                            </div>                                
                        </div>

                        <!-- About Team Member Start -->
                        <div class="about-team-member">
                            <?php if (!empty($about_section['team_member_icon'])): ?>
                                <?php echo wp_get_attachment_image($about_section['team_member_icon'], 'thumbnail', false, ['alt' => 'Team Member Icon']); ?>
                            <?php else: ?>
                                <img src="<?php echo esc_url($theme_uri); ?>/images/icon-about-team-member.svg" alt="">
                            <?php endif; ?>
                            <h2><span class="counter"><?php echo esc_html($about_section['team_member_count'] ?? '29'); ?></span>+</h2>
                            <p><?php echo esc_html($about_section['team_member_label'] ?? 'Team members'); ?></p>
                        </div>
                        <!-- About Team Member End -->
                    </div>
                    <!-- About Us Body End -->
                </div>
                <!-- About Us Content End -->
            </div>

            <div class="col-lg-12">
                <!-- About Counter List Start -->
                <div class="about-counter-list">
                    <?php if (!empty($about_counters)): ?>
                        <?php foreach ($about_counters as $counter): ?>
                            <!-- About Counter Item Start -->
                            <div class="about-counter-item">
                                <div class="icon-box">
                                    <?php if (!empty($counter['counter_icon'])): ?>
                                        <?php echo wp_get_attachment_image($counter['counter_icon'], 'thumbnail', false, ['alt' => $counter['counter_text'] ?? '']); ?>
                                    <?php else: ?>
                                        <img src="<?php echo esc_url($theme_uri); ?>/images/icon-about-counter-1.svg" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="about-counter-content">
                                    <h2><span class="counter"><?php echo esc_html($counter['counter_number'] ?? '96'); ?></span><?php echo esc_html($counter['counter_suffix'] ?? '%'); ?></h2>
                                    <p><?php echo esc_html($counter['counter_text'] ?? 'patient satisfaction rate'); ?></p>
                                </div>
                            </div>
                            <!-- About Counter Item End -->
                        <?php endforeach; ?>
                    <?php else: ?>
                        <!-- Default Counters -->
                        <div class="about-counter-item">
                            <div class="icon-box">
                                <img src="<?php echo esc_url($theme_uri); ?>/images/icon-about-counter-1.svg" alt="">
                            </div>
                            <div class="about-counter-content">
                                <h2><span class="counter">96</span>%</h2>
                                <p>patient satisfaction rate</p>
                            </div>
                        </div>

                        <div class="about-counter-item">
                            <div class="icon-box">
                                <img src="<?php echo esc_url($theme_uri); ?>/images/icon-about-counter-2.svg" alt="">
                            </div>
                            <div class="about-counter-content">
                                <h2><span class="counter">12</span>+</h2>
                                <p>years of experience</p>
                            </div>
                        </div>

                        <div class="about-counter-item">
                            <div class="icon-box">
                                <img src="<?php echo esc_url($theme_uri); ?>/images/icon-about-counter-3.svg" alt="">
                            </div>
                            <div class="about-counter-content">
                                <h2><span class="counter">1000</span>+</h2>
                                <p>successful surgeries</p>
                            </div>
                        </div>

                        <div class="about-counter-item">
                            <div class="icon-box">
                                <img src="<?php echo esc_url($theme_uri); ?>/images/icon-about-counter-4.svg" alt="">
                            </div>
                            <div class="about-counter-content">
                                <h2><span class="counter">30</span>+</h2>
                                <p>state-of-the-art facilitie</p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- About Counter List End -->
            </div>
        </div>
    </div>
</div>
<!-- About Us Section End -->

<!-- Why Choose Us Section Start -->
<div class="why-choose-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <!-- Why Choose Content Start -->
                <div class="why-choose-content">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp"><?php echo esc_html($why_choose_section['why_choose_title'] ?? 'Why choose us'); ?></h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            <?php echo esc_html($why_choose_section['why_choose_heading'] ?? 'Why choose us for all your dermatology needs'); ?>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            <?php echo esc_html($why_choose_section['why_choose_description'] ?? 'we\'re dedicated to helping you achieve and maintain beautiful, healthy skin. Trust us to provide exceptional care tailored to you.'); ?>
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Why Choose List Start -->
                    <div class="why-choose-list">
                        <?php if (!empty($why_choose_items)): ?>
                            <?php foreach ($why_choose_items as $index => $item): ?>
                                <!-- Why Choose List Item Start -->
                                <div class="why-choose-list-item wow fadeInUp" data-wow-delay="<?php echo esc_attr(0.4 + ($index * 0.2)); ?>s">
                                    <div class="icon-box">
                                        <?php if (!empty($item['why_choose_icon'])): ?>
                                            <?php echo wp_get_attachment_image($item['why_choose_icon'], 'thumbnail', false, ['alt' => $item['why_choose_item_title'] ?? '']); ?>
                                        <?php else: ?>
                                            <img src="<?php echo esc_url($theme_uri); ?>/images/icon-why-choose-list-1.svg" alt="">
                                        <?php endif; ?>
                                    </div>
                                    
                                    <div class="why-choose-item-content">
                                        <h3><?php echo esc_html($item['why_choose_item_title'] ?? 'Personalized, compassionate care'); ?></h3>
                                        <p><?php echo esc_html($item['why_choose_item_description'] ?? 'We believe that every patient is unique. That\'s why we take the time to understand your specific needs and tailor treatment plans.'); ?></p>
                                    </div>
                                </div>
                                <!-- Why Choose List Item End -->
                            <?php endforeach; ?>
                        <?php else: ?>
                            <!-- Default Why Choose Items -->
                            <div class="why-choose-list-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="<?php echo esc_url($theme_uri); ?>/images/icon-why-choose-list-1.svg" alt="">
                                </div>
                                
                                <div class="why-choose-item-content">
                                    <h3>Personalized, compassionate care</h3>
                                    <p>We believe that every patient is unique. That's why we take the time to understand your specific needs and tailor treatment plans.</p>
                                </div>
                            </div>
                            
                            <div class="why-choose-list-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="<?php echo esc_url($theme_uri); ?>/images/icon-why-choose-list-2.svg" alt="">
                                </div>
                                
                                <div class="why-choose-item-content">
                                    <h3>Comprehensive care for all skin needs</h3>
                                    <p>Whether you're seeking medical dermatology, cosmetic treatments, or preventive care, we offer a comprehensive range of services.</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- Why Choose List End -->
                </div>
                <!-- Why Choose Content End -->
            </div>

            <div class="col-lg-5">
                <!-- Why Choose Image Start -->
                <div class="why-choose-image">
                    <figure class="image-anime reveal">
                        <?php if (!empty($why_choose_section['why_choose_image'])): ?>
                            <?php echo wp_get_attachment_image($why_choose_section['why_choose_image'], 'full', false, ['alt' => 'Why Choose Us']); ?>
                        <?php else: ?>
                            <img src="<?php echo esc_url($theme_uri); ?>/images/why-choose-image.jpg" alt="">
                        <?php endif; ?>
                    </figure>
                </div>
                <!-- Why Choose Image End -->
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us Section End -->

<!-- Our Process Section Start -->
<div class="our-process bg-section">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <!-- Process Video Box Start -->
                <div class="process-video-box">
                    <!-- Process Video Image Start -->
                    <div class="process-video-image">
                        <figure class="image-anime">
                            <?php if (!empty($our_process_section['process_video_image'])): ?>
                                <?php echo wp_get_attachment_image($our_process_section['process_video_image'], 'full', false, ['alt' => 'Process Video']); ?>
                            <?php else: ?>
                                <img src="<?php echo esc_url($theme_uri); ?>/images/process-image.jpg" alt="">
                            <?php endif; ?>
                        </figure>
                    </div>
                    <!-- Process Video Image End -->

                    <!-- Video Play Box Start -->
                    <div class="video-play-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="video-play-button">
                            <a href="<?php echo esc_url($our_process_section['process_video_url'] ?? 'https://www.youtube.com/watch?v=Y-x0efG1seA'); ?>" class="popup-video" data-cursor-text="Play">
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                        <div class="video-play-content">
                            <h3><?php echo esc_html($our_process_section['process_video_title'] ?? 'Our process'); ?></h3>
                            <h2><?php echo esc_html($our_process_section['process_video_heading'] ?? 'Watch our procedure'); ?></h2>
                        </div>
                    </div>
                    <!-- Video Play Box End -->
                </div>
                <!-- Process Video Box End -->
            </div>

            <div class="col-lg-6">
                <!-- Our Process Content Start -->
                <div class="our-process-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp"><?php echo esc_html($our_process_section['process_subtitle'] ?? 'Our process'); ?></h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo esc_html($our_process_section['process_title'] ?? 'Expert dermatology care for healthy, radiant skin'); ?></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($our_process_section['process_description'] ?? 'From preventive care to specialized treatments, our wide range of services is designed to support your health at every stage.'); ?></p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Our Process List Start -->
                    <div class="our-process-list wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <?php if (!empty($our_process_section['process_list_items'])): ?>
                                <?php foreach ($our_process_section['process_list_items'] as $item): ?>
                                    <li><?php echo esc_html($item['process_item_text']); ?></li>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <li>Expert Dermatologists</li>
                                <li>Personalized Care</li>
                                <li>Advanced Technology</li>
                                <li>Comprehensive Services</li>
                                <li>Effective Solutions</li>
                                <li>Comfortable Environment</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!-- Our Process List End -->

                    <!-- Our Process Button Start -->
                    <div class="our-process-btn wow fadeInUp" data-wow-delay="0.6s">
                        <a href="<?php echo esc_url($our_process_section['process_button_link'] ?? '#'); ?>" class="btn-default"><?php echo esc_html($our_process_section['process_button_text'] ?? 'learn more'); ?></a>
                    </div>
                    <!-- Our Process Button End -->

                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                        <p><?php echo esc_html($our_process_section['process_footer_text'] ?? 'Your skin\'s transformations a starts here - '); ?><a href="<?php echo esc_url($our_process_section['process_footer_link'] ?? '#'); ?>"><?php echo esc_html($our_process_section['process_footer_link_text'] ?? 'Book today!'); ?></a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
                <!-- Our Process Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Process Section End -->

<!-- How We Work Section Start -->
<div class="how-we-work">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <!-- How We Work Content Start -->
                <div class="how-we-work-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp"><?php echo esc_html($how_we_work_section['how_work_subtitle'] ?? 'How we work'); ?></h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo esc_html($how_we_work_section['how_work_title'] ?? 'How we work: a commitment to your skin health'); ?></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($how_we_work_section['how_work_description'] ?? 'We\'re dedicated to helping you achieve and maintain beautiful, healthy skin. Trust us to provide exceptional care tailored to you.'); ?></p>
                    </div>
                    <!-- Section Title End -->
                    
                    <!-- How Work Steps Start -->
                    <div class="how-work-steps">
                        <?php if (!empty($how_work_steps)): ?>
                            <?php foreach ($how_work_steps as $index => $step): ?>
                                <!-- How Work Step Item Start -->
                                <div class="how-work-step-item wow fadeInUp" data-wow-delay="<?php echo esc_attr(0.4 + ($index * 0.2)); ?>s">
                                    <div class="how-work-step-no">
                                        <h2><?php echo esc_html($step['step_number'] ?? ($index + 1)); ?></h2>
                                    </div>                                
                                    <div class="how-work-step-content">
                                        <h3><?php echo esc_html($step['step_title'] ?? 'Step Title'); ?></h3>
                                        <p><?php echo esc_html($step['step_description'] ?? 'This helps us create a customized treatment plan that aligns with your specific needs and expectations.'); ?></p>
                                    </div>
                                </div>
                                <!-- How Work Step Item End -->
                            <?php endforeach; ?>
                        <?php else: ?>
                            <!-- Default Steps -->
                            <div class="how-work-step-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="how-work-step-no">
                                    <h2>01</h2>
                                </div>                                
                                <div class="how-work-step-content">
                                    <h3>Personalized consultation</h3>
                                    <p>This helps us create a customized treatment plan that aligns with your specific needs and expectations.</p>
                                </div>
                            </div>
                            
                            <div class="how-work-step-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="how-work-step-no">
                                    <h2>02</h2>
                                </div>                                
                                <div class="how-work-step-content">
                                    <h3>Tailored treatment plans</h3>
                                    <p>This helps us create a customized treatment plan that aligns with your specific needs and expectations.</p>
                                </div>
                            </div>
                            
                            <div class="how-work-step-item wow fadeInUp" data-wow-delay="0.8s">
                                <div class="how-work-step-no">
                                    <h2>03</h2>
                                </div>                                
                                <div class="how-work-step-content">
                                    <h3>Continuous care & follow-up</h3>
                                    <p>This helps us create a customized treatment plan that aligns with your specific needs and expectations.</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- How Work Steps End -->
                </div>
                <!-- How We Work Content End -->
            </div>
            
            <div class="col-lg-5">
                <!-- How We Work Image Start -->
                <div class="how-we-work-image">
                    <!-- How We Work Img Start -->
                    <div class="how-we-work-img">
                        <figure class="image-anime">
                            <?php if (!empty($how_we_work_section['how_work_image'])): ?>
                                <?php echo wp_get_attachment_image($how_we_work_section['how_work_image'], 'full', false, ['alt' => 'How We Work']); ?>
                            <?php else: ?>
                                <img src="<?php echo esc_url($theme_uri); ?>/images/how-we-work-image.jpg" alt="">
                            <?php endif; ?>
                        </figure>
                    </div>
                    <!-- How We Work Img End -->
                    
                    <!-- How Work Contact Info Start -->
                    <div class="how-work-contact-info wow fadeInUp" data-wow-delay="0.2s">
                        <h2><?php echo esc_html($how_we_work_section['how_work_contact_heading'] ?? 'Have Questions? Were Here to Help You!'); ?></h2>

                        <!-- How Work Contact Box Start -->
                        <div class="how-work-contact-box">
                            <div class="icon-box">
                                <?php if (!empty($how_we_work_section['how_work_contact_icon'])): ?>
                                    <?php echo wp_get_attachment_image($how_we_work_section['how_work_contact_icon'], 'thumbnail', false, ['alt' => 'Phone Icon']); ?>
                                <?php else: ?>
                                    <img src="<?php echo esc_url($theme_uri); ?>/images/icon-phone.svg" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="how-work-contact-content">
                                <h3><a href="<?php echo esc_url($how_we_work_section['how_work_contact_link'] ?? 'tel:+123456789'); ?>"><?php echo esc_html($how_we_work_section['how_work_contact_phone'] ?? '(123) 456 789'); ?></a></h3>
                            </div>
                        </div>
                        <!-- How Work Contact Box End -->
                    </div>
                    <!-- How Work Contact Info End -->
                </div>
                <!-- How We Work Image End -->
            </div>
        </div>
    </div>
</div>
<!-- How We Work Section End -->

<!-- Our Benefit Section Start -->
<div class="our-benefit bg-section dark-section">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp"><?php echo esc_html($our_benefit_section['benefit_subtitle'] ?? 'our benefits'); ?></h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo esc_html($our_benefit_section['benefit_title'] ?? 'Exceptional dermatology, every step of the way'); ?></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($our_benefit_section['benefit_description'] ?? 'Experience personalized care, advanced treatments, and visible results with our expert dermatology services.'); ?></p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row align-items-center">
            <?php 
            // Organize benefit items by position
            $left_benefits = [];
            $right_benefits = [];
            $center_image = null;
            
            if (!empty($benefit_items)) {
                foreach ($benefit_items as $benefit) {
                    if ($benefit['benefit_position'] === 'right') {
                        $right_benefits[] = $benefit;
                    } elseif ($benefit['benefit_position'] === 'center') {
                        $center_image = $benefit;
                    } else {
                        $left_benefits[] = $benefit;
                    }
                }
            }
            ?>
            
            <div class="col-lg-4 col-md-6 order-lg-1 order-md-1 order-1">
                <!-- Our Benefit Box Start -->
                <div class="our-benefit-box-1">
                    <?php if (!empty($left_benefits)): ?>
                        <?php foreach ($left_benefits as $index => $benefit): ?>
                            <!-- Our Benefit Item Start -->
                            <div class="our-benefit-item wow fadeInUp" data-wow-delay="<?php echo esc_attr($index * 0.2); ?>s">
                                <div class="icon-box">
                                    <?php if (!empty($benefit['benefit_icon'])): ?>
                                        <?php echo wp_get_attachment_image($benefit['benefit_icon'], 'thumbnail', false, ['alt' => $benefit['benefit_item_title'] ?? '']); ?>
                                    <?php else: ?>
                                        <img src="<?php echo esc_url($theme_uri); ?>/images/icon-benefit-1.svg" alt="">
                                    <?php endif; ?>
                                </div>

                                <div class="our-benefit-item-content">
                                    <h3><?php echo esc_html($benefit['benefit_item_title'] ?? 'Benefit Title'); ?></h3>
                                    <p><?php echo esc_html($benefit['benefit_item_description'] ?? 'Description'); ?></p>
                                </div>                           
                            </div>
                            <!-- Our Benefit Item End -->
                        <?php endforeach; ?>
                    <?php else: ?>
                        <!-- Default Left Benefits -->
                        <div class="our-benefit-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="<?php echo esc_url($theme_uri); ?>/images/icon-benefit-1.svg" alt="">
                            </div>
                            <div class="our-benefit-item-content">
                                <h3>expert dermatologists</h3>
                                <p>Our team consists board-certified dermatologists with experience</p>
                            </div>                           
                        </div>

                        <div class="our-benefit-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="<?php echo esc_url($theme_uri); ?>/images/icon-benefit-2.svg" alt="">
                            </div>
                            <div class="our-benefit-item-content">
                                <h3>advanced technology</h3>
                                <p>We use cutting-edge equipment and innovative techniques</p>
                            </div>                            
                        </div>

                        <div class="our-benefit-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="<?php echo esc_url($theme_uri); ?>/images/icon-benefit-3.svg" alt="">
                            </div>
                            <div class="our-benefit-item-content">
                                <h3>personalized care</h3>
                                <p>Every treatment plan is tailored to your unique skin type, concerns</p>
                            </div>                            
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Our Benefit Box End -->
            </div>

            <div class="col-lg-4 order-lg-2 order-md-3 order-2">
                <!-- Our Benefit Image Start -->
                <div class="our-benefit-image">
                    <figure>
                        <?php if (!empty($our_benefit_section['benefit_image'])): ?>
                            <?php echo wp_get_attachment_image($our_benefit_section['benefit_image'], 'full', false, ['alt' => 'Our Benefit']); ?>
                        <?php else: ?>
                            <img src="<?php echo esc_url($theme_uri); ?>/images/our-benefit-image.jpg" alt="">
                        <?php endif; ?>
                    </figure>
                </div>
                <!-- Our Benefit Image End -->
            </div>

            <div class="col-lg-4 col-md-6 order-lg-3 order-md-2 order-3">
                <!-- Our Benefit Box Start -->
                <div class="our-benefit-box-2">
                    <?php if (!empty($right_benefits)): ?>
                        <?php foreach ($right_benefits as $index => $benefit): ?>
                            <!-- Our Benefit Item Start -->
                            <div class="our-benefit-item wow fadeInUp" data-wow-delay="<?php echo esc_attr($index * 0.2); ?>s">
                                <div class="icon-box">
                                    <?php if (!empty($benefit['benefit_icon'])): ?>
                                        <?php echo wp_get_attachment_image($benefit['benefit_icon'], 'thumbnail', false, ['alt' => $benefit['benefit_item_title'] ?? '']); ?>
                                    <?php else: ?>
                                        <img src="<?php echo esc_url($theme_uri); ?>/images/icon-benefit-4.svg" alt="">
                                    <?php endif; ?>
                                </div>

                                <div class="our-benefit-item-content">
                                    <h3><?php echo esc_html($benefit['benefit_item_title'] ?? 'Benefit Title'); ?></h3>
                                    <p><?php echo esc_html($benefit['benefit_item_description'] ?? 'Description'); ?></p>
                                </div>                            
                            </div>
                            <!-- Our Benefit Item End -->
                        <?php endforeach; ?>
                    <?php else: ?>
                        <!-- Default Right Benefits -->
                        <div class="our-benefit-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="<?php echo esc_url($theme_uri); ?>/images/icon-benefit-4.svg" alt="">
                            </div>
                            <div class="our-benefit-item-content">
                                <h3>comprehensive services</h3>
                                <p>From medical dermatology  cosmetic enhancements, we offer a treatment</p>
                            </div>                            
                        </div>

                        <div class="our-benefit-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="<?php echo esc_url($theme_uri); ?>/images/icon-benefit-5.svg" alt="">
                            </div>
                            <div class="our-benefit-item-content">
                                <h3>high safety standards</h3>
                                <p>Your safety is our priority. We adhere to strict hygiene and safety protocols</p>
                            </div>                            
                        </div>

                        <div class="our-benefit-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="<?php echo esc_url($theme_uri); ?>/images/icon-benefit-6.svg" alt="">
                            </div>
                            <div class="our-benefit-item-content">
                                <h3>comfortable environment</h3>
                                <p>Our clinic provides a welcoming and stress-free atmosphere</p>
                            </div>                            
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Our Benefit Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Benefit Section End -->

<!-- Our Result Section Start -->
<div class="our-results">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp"><?php echo esc_html($our_results_section['results_subtitle'] ?? 'Our result'); ?></h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo esc_html($our_results_section['results_title'] ?? 'Before & after: witness the power of dermatology'); ?></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($our_results_section['results_description'] ?? 'See the remarkable transformations for yourself—our \'Before & After\' gallery highlights the powerful impact of dermatological treatments.'); ?></p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <?php if (!empty($transformation_images)): ?>
                <?php foreach ($transformation_images as $image): ?>
                    <div class="col-md-6">					
                        <!-- Transformation Image Start -->
                        <div class="transformation_image wow fadeInUp" data-wow-delay="0.4s">					
                            <?php if (!empty($image['trans_image_before'])): ?>
                                <?php echo wp_get_attachment_image($image['trans_image_before'], 'full', false, ['alt' => 'Before']); ?>
                            <?php else: ?>
                                <img src="<?php echo esc_url($theme_uri); ?>/images/transformation-img-1.jpg" alt="">
                            <?php endif; ?>
                            
                            <?php if (!empty($image['trans_image_after'])): ?>
                                <?php echo wp_get_attachment_image($image['trans_image_after'], 'full', false, ['alt' => 'After']); ?>
                            <?php else: ?>
                                <img src="<?php echo esc_url($theme_uri); ?>/images/transformation-img-2.jpg" alt="">
                            <?php endif; ?>
                        </div>
                        <!-- Transformation Image End -->
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-md-6">					
                    <!-- Transformation Image Start -->
                    <div class="transformation_image wow fadeInUp" data-wow-delay="0.4s">					
                        <img src="<?php echo esc_url($theme_uri); ?>/images/transformation-img-1.jpg" alt="">
                        <img src="<?php echo esc_url($theme_uri); ?>/images/transformation-img-2.jpg" alt="">
                    </div>
                    <!-- Transformation Image End -->
                </div>

                <div class="col-md-6">					
                    <!-- Transformation Image Start -->
                    <div class="transformation_image wow fadeInUp" data-wow-delay="0.4s">					
                        <img src="<?php echo esc_url($theme_uri); ?>/images/transformation-img-3.jpg" alt="">
                        <img src="<?php echo esc_url($theme_uri); ?>/images/transformation-img-4.jpg" alt="">
                    </div>
                    <!-- Transformation Image End -->
                </div>
            <?php endif; ?>
            
            <div class="col-lg-12">
                <!-- Transformation Button Start -->
                <div class="transformation-button wow fadeInUp" data-wow-delay="0.6s">
                    <a href="<?php echo esc_url($results_button['results_button_link'] ?? '#'); ?>" class="btn-default"><?php echo esc_html($results_button['results_button_text'] ?? 'view all result'); ?></a>
                </div>
                <!-- Transformation Button End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Result Section End -->

<!-- Our Faqs Section Start -->
<div class="our-faqs bg-section dark-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="our-faqs-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp"><?php echo esc_html($faqs_section['faqs_subtitle'] ?? 'frequently asked questions'); ?></h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo esc_html($faqs_section['faqs_title'] ?? 'Frequently asked question find out more'); ?></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($faqs_section['faqs_description'] ?? 'Have questions about our dermatology services? Our \'Frequently Asked Questions\' section.'); ?></p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="col-lg-6">
                <!-- FAQ Accordion Start -->
                <div class="faq-accordion" id="faqaccordion">
                    <?php if (!empty($faq_items)): ?>
                        <?php foreach ($faq_items as $index => $faq): ?>
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="<?php echo esc_attr($index * 0.2); ?>s">
                                <h2 class="accordion-header" id="heading<?php echo esc_attr($index + 1); ?>">
                                    <button class="accordion-button <?php echo $index !== 0 ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo esc_attr($index + 1); ?>" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo esc_attr($index + 1); ?>">
                                        <?php echo esc_html($faq['faq_question']); ?>
                                    </button>
                                </h2>
                                <div id="collapse<?php echo esc_attr($index + 1); ?>" class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo esc_attr($index + 1); ?>" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p><?php echo esc_html($faq['faq_answer']); ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        <?php endforeach; ?>
                    <?php else: ?>
                        <!-- Default FAQs -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    What types of treatments do you offer?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We offer a wide range of dermatology treatments, including acne care, psoriasis management, skin cancer screening, cosmetic procedures like Botox etc.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Do I need a consultation before getting treatment?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We offer a wide range of dermatology treatments, including acne care, psoriasis management, skin cancer screening, cosmetic procedures like Botox etc.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Are your treatments suitable for all skin types?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We offer a wide range of dermatology treatments, including acne care, psoriasis management, skin cancer screening, cosmetic procedures like Botox etc.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Do you offer cosmetic dermatology services?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We offer a wide range of dermatology treatments, including acne care, psoriasis management, skin cancer screening, cosmetic procedures like Botox etc.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    What should I expect during my first visit?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We offer a wide range of dermatology treatments, including acne care, psoriasis management, skin cancer screening, cosmetic procedures like Botox etc.</p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- FAQ Accordion End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Faqs Section End -->

<!-- Our Testimonials Section Start -->
<div class="our-testimonials">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp"><?php echo esc_html($testimonials_section['testimonials_subtitle'] ?? 'testimonials'); ?></h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo esc_html($testimonials_section['testimonials_title'] ?? 'Real patient stories that reflect exceptional skin care'); ?></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($testimonials_section['testimonials_description'] ?? 'Hear from our satisfied patients about their journey to healthier, glowing skin. Their stories reflect the care, expertise.'); ?></p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Testimonial Slider Start -->
                <div class="testimonial-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper" data-cursor-text="Drag">
                            <?php if (!empty($testimonial_items)): ?>
                                <?php foreach ($testimonial_items as $testimonial): ?>
                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-quote">
                                                <img src="<?php echo esc_url($theme_uri); ?>/images/testimonial-quote.svg" alt="">
                                            </div>
                                            
                                            <div class="testimonial-body">
                                                <div class="testimonial-rating">
                                                    <?php 
                                                    $rating = intval($testimonial['testimonial_rating'] ?? 5);
                                                    for ($i = 0; $i < $rating; $i++): 
                                                    ?>
                                                        <i class="fa-solid fa-star"></i>
                                                    <?php endfor; ?>
                                                </div>
                                                <div class="testimonial-content">
                                                    <p><?php echo esc_html($testimonial['testimonial_content']); ?></p>
                                                </div>

                                                <div class="author-info">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <?php if (!empty($testimonial['testimonial_author_image'])): ?>
                                                                <?php echo wp_get_attachment_image($testimonial['testimonial_author_image'], 'full', false, ['alt' => $testimonial['testimonial_author_name'] ?? '']); ?>
                                                            <?php else: ?>
                                                                <img src="<?php echo esc_url($theme_uri); ?>/images/author-1.jpg" alt="">
                                                            <?php endif; ?>
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <h3><?php echo esc_html($testimonial['testimonial_author_name'] ?? 'John Doe'); ?></h3>
                                                        <p><?php echo esc_html($testimonial['testimonial_author_title'] ?? 'Patient'); ?></p>
                                                    </div>   
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->
                                <?php endforeach; ?>
                            <?php else: ?>
                                <!-- Default Testimonials -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-quote">
                                            <img src="<?php echo esc_url($theme_uri); ?>/images/testimonial-quote.svg" alt="">
                                        </div>
                                        
                                        <div class="testimonial-body">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>The experts at this clinic took the time to truly understand my condition and prescribed a treatment plan that worked wonders. The combination of medical treatments.</p>
                                            </div>

                                            <div class="author-info">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="<?php echo esc_url($theme_uri); ?>/images/author-1.jpg" alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>dianne russell</h3>
                                                    <p>eczema treatment</p>
                                                </div>   
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-quote">
                                            <img src="<?php echo esc_url($theme_uri); ?>/images/testimonial-quote.svg" alt="">
                                        </div>
                                        
                                        <div class="testimonial-body">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>The experts at this clinic took the time to truly understand my condition and prescribed a treatment plan that worked wonders. The combination of medical treatments.</p>
                                            </div>

                                            <div class="author-info">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="<?php echo esc_url($theme_uri); ?>/images/author-2.jpg" alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>jenny wilson</h3>
                                                    <p>skin expert</p>
                                                </div>   
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="testimonial-pagination"></div>
                    </div>
                </div>
                <!-- Testimonial Slider End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Testimonials Section End -->


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

<?php get_footer(); ?>