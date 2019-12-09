<?php
if (!function_exists('DLHL_scripts')):
    function DLHL_scripts()
    {
        wp_enqueue_style(
            'DLHL-style',
            get_theme_file_uri('/public/css/style.css'),
            [],
            '1.0.3'
        );
        wp_enqueue_script(
            'DLHL-app',
            get_theme_file_uri('/public/js/app.js'),
            [],
            '1.0.0',
            true
        );
    }
endif;
add_action('wp_enqueue_scripts', 'DLHL_scripts');