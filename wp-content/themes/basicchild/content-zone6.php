<!--
1. Ajouter un champ dans le groupe "zones de la page d'accueil"
2. Créer un fichier de template zone 6
3. l'integrer à front-page
4. ajouter du texte dans cette zone en modifiant le contenu de la page d'accueil.
-->


<?php

$texte_gauche = get_field('z6_texte_gauche');

?>
<div class="container">
    <div class="row">
        <div class="col-md-6 text-justify">
            <p><?= $texte_gauche ?></p>
        </div>
        <div class="col-md-6 text-justify">
            <?php
                dynamic_sidebar('sidebar-perso');   //⚠️ on ajoute la zone à widget perso dans la zone 6
            ?>
        </div>
    </div>
</div>