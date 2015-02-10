<?php get_header() ?>
<article>
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
            <div class="nav-block">
                <a href="javascript:void(0)" class="loadmore">More</a>
            </div>
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
    <h2 class="section-heading">Popular</h2>
    <div class="latest-posts posts clearfix">
        <?php
        $latest_posts = get_posts(array(
            'numberposts' => 6,
        ));
        foreach($latest_posts as $post) {
            setup_postdata($post);
            get_template_part('partials/loop', 'post');
        }
        ?>
    </div>
    <div class="nav-block">
        <a href="javascript:void(0)" class="loadmore">More</a>
    </div>
</article>
<?php get_footer() ?>