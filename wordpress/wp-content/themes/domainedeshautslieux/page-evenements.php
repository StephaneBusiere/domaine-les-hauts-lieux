<?php
 get_header(); 
?>
<div class="maxiEventContainer">
<h1 class="eventTitle"><?php the_title()?></h1>




<div class="mainEventContainer">   
<?php
$args = [
    'post_type'         => 'évènements',
    'posts_per_page'    => 4,
    'orderby'           => 'post_date'
];
$wp_query = new WP_Query($args);
        if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();
        ?>
       
       
    
       <div class="eventContainer">
       <h3 class="dateEvent"><?php $DLHL_meta_value = get_post_meta(get_the_ID(), '_ma_date','true');
        $dateSQL=date_create($DLHL_meta_value);
        echo date_format($dateSQL, 'd-m-Y');
        ?> </h3>
        
        
        <h2  class="postEventTitle"> <?php the_title(); ?></h2>
        <h2 class="eventContent"> <?php the_content();?></h2>
        
        
        <div class="EventContainer">
        <?php the_post_thumbnail('medium'); ?>
        

       
<div class="descriptionContainer">
<h3>Lieu: <?php $DLHL_meta_value = get_post_meta(get_the_ID(), '_mon_adresse','true');
echo($DLHL_meta_value);
?></h3>


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






<h2>Nombre d'inscrits: <?php echo $count ?></h2>

</div>
</div>
<form action="#" method="post" class="form-event">
<?php wp_nonce_field('s\'inscrire', 'inscription-verif'); ?>
  <div class="form-event">
    <label class="nameForm" for="name">votre nom : </label>
    <input type="text" name="name" id="name" required>
  </div>
  <div class="form-event">
    <label class="emailForm" for="email">votre email: </label>
    <input type="email" name="email" id="email" required>
  </div>
  <div class="form-event">
    <label for="address">votre adresse: </label>
    <input type="text" name="address" id="address" required>
  </div>
 

<input type="hidden" name="event" id="event"
    value=<?php the_title()?>
>

<input type="hidden" name="count" id="count"
    value=<?php echo $count?>
>
<input type="hidden" name="countmax" id="count"
    value=<?php echo $countmax?>
>
  <div class="form-example">
    <input class="suscribeInput" type="submit" value="S'inscrire!">
  </div>
</form>
</div>


<?php
        endwhile;endif;
?>

</div>
</div>
