<article id="post">
    <header class="post-head">
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="post-content">
        <div class="post">
            <div class="thumbnail-single">
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
        <div class="bottom-shared">
            <a href="http://facebook.com/sharer.php?u=<?php themeb_links() ?>" class="fb popup fa fa-facebook" target="_blank"></a>
            <a href="http://twitter.com/intent/tweet?text=<?php themeb_links('Twitter') ?>" class="tw popup fa fa-twitter" target="_blank"></a>
            <a href="https://plus.google.com/share?url=<?php themeb_links() ?>" class="gp popup fa fa-google-plus" target="_blank"></a>
        </div>
    </div>
</article>
