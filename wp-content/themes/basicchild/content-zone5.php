<?php

$vignettes = array();
$vignettes[] = get_field('z5_vignette_1');
$vignettes[] = get_field('z5_vignette_2');
$vignettes[] = get_field('z5_vignette_3');
$vignettes[] = get_field('z5_vignette_4');

?>

<div class="container">
    <div class="row">
    <?php
        foreach( $vignettes as $indice => $valeur):
            ?>
            <div class="col-md-3">
                <img class="img-fluid rounded-circle" src="<?= $valeur['url'] ?>" alt"<?= $valeur['alt'] ?>">
                <div class="caption text-center">
                    <p><?= $valeur['caption'] ?></p>
                
                </div>
            </div>
            <?php
        endforeach;

    ?>

</div>

</div>