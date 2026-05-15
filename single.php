<?php get_header(); ?>

<div class="l-container">
    <?php while (have_posts()): the_post(); ?>
        <article class="p-single" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="p-single__header">
                <h1 class="p-single__title"><?php the_title(); ?></h1>
                <div class="p-single__meta">
                    <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                        <?php echo esc_html(get_the_date()); ?>
                    </time>
                    <?php the_category(' / '); ?>
                </div>
            </header>

            <?php if (has_post_thumbnail()): ?>
                <div class="p-single__thumb"><?php the_post_thumbnail('large'); ?></div>
            <?php endif; ?>

            <div class="p-single__content">
                <?php the_content(); ?>
            </div>

            <div class="p-single__nav">
                <?php
                the_post_navigation([
                    'prev_text' => __('&larr; Previous', 'vite-wp-starter'),
                    'next_text' => __('Next &rarr;', 'vite-wp-starter'),
                ]);
                ?>
            </div>
        </article>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
