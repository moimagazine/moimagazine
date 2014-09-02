<?php get_header() ?>
<div class="featured-stories">
    <?php
        $stickies = new WP_Query(array(
        'posts_per_page'      => 2,
        'post__in'            => get_option('sticky_posts'),
        'ignore_sticky_posts' => 1
        ));
    ?>
    <?php while ($stickies->have_posts()): $stickies->the_post() ?>
    <?php $featuredImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large')[0]; ?>
    <div class="story-container">
        <img src="<?php echo $featuredImageUrl ?>" width="100%" alt="" />
        <div class="story-info">
            <div class="story-info-bg">
                <img src="<?php echo $featuredImageUrl ?>" alt="" />
            </div>
            <div class="story-info-text">
                <h2><?php echo get_the_title() ?></h2>
                <div class="meta">
                    <div class="avatar">
                        <?php echo get_avatar(get_the_author_meta('ID'), 32 ) ?>
                    </div>
                    <div class="author-block">
                        <div class="author-name"><?php echo get_the_author_meta('display_name') ?></div>
                        <div class="date"><?php echo get_the_date('M j, Y h:i A') ?></div>
                    </div>
                </div>
                <div class="excerpt">
                    <?php echo get_the_excerpt() ?>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; wp_reset_postdata() ?>
</div>
<?php get_footer() ?>