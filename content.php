<sectio id="posts">
    <!-- Header section -->
    <?php if( is_search() ) : ?>
        <header class="title-section">
            <?php get_search_form(); ?>
        </header>
    <?php elseif( is_archive() ) : ?>
        <header class="title-section">
            <?php the_archive_title(); ?>
        </header>
    <?php elseif( is_category() ): ?>
        <header class="title-section">
            <?php single_cat_title(); ?>
        </header>
    <?php endif; ?>
    <!-- fin header section -->
    <?php
        /* -- Tipos de contenidos -- */
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                if( is_single() ):
                    get_template_part('content-single');
                elseif( is_page() ):
                    get_template_part('content-page');
                else:
                    get_template_part('content-list');
                endif;
            endwhile;
        else:
            echo wpautop( 'No hemos podido conseguir nada' );
        endif;
    ?>
</sectio>
