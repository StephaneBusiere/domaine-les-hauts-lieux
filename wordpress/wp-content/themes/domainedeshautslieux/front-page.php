<?php

get_header();

if ( have_posts()):
    while ( have_posts()) :
        the_post();
        

?>

 <!-- Layout : Posts -->

 <div class="posts">
<section>
<?php
        the_post_thumbnail()
        ?>
    <div class="img1">
        <div class="box box1">
            <h2>Le vigneron</h2>

            <div class="text">
                Après avoir travaillé en tant que consultant en oenologie et viticulture dans la Vallée du Rhône j’ai nourri mon parcours de différents voyages à travers les vignobles Français, Européens et outre Atlantique, 
                Je suis convaincu qu'il y a dans cette haute vallée de la Durance, un terroir d'avenir, un terroir préservé en phase avec les enjeux de demain. Un vignoble originale et unique capable de donnés naissance à des vins de qualité. 
                Installé près de Guillestre avec ma femme en 2016, cultiver mes propres vignes c’est concrétiser un rêve d'enfant! 
            </div>
            <button class="learn">En savoir plus</button>
        </div>
    </div>

</section>
    <?php endwhile;
    endif;
    ?>
<section>
    <div class="img2">
        <div class="box box2">
            <h2>Les vins</h2>
            <div class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid est assumenda rerum magnam
                nesciunt
                quidem, iste officiis ullam doloremque earum delectus atque fugit dolorem ratione magni amet
                corrupti
                necessitatibus eius officia itaque. Assumenda et facilis iusto tenetur, beatae vero! Eius aut,
                quidem
                ipsam eum ullam animi, ea quibusdam molestias tempore nulla quos ipsum, odit nemo placeat beatae
                praesentium dolorem? Vel a error accusantium exercitationem, non iure distinctio voluptatum vitae
                saepe?
            </div>
            <button class="learn">En savoir plus</button>
        </div>
    </div>

</section>

<section>
    <div class="img3">
        <div class="box box3">
            <h2>Les évenements</h2>

            <div class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid est assumenda rerum magnam
                nesciunt
                quidem, iste officiis ullam doloremque earum delectus atque fugit dolorem ratione magni amet
                corrupti
                necessitatibus eius officia itaque. Assumenda et facilis iusto tenetur, beatae vero! Eius aut,
                quidem
                ipsam eum ullam animi, ea quibusdam molestias tempore nulla quos ipsum, odit nemo placeat beatae
                praesentium dolorem? Vel a error accusantium exercitationem, non iure distinctio voluptatum vitae
                saepe?
            </div>
            <button class="learn">En savoir plus</button>
        </div>
    </div>
    </section>
</div>


<?php   

  
get_footer();
