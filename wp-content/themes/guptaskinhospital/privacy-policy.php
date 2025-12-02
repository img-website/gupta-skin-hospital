<?php
/* Template Name: Privacy Policy */
get_header();
?>

    <!-- Page Header Start -->
    <div class="page-header bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque"><?php the_title(); ?></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Privacy Policy Content Section Start -->
    <div class="privacy-policy-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    
                    <!-- Policy Content -->
                    <div class="policy-content wow fadeInUp">
                        <?php 
                        if (have_posts()) {
                            the_post();
                            the_content();
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Privacy Policy Content Section End -->

<?php get_footer(); ?>

<style>
.privacy-policy-section {
    padding: 60px 0;
}

.policy-content {
    font-size: 15px;
    line-height: 1.8;
    color: #666;
}

.policy-content h2 {
    font-size: 24px;
    font-weight: 600;
    color: #333;
    margin-top: 30px;
    margin-bottom: 15px;
}

.policy-content h3 {
    font-size: 18px;
    font-weight: 600;
    color: #555;
    margin-top: 20px;
    margin-bottom: 10px;
}

.policy-content p {
    margin-bottom: 12px;
}

.policy-content ul,
.policy-content ol {
    margin-bottom: 15px;
    padding-left: 20px;
}

.policy-content li {
    margin-bottom: 8px;
}

.policy-content a {
    color: #007bff;
    text-decoration: none;
}

.policy-content a:hover {
    text-decoration: underline;
}
</style>
