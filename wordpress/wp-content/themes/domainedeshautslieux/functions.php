<?php

define(' DOMAINEDESHAUTSLIEUX_THEME_VERSION','1.0.0');

if ( ! function_exists('oprofile_theme_setup')){
    function domainedeshautslieux_theme_setup(){
        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails');

        add_theme_support( 'html5');
    }
}

add_action ( 'after_setup_theme','domainedeshautslieux_theme_setup' );
//déclaration de la fonction
if ( ! function_exists( 'domainedeshautslieux_theme_enqueue_scripts') ) {
    function domainedeshautslieux_theme_enqueue_scripts() {
        // Déclaration du Thème
        wp_enqueue_style(
            'domainedeshautslieux-theme-style',
            get_theme_file_uri('/public/style.css'),
            [],
            'DOMAINEDESHAUTSLIEUX_THEME_VERSION'
        );
        // Déclaration du JS
        wp_enqueue_script( 
            'domainedeshautslieux-theme-script',
            get_theme_file_uri('public/js/app.js'),
            [],
            'DOMAINEDESHAUTSLIEUX_THEME_VERSION',
            true
        );

    }
}

add_action ('wp_enqueue_scripts','domainedeshautslieux_theme_enqueue_scripts' );

?>



<?php 

//Ajouter la prise en charge des images mises en avant

add_theme_support( 'post-thumbnails' );

//Ajouter automatiqument le titre du site d'en l'en-tête du site

add_theme_support( 'title-tag');