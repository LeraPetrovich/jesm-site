<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style(
        'jesm-style',
        get_template_directory_uri() . '/assets/css/style.css',
        [],
        filemtime(get_template_directory() . '/assets/css/style.css')
    );

        wp_enqueue_script(
        'global-js',
        get_template_directory_uri() . '/assets/js/global.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/global.js'),
        true
    );

    if ( is_front_page() ) {
        wp_enqueue_script(
            'front-page-js',
            get_template_directory_uri() . '/assets/js/front-page.js',
            array(), 
            filemtime(get_template_directory() . '/assets/js/front-page.js'),
            true
        );
    }
}
//connect scripts and styles
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
//remove tag p in contact from
add_filter('wpcf7_autop_or_not', '__return_false');