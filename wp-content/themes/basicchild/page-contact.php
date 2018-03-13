<?php
get_header();

if( have_posts() ):

    while ( have_posts() ): the_post();

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Nous contacter</h2>
                <p>
                    <?= do_shortcode( get_the_content() ) ?>  <!--⚠️s'il trouve des shortcodes => il les interprète grâce à fct do_... (car pas passé par champ ACF où le shortcode est inclu donc interprété) -->
                </p>
            </div>
        </div>
    </div>

    <?php
    endwhile;

endif;

get_footer();

