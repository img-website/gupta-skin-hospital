<?php

/**
 * Gupta Skin Hospital Theme - Enqueue Scripts and Styles
 */

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

