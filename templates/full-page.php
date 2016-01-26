<?php
/*
    Template Name: Full page
    Description: No se muestra ninguna barra lateral
*/

get_header();
?>
<main>
    <div class="wrap">
        <section <?php torotur_class_ct('full')?>>
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    if( is_single() || is_page() ):
                        get_template_part('/templates/page/fullpage');
                    endif;
                endwhile;
            endif;
            ?>
        </section>
    </div>
</main>
<?php
get_footer();
