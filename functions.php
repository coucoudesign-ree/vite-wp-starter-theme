<?php

declare(strict_types=1);

// ─────────────────────────────────────────────
// Theme Setup
// ─────────────────────────────────────────────
function vite_wp_setup(): void {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => __('Primary Menu', 'vite-wp-starter'),
        'footer'  => __('Footer Menu', 'vite-wp-starter'),
    ]);
}
add_action('after_setup_theme', 'vite_wp_setup');

// ─────────────────────────────────────────────
// Enqueue Assets (Vite build output)
// ─────────────────────────────────────────────
function vite_wp_enqueue_assets(): void {
    $theme_uri = get_template_directory_uri();
    $theme_dir = get_template_directory();

    $css_path = $theme_dir . '/assets/style.css';
    $js_path  = $theme_dir . '/assets/main.js';

    if (file_exists($css_path)) {
        wp_enqueue_style(
            'vite-wp-style',
            $theme_uri . '/assets/style.css',
            [],
            (string) filemtime($css_path)
        );
    }

    if (file_exists($js_path)) {
        wp_enqueue_script(
            'vite-wp-main',
            $theme_uri . '/assets/main.js',
            [],
            (string) filemtime($js_path),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'vite_wp_enqueue_assets');

// ─────────────────────────────────────────────
// Custom Post Type: service
// ─────────────────────────────────────────────
function vite_wp_register_cpt_service(): void {
    $labels = [
        'name'               => __('Services', 'vite-wp-starter'),
        'singular_name'      => __('Service', 'vite-wp-starter'),
        'add_new_item'       => __('Add New Service', 'vite-wp-starter'),
        'edit_item'          => __('Edit Service', 'vite-wp-starter'),
        'view_item'          => __('View Service', 'vite-wp-starter'),
        'search_items'       => __('Search Services', 'vite-wp-starter'),
        'not_found'          => __('No services found.', 'vite-wp-starter'),
        'not_found_in_trash' => __('No services found in Trash.', 'vite-wp-starter'),
    ];

    register_post_type('service', [
        'labels'       => $labels,
        'public'       => true,
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-hammer',
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt'],
        'has_archive'  => true,
        'rewrite'      => ['slug' => 'service'],
    ]);
}
add_action('init', 'vite_wp_register_cpt_service');

// ─────────────────────────────────────────────
// Custom Post Type: member
// ─────────────────────────────────────────────
function vite_wp_register_cpt_member(): void {
    $labels = [
        'name'               => __('Members', 'vite-wp-starter'),
        'singular_name'      => __('Member', 'vite-wp-starter'),
        'add_new_item'       => __('Add New Member', 'vite-wp-starter'),
        'edit_item'          => __('Edit Member', 'vite-wp-starter'),
        'view_item'          => __('View Member', 'vite-wp-starter'),
        'search_items'       => __('Search Members', 'vite-wp-starter'),
        'not_found'          => __('No members found.', 'vite-wp-starter'),
        'not_found_in_trash' => __('No members found in Trash.', 'vite-wp-starter'),
    ];

    register_post_type('member', [
        'labels'       => $labels,
        'public'       => true,
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-groups',
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt'],
        'has_archive'  => true,
        'rewrite'      => ['slug' => 'member'],
    ]);
}
add_action('init', 'vite_wp_register_cpt_member');
