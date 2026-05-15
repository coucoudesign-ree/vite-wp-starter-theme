<?php get_header(); ?>

<section class="p-hero">
    <div class="p-hero__inner">
        <h1 class="p-hero__title"><?php bloginfo('name'); ?></h1>
        <p class="p-hero__desc"><?php bloginfo('description'); ?></p>
    </div>
</section>

<section class="p-service l-section">
    <div class="l-container">
        <h2 class="c-heading"><?php esc_html_e('Services', 'vite-wp-starter'); ?></h2>
        <?php
        $services = new WP_Query([
            'post_type'      => 'service',
            'posts_per_page' => 6,
            'no_found_rows'  => true,
        ]);
        if ($services->have_posts()):
        ?>
        <div class="p-service__grid">
            <?php while ($services->have_posts()): $services->the_post(); ?>
                <article class="p-service__item">
                    <?php if (has_post_thumbnail()): ?>
                        <div class="p-service__thumb"><?php the_post_thumbnail('medium'); ?></div>
                    <?php endif; ?>
                    <h3 class="p-service__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="p-service__excerpt"><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<section class="p-member l-section">
    <div class="l-container">
        <h2 class="c-heading"><?php esc_html_e('Members', 'vite-wp-starter'); ?></h2>
        <?php
        $members = new WP_Query([
            'post_type'      => 'member',
            'posts_per_page' => 8,
            'no_found_rows'  => true,
        ]);
        if ($members->have_posts()):
        ?>
        <div class="p-member__grid">
            <?php while ($members->have_posts()): $members->the_post(); ?>
                <article class="p-member__item">
                    <?php if (has_post_thumbnail()): ?>
                        <div class="p-member__thumb"><?php the_post_thumbnail('thumbnail'); ?></div>
                    <?php endif; ?>
                    <h3 class="p-member__name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="p-member__excerpt"><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
