<?php
/**
 * Plugin Name: Events
 * Author: Vortex
 * Author URI:
 * Version: 1.0.0
 * Description: Gestion d'évenements
*/
function events_custom_post_type() {
// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
$labels = array(
    // Le nom au pluriel
    'name'                => _x( 'Voici le tableau d\'évènements', 'Post Type General Name'),
    // Le nom au singulier
    'singular_name'       => _x( 'évènement', 'Post Type Singular Name'),
    // Le libellé affiché dans le menu
    'menu_name'           => __( 'Evènements'),
    // Les différents libellés de l'administration
    'all_items'           => __( 'Tous les évènements'),
    'view_item'           => __( 'Voir les évènement'),
    'add_new_item'        => __( 'Ajouter un évènement'),
    'add_new'             => __( 'Ajouter'),
    'edit_item'           => __( 'Editer nouveau évènement'),
    'update_item'         => __( 'Modifier évènement'),
    'search_items'        => __( 'Rechercher un évènement'),
    'not_found'           => __( 'Non trouvée'),
    'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
);
// On peut définir ici d'autres options pour notre custom post type
$args = array(
    'label'               => __( 'évènements'),
    'description'         => __( 'Soumission d\'un évènement'),
    'labels'              => $labels,
    'menu_icon'           => 'dashicons-clipboard',
    // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    /*
    * Différentes options supplémentaires
    */
    'show_in_rest'        => true,
    'hierarchical'        => false,
    'public'              => true,
    'has_archive'         => true,
    'rewrite'			  => array( 'slug' => 'mes-events'),
    'taxonomies'          => array( 'category', 'post_tag' ),
);
// On enregistre notre custom post type qu'on nomme ici "évènements" et ses arguments
register_post_type( 'évènements', $args );
}
add_action( 'init', 'events_custom_post_type', 0 );