<?php
function gupta_skin_hospital_enqueue_assets() {
    $theme_uri = get_template_directory_uri();
    
    // ========== CSS FILES ==========
    
    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        $theme_uri . '/css/bootstrap.min.css',
        array(),
        '1.0.0',
        'all'
    );
    
    // SlickNav CSS
    wp_enqueue_style(
        'slicknav-css',
        $theme_uri . '/css/slicknav.min.css',
        array(),
        '1.0.0',
        'all'
    );
    
    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        $theme_uri . '/css/swiper-bundle.min.css',
        array(),
        '1.0.0',
        'all'
    );
    
    // Font Awesome CSS
    wp_enqueue_style(
        'fontawesome-css',
        $theme_uri . '/css/all.min.css',
        array(),
        '1.0.0',
        'all'
    );
    
    // Animate CSS
    wp_enqueue_style(
        'animate-css',
        $theme_uri . '/css/animate.css',
        array(),
        '1.0.0',
        'all'
    );
    
    // Magnific Popup CSS
    wp_enqueue_style(
        'magnific-popup-css',
        $theme_uri . '/css/magnific-popup.css',
        array(),
        '1.0.0',
        'all'
    );
    
    // Mouse Cursor CSS
    wp_enqueue_style(
        'mousecursor-css',
        $theme_uri . '/css/mousecursor.css',
        array(),
        '1.0.0',
        'all'
    );
    
    // Image Comparison CSS
    wp_enqueue_style(
        'twentytwenty-css',
        $theme_uri . '/css/twentytwenty.css',
        array(),
        '1.0.0',
        'all'
    );
    
    // Custom CSS
    wp_enqueue_style(
        'custom-css',
        $theme_uri . '/css/custom.css',
        array(),
        '1.0.0',
        'all'
    );
    
    // ========== JS FILES ==========
    
    // jQuery (use WordPress bundled jQuery)
    wp_enqueue_script(
        'jquery'
    );
    
    // Bootstrap JS
    wp_enqueue_script(
        'bootstrap-js',
        $theme_uri . '/js/bootstrap.min.js',
        array('jquery'),
        '1.0.0',
        true
    );
    
    // Validator JS
    wp_enqueue_script(
        'validator-js',
        $theme_uri . '/js/validator.min.js',
        array('jquery'),
        '1.0.0',
        true
    );
    
    // SlickNav JS
    wp_enqueue_script(
        'slicknav-js',
        $theme_uri . '/js/jquery.slicknav.js',
        array('jquery'),
        '1.0.0',
        true
    );
    
    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        $theme_uri . '/js/swiper-bundle.min.js',
        array(),
        '1.0.0',
        true
    );
    
    // Waypoints JS (Counter dependency)
    wp_enqueue_script(
        'waypoints-js',
        $theme_uri . '/js/jquery.waypoints.min.js',
        array('jquery'),
        '1.0.0',
        true
    );
    
    // Counter JS
    wp_enqueue_script(
        'counterup-js',
        $theme_uri . '/js/jquery.counterup.min.js',
        array('jquery', 'waypoints-js'),
        '1.0.0',
        true
    );
    
    // Magnific Popup JS
    wp_enqueue_script(
        'magnific-popup-js',
        $theme_uri . '/js/jquery.magnific-popup.min.js',
        array('jquery'),
        '1.0.0',
        true
    );
    
    // SmoothScroll JS
    wp_enqueue_script(
        'smoothscroll-js',
        $theme_uri . '/js/SmoothScroll.js',
        array(),
        '1.0.0',
        true
    );
    
    // Parallax JS
    wp_enqueue_script(
        'parallaxie-js',
        $theme_uri . '/js/parallaxie.js',
        array('jquery'),
        '1.0.0',
        true
    );
    
    // Image Comparison - Move Event JS
    wp_enqueue_script(
        'jquery-event-move-js',
        $theme_uri . '/js/jquery.event.move.js',
        array('jquery'),
        '1.0.0',
        true
    );
    
    // Image Comparison - Twenty Twenty JS
    wp_enqueue_script(
        'twentytwenty-js',
        $theme_uri . '/js/jquery.twentytwenty.js',
        array('jquery', 'jquery-event-move-js'),
        '1.0.0',
        true
    );
    
    // GSAP JS
    wp_enqueue_script(
        'gsap-js',
        $theme_uri . '/js/gsap.min.js',
        array(),
        '1.0.0',
        true
    );
    
    // Magic Cursor JS
    wp_enqueue_script(
        'magiccursor-js',
        $theme_uri . '/js/magiccursor.js',
        array('gsap-js'),
        '1.0.0',
        true
    );
    
    // SplitText JS (GSAP plugin)
    wp_enqueue_script(
        'splittext-js',
        $theme_uri . '/js/SplitText.js',
        array('gsap-js'),
        '1.0.0',
        true
    );
    
    // ScrollTrigger JS (GSAP plugin)
    wp_enqueue_script(
        'scrolltrigger-js',
        $theme_uri . '/js/ScrollTrigger.min.js',
        array('gsap-js'),
        '1.0.0',
        true
    );
    
    // YouTube Player JS
    wp_enqueue_script(
        'ytplayer-js',
        $theme_uri . '/js/jquery.mb.YTPlayer.min.js',
        array('jquery'),
        '1.0.0',
        true
    );
    
    // WOW JS (Animate on scroll)
    wp_enqueue_script(
        'wow-js',
        $theme_uri . '/js/wow.min.js',
        array(),
        '1.0.0',
        true
    );
    
    // Main Custom JS
    wp_enqueue_script(
        'custom-js',
        $theme_uri . '/js/function.js',
        array('jquery', 'bootstrap-js', 'swiper-js', 'wow-js'),
        '1.0.0',
        true
    );
}

