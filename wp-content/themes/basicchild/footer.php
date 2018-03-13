    </div>
</div>

<footer>
<!--⚠️ Afficher le Menu du bas créé -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 menufooter">
                <ul class="nav nav-pills nav-justified">
                    <?php
                        $items = wp_get_nav_menu_items('Menu footer');
                        foreach ( $items as $index => $item ):
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= $item->url ?>">
                                <?= $item->title; ?>
                                </a>
                            </li>
                            <?php
                        endforeach;
                    ?>
                </ul>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center monfooter">
                <p>&copy; copyright 2018 - Adeline Clère - Tous droits réservés</p>
            </div>
        
        </div>
    </div>
</footer>

<?php 
wp_footer();  //⚠️reprendre des fct° indispensables de parent, entre autre aff. barre d'admin noire en haut,...
?>

<!--
     wp_nav_menu(
                        array(
                            'theme_location' => 'menufooter',
                            'menu' => 'menufooter',  // celui noté quand on l'a créé ds interface wp Apparence / Menu
                            'menu_id' => 'menufooter',   // son id qui est ds functions.php
                            'container' => false,   // est déjà ds une div container, dc lui dit pas la peine d'en recréer une
                            'menu_class' => 'nav nav-pills nav-justified',
                            'items_wrap' => '<ul class="%2$s">%3$s</ul>'
                        )
                    )   
-->