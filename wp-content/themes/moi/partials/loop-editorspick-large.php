<div class="post-container">
    <a class="post-image" href="<? the_permalink() ?>">
        <?php the_post_thumbnail('large-vertical') ?>
    </a>
    <div class="post-text">
        <div class="post-meta">
            <a class="avatar-block" href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
                <?php echo get_avatar(get_the_author_meta('ID'), 32 ) ?>
            </a>
            <div class="author-block">
                <div class="date"><?php echo get_the_date('M j, Y h:i A') ?></div>
                <a class="author-name" href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
                    <?php echo get_the_author_meta('display_name') ?>
                </a>
            </div>
        </div>
        <h2>
            <a href="<?php the_permalink() ?>">
                <?php echo get_the_title() ?>
            </a>
        </h2>
        <p class="excerpt">
            <?php echo get_the_excerpt() ?>
        </p>
        <a class="readmore" href="<?php the_permalink() ?>">Read More</a>
    </div>
</div>