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
			<div id="loading-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/guptaLoaderWhite.webp" alt=""></div>
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
						<?php
							$header_logo = get_field('header_logo', 'option');
							if ($header_logo && isset($header_logo['desktop_logo'])) {
								$logo_id = $header_logo['desktop_logo'];
								$logo_url = wp_get_attachment_image_src($logo_id, 'full')[0];
								$logo_alt = get_post_meta($logo_id, '_wp_attachment_image_alt', true);
								?>
								<img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr($logo_alt ?: 'Logo'); ?>">
								<?php
							} else {
								?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Logo">
								<?php
							}
						?>
					</a>
					<!-- Logo End -->

					<!-- Main Menu Start -->
					<div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <?php
                                    $nav_call_link = get_field('primary_call_phone_link', 'option') ?: '';
                                    if (empty($nav_call_link)) {
                                        $ac = get_field('appointment_contacts', 'option') ?: [];
                                        $nav_call_link = !empty($ac[0]['contact_phone_link']) ? $ac[0]['contact_phone_link'] : 'tel:+919876543210';
                                    }
                                    $navigation_menu = get_field('navigation_menu', 'option');
                                    if ($navigation_menu && is_array($navigation_menu)) {
                                        foreach ($navigation_menu as $menu_item) {
                                            $menu_text = isset($menu_item['menu_text']) ? $menu_item['menu_text'] : '';
                                            $menu_link = isset($menu_item['menu_link']) ? $menu_item['menu_link'] : '#';
                                            $href = $menu_link;
                                            $contact_page_url = function_exists('gsh_get_contact_page_url') ? gsh_get_contact_page_url() : '';
                                            $is_contact_page = $contact_page_url && function_exists('gsh_is_contact_page_link') && gsh_is_contact_page_link($menu_link, $contact_page_url);
                                            if ($menu_link && !$is_contact_page && (strpos($menu_link, 'contact') !== false || strpos($menu_link, 'book-appointment') !== false)) {
                                                $href = $nav_call_link;
                                            }
                                            $menu_target = isset($menu_item['menu_item_target']) && $menu_item['menu_item_target'] ? '_blank' : '_self';
                                            $target_attr = ($menu_target === '_blank' && strpos($href, 'tel:') !== 0) ? ' target="_blank" rel="noopener noreferrer"' : '';
                                            ?>
                                            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url($href); ?>"<?php echo $target_attr; ?>><?php echo esc_html($menu_text); ?></a></li>
                                            <?php
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                        
                        <!-- Header Btn Start (direct call – no form) -->
                        <div class="header-btn">
                            <?php
                                $primary_call = get_field('primary_call_phone_link', 'option') ?: '';
                                if (empty($primary_call) && function_exists('get_field')) {
                                    $contacts = get_field('appointment_contacts', 'option') ?: [];
                                    $primary_call = !empty($contacts[0]['contact_phone_link']) ? $contacts[0]['contact_phone_link'] : 'tel:+919876543210';
                                }
                                if (empty($primary_call)) { $primary_call = 'tel:+919876543210'; }
                                $header_cta = get_field('header_cta', 'option');
                                $cta_label = ($header_cta && !empty($header_cta['cta_label'])) ? $header_cta['cta_label'] : 'Book Appointment';
                                ?>
                                <a href="<?php echo esc_url($primary_call); ?>" class="btn-default"><?php echo esc_html($cta_label); ?></a>
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