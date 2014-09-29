<?php get_header() ?>
<div class="top-stories">
    <?php
        $stickies = new WP_Query(array(
        'posts_per_page'      => 3,
        'post__in'            => get_option('sticky_posts'),
        'ignore_sticky_posts' => 1
        ));
    ?>
    <?php while ($stickies->have_posts()): $stickies->the_post() ?>
    <?php $featuredImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'vertical'); ?>
    <div class="story-container">
        <img src="<?php echo $featuredImageUrl[0] ?>" width="100%" alt="" />
        <div class="story-info">
            <div class="story-info-bg">
                <img src="<?php echo $featuredImageUrl[0] ?>" alt="" />
            </div>
            <div class="story-info-text">
                <h2><?php echo get_the_title() ?></h2>
                <div class="extra">
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
    </div>
    <?php endwhile; wp_reset_postdata() ?>
</div>

<h2 class="separator">Editor's Picks</h2>
<div class="editors-picks">
    <?php
        $stickies = new WP_Query(array(
        'posts_per_page'      => 5,
        'post__in'            => get_option('sticky_posts'),
        ));
    ?>
    <div class="col col1">
        <?php
            $stickies->the_post();
            get_template_part('partials/loop', 'editorspick');
            $stickies->the_post();
            get_template_part('partials/loop', 'editorspick');
        ?>
    </div>
    <div class="col col2 main-story">
        <?php
            $stickies->the_post();
            get_template_part('partials/loop', 'editorspick-main');
        ?>
    </div>
    <div class="col col3">
        <?php
            $stickies->the_post();
            get_template_part('partials/loop', 'editorspick');
            $stickies->the_post();
            get_template_part('partials/loop', 'editorspick');
        ?>
    </div>
    <?php wp_reset_postdata() ?>
</div>
<?php get_footer() ?>