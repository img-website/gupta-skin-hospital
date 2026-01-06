<?php
/* Template Name: About Us */
get_header();

// Get theme URI for images
$theme_uri = get_template_directory_uri();

// Retrieve ACF Fields
$page_header_title = get_field('page_header_title') ?: 'About us';
$about_section = get_field('about_section') ?: [];
$about_counters = get_field('about_counters') ?: [];
$mission_vision_section = get_field('mission_vision_section') ?: [];
$mission_vision_items = get_field('mission_vision_items') ?: [];
$excellence_section = get_field('excellence_section') ?: [];
$excellence_items = get_field('excellence_items') ?: [];
$skincare_items = get_field('skincare_items') ?: [];
$faqs_section = get_field('faqs_section') ?: [];
$faq_items = get_field('faq_items') ?: [];
$testimonials_section = get_field('testimonials_section') ?: [];
$testimonial_items = get_field('testimonial_items') ?: [];

// Procedures / Facilities section fields (page-specific, editable from ACF)
$procedures_subtitle     = get_field('procedures_subtitle') ?: 'procedures & facilities';
$procedures_title        = get_field('procedures_title') ?: 'Procedures / Facilities Available';
$procedures_description  = get_field('procedures_description') ?: 'Explore the complete range of dermatology and cosmetology procedures available at our centre.';
$procedures_items        = get_field('procedures_items') ?: [];

