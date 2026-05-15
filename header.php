<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="l-header" role="banner">
    <div class="l-header__inner l-container">

        <div class="l-header__logo">
            <?php if (has_custom_logo()): ?>
                <?php the_custom_logo(); ?>
            <?php else: ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__logo-text">
                    <?php bloginfo('name'); ?>
                </a>
            <?php endif; ?>
        </div>

        <nav class="l-header__nav"
             id="js-nav"
             aria-label="<?php esc_attr_e('Primary Navigation', 'vite-wp-starter'); ?>">

            <?php if (has_nav_menu('primary')): ?>
                <?php wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'l-header__menu',
                    'fallback_cb'    => false,
                ]); ?>
            <?php else: ?>
                <?php $home = home_url('/'); ?>
                <ul class="l-header__menu">
                    <li><a href="<?php echo esc_url($home); ?>">TOP</a></li>
                    <li><a href="<?php echo esc_url($home . '#about'); ?>">ABOUT</a></li>
                    <li><a href="<?php echo esc_url($home . '#news'); ?>">NEWS</a></li>
                    <li><a href="<?php echo esc_url($home . '#recruit'); ?>">RECRUIT</a></li>
                    <li><a href="<?php echo esc_url($home . '#flow'); ?>">FLOW</a></li>
                    <li><a href="<?php echo esc_url($home . '#company'); ?>">COMPANY</a></li>
                    <li class="menu-item-entry"><a href="<?php echo esc_url($home . '#entry'); ?>">ENTRY</a></li>
                </ul>
            <?php endif; ?>

        </nav>

        <button class="l-header__hamburger"
                id="js-hamburger"
                type="button"
                aria-expanded="false"
                aria-controls="js-nav"
                aria-label="<?php esc_attr_e('Toggle menu', 'vite-wp-starter'); ?>">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>
</header>

<div class="l-header__overlay" id="js-drawerOverlay" aria-hidden="true"></div>

<main class="l-main">
