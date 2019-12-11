<?php

if ( ! function_exists('oprofile_theme_setup')){
    function domainedeshautslieux_theme_setup(){
        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails');

        add_theme_support( 'html5');
    }
}

add_action ('after_setup_theme','domainedeshautslieux_theme_setup');

?>

<?php 

//Ajouter la prise en charge des images mises en avant

add_theme_support( 'post-thumbnails' );

//Ajouter automatiqument le titre du site d'en l'en-tête du site

add_theme_support( 'title-tag');