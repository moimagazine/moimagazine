<div class="post">
    <div class="post-image-block">
        <div class="post-category">
            <a href="<?php the_main_category_link() ?>">
                <?php the_main_category() ?>
            </a>
        </div>
        <a href="<?php the_permalink() ?>" class="post-image">
            <?php the_post_thumbnail('vertical') ?>
        </a>
    </div>
    <div class="post-text">
        <h3>
            <a href="<?php the_permalink() ?>">
                <?php the_title() ?>
            </a>
        </h3>
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
        <p class="excerpt">
            <?php echo get_the_excerpt() ?>
        </p>
        <a class="readmore" href="<?php the_permalink() ?>">Read More</a>
    </div>
</div>