// Doctor profile fields (page-specific, editable from ACF)
$doctor_section_title  = get_field('doctor_section_title') ?: 'Consultant Dermatologist';
$doctor_name           = get_field('doctor_name') ?: 'Dr. Rahul Gupta';
$doctor_qualification  = get_field('doctor_qualification') ?: "MBBS, SMS Medical College\nM.D. (Skin & V.D.), SMS Medical College Jaipur";
$doctor_experience     = get_field('doctor_experience') ?: 'Consultant Dermatologist & Director at Gupta Skin And Dental Hospital, Alwar (10+ years)';
$doctor_publications   = get_field('doctor_publications') ?: '5 publications in national & international journals';
$doctor_interest       = get_field('doctor_interest') ?: 'Acne, Melasma, Cosmetic Dermatology, Clinical Dermatology';
$doctor_previous_role  = get_field('doctor_previous_role') ?: 'Ex M.O., Rajeev Gandhi General Hospital, Alwar';
$doctor_image          = get_field('doctor_image'); // Image field (ID)
?>
    <!-- Page Header Start -->
    <div class="page-header bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque"><?php echo esc_html($page_header_title); ?></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html($page_header_title); ?></li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

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

    <!-- Doctor Profile Section Start -->
    <div class="doctor-profile bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="doctor-profile-image">
                        <figure class="image-anime reveal">
                            <?php if (!empty($doctor_image)) : ?>
                                <?php echo wp_get_attachment_image($doctor_image, 'full', false, ['alt' => esc_attr($doctor_name)]); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url($theme_uri); ?>/images/Dr-Rahul-Gupta.webp" alt="<?php echo esc_attr($doctor_name); ?>">
                            <?php endif; ?>
                        </figure>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="doctor-profile-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">
                                <?php echo esc_html($doctor_section_title); ?>
                            </h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">
                                <?php echo esc_html($doctor_name); ?>
                            </h2>
                        </div>

                        <div class="about-us-body">
                            <div class="about-body-content">
                                <p class="doctor-qualification wow fadeInUp" data-wow-delay="0.2s">
                                    <?php echo nl2br(esc_html($doctor_qualification)); ?>
                                </p>

                                <div class="about-body-list doctor-details wow fadeInUp" data-wow-delay="0.3s">
                                    <ul>
                                        <?php if (!empty($doctor_previous_role)) : ?>
                                            <li><?php echo esc_html($doctor_previous_role); ?></li>
                                        <?php endif; ?>
                                        <?php if (!empty($doctor_experience)) : ?>
                                            <li><?php echo esc_html($doctor_experience); ?></li>
                                        <?php endif; ?>
                                        <?php if (!empty($doctor_publications)) : ?>
                                            <li><?php echo esc_html($doctor_publications); ?></li>
                                        <?php endif; ?>
                                        <?php if (!empty($doctor_interest)) : ?>
                                            <li><?php echo esc_html('Area of Interest: ' . $doctor_interest); ?></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Doctor Profile Section End -->

    <!-- Procedures / Facilities Section Start -->
    <div class="about-us procedures-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Procedures Content Start -->
                    <div class="about-us-content">
                        <div class="section-title section-title-center">
                            <h3 class="wow fadeInUp">
                                <?php echo esc_html($procedures_subtitle); ?>
                            </h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">
                                <?php echo esc_html($procedures_title); ?>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                <?php echo esc_html($procedures_description); ?>
                            </p>
                        </div>

                        <!-- Procedures Cards -->
                        <div class="procedures-grid wow fadeInUp" data-wow-delay="0.3s">
                            <?php if (!empty($procedures_items)) : ?>
                                <?php foreach ($procedures_items as $procedure) : ?>
                                    <div class="procedure-card">
                                        <?php if (!empty($procedure['procedure_title'])) : ?>
                                            <h4><?php echo esc_html($procedure['procedure_title']); ?></h4>
                                        <?php endif; ?>

                                        <?php if (!empty($procedure['procedure_subtitle'])) : ?>
                                            <p class="procedure-subtitle">
                                                <?php echo esc_html($procedure['procedure_subtitle']); ?>
                                            </p>
                                        <?php endif; ?>

                                        <?php if (!empty($procedure['procedure_points'])) : ?>
                                            <ul>
                                                <?php foreach ($procedure['procedure_points'] as $point) : ?>
                                                    <?php if (!empty($point['procedure_point_text'])) : ?>
                                                        <li><?php echo esc_html($point['procedure_point_text']); ?></li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <!-- Fallback: static content if no ACF data -->
                                <div class="procedure-card">
                                    <h4>HYDRAFACIAL</h4>
                                    <ul>
                                        <li>For Glow &amp; Antiaging</li>
                                    </ul>
                                </div>

                                <div class="procedure-card">
                                    <h4>EXCIMER LASER &amp; NBUVB CHAMBER</h4>
                                    <ul>
                                        <li>For Vitiligo (Treatment of White Spots)</li>
                                        <li>Once a Month Session Required</li>
                                        <li>Very Effective in Psoriasis</li>
                                    </ul>
                                </div>

                                <div class="procedure-card">
                                    <h4>CHEMICAL PEELING</h4>
                                    <p class="procedure-subtitle">All Type of Peels Available For –</p>
                                    <ul>
                                        <li>Glow</li>
                                        <li>Decreasing Pigmentation</li>
                                        <li>Acne</li>
                                        <li>Acne Scar</li>
                                    </ul>
                                </div>

                                <div class="procedure-card">
                                    <h4>HIFU (Ultracel Q+)</h4>
                                    <p class="procedure-subtitle">For –</p>
                                    <ul>
                                        <li>Skin Tightening</li>
                                        <li>Face Lifting &amp; Contouring</li>
                                        <li>No Pain, No Downtime, No Side Effects &amp; Quick Results</li>
                                    </ul>
                                </div>

                                <div class="procedure-card">
                                    <h4>DIODE LASER HAIR REMOVAL (ALMA SOPRANO ICE PLATINUM)</h4>
                                    <ul>
                                        <li>World's Best Diode Laser</li>
                                        <li>Triple Wavelength Laser</li>
                                        <li>USFDA Approved For Indian Skin</li>
                                        <li>Painless</li>
                                        <li>Very Less Downtime</li>
                                    </ul>
                                </div>

                                <div class="procedure-card">
                                    <h4>MICRONEEDLING R.F. (Explore, Korean)</h4>
                                    <p class="procedure-subtitle">For –</p>
                                    <ul>
                                        <li>Acne Scar</li>
                                        <li>Wrinkles</li>
                                        <li>Stretch marks</li>
                                    </ul>
                                </div>

                                <div class="procedure-card">
                                    <h4>RADIOFREQUENCY ABLATION</h4>
                                    <ul>
                                        <li>For Removal of Warts, Skin Tag &amp; Moles</li>
                                    </ul>
                                </div>

                                <div class="procedure-card">
                                    <h4>PRP THERAPY</h4>
                                    <ul>
                                        <li>For Hair Growth</li>
                                        <li>Facial Rejuvenation</li>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- Procedures Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Procedures / Facilities Section End -->

    <!-- Mission Vision Section Start -->
    <div class="our-mission-vision bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp"><?php echo esc_html($mission_vision_section['mission_vision_subtitle']); ?></h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo esc_html($mission_vision_section['mission_vision_title']); ?></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($mission_vision_section['mission_vision_description']); ?></p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="mission-vision-list">
                        <?php if (!empty($mission_vision_items)): ?>
                            <?php foreach ($mission_vision_items as $index => $item): ?>
                                <!-- Mission Vision Item Start -->
                                <div class="mission-vision-item <?php echo ($item['mission_item_active']) ? 'active' : ''; ?> wow fadeInUp" data-wow-delay="<?php echo esc_attr($index * 0.2); ?>s">
                                    <div class="icon-box">
                                        <?php if (!empty($item['mission_item_icon'])): ?>
                                            <?php echo wp_get_attachment_image($item['mission_item_icon'], 'full', false, ['alt' => $item['mission_item_title']]); ?>
                                        <?php else: ?>
                                            <i class="fa-solid fa-target"></i>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mission-vision-content">
                                        <h3><?php echo esc_html($item['mission_item_title']); ?></h3>
                                        <p><?php echo esc_html($item['mission_item_description']); ?></p>
                                    </div>
                                </div>
                                <!-- Mission Vision Item End -->
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission Vision Section End -->


    <!-- Our Excellence Section Start -->
    <div class="our-excellence">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Excellence Content Start -->
                    <div class="our-excellence-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp"><?php echo esc_html($excellence_section['excellence_subtitle']); ?></h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo esc_html($excellence_section['excellence_title']); ?></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($excellence_section['excellence_description']); ?></p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Our Excellence Body Start -->
                        <div class="our-excellence-body">
                            <?php if (!empty($excellence_items)): ?>
                                <?php foreach ($excellence_items as $index => $item): ?>
                                    <!-- Excellence Item Start -->
                                    <div class="excellence-item wow fadeInUp" data-wow-delay="<?php echo esc_attr(($index + 1) * 0.2 + 0.2); ?>s">
                                        <div class="excellence-item-no">
                                            <h3><?php echo esc_html($index + 1); ?></h3>
                                        </div>
                                        <div class="excellence-item-content">
                                            <h3><?php echo esc_html($item['excellence_item_title']); ?></h3>
                                            <p><?php echo esc_html($item['excellence_item_description']); ?></p>
                                        </div>
                                    </div>
                                    <!-- Excellence Item End -->
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <!-- Our Excellence Body End -->
                    </div>
                    <!-- Our Excellence Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Our Excellence Image Start -->
                    <div class="our-excellence-image">
                        <div class="our-excellence-img">
                            <figure class="image-anime reveal">
                                <?php 
                                if (!empty($excellence_section['excellence_image'])): 
                                    echo wp_get_attachment_image($excellence_section['excellence_image'], 'full', false, ['alt' => 'Excellence Image']);
                                else:
                                ?>
                                    <img src="<?php echo esc_url($theme_uri); ?>/images/excellence-image.jpg" alt="">
                                <?php 
                                endif; 
                                ?>
                            </figure>
                        </div>

                        <!-- Skincare List Start -->
                        <div class="skincare-list">
                            <?php if (!empty($skincare_items)): ?>
                                <?php foreach ($skincare_items as $item): ?>
                                    <!-- Skincare Item Start -->
                                    <div class="skincare-item <?php echo ($item['skincare_item_active']) ? 'active' : ''; ?>">
                                        <div class="icon-box">
                                            <?php if (!empty($item['skincare_item_icon'])): ?>
                                                <?php echo wp_get_attachment_image($item['skincare_item_icon'], 'full', false, ['alt' => $item['skincare_item_title']]); ?>
                                            <?php else: ?>
                                                <i class="fa-solid fa-spa"></i>
                                            <?php endif; ?>
                                        </div>
                                        <div class="skincare-item-content">
                                            <h3><?php echo esc_html($item['skincare_item_title']); ?></h3>
                                            <p><?php echo esc_html($item['skincare_item_description']); ?></p>
                                        </div>
                                    </div>
                                    <!-- Skincare Item End -->
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <!-- Skincare List End -->
                    </div>
                    <!-- Our Excellence Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Excellence Section End -->

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


<?php get_footer(); ?>
