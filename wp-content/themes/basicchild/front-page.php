<?php

get_header();   // charger le header.php

if ( have_posts() ):    //⚠️ si j'ai des posts du type du template appelé (ici = type pg d'accueil)

    while ( have_posts() ): the_post();  //⚠️ => tant que j'ai des posts, je charge les infos à chq tour
        
            /*  echo get_the_title();   //⚠️ je récup infos chargées avant (de Accueil)
                echo '<br>';
                echo get_the_content();     */
 
            /*    ?>
                <h2><?= get_the_title() ?></h2> 
                <p>Rédigé par <?= get_the_author() ?> le <?= get_the_date() ?></p>
                <hr>
                <p><?= get_the_content() ?></p>
                <?php
            */

    /* the_title(); <=> echo get_the_title() */

    get_template_part('content','zone1');
    get_template_part('content','zone2');
    get_template_part('content','zone3');
    get_template_part('content','zone4');
    get_template_part('content','zone5');
    get_template_part('content','zone6');

    endwhile;

endif;

get_footer();   // charger le footer.php