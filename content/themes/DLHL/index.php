<?php get_header(); ?>

<?php

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
    var_dump($eventname);
    var_dump($eventcount);
endwhile;endif;
    global $wpdb;
	
	
	
	$table_name = $wpdb->prefix . 'inscriptions';
	if ($eventcount<7) {
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


<main class="post__excerpt">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quod culpa expedita quisquam sequi ea distinctio, perspiciatis consequuntur accusamus perferendis corporis enim alias esse inventore repellendus placeat fugit! Provident, ratione veritatis, eaque commodi autem laboriosam omnis debitis distinctio inventore accusamus dolorem blanditiis rem, nam esse nemo quo voluptatibus ipsa. Tenetur?</p>
            </main>
        </article>
        <article class="post post--excerpt">
            <header class="post__header">
                <h4 class="post__header__title">L'homme</h4>
                <img src="images/Micka_DomLHL_Pics_Media/P1040938.jpeg" alt="" class="post__header__image" />
            </header>
            <main class="post__excerpt">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quod culpa expedita quisquam sequi ea distinctio, perspiciatis consequuntur accusamus perferendis corporis enim alias esse inventore repellendus placeat fugit! Provident, ratione veritatis, eaque commodi autem laboriosam omnis debitis distinctio inventore accusamus dolorem blanditiis rem, nam esse nemo quo voluptatibus ipsa. Tenetur?</p>
            </main>
        </article>
        <article class="post post--excerpt">
            <header class="post__header">
                <h4 class="post__header__title">Les vins</h4>
                <img src="images/Micka_DomLHL_Pics_Media/PicsCaveLHL/IMG_0151.jpeg" alt="" class="post__header__image" />
            </header>
            <main class="post__excerpt">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus temporibus deleniti veniam veritatis aliquid saepe expedita enim maiores omnis hic.</p>
            </main>
        </article>
        <article class="post post--excerpt">
            <header class="post__header">
                <h4 class="post__header__title">Les évènements</h4>
                
                <img src="images/Micka_DomLHL_Pics_Media/PicsVendangesLHL/DSC03010.jpg" alt="" class="post__header__image" />
            </header>
            <main class="post__excerpt">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, aliquam? Deleniti nesciunt minima ratione, alias, adipisci expedita asperiores, numquam sit id ab quo cupiditate neque temporibus molestias explicabo voluptate delectus? Eum assumenda laudantium suscipit? Minus iure ducimus delectus eveniet maiores.</p>
            </main>
        </article>
    </div>


<?php get_footer(); ?>