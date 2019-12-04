<?php

if (!function_exists('DLHL_setup')):

    function DLHL_setup()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        register_nav_menus([
            'menu_header' => __('Menu de navigation en haut de la page', 'DLHL'),
            'menu_lateral' => __('Menu de navigation qui apparait au clic à droite de la page', 'DLHL'),
        ]);

        // Je déclare à WordPress où trouver les fichers de langue pour le Text Domain "ocooking"
        load_theme_textdomain('DLHL', get_theme_file_path('/languages'));
        // get_template_directory ne prend pas d'arguments, c'est la méthode un peu "old school"
        // load_theme_textdomain('ocooking', get_template_directory() . '/languages');
    }

endif;

add_action('after_setup_theme', 'DLHL_setup');