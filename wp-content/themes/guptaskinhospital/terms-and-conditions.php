<?php
/* Template Name: Terms and Conditions */
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

    <!-- Terms and Conditions Content Section Start -->
    <div class="terms-conditions-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    
                    <!-- Terms Content -->
                    <div class="terms-content wow fadeInUp">
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
    <!-- Terms and Conditions Content Section End -->

<?php get_footer(); ?>

<style>
.terms-conditions-section {
    padding: 60px 0;
}

.terms-content {
    font-size: 15px;
    line-height: 1.8;
    color: #666;
}

.terms-content h2 {
    font-size: 24px;
    font-weight: 600;
    color: #333;
    margin-top: 30px;
    margin-bottom: 15px;
}

.terms-content h3 {
    font-size: 18px;
    font-weight: 600;
    color: #555;
    margin-top: 20px;
    margin-bottom: 10px;
}

.terms-content p {
    margin-bottom: 12px;
}

.terms-content ul,
.terms-content ol {
    margin-bottom: 15px;
    padding-left: 20px;
}

.terms-content li {
    margin-bottom: 8px;
}

.terms-content a {
    color: #007bff;
    text-decoration: none;
}

.terms-content a:hover {
    text-decoration: underline;
}
</style>