// Hook the function to wp_enqueue_scripts action
add_action('wp_enqueue_scripts', 'gupta_skin_hospital_enqueue_assets');

// Add theme support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');


add_action('acf/init', function () {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    };
    
    
    // Options Pages
    acf_add_options_page([
        'page_title' => 'Header Settings',
        'menu_title' => 'Header Settings',
        'menu_slug' => 'header-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
        'position' => 30
    ]);

    acf_add_options_page([
        'page_title' => 'Footer Settings',
        'menu_title' => 'Footer Settings',
        'menu_slug' => 'footer-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
        'position' => 31
    ]);

    // ACF Field Group for Header Settings
    acf_add_local_field_group([
        'key' => 'group_header_settings',
        'title' => 'Header Settings',
        'fields' => [
            [
                'key' => 'field_header_logo',
                'label' => 'Header Logo',
                'name' => 'header_logo',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'field_desktop_logo',
                        'label' => 'Desktop Logo',
                        'name' => 'desktop_logo',
                        'type' => 'image',
                        'return_format' => 'id',
                        'preview_size' => 'medium',
                        'instructions' => 'Upload your logo image',
                        'mime_types' => 'jpg,jpeg,png,webp,svg'
                    ],
                ],
            ],
            [
                'key' => 'field_navigation_menu',
                'label' => 'Navigation Menu Items',
                'name' => 'navigation_menu',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Menu Item',
                'sub_fields' => [
                    [
                        'key' => 'field_menu_item_text',
                        'label' => 'Menu Text',
                        'name' => 'menu_text',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => '50%',
                        ],
                    ],
                    [
                        'key' => 'field_menu_item_link',
                        'label' => 'Menu Link',
                        'name' => 'menu_link',
                        'type' => 'page_link',
                        'post_type' => '',
                        'allow_null' => 1,
                        'allow_archives' => 1,
                        'return_format' => 'url',
                        'wrapper' => [
                            'width' => '50%',
                        ],
                    ],
                    [
                        'key' => 'field_menu_item_target',
                        'label' => 'Open in New Tab',
                        'name' => 'menu_item_target',
                        'type' => 'true_false',
                        'ui' => 1,
                        'default_value' => 0,
                        'wrapper' => [
                            'width' => '100%',
                        ],
                    ],
                ],
            ],
            [
                'key' => 'field_header_cta',
                'label' => 'Header Button (CTA)',
                'name' => 'header_cta',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'field_header_cta_label',
                        'label' => 'Button Label',
                        'name' => 'cta_label',
                        'type' => 'text',
                        'default_value' => 'Book Appointment',
                        'wrapper' => [
                            'width' => '50%',
                        ],
                    ],
                    [
                        'key' => 'field_header_cta_link',
                        'label' => 'Button Link',
                        'name' => 'cta_link',
                        'type' => 'page_link',
                        'post_type' => '',
                        'allow_null' => 0,
                        'allow_archives' => 1,
                        'return_format' => 'url',
                        'wrapper' => [
                            'width' => '50%',
                        ],
                    ],
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'header-settings',
                ],
            ],
        ],
    ]);

    // ACF Field Group for Footer Settings
    acf_add_local_field_group([
        'key' => 'group_footer_settings',
        'title' => 'Footer Settings',
        'fields' => [
            [
                'key' => 'field_footer_branding',
                'label' => 'Footer Branding',
                'name' => 'footer_branding',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'field_footer_logo',
                        'label' => 'Footer Logo',
                        'name' => 'footer_logo',
                        'type' => 'image',
                        'return_format' => 'id',
                        'preview_size' => 'medium',
                        'mime_types' => 'jpg,jpeg,png,webp,svg'
                    ],
                    [
                        'key' => 'field_footer_description',
                        'label' => 'Description',
                        'name' => 'footer_description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'new_lines' => '',
                        'default_value' => 'With a passion for skin health, Dermal combines the latest technologies.'
                    ],
                ],
            ],
            [
                'key' => 'field_footer_contact_cards',
                'label' => 'Contact Cards',
                'name' => 'footer_contact_cards',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Contact Card',
                'sub_fields' => [
                    [
                        'key' => 'field_footer_contact_icon',
                        'label' => 'Icon',
                        'name' => 'contact_icon',
                        'type' => 'image',
                        'return_format' => 'id',
                        'preview_size' => 'thumbnail',
                        'mime_types' => 'jpg,jpeg,png,webp,svg',
                        'wrapper' => [
                            'width' => '25%',
                        ],
                    ],
                    [
                        'key' => 'field_footer_contact_title',
                        'label' => 'Title',
                        'name' => 'contact_title',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => '35%',
                        ],
                    ],
                    [
                        'key' => 'field_footer_contact_subtitle',
                        'label' => 'Subtitle',
                        'name' => 'contact_subtitle',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => '40%',
                        ],
                    ],
                    [
                        'key' => 'field_footer_contact_link_label',
                        'label' => 'Link Label',
                        'name' => 'contact_link_label',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => '50%',
                        ],
                    ],
                    [
                        'key' => 'field_footer_contact_link',
                        'label' => 'Link (URL / tel / mailto)',
                        'name' => 'contact_link',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => '50%',
                        ],
                    ],
                ],
            ],
            [
                'key' => 'field_footer_get_in_touch',
                'label' => 'Get In Touch',
                'name' => 'footer_get_in_touch',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'field_footer_location',
                        'label' => 'Location Text',
                        'name' => 'location_text',
                        'type' => 'textarea',
                        'rows' => 2,
                    ],
                    [
                        'key' => 'field_footer_email_label',
                        'label' => 'Email Label',
                        'name' => 'email_label',
                        'type' => 'text',
                        'default_value' => 'Email',
                    ],
                    [
                        'key' => 'field_footer_email',
                        'label' => 'Email Address',
                        'name' => 'email_address',
                        'type' => 'email',
                    ],
                ],
            ],
            [
                'key' => 'field_footer_quick_links',
                'label' => 'Quick Links',
                'name' => 'footer_quick_links',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Link',
                'sub_fields' => [
                    [
                        'key' => 'field_footer_link_label',
                        'label' => 'Label',
                        'name' => 'label',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => '50%',
                        ],
                    ],
                    [
                        'key' => 'field_footer_link_url',
                        'label' => 'URL',
                        'name' => 'url',
                        'type' => 'page_link',
                        'wrapper' => [
                            'width' => '50%',
                        ],
                    ],
                ],
            ],
            [
                'key' => 'field_footer_social_links',
                'label' => 'Social Links',
                'name' => 'footer_social_links',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Social Link',
                'sub_fields' => [
                    [
                        'key' => 'field_footer_social_label',
                        'label' => 'Label',
                        'name' => 'label',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => '33%',
                        ],
                    ],
                    [
                        'key' => 'field_footer_social_icon',
                        'label' => 'Icon Class',
                        'name' => 'icon_class',
                        'type' => 'text',
                        'instructions' => 'Example: fa-brands fa-facebook-f',
                        'wrapper' => [
                            'width' => '33%',
                        ],
                    ],
                    [
                        'key' => 'field_footer_social_url',
                        'label' => 'URL',
                        'name' => 'url',
                        'type' => 'page_link',
                        'wrapper' => [
                            'width' => '34%',
                        ],
                    ],
                ],
            ],
            [
                'key' => 'field_footer_social_title',
                'label' => 'Social Section Title',
                'name' => 'footer_social_title',
                'type' => 'text',
                'default_value' => 'Follow us on social',
            ],
            [
                'key' => 'field_footer_copyright',
                'label' => 'Copyright Text',
                'name' => 'footer_copyright_text',
                'type' => 'text',
                'default_value' => 'Copyright © ' . date('Y') . ' All Rights Reserved.',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'footer-settings',
                ],
            ],
        ],
    ]);

    // ACF Field Group for Home Page Settings
    acf_add_local_field_group([
        'key' => 'group_home_page_settings',
        'title' => 'Home Page Settings',
        'fields' => [
            // Hero Section
            [
                'key' => 'field_hero_section',
                'label' => 'Hero Section',
                'name' => 'hero_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'field_hero_title',
                        'label' => 'Hero Title',
                        'name' => 'hero_title',
                        'type' => 'text',
                        'default_value' => 'Comprehensive care for your skin\'s health and beauty',
                    ],
                    [
                        'key' => 'field_hero_description',
                        'label' => 'Hero Description',
                        'name' => 'hero_description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'default_value' => 'At Logoipsum we believe in creating digital solution that drive real-world impact. From creative strategies to cutting-edge.',
                    ],
                    [
                        'key' => 'field_hero_button_text',
                        'label' => 'Button Text',
                        'name' => 'hero_button_text',
                        'type' => 'text',
                        'default_value' => 'Book Appointment',
                    ],
                    [
                        'key' => 'field_hero_button_link',
                        'label' => 'Button Link',
                        'name' => 'hero_button_link',
                        'type' => 'page_link',
                        'default_value' => '#',
                    ],
                    [
                        'key' => 'field_hero_review_text',
                        'label' => 'Review Text',
                        'name' => 'hero_review_text',
                        'type' => 'text',
                        'default_value' => 'I am beyond thrilled with the results of my facelift.',
                    ],
                    [
                        'key' => 'field_hero_review_rating',
                        'label' => 'Review Rating',
                        'name' => 'hero_review_rating',
                        'type' => 'text',
                        'default_value' => '5.0',
                    ],
                    [
                        'key' => 'field_hero_review_image',
                        'label' => 'Review Image',
                        'name' => 'hero_review_image',
                        'type' => 'image',
                        'return_format' => 'id',
                    ],
                    [
                        'key' => 'field_hero_main_image',
                        'label' => 'Hero Main Image',
                        'name' => 'hero_main_image',
                        'type' => 'image',
                        'return_format' => 'id',
                    ],
                ],
            ],
            
            // Hero CTA Items
            [
                'key' => 'field_hero_cta_items',
                'label' => 'Hero CTA Items',
                'name' => 'hero_cta_items',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add CTA Item',
                'sub_fields' => [
                    [
                        'key' => 'field_cta_icon',
                        'label' => 'CTA Icon',
                        'name' => 'cta_icon',
                        'type' => 'image',
                        'return_format' => 'id',
                        'preview_size' => 'thumbnail',
                        'mime_types' => 'jpg,jpeg,png,webp,svg',
                        'wrapper' => ['width' => '25%'],
                    ],
                    [
                        'key' => 'field_cta_title',
                        'label' => 'CTA Title',
                        'name' => 'cta_title',
                        'type' => 'text',
                        'wrapper' => ['width' => '75%'],
                    ],
                    [
                        'key' => 'field_cta_sub_items',
                        'label' => 'CTA Items',
                        'name' => 'cta_items',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'button_label' => 'Add Item',
                        'sub_fields' => [
                            [
                                'key' => 'field_cta_label',
                                'label' => 'Label (in span)',
                                'name' => 'cta_label',
                                'type' => 'text',
                                'instructions' => 'Example: Email, Phone, etc.',
                                'wrapper' => ['width' => '30%'],
                            ],
                            [
                                'key' => 'field_cta_value',
                                'label' => 'Value',
                                'name' => 'cta_value',
                                'type' => 'text',
                                'instructions' => 'Example: info@domain.com, (123) 465 - 798',
                                'wrapper' => ['width' => '40%'],
                            ],
                            [
                                'key' => 'field_cta_link_sub',
                                'label' => 'Link',
                                'name' => 'cta_link',
                                'type' => 'text',
                                'instructions' => 'Example: mailto:info@domain.com, tel:(123)465798',
                                'wrapper' => ['width' => '30%'],
                            ],
                        ],
                    ],
                ],
            ],
            
            // About Section
            [
                'key' => 'field_about_section',
                'label' => 'About Section',
                'name' => 'about_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'field_about_title',
                        'label' => 'About Title',
                        'name' => 'about_title',
                        'type' => 'text',
                        'default_value' => 'about us',
                    ],
                    [
                        'key' => 'field_about_heading',
                        'label' => 'About Heading',
                        'name' => 'about_heading',
                        'type' => 'text',
                        'default_value' => 'Empowering Your Skin with Expert Care & Solutions',
                    ],
                    [
                        'key' => 'field_about_description',
                        'label' => 'About Description',
                        'name' => 'about_description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'default_value' => 'We\'re dedicated to helping you achieve and maintain beautiful, healthy skin. Trust us to provide exceptional care tailored to you.',
                    ],
                    [
                        'key' => 'field_about_list_items',
                        'label' => 'About List Items',
                        'name' => 'about_list_items',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'button_label' => 'Add List Item',
                        'sub_fields' => [
                            [
                                'key' => 'field_list_item_text',
                                'label' => 'List Item Text',
                                'name' => 'list_item_text',
                                'type' => 'text',
                            ],
                        ],
                    ],
                    [
                        'key' => 'field_about_button_text',
                        'label' => 'About Button Text',
                        'name' => 'about_button_text',
                        'type' => 'text',
                        'default_value' => 'about more',
                    ],
                    [
                        'key' => 'field_about_button_link',
                        'label' => 'About Button Link',
                        'name' => 'about_button_link',
                        'type' => 'page_link',
                        'default_value' => '#',
                    ],
                    [
                        'key' => 'field_video_button_text',
                        'label' => 'Video Button Text',
                        'name' => 'video_button_text',
                        'type' => 'text',
                        'default_value' => 'play session',
                    ],
                    [
                        'key' => 'field_video_url',
                        'label' => 'Video URL',
                        'name' => 'video_url',
                        'type' => 'page_link',
                        'default_value' => 'https://www.youtube.com/watch?v=Y-x0efG1seA',
                    ],
                    [
                        'key' => 'field_team_member_count',
                        'label' => 'Team Member Count',
                        'name' => 'team_member_count',
                        'type' => 'number',
                        'default_value' => 29,
                    ],
                    [
                        'key' => 'field_team_member_label',
                        'label' => 'Team Member Label',
                        'name' => 'team_member_label',
                        'type' => 'text',
                        'default_value' => 'Team members',
                    ],
                    [
                        'key' => 'field_team_member_icon',
                        'label' => 'Team Member Icon',
                        'name' => 'team_member_icon',
                        'type' => 'image',
                        'return_format' => 'id',
                        'preview_size' => 'thumbnail',
                        'mime_types' => 'jpg,jpeg,png,webp,svg',
                    ],
                    [
                        'key' => 'field_about_image_1',
                        'label' => 'About Image 1',
                        'name' => 'about_image_1',
                        'type' => 'image',
                        'return_format' => 'id',
                    ],
                    [
                        'key' => 'field_about_image_2',
                        'label' => 'About Image 2',
                        'name' => 'about_image_2',
                        'type' => 'image',
                        'return_format' => 'id',
                    ],
                ],
            ],
            
            // About Counter Section
            [
                'key' => 'field_about_counters',
                'label' => 'About Counters',
                'name' => 'about_counters',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Counter',
                'sub_fields' => [
                    [
                        'key' => 'field_counter_icon',
                        'label' => 'Counter Icon',
                        'name' => 'counter_icon',
                        'type' => 'image',
                        'return_format' => 'id',
                        'wrapper' => ['width' => '25%'],
                    ],
                    [
                        'key' => 'field_counter_number',
                        'label' => 'Counter Number',
                        'name' => 'counter_number',
                        'type' => 'number',
                        'wrapper' => ['width' => '25%'],
                    ],
                    [
                        'key' => 'field_counter_suffix',
                        'label' => 'Counter Suffix',
                        'name' => 'counter_suffix',
                        'type' => 'text',
                        'default_value' => '%',
                        'wrapper' => ['width' => '25%'],
                    ],
                    [
                        'key' => 'field_counter_text',
                        'label' => 'Counter Text',
                        'name' => 'counter_text',
                        'type' => 'text',
                        'wrapper' => ['width' => '25%'],
                    ],
                ],
            ],
            
            // Why Choose Us Section
            [
                'key' => 'field_why_choose_section',
                'label' => 'Why Choose Us Section',
                'name' => 'why_choose_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'field_why_choose_title',
                        'label' => 'Section Title',
                        'name' => 'why_choose_title',
                        'type' => 'text',
                        'default_value' => 'Why choose us',
                    ],
                    [
                        'key' => 'field_why_choose_heading',
                        'label' => 'Section Heading',
                        'name' => 'why_choose_heading',
                        'type' => 'text',
                        'default_value' => 'Why choose us for all your dermatology needs',
                    ],
                    [
                        'key' => 'field_why_choose_description',
                        'label' => 'Section Description',
                        'name' => 'why_choose_description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'default_value' => 'we\'re dedicated to helping you achieve and maintain beautiful, healthy skin. Trust us to provide exceptional care tailored to you.',
                    ],
                    [
                        'key' => 'field_why_choose_image',
                        'label' => 'Why Choose Image',
                        'name' => 'why_choose_image',
                        'type' => 'image',
                        'return_format' => 'id',
                    ],
                ],
            ],
            
            // Why Choose Items
            [
                'key' => 'field_why_choose_items',
                'label' => 'Why Choose Items',
                'name' => 'why_choose_items',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Why Choose Item',
                'sub_fields' => [
                    [
                        'key' => 'field_why_choose_icon',
                        'label' => 'Icon',
                        'name' => 'why_choose_icon',
                        'type' => 'image',
                        'return_format' => 'id',
                        'wrapper' => ['width' => '15%'],
                    ],
                    [
                        'key' => 'field_why_choose_item_title',
                        'label' => 'Item Title',
                        'name' => 'why_choose_item_title',
                        'type' => 'text',
                        'wrapper' => ['width' => '35%'],
                    ],
                    [
                        'key' => 'field_why_choose_item_description',
                        'label' => 'Item Description',
                        'name' => 'why_choose_item_description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'wrapper' => ['width' => '50%'],
                    ],
                ],
            ],
            
            // Our Process Section
            [
                'key' => 'field_our_process_section',
                'label' => 'Our Process Section',
                'name' => 'our_process_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'field_process_subtitle',
                        'label' => 'Process Subtitle',
                        'name' => 'process_subtitle',
                        'type' => 'text',
                        'default_value' => 'Our process',
                    ],
                    [
                        'key' => 'field_process_title',
                        'label' => 'Process Title',
                        'name' => 'process_title',
                        'type' => 'text',
                        'default_value' => 'Expert dermatology care for healthy, radiant skin',
                    ],
                    [
                        'key' => 'field_process_description',
                        'label' => 'Process Description',
                        'name' => 'process_description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'default_value' => 'From preventive care to specialized treatments, our wide range of services is designed to support your health at every stage.',
                    ],
                    [
                        'key' => 'field_process_list_items',
                        'label' => 'Process List Items',
                        'name' => 'process_list_items',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'button_label' => 'Add Item',
                        'sub_fields' => [
                            [
                                'key' => 'field_process_item_text',
                                'label' => 'Item Text',
                                'name' => 'process_item_text',
                                'type' => 'text',
                            ],
                        ],
                    ],
                    [
                        'key' => 'field_process_button_text',
                        'label' => 'Button Text',
                        'name' => 'process_button_text',
                        'type' => 'text',
                        'default_value' => 'learn more',
                    ],
                    [
                        'key' => 'field_process_button_link',
                        'label' => 'Button Link',
                        'name' => 'process_button_link',
                        'type' => 'page_link',
                        'default_value' => '#',
                    ],
                    [
                        'key' => 'field_process_footer_text',
                        'label' => 'Footer Text',
                        'name' => 'process_footer_text',
                        'type' => 'text',
                        'default_value' => 'Your skin\'s transformations a starts here - ',
                    ],
                    [
                        'key' => 'field_process_footer_link_text',
                        'label' => 'Footer Link Text',
                        'name' => 'process_footer_link_text',
                        'type' => 'text',
                        'default_value' => 'Book today!',
                    ],
                    [
                        'key' => 'field_process_footer_link',
                        'label' => 'Footer Link',
                        'name' => 'process_footer_link',
                        'type' => 'page_link',
                        'default_value' => '#',
                    ],
                    [
                        'key' => 'field_process_video_url',
                        'label' => 'Process Video URL',
                        'name' => 'process_video_url',
                        'type' => 'page_link',
                        'default_value' => 'https://www.youtube.com/watch?v=Y-x0efG1seA',
                    ],
                    [
                        'key' => 'field_process_video_image',
                        'label' => 'Process Video Image',
                        'name' => 'process_video_image',
                        'type' => 'image',
                        'return_format' => 'id',
                    ],
                    [
                        'key' => 'field_process_video_title',
                        'label' => 'Video Box Title',
                        'name' => 'process_video_title',
                        'type' => 'text',
                        'default_value' => 'Our process',
                    ],
                    [
                        'key' => 'field_process_video_heading',
                        'label' => 'Video Box Heading',
                        'name' => 'process_video_heading',
                        'type' => 'text',
                        'default_value' => 'Watch our procedure',
                    ],
                ],
            ],
            
            // How We Work Section
            [
                'key' => 'field_how_we_work_section',
                'label' => 'How We Work Section',
                'name' => 'how_we_work_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'field_how_work_subtitle',
                        'label' => 'How We Work Subtitle',
                        'name' => 'how_work_subtitle',
                        'type' => 'text',
                        'default_value' => 'How we work',
                    ],
                    [
                        'key' => 'field_how_work_title',
                        'label' => 'How We Work Title',
                        'name' => 'how_work_title',
                        'type' => 'text',
                        'default_value' => 'How we work: a commitment to your skin health',
                    ],
                    [
                        'key' => 'field_how_work_description',
                        'label' => 'How We Work Description',
                        'name' => 'how_work_description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'default_value' => 'We\'re dedicated to helping you achieve and maintain beautiful, healthy skin. Trust us to provide exceptional care tailored to you.',
                    ],
                    [
                        'key' => 'field_how_work_image',
                        'label' => 'How We Work Image',
                        'name' => 'how_work_image',
                        'type' => 'image',
                        'return_format' => 'id',
                    ],
                    [
                        'key' => 'field_how_work_contact_heading',
                        'label' => 'Contact Section Heading',
                        'name' => 'how_work_contact_heading',
                        'type' => 'text',
                        'default_value' => 'Have Questions? Were Here to Help You!',
                    ],
                    [
                        'key' => 'field_how_work_contact_icon',
                        'label' => 'Contact Icon',
                        'name' => 'how_work_contact_icon',
                        'type' => 'image',
                        'return_format' => 'id',
                        'preview_size' => 'thumbnail',
                        'mime_types' => 'jpg,jpeg,png,webp,svg',
                    ],
                    [
                        'key' => 'field_how_work_contact_phone',
                        'label' => 'Contact Phone',
                        'name' => 'how_work_contact_phone',
                        'type' => 'text',
                        'default_value' => '(123) 456 789',
                    ],
                    [
                        'key' => 'field_how_work_contact_link',
                        'label' => 'Contact Phone Link',
                        'name' => 'how_work_contact_link',
                        'type' => 'text',
                        'default_value' => 'tel:+123456789',
                    ],
                ],
            ],
            
            // How Work Steps
            [
                'key' => 'field_how_work_steps',
                'label' => 'How Work Steps',
                'name' => 'how_work_steps',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Step',
                'sub_fields' => [
                    [
                        'key' => 'field_step_number',
                        'label' => 'Step Number',
                        'name' => 'step_number',
                        'type' => 'text',
                        'wrapper' => ['width' => '20%'],
                    ],
                    [
                        'key' => 'field_step_title',
                        'label' => 'Step Title',
                        'name' => 'step_title',
                        'type' => 'text',
                        'wrapper' => ['width' => '40%'],
                    ],
                    [
                        'key' => 'field_step_description',
                        'label' => 'Step Description',
                        'name' => 'step_description',
                        'type' => 'textarea',
                        'rows' => 2,
                        'wrapper' => ['width' => '40%'],
                    ],
                ],
            ],
            
            // Our Benefit Section
            [
                'key' => 'field_our_benefit_section',
                'label' => 'Our Benefit Section',
                'name' => 'our_benefit_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'field_benefit_subtitle',
                        'label' => 'Benefit Subtitle',
                        'name' => 'benefit_subtitle',
                        'type' => 'text',
                        'default_value' => 'our benefits',
                    ],
                    [
                        'key' => 'field_benefit_title',
                        'label' => 'Benefit Title',
                        'name' => 'benefit_title',
                        'type' => 'text',
                        'default_value' => 'Exceptional dermatology, every step of the way',
                    ],
                    [
                        'key' => 'field_benefit_description',
                        'label' => 'Benefit Description',
                        'name' => 'benefit_description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'default_value' => 'Experience personalized care, advanced treatments, and visible results with our expert dermatology services.',
                    ],
                    [
                        'key' => 'field_benefit_image',
                        'label' => 'Benefit Image',
                        'name' => 'benefit_image',
                        'type' => 'image',
                        'return_format' => 'id',
                    ],
                ],
            ],
            
            // Benefit Items
            [
                'key' => 'field_benefit_items',
                'label' => 'Benefit Items',
                'name' => 'benefit_items',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Benefit',
                'sub_fields' => [
                    [
                        'key' => 'field_benefit_icon',
                        'label' => 'Benefit Icon',
                        'name' => 'benefit_icon',
                        'type' => 'image',
                        'return_format' => 'id',
                        'preview_size' => 'thumbnail',
                        'mime_types' => 'jpg,jpeg,png,webp,svg',
                        'wrapper' => ['width' => '20%'],
                    ],
                    [
                        'key' => 'field_benefit_item_title',
                        'label' => 'Benefit Title',
                        'name' => 'benefit_item_title',
                        'type' => 'text',
                        'wrapper' => ['width' => '40%'],
                    ],
                    [
                        'key' => 'field_benefit_item_description',
                        'label' => 'Benefit Description',
                        'name' => 'benefit_item_description',
                        'type' => 'textarea',
                        'rows' => 2,
                        'wrapper' => ['width' => '40%'],
                    ],
                    [
                        'key' => 'field_benefit_position',
                        'label' => 'Position (left/right)',
                        'name' => 'benefit_position',
                        'type' => 'select',
                        'choices' => [
                            'left' => 'Left Side',
                            'right' => 'Right Side',
                            'center' => 'Center (Image)',
                        ],
                        'default_value' => 'left',
                        'wrapper' => ['width' => '20%'],
                    ],
                ],
            ],
            
            // Our Results Section
            [
                'key' => 'field_our_results_section',
                'label' => 'Our Results Section',
                'name' => 'our_results_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'field_results_subtitle',
                        'label' => 'Results Subtitle',
                        'name' => 'results_subtitle',
                        'type' => 'text',
                        'default_value' => 'Our result',
                    ],
                    [
                        'key' => 'field_results_title',
                        'label' => 'Results Title',
                        'name' => 'results_title',
                        'type' => 'text',
                        'default_value' => 'Before & after: witness the power of dermatology',
                    ],
                    [
                        'key' => 'field_results_description',
                        'label' => 'Results Description',
                        'name' => 'results_description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'default_value' => 'See the remarkable transformations for yourself—our \'Before & After\' gallery highlights the powerful impact of dermatological treatments.',
                    ],
                ],
            ],
            
            // Transformation Images
            [
                'key' => 'field_transformation_images',
                'label' => 'Transformation Images',
                'name' => 'transformation_images',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Image Pair',
                'sub_fields' => [
                    [
                        'key' => 'field_trans_image_before',
                        'label' => 'Before Image',
                        'name' => 'trans_image_before',
                        'type' => 'image',
                        'return_format' => 'id',
                        'wrapper' => ['width' => '50%'],
                    ],
                    [
                        'key' => 'field_trans_image_after',
                        'label' => 'After Image',
                        'name' => 'trans_image_after',
                        'type' => 'image',
                        'return_format' => 'id',
                        'wrapper' => ['width' => '50%'],
                    ],
                ],
            ],
            
            // Results Button
            [
                'key' => 'field_results_button',
                'label' => 'Results Button',
                'name' => 'results_button',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'field_results_button_text',
                        'label' => 'Button Text',
                        'name' => 'results_button_text',
                        'type' => 'text',
                        'default_value' => 'view all result',
                    ],
                    [
                        'key' => 'field_results_button_link',
                        'label' => 'Button Link',
                        'name' => 'results_button_link',
                        'type' => 'page_link',
                        'default_value' => '#',
                    ],
                ],
            ],
            
            // FAQs Section
            [
                'key' => 'field_faqs_section',
                'label' => 'FAQs Section',
                'name' => 'faqs_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'field_faqs_subtitle',
                        'label' => 'FAQs Subtitle',
                        'name' => 'faqs_subtitle',
                        'type' => 'text',
                        'default_value' => 'frequently asked questions',
                    ],
                    [
                        'key' => 'field_faqs_title',
                        'label' => 'FAQs Title',
                        'name' => 'faqs_title',
                        'type' => 'text',
                        'default_value' => 'Frequently asked question find out more',
                    ],
                    [
                        'key' => 'field_faqs_description',
                        'label' => 'FAQs Description',
                        'name' => 'faqs_description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'default_value' => 'Have questions about our dermatology services? Our \'Frequently Asked Questions\' section.',
                    ],
                ],
            ],
            
            // FAQ Items
            [
                'key' => 'field_faq_items',
                'label' => 'FAQ Items',
                'name' => 'faq_items',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add FAQ',
                'sub_fields' => [
                    [
                        'key' => 'field_faq_question',
                        'label' => 'Question',
                        'name' => 'faq_question',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_faq_answer',
                        'label' => 'Answer',
                        'name' => 'faq_answer',
                        'type' => 'textarea',
                        'rows' => 4,
                    ],
                ],
            ],
            
            // Testimonials Section
            [
                'key' => 'field_testimonials_section',
                'label' => 'Testimonials Section',
                'name' => 'testimonials_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'field_testimonials_subtitle',
                        'label' => 'Testimonials Subtitle',
                        'name' => 'testimonials_subtitle',
                        'type' => 'text',
                        'default_value' => 'testimonials',
                    ],
                    [
                        'key' => 'field_testimonials_title',
                        'label' => 'Testimonials Title',
                        'name' => 'testimonials_title',
                        'type' => 'text',
                        'default_value' => 'Real patient stories that reflect exceptional skin care',
                    ],
                    [
                        'key' => 'field_testimonials_description',
                        'label' => 'Testimonials Description',
                        'name' => 'testimonials_description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'default_value' => 'Hear from our satisfied patients about their journey to healthier, glowing skin. Their stories reflect the care, expertise.',
                    ],
                ],
            ],
            
            // Testimonial Items
            [
                'key' => 'field_testimonial_items',
                'label' => 'Testimonial Items',
                'name' => 'testimonial_items',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Testimonial',
                'sub_fields' => [
                    [
                        'key' => 'field_testimonial_rating',
                        'label' => 'Rating (1-5)',
                        'name' => 'testimonial_rating',
                        'type' => 'number',
                        'default_value' => 5,
                        'min' => 1,
                        'max' => 5,
                        'wrapper' => ['width' => '20%'],
                    ],
                    [
                        'key' => 'field_testimonial_content',
                        'label' => 'Testimonial Content',
                        'name' => 'testimonial_content',
                        'type' => 'textarea',
                        'rows' => 3,
                        'wrapper' => ['width' => '80%'],
                    ],
                    [
                        'key' => 'field_testimonial_author_image',
                        'label' => 'Author Image',
                        'name' => 'testimonial_author_image',
                        'type' => 'image',
                        'return_format' => 'id',
                        'wrapper' => ['width' => '25%'],
                    ],
                    [
                        'key' => 'field_testimonial_author_name',
                        'label' => 'Author Name',
                        'name' => 'testimonial_author_name',
                        'type' => 'text',
                        'wrapper' => ['width' => '35%'],
                    ],
                    [
                        'key' => 'field_testimonial_author_title',
                        'label' => 'Author Title',
                        'name' => 'testimonial_author_title',
                        'type' => 'text',
                        'wrapper' => ['width' => '40%'],
                    ],
                ],
            ],
            
            // Book Appointment Section
            [
                'key' => 'field_book_appointment_section',
                'label' => 'Book Appointment Section',
                'name' => 'book_appointment_section',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'field_appointment_subtitle',
                        'label' => 'Appointment Subtitle',
                        'name' => 'appointment_subtitle',
                        'type' => 'text',
                        'default_value' => 'Book a appointment',
                    ],
                    [
                        'key' => 'field_appointment_title',
                        'label' => 'Appointment Title',
                        'name' => 'appointment_title',
                        'type' => 'text',
                        'default_value' => 'Reach out to us today!',
                    ],
                    [
                        'key' => 'field_appointment_description',
                        'label' => 'Appointment Description',
                        'name' => 'appointment_description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'default_value' => 'It\'s time to take control of your skin health! Booking your appointment is easy and fast. Choose a time that works for you and our dermatology experts will be ready.',
                    ],
                    [
                        'key' => 'field_appointment_address',
                        'label' => 'Address',
                        'name' => 'appointment_address',
                        'type' => 'text',
                        'default_value' => '2464 Royal Ln. Mesa, New Jersey 45463',
                    ],
                    [
                        'key' => 'field_appointment_location_icon',
                        'label' => 'Location Icon',
                        'name' => 'appointment_location_icon',
                        'type' => 'image',
                        'return_format' => 'id',
                        'mime_types' => 'jpg,jpeg,png,webp,svg',
                    ],
                    [
                        'key' => 'field_appointment_phone_icon',
                        'label' => 'Phone Icon',
                        'name' => 'appointment_phone_icon',
                        'type' => 'image',
                        'return_format' => 'id',
                        'mime_types' => 'jpg,jpeg,png,webp,svg',
                    ],
                    [
                        'key' => 'field_appointment_map_embed',
                        'label' => 'Google Map Embed URL',
                        'name' => 'appointment_map_embed',
                        'type' => 'text',
                        'default_value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin',
                    ],
                ],
            ],
            
            // Appointment Contact Items
            [
                'key' => 'field_appointment_contacts',
                'label' => 'Appointment Contact Items',
                'name' => 'appointment_contacts',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Contact',
                'sub_fields' => [
                    [
                        'key' => 'field_contact_phone',
                        'label' => 'Phone Number',
                        'name' => 'contact_phone',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_contact_phone_link',
                        'label' => 'Phone Link',
                        'name' => 'contact_phone_link',
                        'type' => 'text',
                    ],
                ],
            ],
            
            // Scrolling Ticker Section
            [
                'key' => 'field_scrolling_ticker',
                'label' => 'Scrolling Ticker',
                'name' => 'scrolling_ticker',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Ticker Item',
                'sub_fields' => [
                    [
                        'key' => 'field_ticker_text',
                        'label' => 'Ticker Text',
                        'name' => 'ticker_text',
                        'type' => 'text',
                        'default_value' => 'Medical experts Women\'s health Skin Care Cardiac care',
                    ],
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'index.php',
                ],
            ],
        ],
    ]);

});