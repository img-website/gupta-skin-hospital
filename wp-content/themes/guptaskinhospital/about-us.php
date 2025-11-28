<?php
/* Template Name: About Us */
get_header();

// Get theme URI for images
$theme_uri = get_template_directory_uri();

// Retrieve ACF Fields
$page_header_title = get_field('page_header_title') ?: 'About us';
$mission_vision_section = get_field('mission_vision_section') ?: [];
$mission_vision_items = get_field('mission_vision_items') ?: [];
$excellence_section = get_field('excellence_section') ?: [];
$excellence_items = get_field('excellence_items') ?: [];
$skincare_items = get_field('skincare_items') ?: [];
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


<?php get_footer(); ?>
