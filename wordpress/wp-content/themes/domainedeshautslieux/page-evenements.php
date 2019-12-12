<?php
 get_header(); 
?>
<h1><?php the_title()?></h1>
<?php
$args = [
    'post_type'         => 'évènements',
    'posts_per_page'    => 4,
    'orderby'           => 'rand'
];
$wp_query = new WP_Query($args);
        if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();
        ?>
        <?php the_post_thumbnail('medium'); ?>
        <h2>  <?php the_title(); ?></h2>
        <p><?php the_content();?></p>
        <h3>Date: </h3>
<h2><?php $DLHL_meta_value = get_post_meta(get_the_ID(), '_ma_date','true');
$dateSQL=date_create($DLHL_meta_value);
echo date_format($dateSQL, 'd-m-Y');
?></h2>
<h3>Lieux: </h3>
<h2><?php $DLHL_meta_value = get_post_meta(get_the_ID(), '_mon_adresse','true');
echo($DLHL_meta_value);
?></h2>
<h3>Nombre maximum d'inscrits: <?php $countmax= get_post_meta(get_the_ID(), '_mon_nombre','true');
echo($countmax);
?></h3>
<?php
 global $wpdb;
 $title= get_the_title();
 $table_name = $wpdb->prefix . 'inscriptions';
 $results = $GLOBALS['wpdb']->get_results( "SELECT * FROM {$table_name} ", OBJECT);
  $posttype=$post->type;
  //var_dump($posttype);
 $count= $GLOBALS['wpdb']->get_var( "SELECT COUNT(*) FROM {$table_name} WHERE type= '$title'");
 //var_dump($count);
?>
<?php if (isset($_GET['success']))
 {

 	echo '<div class="alert">';

		
			
				echo 'Vous êtes inscrit!';}
				

else echo 'trop de monde';

		

 	echo '</div>';
 
  ?>





<h2>Nombre d'inscrits: <?php echo $count ?></h2>
<form action="#" method="post" class="form-example">
<?php wp_nonce_field('s\'inscrire', 'inscription-verif'); ?>
  <div class="form-example">
    <label for="name">Entrer votre nom : </label>
    <input type="text" name="name" id="name" required>
  </div>
  <div class="form-example">
    <label for="email">Entrer votre email: </label>
    <input type="email" name="email" id="email" required>
  </div>
  <div class="form-example">
    <label for="address">Entrer votre adresse: </label>
    <input type="text" name="address" id="address" required>
  </div>
  <label for="event-select">Choisir un évènement:</label>
<select name="event" id="event">
    <option value="">--Choisir un évènement--</option>
    <option  selected="selected"><?php the_title()?></option>
</select>
<input type="hidden" name="count" id="count"
    value=<?php echo $count?>
>
<input type="hidden" name="countmax" id="count"
    value=<?php echo $countmax?>
>
  <div class="form-example">
    <input type="submit" value="Subscribe!">
  </div>
</form>
<?php
        endwhile;endif;
?>