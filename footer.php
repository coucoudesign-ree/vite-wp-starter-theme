</main><!-- /.l-main -->

<footer class="l-footer">
    <div class="l-footer__inner">
        <div class="l-footer__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </div>

        <nav class="l-footer__nav" aria-label="<?php esc_attr_e('Footer Navigation', 'vite-wp-starter'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'footer',
                'container'      => false,
                'menu_class'     => 'l-footer__menu',
                'fallback_cb'    => false,
            ]);
            ?>
        </nav>

        <p class="l-footer__copy">
            <small>&copy; <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</small>
        </p>
    </div>
</footer>

<div class="c-pagetop js-pagetop" aria-label="<?php esc_attr_e('Back to top', 'vite-wp-starter'); ?>">
    <button type="button">&#8679;</button>
</div>

<?php wp_footer(); ?>
</body>
</html>
