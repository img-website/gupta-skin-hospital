<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;family=Marcellus&amp;display=swap" rel="stylesheet">
	
	<?php wp_head(); ?>
</head>
<body>

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/loader.svg" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

    <!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Logo">
					</a>
					<!-- Logo End -->

					<!-- Main Menu Start -->
					<div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item submenu"><a class="nav-link" href="<?php echo home_url(); ?>">Home</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>">Home - Main</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/index-image'); ?>">Home - Image</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/index-video'); ?>">Home - Video</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/index-slider'); ?>">Home - Slider</a></li>
                                    </ul>
                                </li>                                
                                <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/about'); ?>">About Us</a>
                                <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/services'); ?>">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/blog'); ?>">Blog</a></li>
                                <li class="nav-item submenu"><a class="nav-link" href="#">Pages</a>
                                    <ul>                                        
                                        <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/service-details'); ?>">Service Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/blog-details'); ?>">Blog Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/case-study'); ?>">Case Study</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/case-study-details'); ?>">Case Study details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/team'); ?>">Our Team</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/team-details'); ?>">Team Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/testimonials'); ?>">Testimonials</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/image-gallery'); ?>">Image Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/video-gallery'); ?>">Video Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/faqs'); ?>">FAQs</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/404'); ?>">404</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/contact'); ?>">Contact Us</a></li>
                                <li class="nav-item highlighted-menu"><a class="nav-link" href="<?php echo home_url('/book-appointment'); ?>">Book Appointment</a></li>                    
                            </ul>
                        </div>
                        
                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a href="<?php echo home_url('/book-appointment'); ?>" class="btn-default">Book Appointment</a>
                        </div>
                        <!-- Header Btn End -->
					</div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->
