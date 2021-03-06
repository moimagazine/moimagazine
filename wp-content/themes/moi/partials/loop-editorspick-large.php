<div class="post-container <?= the_main_category_slug() ?>-category">
    <a class="post-image" href="<? the_permalink() ?>">
        <div class="post-category-container">
            <div class="post-category-table">
                <div class="post-category-cell">
                    <div class="post-category">
                        <?php the_main_category() ?>
                    </div>
                </div>
            </div>
        </div>
        <?php the_post_thumbnail('vertical-large') ?>
    </a>
    <div class="post-text">
        <h3 class="post-title">
            <a href="<?php the_permalink() ?>">
                <?php echo get_the_title() ?>
            </a>
        </h3>
        <p class="excerpt">
            <?php echo get_the_excerpt() ?>
        </p>
        <a class="readmore" href="<?php the_permalink() ?>">Read More</a>
    </div>
</div>