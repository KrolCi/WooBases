<article id="post">
    <header class="post-head">
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="post-content">
        <div class="post-dates">
            <div class="items category">
                <div class="t-text fa fa-folder"></div>
                <div class="text"><?php the_category('single'); ?> </div>
            </div>
            <div class="items blogger">
                <div class="t-text fa fa-user"></div>
                <div class="text"> <?php the_author(); ?></div>
            </div>
            <div class="items fecha">
                <div class="t-text fa fa-calendar"></div>
                <div class="text"><?php the_time('j'); ?> de <?php the_time(' F , Y'); ?></div>
            </div>
            <div class="items n-comm">
                <div class="t-text fa fa-comment"></div>
                <div class="text"><?php comments_popup_link( '0 »', '1 »', '% »'); ?></div>
            </div>
        </div>
        <div class="post">
            <div class="post-sidebar">
            <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                }
                ?>
            </div>
            <span class="content">
                <?php the_content();?>
            </span>
        </div>
        <div class="post-shared">
            <a href="http://facebook.com/sharer.php?u=<?php themeb_links() ?>" class="fb popup fa fa-facebook" target="_blank"></a>
            <a href="http://twitter.com/intent/tweet?text=<?php themeb_links('Twitter') ?>" class="tw popup fa fa-twitter" target="_blank"></a>
            <a href="https://plus.google.com/share?url=<?php themeb_links() ?>" class="gp popup fa fa-google-plus" target="_blank"></a>
        </div>
    </div>
    <?php the_comment(); ?>
</article>
