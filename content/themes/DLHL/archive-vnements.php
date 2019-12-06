


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
echo($DLHL_meta_value); 
?></h2>
<h3>Lieux: </h3>
<h2><?php $DLHL_meta_value = get_post_meta(get_the_ID(), '_mon_adresse','true'); 
echo($DLHL_meta_value); 
?></h2>

<?php
        endwhile;endif;
?>
    

