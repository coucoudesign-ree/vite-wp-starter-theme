<?php
/**
 * Template Name: サービス詳細
 */
get_header(); ?>

<!-- ページヒーロー -->
<section class="p-inner-hero">
    <div class="l-container">
        <nav class="p-inner-hero__breadcrumb" aria-label="Breadcrumb">
            <ol>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
                <li aria-current="page"><?php the_title(); ?></li>
            </ol>
        </nav>
        <div class="p-inner-hero__head">
            <span class="c-section-en">Service</span>
            <h1 class="p-inner-hero__title"><?php the_title(); ?></h1>
        </div>
    </div>
</section>

<!-- サービス詳細 -->
<section class="p-service-detail l-section">
    <div class="l-container">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <div class="p-service-detail__inner">
            <div class="p-service-detail__body">
                <div class="p-service-detail__content">
                    <?php if (get_the_content()): ?>
                        <?php the_content(); ?>
                    <?php else: ?>
                        <p>私たちのサービスは、クライアントのビジネス課題を深く理解し、テクノロジーと創造性を組み合わせた最適解を提供します。業界の枠を超えたアプローチで、持続可能な成長をともに実現します。</p>
                        <p>これまで100社以上の企業と協働してきた実績をもとに、戦略策定から実装・運用まで一貫してサポートします。専門チームが、ビジネスのあらゆるフェーズで伴走します。</p>
                        <ul class="p-service-detail__list">
                            <li>課題の本質を捉えたソリューション設計</li>
                            <li>プロジェクトマネジメントの徹底</li>
                            <li>データドリブンな意思決定支援</li>
                            <li>継続的な改善と成長サポート</li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            <div class="p-service-detail__img">
                <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php else: ?>
                    <img src="https://placehold.jp/1a2744/f5f0e8/600x500.png?text=Service" alt="<?php the_title(); ?>" loading="lazy">
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>
</section>

<!-- 関連サービス -->
<section class="p-related l-section">
    <div class="l-container">
        <div class="p-section-header">
            <span class="c-section-en">Related</span>
            <h2 class="c-section-title">関連サービス</h2>
        </div>
        <div class="p-related__grid">
            <?php
            $related = new WP_Query([
                'post_type'      => 'service',
                'posts_per_page' => 3,
                'post__not_in'   => [get_the_ID()],
                'no_found_rows'  => true,
            ]);
            if ($related->have_posts()):
                while ($related->have_posts()): $related->the_post(); ?>
                <article class="p-related__card">
                    <a href="<?php the_permalink(); ?>" class="p-related__card-link">
                        <div class="p-related__card-img">
                            <?php if (has_post_thumbnail()): the_post_thumbnail('medium_large');
                            else: ?><img src="https://placehold.jp/1a2744/f5f0e8/600x400.png?text=Service" alt="<?php the_title(); ?>" loading="lazy"><?php endif; ?>
                        </div>
                        <div class="p-related__card-body">
                            <h3 class="p-related__card-title"><?php the_title(); ?></h3>
                            <p class="p-related__card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                        </div>
                    </a>
                </article>
                <?php endwhile; wp_reset_postdata();
            else: ?>
                <article class="p-related__card">
                    <div class="p-related__card-img">
                        <img src="https://placehold.jp/1a2744/f5f0e8/600x400.png?text=Consulting" alt="戦略コンサルティング" loading="lazy">
                    </div>
                    <div class="p-related__card-body">
                        <h3 class="p-related__card-title">戦略コンサルティング</h3>
                        <p class="p-related__card-excerpt">ビジネス課題の本質を捉え、持続可能な成長戦略を提案します。</p>
                    </div>
                </article>
                <article class="p-related__card">
                    <div class="p-related__card-img">
                        <img src="https://placehold.jp/1a2744/f5f0e8/600x400.png?text=DX" alt="DX推進支援" loading="lazy">
                    </div>
                    <div class="p-related__card-body">
                        <h3 class="p-related__card-title">DX推進支援</h3>
                        <p class="p-related__card-excerpt">デジタル変革のロードマップ策定から実装まで包括的に支援します。</p>
                    </div>
                </article>
                <article class="p-related__card">
                    <div class="p-related__card-img">
                        <img src="https://placehold.jp/1a2744/f5f0e8/600x400.png?text=Marketing" alt="マーケティング支援" loading="lazy">
                    </div>
                    <div class="p-related__card-body">
                        <h3 class="p-related__card-title">マーケティング支援</h3>
                        <p class="p-related__card-excerpt">データに基づいたマーケティング戦略で顧客獲得・定着を実現します。</p>
                    </div>
                </article>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="p-cta-section l-section">
    <div class="l-container">
        <div class="p-cta-section__inner">
            <span class="c-section-en">Entry</span>
            <h2 class="p-cta-section__title">あなたのエントリーをお待ちしています</h2>
            <p class="p-cta-section__lead">私たちと一緒に、新しい価値を創り出しませんか。<br>まずはカジュアル面談からお気軽にどうぞ。</p>
            <div class="p-cta-section__btns">
                <a href="<?php echo esc_url(home_url('/#entry')); ?>" class="p-cta-section__btn p-cta-section__btn--primary">
                    キャリアエントリー
                </a>
                <a href="<?php echo esc_url(home_url('/#recruit')); ?>" class="p-cta-section__btn p-cta-section__btn--secondary">
                    募集職種を見る
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
