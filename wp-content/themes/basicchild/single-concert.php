<?php

get_header();

if( have_posts() ):

    while( have_posts() ) : the_post();

        $photo = get_field('photo');    
        $date_heure = get_field('date_heure');
        $salle = get_field('salle');
        $adresse = get_field('adresse');
        $prix = get_field('prix');  //⚠️ on va chercher valeur du champ prix
        
        $infos_prix = get_field_object('prix');  //⚠️ on va chercher propriétés (nb + €) du champ prix
            echo "<pre>";
        //        var_dump($infos_prix);
            echo '</pre>';
        $devise = $infos_prix['append'];  // on va chercher ⚠️ suffixe € ac 'append' (⚠️ prefixe ac 'prepend')
?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class="img-fluid" src="<?= $photo['url'] ?>" alt="<?= $photo['alt'] ?>">
                </div>
                <div class="col-md-4 text-center">
                    <h2><?= get_the_title() ?></h2>
                    <p><?= date('d/m/Y H:i'); strtotime( $date_heure); ?></p>  <!--⚠️ strtotime transforme date saisie en timestamp -->
                    <p><?= $salle ?></p>
                    <p><?= $prix. ' ' .$devise ?></p>   
                </div>
                <div class="col-md-4">
                    <p><?= $adresse ?></p>
                </div>
                <div class="col-md-4"></div>
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




/* la LOOP : on la retrouve très svt en wp :

if( have_posts() ):

    while( have_posts() ) : the_post();

    endwhile;
    
endif;

*/