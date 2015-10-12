<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="post-header">
        <?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
        <div class="post-image">
            <?php the_post_thumbnail('horizontal-large') ?>
            <?php the_image_credits() ?>
        </div>
        <div class="post-byline">
            <a class="avatar-block" href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
                <?php echo get_avatar(get_the_author_meta('ID'), 32 ) ?>
            </a>
            <div class="author-block">
                <div class="date">
                    <?php echo get_the_date('M j, Y h:i A') ?>
                    <?php edit_post_link( "Edit this post" ); ?>
                </div>
                <a class="author-name" href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
                    <?php echo get_the_author_meta('display_name') ?>
                </a>
            </div>
        </div>
    </header>
    <div class="post-content">
        <?php the_content(); ?>
        <?php
        wp_link_pages( array(
                           'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
                           'after'       => '</div>',
                           'link_before' => '<span>',
                           'link_after'  => '</span>',
                           'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
                           'separator'   => '<span class="screen-reader-text">, </span>',
                       ) );
        ?>
    </div>
</article>
