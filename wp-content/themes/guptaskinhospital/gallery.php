<?php
/* Template Name: Gallery Page */
get_header();

// Get all ACF fields
$gallery_page_title = get_field('gallery_page_title') ?: 'Image gallery';
$gallery_breadcrumb_home = get_field('gallery_breadcrumb_home') ?: home_url();
$gallery_images = get_field('gallery_images') ?: [];

$theme_uri = get_template_directory_uri();
?>


    <!-- Page Header Start -->
    <div class="page-header bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque"><?php echo esc_html($gallery_page_title); ?></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo esc_url($gallery_breadcrumb_home); ?>">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html($gallery_page_title); ?></li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Photo Gallery Section Start -->
    <div class="page-gallery">
        <div class="container">
            <!-- gallery section start -->
            <div class="row gallery-items page-gallery-box">
                <?php if (!empty($gallery_images)): ?>
                    <?php foreach ($gallery_images as $index => $image): ?>
                        <div class="col-lg-4 col-6">
                            <!-- image gallery start -->
                            <div class="photo-gallery wow fadeInUp" data-wow-delay="<?php echo esc_attr($index * 0.2); ?>s">
                                <a href="<?php echo esc_url(wp_get_attachment_url($image['gallery_image'])); ?>" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <?php echo wp_get_attachment_image($image['gallery_image'], 'full', false, ['alt' => 'Gallery Image']); ?>
                                    </figure>
                                </a>
                            </div>
                            <!-- image gallery end -->
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <!-- gallery section end -->
        </div>
    </div>
    <!-- Photo Gallery Section End -->
     
<?php get_footer(); ?>
