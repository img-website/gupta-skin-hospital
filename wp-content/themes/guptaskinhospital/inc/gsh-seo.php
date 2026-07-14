<?php
/**
 * SEO: structured data, robots.txt directives and head hints.
 *
 * Kept out of functions.php to stay readable. Loaded from functions.php.
 */

if (!defined('ABSPATH')) {
    exit;
}

/* -------------------------------------------------------------------------
 * Admin fields — Theme Settings → Local SEO & Schema
 * ---------------------------------------------------------------------- */

add_action('acf/init', function () {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group([
        'key'   => 'group_gsh_local_seo',
        'title' => 'Local SEO & Schema',
        'fields' => [
            ['key' => 'tab_seo_business', 'label' => 'Business', 'name' => '', 'type' => 'tab'],
            [
                'key'           => 'field_seo_business_type',
                'label'         => 'Business type (schema)',
                'name'          => 'seo_business_type',
                'type'          => 'select',
                'instructions'  => 'Pick “MedicalClinic” unless a dentist actually practises here. Claiming Dentist without any dental content on the site can hurt local rankings.',
                'choices'       => [
                    'MedicalClinic' => 'Medical Clinic (skin / dermatology)',
                    'Dentist'       => 'Dentist',
                    'Hospital'      => 'Hospital',
                ],
                'default_value' => 'MedicalClinic',
            ],
            [
                'key'           => 'field_seo_business_name',
                'label'         => 'Business name (exactly as on Google Business Profile)',
                'name'          => 'seo_business_name',
                'type'          => 'text',
                'instructions'  => 'Must match your Google Business Profile and all directory listings, character for character.',
                'default_value' => 'Gupta Skin & Dental Hospital',
            ],
            [
                'key'           => 'field_seo_price_range',
                'label'         => 'Price range',
                'name'          => 'seo_price_range',
                'type'          => 'text',
                'default_value' => '₹₹',
            ],
            ['key' => 'tab_seo_address', 'label' => 'Address & Map', 'name' => '', 'type' => 'tab'],
            [
                'key'           => 'field_seo_street',
                'label'         => 'Street address',
                'name'          => 'seo_street_address',
                'type'          => 'text',
                'default_value' => '148-A Scheme No.1, Behind UIT / Garg Hospital',
            ],
            [
                'key'           => 'field_seo_locality',
                'label'         => 'City',
                'name'          => 'seo_locality',
                'type'          => 'text',
                'default_value' => 'Alwar',
            ],
            [
                'key'           => 'field_seo_region',
                'label'         => 'State',
                'name'          => 'seo_region',
                'type'          => 'text',
                'default_value' => 'Rajasthan',
            ],
            [
                'key'          => 'field_seo_postal',
                'label'        => 'PIN code',
                'name'         => 'seo_postal_code',
                'type'         => 'text',
                'instructions' => 'Required for Google to trust the address. Alwar PIN codes look like 301001.',
            ],
            [
                'key'          => 'field_seo_latitude',
                'label'        => 'Latitude',
                'name'         => 'seo_latitude',
                'type'         => 'text',
                'instructions' => 'Leave blank to read it automatically from the Google Map embed URL.',
            ],
            [
                'key'          => 'field_seo_longitude',
                'label'        => 'Longitude',
                'name'         => 'seo_longitude',
                'type'         => 'text',
                'instructions' => 'Leave blank to read it automatically from the Google Map embed URL.',
            ],
            ['key' => 'tab_seo_hours', 'label' => 'Opening Hours', 'name' => '', 'type' => 'tab'],
            [
                'key'          => 'field_seo_hours',
                'label'        => 'Opening hours',
                'name'         => 'seo_opening_hours',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add hours',
                'sub_fields'   => [
                    [
                        'key'     => 'field_seo_hours_days',
                        'label'   => 'Days',
                        'name'    => 'days',
                        'type'    => 'checkbox',
                        'choices' => [
                            'Monday'    => 'Mon',
                            'Tuesday'   => 'Tue',
                            'Wednesday' => 'Wed',
                            'Thursday'  => 'Thu',
                            'Friday'    => 'Fri',
                            'Saturday'  => 'Sat',
                            'Sunday'    => 'Sun',
                        ],
                    ],
                    ['key' => 'field_seo_hours_opens', 'label' => 'Opens', 'name' => 'opens', 'type' => 'time_picker', 'return_format' => 'H:i'],
                    ['key' => 'field_seo_hours_closes', 'label' => 'Closes', 'name' => 'closes', 'type' => 'time_picker', 'return_format' => 'H:i'],
                ],
            ],
            ['key' => 'tab_seo_doctor', 'label' => 'Doctor', 'name' => '', 'type' => 'tab'],
            [
                'key'           => 'field_seo_doctor_name',
                'label'         => 'Doctor name',
                'name'          => 'seo_doctor_name',
                'type'          => 'text',
                'default_value' => 'Dr. Rahul Gupta',
            ],
            [
                'key'           => 'field_seo_doctor_job',
                'label'         => 'Job title',
                'name'          => 'seo_doctor_job_title',
                'type'          => 'text',
                'default_value' => 'Consultant Dermatologist',
            ],
            [
                'key'          => 'field_seo_doctor_reg',
                'label'        => 'Medical registration number',
                'name'         => 'seo_doctor_reg_no',
                'type'         => 'text',
                'instructions' => 'Rajasthan Medical Council / NMC registration number. Google treats medical sites as YMYL — a visible, verifiable registration number is a strong trust signal.',
            ],
            [
                'key'           => 'field_seo_doctor_alumni',
                'label'         => 'Educated at',
                'name'          => 'seo_doctor_alumni',
                'type'          => 'text',
                'default_value' => 'SMS Medical College, Jaipur',
            ],
            [
                'key'           => 'field_seo_doctor_image',
                'label'         => 'Doctor photo',
                'name'          => 'seo_doctor_image',
                'type'          => 'image',
                'return_format' => 'id',
            ],
            ['key' => 'tab_seo_profiles', 'label' => 'Profiles', 'name' => '', 'type' => 'tab'],
            [
                'key'          => 'field_seo_gbp_url',
                'label'        => 'Google Business Profile URL',
                'name'         => 'seo_gbp_url',
                'type'         => 'url',
                'instructions' => 'Your Google Maps / Business Profile link. Also used for the “Read our Google reviews” link.',
            ],
            [
                'key'          => 'field_seo_sameas',
                'label'        => 'Other profiles (Facebook, Instagram, YouTube, Practo…)',
                'name'         => 'seo_sameas',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add profile',
                'sub_fields'   => [
                    ['key' => 'field_seo_sameas_url', 'label' => 'Profile URL', 'name' => 'url', 'type' => 'url'],
                ],
            ],
        ],
        'location' => [
            [
                ['param' => 'options_page', 'operator' => '==', 'value' => 'acf-options-theme-settings'],
            ],
        ],
    ]);
});

