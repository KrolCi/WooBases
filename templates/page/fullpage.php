<article id="post">
    <header class="post-head head-page-post">
        <h1 class="post-title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    </header>
    <div class="post-content">
        <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('full', array( 'class' => 'thumbs' ));
            }
            the_content();
        ?>
    </div>
</article>
