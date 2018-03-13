<?php

get_header();

if( have_posts() );

    while( have_posts() ) : the_post();

        $photo = get_field('photo');    // au lieu de faire un champ personnalisé on aurait pu aussi mettre en image en avant, et récup ac fct wp (get_subnail..??)
        $date_heure = get_field('date_heure');

?>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="<?= $photo['url'] ?>" alt="<?= $photo['alt'] ?>">
                </div>
                <div class="col-md-8">
                    <a href="<?= get_the_permalink() ?>"><h3><?= get_the_title() ?></h3></a>
                    <p><?= date('d/m/Y H:i'); strtotime( $date_heure); ?></p>
                    <p><?= get_the_excerpt() ?></p>     <!-- excerpt = que début du text (sinon get content) -->
                </div>
            </div>
        <br>
    </div>

<?php

    endwhile;
get_footer();