/* -------------------------------------------------------------------------
 * Helpers
 * ---------------------------------------------------------------------- */

/**
 * Latitude/longitude for the clinic. Prefers the explicit fields, otherwise reads the
 * coordinates out of the Google Maps embed URL (…!2d<lng>!3d<lat>…).
 */
function gsh_get_geo() {
    $lat = trim((string) get_field('seo_latitude', 'option'));
    $lng = trim((string) get_field('seo_longitude', 'option'));

    if ($lat === '' || $lng === '') {
        $embed = function_exists('gsh_get_footer_map_embed') ? gsh_get_footer_map_embed() : '';
        if ($embed && preg_match('/!2d(-?\d+\.\d+)!3d(-?\d+\.\d+)/', $embed, $m)) {
            $lng = $lng !== '' ? $lng : $m[1];
            $lat = $lat !== '' ? $lat : $m[2];
        }
    }

    if ($lat === '' || $lng === '') {
        return null;
    }

    return ['lat' => (float) $lat, 'lng' => (float) $lng];
}

/**
 * openingHoursSpecification nodes from the repeater. Returns [] when unconfigured
 * so we never publish invented hours.
 */
function gsh_get_opening_hours_schema() {
    $rows = get_field('seo_opening_hours', 'option');
    if (empty($rows) || !is_array($rows)) {
        return [];
    }

    $spec = [];
    foreach ($rows as $row) {
        $days   = $row['days'] ?? [];
        $opens  = $row['opens'] ?? '';
        $closes = $row['closes'] ?? '';
        if (empty($days) || $opens === '' || $closes === '') {
            continue;
        }
        $spec[] = [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => array_values((array) $days),
            'opens'     => $opens,
            'closes'    => $closes,
        ];
    }

    return $spec;
}

