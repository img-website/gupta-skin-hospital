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
                        'type' => 'url',
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
                        'type' => 'url',
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
});