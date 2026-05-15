<?php get_header(); ?>

<div class="l-container">
    <?php if (have_posts()): ?>
        <div class="p-archive">
            <?php while (have_posts()): the_post(); ?>
                <article class="p-archive__item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if (has_post_thumbnail()): ?>
                        <a href="<?php the_permalink(); ?>" class="p-archive__thumb">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    <?php endif; ?>
                    <div class="p-archive__body">
                        <h2 class="p-archive__title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <time class="p-archive__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                            <?php echo esc_html(get_the_date()); ?>
                        </time>
                        <div class="p-archive__excerpt"><?php the_excerpt(); ?></div>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="l-pagination">
            <?php the_posts_pagination(['mid_size' => 2]); ?>
        </div>
    <?php else: ?>
        <p><?php esc_html_e('No posts found.', 'vite-wp-starter'); ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