/**
 * sameAs profile URLs (Google Business Profile + any others configured).
 */
function gsh_get_sameas() {
    $urls = [];

    $gbp = trim((string) get_field('seo_gbp_url', 'option'));
    if ($gbp !== '') {
        $urls[] = $gbp;
    }

    $rows = get_field('seo_sameas', 'option');
    if (!empty($rows) && is_array($rows)) {
        foreach ($rows as $row) {
            $url = trim((string) ($row['url'] ?? ''));
            if ($url !== '') {
                $urls[] = $url;
            }
        }
    }

    return array_values(array_unique($urls));
}

/* -------------------------------------------------------------------------
 * Structured data
 *
 * Yoast already emits WebPage, WebSite+SearchAction and BreadcrumbList — those are
 * deliberately not repeated here. What Yoast does NOT emit is the thing that matters
 * most for a clinic: the business entity itself (NAP, geo, hours) and the doctor.
 * ---------------------------------------------------------------------- */

function gsh_output_local_business_schema() {
    if (is_404() || is_search()) {
        return;
    }

    $book    = get_field('book_appointment_section', 'option') ?: [];
    $phones  = function_exists('gsh_get_phones_array') ? gsh_get_phones_array() : [];
    $tels    = [];
    foreach ($phones as $p) {
        if (!empty($p['tel'])) {
            $tels[] = str_replace('tel:', '', $p['tel']);
        }
    }

    $name   = get_field('seo_business_name', 'option') ?: 'Gupta Skin & Dental Hospital';
    $type   = get_field('seo_business_type', 'option') ?: 'MedicalClinic';
    $street = get_field('seo_street_address', 'option') ?: '';

    // Fall back to the single-line address the clinic already maintains for the map.
    if ($street === '') {
        $street = (string) ($book['location_address'] ?? '');
    }

    $clinic_id = home_url('/#clinic');

    $clinic = [
        '@type' => $type,
        '@id'   => $clinic_id,
        'name'  => $name,
        'url'   => home_url('/'),
    ];

    $logo_id = null;
    $header_logo = get_field('header_logo', 'option');
    if ($header_logo && !empty($header_logo['desktop_logo'])) {
        $logo_id = $header_logo['desktop_logo'];
    }
    if ($logo_id) {
        $logo_url = wp_get_attachment_image_url($logo_id, 'full');
        if ($logo_url) {
            $clinic['logo']  = $logo_url;
            $clinic['image'] = $logo_url;
        }
    }

    if (!empty($tels)) {
        $clinic['telephone'] = $tels[0];
    }

    $address = ['@type' => 'PostalAddress'];
    if ($street !== '') {
        $address['streetAddress'] = $street;
    }
    $locality = get_field('seo_locality', 'option') ?: 'Alwar';
    $region   = get_field('seo_region', 'option') ?: 'Rajasthan';
    $postal   = trim((string) get_field('seo_postal_code', 'option'));
    $address['addressLocality'] = $locality;
    $address['addressRegion']   = $region;
    if ($postal !== '') {
        $address['postalCode'] = $postal;
    }
    $address['addressCountry'] = 'IN';
    $clinic['address'] = $address;

    $geo = gsh_get_geo();
    if ($geo) {
        $clinic['geo'] = [
            '@type'     => 'GeoCoordinates',
            'latitude'  => $geo['lat'],
            'longitude' => $geo['lng'],
        ];
    }

    $hours = gsh_get_opening_hours_schema();
    if (!empty($hours)) {
        $clinic['openingHoursSpecification'] = $hours;
    }

    $price = trim((string) get_field('seo_price_range', 'option'));
    if ($price !== '') {
        $clinic['priceRange'] = $price;
    }

    $sameas = gsh_get_sameas();
    if (!empty($sameas)) {
        $clinic['sameAs'] = $sameas;
    }

    if ($type === 'MedicalClinic' || $type === 'Hospital') {
        $clinic['medicalSpecialty'] = 'Dermatologic';
    }

    $clinic['areaServed'] = [
        '@type' => 'City',
        'name'  => $locality,
    ];

    $graph = [];

    // Doctor. Falls back to the doctor fields the home page already renders, so the
    // Physician node exists even before anyone opens the new Local SEO tab.
    $front_id    = (int) get_option('page_on_front');
    $doctor_name = trim((string) get_field('seo_doctor_name', 'option'));
    if ($doctor_name === '' && $front_id) {
        $doctor_name = trim((string) get_field('doctor_name', $front_id));
    }
    if ($doctor_name !== '') {
        $doctor_id = home_url('/#physician');
        $doctor = [
            '@type'    => 'Physician',
            '@id'      => $doctor_id,
            'name'     => $doctor_name,
            'worksFor' => ['@id' => $clinic_id],
        ];

        $job = trim((string) get_field('seo_doctor_job_title', 'option'));
        if ($job === '' && $front_id) {
            $job = trim((string) get_field('doctor_section_title', $front_id));
        }
        if ($job !== '') {
            $doctor['jobTitle'] = $job;
        }

        $alumni = trim((string) get_field('seo_doctor_alumni', 'option'));
        if ($alumni !== '') {
            $doctor['alumniOf'] = ['@type' => 'CollegeOrUniversity', 'name' => $alumni];
        }

        $reg = trim((string) get_field('seo_doctor_reg_no', 'option'));
        if ($reg !== '') {
            $doctor['identifier'] = [
                '@type' => 'PropertyValue',
                'name'  => 'Medical registration number',
                'value' => $reg,
            ];
        }

        $doc_img_id = get_field('seo_doctor_image', 'option');
        if (!$doc_img_id && $front_id) {
            $doc_img_id = get_field('doctor_image', $front_id);
        }
        if ($doc_img_id) {
            $doc_img = wp_get_attachment_image_url($doc_img_id, 'full');
            if ($doc_img) {
                $doctor['image'] = $doc_img;
            }
        }

        $doctor['medicalSpecialty'] = 'Dermatology';

        $clinic['employee'] = ['@id' => $doctor_id];
        $graph[] = $doctor;
    }

    array_unshift($graph, $clinic);

    $schema = [
        '@context' => 'https://schema.org',
        '@graph'   => $graph,
    ];

    echo '<script type="application/ld+json">'
        . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
        . '</script>' . "\n";
}
add_action('wp_head', 'gsh_output_local_business_schema', 20);

