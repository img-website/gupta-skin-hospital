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

<?php get_footer(); ?>