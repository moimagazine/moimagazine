        <div class="pull-right ad leaderboard">
            <img src="http://placehold.it/728x90&text=Leaderboard+(728x90)" width="728" height="90" />
        </div>
        <h2 class="instagram section-heading">Instagram Feed</h2>
        <div class="instagram-feed">
            <?php echo do_shortcode('[instagram-feed]'); ?>
        </div>
        <div class="clearfix"></div>
    </div><? #content-inner ?>
</div><? #content-outer ?>
<footer>
    <div id="footer-outer" class="page-width">
        <div id="footer-inner">
            <form method="post">
                <input type="email" class="email" placeholder="Your email address" /><!--
             --><input type="submit" class="submit" value="&gt;" />
            </form>
            <?php wp_nav_menu( array(
                'menu' => 'footer-menu',
                'fallback_cb' => false,
            ) ); ?>
        </div>
    </div>
    <div id="footer-bottom">
        All Rights Reserved &copy; <?php echo date('Y') ?> <strong>Moi Magazine</strong>
    </div>
</footer>
</body>
</html>