/* -------------------------------------------------------------------------
 * robots.txt — be explicit about AI crawlers.
 *
 * The wildcard rule already allows them, but stating it removes any ambiguity and
 * documents the intent for whoever edits this next.
 * ---------------------------------------------------------------------- */

add_filter('robots_txt', function ($output) {
    $ai_bots = [
        'Google-Extended',   // Gemini / AI Overviews
        'GPTBot',            // ChatGPT crawler
        'OAI-SearchBot',     // ChatGPT search
        'ChatGPT-User',
        'ClaudeBot',
        'PerplexityBot',
        'Applebot-Extended',
    ];

    // A crawler obeys ONLY the most specific User-agent group that matches it, so each
    // explicit group must repeat the shared Disallow rules — otherwise naming a bot here
    // would quietly grant it access to the paths the "*" group blocks.
    $extra = "\n# AI answer engines — explicitly allowed to crawl public content.\n";
    foreach ($ai_bots as $bot) {
        $extra .= "User-agent: {$bot}\n";
        $extra .= "Disallow: /wp-json/\n";
        $extra .= "Disallow: /?rest_route=\n";
        $extra .= "Disallow: /wp-admin/\n";
        $extra .= "Allow: /\n\n";
    }

    return $output . $extra;
}, 20);

/* -------------------------------------------------------------------------
 * Preload the hero image so it is not stuck behind the CSS chain.
 * The hero is the homepage LCP element.
 * ---------------------------------------------------------------------- */

add_action('wp_head', function () {
    if (!is_front_page()) {
        return;
    }

    $hero = get_field('hero_section', get_queried_object_id()) ?: [];

    if (!empty($hero['hero_main_image'])) {
        $src = wp_get_attachment_image_url($hero['hero_main_image'], 'full');
    } else {
        // Matches the template's hardcoded fallback.
        $src = get_template_directory_uri() . '/images/outdoor-front-image.webp';
    }

    if (!$src) {
        return;
    }

    printf(
        '<link rel="preload" as="image" href="%s" fetchpriority="high">' . "\n",
        esc_url($src)
    );
}, 2);
