<?php

$texte_gauche = get_field('z2_texte_gauche');
$texte_droit = get_field('z2_texte_droit');

?>
<div class="container">
    <div class="row">
        <div class="col-md-6 text-justify"><p><?= $texte_gauche ?></p></div>
        <div class="col-md-6 text-justify"><p><?= $texte_droit ?></p></div>
    </div>
</div>