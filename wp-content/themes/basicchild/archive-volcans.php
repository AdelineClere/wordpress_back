<?php

get_header();

if( have_posts() );

    while( have_posts() ) : the_post();

        $photo = get_the_post_thumbnail(NULL, 'medium');
        // var_dump($photo);
        $pays = get_field('pays');
        $annee = get_field('dernière_eruption');
?>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?= $photo ?>
                </div>
                <div class="col-md-8">
                    <a href="<?= get_the_permalink() ?>"><h3><?= get_the_title() ?></h3></a>
                    <p><?= $pays ?></p>
                    <p><?= get_the_excerpt() ?></p>
                    <p><?= $annee ?></p>
                    <br>
                </div>
            </div>
        </div>

    <?php

    endwhile;


get_footer();

