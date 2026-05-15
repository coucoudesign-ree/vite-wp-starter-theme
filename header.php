<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="l-header">
    <div class="l-header__inner">
        <div class="l-header__logo">
            <?php if (has_custom_logo()): ?>
                <?php the_custom_logo(); ?>
            <?php else: ?>
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
            <?php endif; ?>
        </div>

        <nav class="l-header__nav" aria-label="<?php esc_attr_e('Primary Navigation', 'vite-wp-starter'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'l-header__menu',
                'fallback_cb'    => false,
            ]);
            ?>
        </nav>

        <button class="l-header__hamburger js-hamburger" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle menu', 'vite-wp-starter'); ?>">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<main class="l-main">
