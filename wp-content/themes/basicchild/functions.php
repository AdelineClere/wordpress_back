<?php

/*

1. Ajouter une feuille CSS
2. Ajouter un script JS

3. Ajouter une Zone de menu perso
4. Ajouter une zone de widgets perso

*/


// 1.2. Ajouter feuilles CSS et scripts avec functions.php (⚠️ pr cas où on hérite pas de css parent, selon thème, pas ici)
// hook : wp_enqueue_script (⚠️ hook = fct wp qui s'exécute ds tous les cas -> insérer notre fct° perso)

add_action('wp_enqueue-scripts','custom_style_scripts');
//⚠️️ add_action (hook, nom_de_la_fonction_perso) (edd-action prend tous les scripts, css etc...)
// add_action = ajouter l'appel à une function suite à un hook

function custom_style_scripts() {

    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');  
    // = F. de style du thème parent car ⚠️ get_template... (chargée en 1er, pour que la perso prenne le dessus)
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css'); 
    // = F. de style. du thème activé car ⚠️ get_stylesheet_dir... = racine de thème enfant (chemin de F. de style enfant)

    // Scripts
    wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.3.1.min.js');  //* > si on prend CDN 
    /* Si on a un script js perso dans dossier JS du theme >
    ⚠️ wp_enqueue_script('perso-js', get_stylesheet_directory_uri() . '/js/fichier_perso.js');      (⚠️ perso.js = just un id )
    - id unique dc changer si existe déjà (ex ici 'jquery' > 'jquery-cdn')      */
}


// 3.⚠️ Menu perso => cf. footer.php où on va l'appeler
if ( function_exists('register_nav_menus') ){   // si fct° ⚠️'register_nav_menus' (fct° wp pour rajouter 1 menu) existe on l'utilise et on va l'appeler 'menufooter' > en libellé > 'Menu du bas' 

    register_nav_menus( array(
        'menufooter' => 'Menu du bas' )
    );
}


// 4.⚠️ Zone à widgets perso
if ( function_exists('register_sidebar') ){     // on vérif que la fct° sidebar existe > on l'utilise

    register_sidebar( array(
        'name' => 'Ma zone à widgets perso',
        'id' => 'sidebar-perso',
        'before_widget' => '<div>',    // définir ce qui est avant (= suppr les pts li par défaut)
        'after_widget' => '</div>'      // définir ce qui est après (on ouvre/ferme une div)
    ));
}



?>