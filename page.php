<?php get_header(); ?>

<div class="l-container">
    <?php while (have_posts()): the_post(); ?>
        <article class="p-page" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="p-page__header">
                <h1 class="p-page__title"><?php the_title(); ?></h1>
            </header>

            <?php if (has_post_thumbnail()): ?>
                <div class="p-page__thumb"><?php the_post_thumbnail('large'); ?></div>
            <?php endif; ?>

            <div class="p-page__content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
