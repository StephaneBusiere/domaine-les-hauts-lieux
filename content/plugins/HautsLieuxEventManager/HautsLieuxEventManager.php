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
    'menu_icon'           => 'dashicons-calendar-alt',
    'register_meta_box_cb' => 'wpt_add_event_metaboxes',

    // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    /*
    * Différentes options supplémentaires
    */
    'show_in_rest'        => true,
    'hierarchical'        => false,
    'public'              => true,
    'has_archive'         => true,
    'rewrite'			  => array( 'slug' => 'évènements'),
    'taxonomies'          => array( 'category', 'post_tag' ),
);
// On enregistre notre custom post type qu'on nomme ici "évènements" et ses arguments
register_post_type( 'évènements', $args );
}

  
add_action( 'init', 'events_custom_post_type', 0 );

global $wpdb;

$charset_collate = $wpdb->get_charset_collate();

$event_table_name = $wpdb->prefix . 'évènement';

$event_sql = "CREATE TABLE IF NOT EXISTS $event_table_name (
	id int(9) NOT NULL AUTO_INCREMENT, 
	name varchar(45) DEFAULT NULL,
	date datetime NOT NULL,
    time time NOT NULL,
    type longtext NULL,
    maxpeople int NULL,
    minpeople int NULL,
    price int NULL,
    user_id bigint(20) UNSIGNED NOT NULL,
    PRIMARY KEY  (id)
) $charset_collate;";
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta($event_sql);


global $wpdb;

$charset_collate = $wpdb->get_charset_collate();

$register_table_name = $wpdb->prefix . 'inscriptions';

$register_sql = "CREATE TABLE IF NOT EXISTS $register_table_name (
	id int(9) NOT NULL AUTO_INCREMENT, 
	name varchar(45) DEFAULT NULL,
  address varchar(45) NOT NULL,
  email varchar(45) NOT NULL,
	date datetime NOT NULL,
    time time NOT NULL,
    type longtext NULL,
    
    user_id bigint(20) UNSIGNED NOT NULL,
    PRIMARY KEY  (id)
) $charset_collate;";
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta($register_sql);
    
    



// add meta box
add_action('add_meta_boxes','initialisation_metaboxes');
function initialisation_metaboxes(){
  //on utilise la fonction add_metabox() pour initialiser une metabox
  add_meta_box('lieux', 'Lieux de l\'évènement', 'lieux_function', 'évènements', 'normal', 'high');
  
  add_meta_box('date', 'Date de l\'évènement', 'date_function', 'évènements', 'normal', 'high');


}


// build meta box, and get meta
function lieux_function($post){
  // on récupère la valeur actuelle pour la mettre dans le champ
  wp_enqueue_script( 'jquery-ui-datepicker' );
wp_enqueue_style( 'jquery-ui-style', '//ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/themes/smoothness/jquery-ui.css', true);
?>
<script>
jQuery(document).ready(function(){
jQuery('#valdate').datepicker({
dateFormat : 'dd/m - yy'
});
});
</script>
<?php
  $valadresse  = get_post_meta($post->ID,'_mon_adresse',true);
  echo '<label for="adresse">Adresse : </label>';
  echo '<input id="adresse" type="text" name="_mon_adresse" value="'.$valadresse.'" />';
}

function date_function($post){
  // on récupère la valeur actuelle pour la mettre dans le champ

  wp_enqueue_script( 'jquery-ui-datepicker' );
wp_enqueue_style( 'jquery-ui-style', '//ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/themes/smoothness/jquery-ui.css', true);

  $valdate = get_post_meta($post->ID,'_ma_date',true);
  echo '<label for="date">Date : </label>';
  echo '<input id="date" type="date" name="_ma_date" value="'.$valdate.'" />';
}



// save meta box with update
add_action('save_post','save_metaboxes');
function save_metaboxes($post_ID){
  // si la metabox est définie, on sauvegarde sa valeur
  if(isset($_POST['_mon_adresse'])){
    update_post_meta($post_ID,'_mon_adresse', esc_html($_POST['_mon_adresse']));
  }
  if(isset($_POST['_ma_date'])){
    update_post_meta($post_ID,'_ma_date', esc_html($_POST['_ma_date']));
  }
}

// get post meta
$val1 = get_post_meta('9','_ma_valeur',true);
// $val renverra 'la valeur de mon champ'
$val2 = get_post_meta('8','_ma_valeur',false);
// $val renverra array('la valeur de mon champ','la seconde valeur', 'une autre valeur')

// get post meta ordered
//vals correspond au tableau qui nous sera renvoyé
/* $vals= '';
$sql = "SELECT m.meta_value FROM ".$wpdb->postmeta." m where m.meta_key = '_ma_valeur' and m.post_id = '".$post->ID."' order by m.meta_id";
$results = $wpdb->get_results( $sql );
foreach( $results as $result ){
  $vals[] = $result->meta_value; }*/
  
  ;
/* global $wpdb;
	
	$welcome_name = 'Mr. WordPress';
	
	$table_name = $wpdb->prefix . 'évènement';
	
	$wpdb->insert( 
		$table_name, 
		array( 
			
			'name' => $val1, 
			 
		) 
    ); */

 
    