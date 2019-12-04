


 <?php

$args = [
    'post_type'         => 'évènements',
    'posts_per_page'    => 1,
    'orderby'           => 'rand'
];
$wp_query = new WP_Query($args);

        if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();
        ?>
        <h2>  <?php the_title(); ?></h2>
        <p><?php the_content();?></p>
<?php
        endwhile;endif;
?>
    

<h3>Date: </h3>
<h2><?php the_field('date'); ?></h2>