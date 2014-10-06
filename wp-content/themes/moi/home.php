<?php get_header() ?>
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
            get_template_part('partials/loop', 'editorspick-large');
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