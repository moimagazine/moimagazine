<div class="story-container">
    <div class="story-image">
        <?php the_post_thumbnail('vertical') ?>
    </div>
    <div class="story-text">
        <div class="meta">
            <div class="avatar-block">
                <?php echo get_avatar(get_the_author_meta('ID'), 32 ) ?>
            </div>
            <div class="author-block">
                <div class="date"><?php echo get_the_date('M j, Y h:i A') ?></div>
                <div class="author-name"><?php echo get_the_author_meta('display_name') ?></div>
            </div>
        </div>
        <h2><?php echo get_the_title() ?></h2>
        <a class="readmore" href="#">Read More</a>
    </div>
</div>