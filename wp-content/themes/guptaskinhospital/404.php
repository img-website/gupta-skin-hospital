<?php
/**
 * The template for displaying 404 pages (not found)
 */
get_header();

// Get all ACF fields
$error_page_title = get_field('error_page_title') ?: 'Oops! page not found';
$error_page_description = get_field('error_page_description') ?: 'The page you are looking for does not exist';
$error_page_image = get_field('error_page_image') ?: '';
$error_button_text = get_field('error_button_text') ?: 'back to home';
$error_button_link = get_field('error_button_link') ?: home_url();

$theme_uri = get_template_directory_uri();
?>


    <!-- error section start -->
    <div class="error-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Error Page Image Start -->
                    <div class="error-page-image wow fadeInUp">
                        <?php if (!empty($error_page_image)): ?>
                            <?php echo wp_get_attachment_image($error_page_image, 'full', false, ['alt' => 'Error Page']); ?>
                        <?php else: ?>
                            <img src="<?php echo esc_url($theme_uri); ?>/images/404-error-img.png" alt="">
                        <?php endif; ?>
                    </div>
                    <!-- Error Page Image End -->
                    
                    <!-- Error Page Content Start -->
                    <div class="error-page-content">
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo esc_html($error_page_title); ?></h2>
                        </div>
                        <div class="error-page-content-body">
                            <p class="wow fadeInUp" data-wow-delay="0.25s"><?php echo esc_html($error_page_description); ?></p>
                            <a class="btn-default wow fadeInUp" data-wow-delay="0.5s" href="<?php echo esc_url($error_button_link); ?>"><span><?php echo esc_html($error_button_text); ?></span></a>
                        </div>
                    </div>
                    <!-- Error Page Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- error section end -->
    
<?php get_footer(); ?>
