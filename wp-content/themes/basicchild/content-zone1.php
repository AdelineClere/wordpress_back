<?php

/*
$var1 = get_field('z1_slide_1');

echo "<pre>"; 
var_dump($var1);    // -> tablo ARRAY de ttes les infos relatives à l'img
echo "</pre>";
*/

$slides = array();
$slides[]=get_field('z1_slide_1');
$slides[]=get_field('z1_slide_2');
$slides[]=get_field('z1_slide_3');

/* 
foreach ( $slides as $indice => $valeur )       // -> Boucle pour lire infos sur mes slides
{
    echo $indice . " - " . $valeur['url']. "<br>";
}
*/

// créer un slider en Bootstrap 4 :
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="monslider" class="carousel slide" data-ride="carousel">

            <!-- indicateurs -->
                        <!-- 1er tour foreach -> indice = 0 >>> si indice =0 > ajoute class active
                            2è tour >> on ajoute plus class active (que su 1er trait de mes indicateurs)
                            Rq. Autant de li ( ptis points indicateurs de tofs) que d'img (lg 40) -->
            <ol class="carousel-indicators">
                <?php
                foreach ( $slides as $indice => $valeur ) :
                
                    $class_active='';
                    if ( $indice == 0 ) $class_active='class="active"';
                    ?>
                    <li data-target="#monslider" data-slide-to="<?= $indice ?>" <?= $class_active ?>></li>  
                    <?php
                endforeach;
                ?>
            </ol>

            <!-- images -->
                        <!-- 'role' = class B 4 où on indique ce que doit faire la div
                                'class active' pour la 1ère img rien puor les autres-->
            <div class="carousel-inner" role="listbox">
                    <?php
                    foreach ( $slides as $indice => $valeur) :

                        $slide_active='';
                        if ( $indice == 0 ) $slide_active ="active";
                        ?>
                        <div class="carousel-item <?= $slide_active ?>">
                            <img class="d-block img-fluid" src="<?= $valeur['url'] ?>" alt="<?= $valeur['alt'] ?>">
                        
                        </div>  
                        <?php               
                    endforeach;
                    ?>
            </div>

            <!-- flèches -->
            <a class="carousel-control-prev" href="#monslider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#monslider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>            
            </div>
        </div>   
    </div>
</div>


