<?php get_header(); ?>

<?php
$args = [
    'post_type'         => 'évènements',
    'posts_per_page'    => 6,
    'orderby'           => 'rand'
];
$wp_query = new WP_Query($args);
        if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();
        ?>
 
 <a href="http://localhost/wordpressS09/apotheose/domaine-theme/évènements">Evènements</a>

 <?php
        endwhile;endif;
?>
    