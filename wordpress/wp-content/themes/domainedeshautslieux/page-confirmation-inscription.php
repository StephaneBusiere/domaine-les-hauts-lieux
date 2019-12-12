<?php
 get_header(); 


$args = [
    'post_type'         => 'évènements',
    'posts_per_page'    => 1,
    'orderby'           => 'rand'
];
$wp_query = new WP_Query($args);
        if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();
        ?>
 
 <a href="http://localhost/speWordpress/s01/projet-domaine-des-hauts-lieux/%C3%A9v%C3%A8nements/">Evènements</a>

 
       

    
    <?php echo 'name:'.$_POST["name"].'<br>';
    $name= $_POST["name"];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $eventname=$_POST['event'];
    $eventcount=$_POST['count'];
    $eventcountmax=$_POST['countmax'];
    var_dump($eventname);
    var_dump($eventcount);
    var_dump($eventcountmax);
endwhile;endif;
    global $wpdb;
	
	
	
	$table_name = $wpdb->prefix . 'inscriptions';
	if ($eventcount< $eventcountmax) {
	$wpdb->insert( 
		$table_name, 
		array( 
			
            'name' => $name, 
            'address'=>$address,
            'email'=>$email,
            'type'=>$eventname
			 
		) 
    );
   echo 'Vous êtes inscrit!';
} 
else echo 'Il y a trop d\'inscrits';
    ?>



  
<?php

get_footer();

?>