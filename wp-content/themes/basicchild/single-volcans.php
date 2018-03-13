<?php

get_header();

if( have_posts() ):

        while( have_posts() ) : the_post();

        $photo = get_the_post_thumbnail(NULL, 'large');
        $pays = get_field('pays');
        $annee = get_field('derniere_eruption');
?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?= $photo ?>
                </div>
                <div class="col-md-4 col-push-md-4 text-center">
                    <h2><?= get_the_title() ?></h2>
                    <p><?= $pays ?></p>
                    <p><?= $annee ?></p>   
                </div>
                <div class="row">
                    <div class="col-md-12 text justifiy">
                        <p><?= get_the_content() ?></p> 
                    </div>
                </div>
            </div>
        </div>

<?php

    endwhile;

endif;

get_footer();

;