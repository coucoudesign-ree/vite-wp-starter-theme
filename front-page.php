<?php get_header(); ?>

<!-- ① Hero -->
<section class="p-hero">
    <div class="p-hero__inner l-container">
        <p class="p-hero__en">Find Your Future</p>
        <h1 class="p-hero__title">ともに、挑戦できる<br>場所がここにある。</h1>
        <p class="p-hero__lead">私たちは、一人ひとりの可能性を信じ、<br>成長し続けられる環境をつくっています。</p>
        <a href="#recruit" class="p-hero__cta">採用情報を見る</a>
    </div>
</section>

<!-- ② About -->
<section class="p-about l-section" id="about">
    <div class="l-container">
        <div class="p-section-header">
            <span class="c-section-en">About Us</span>
            <h2 class="c-section-title">わたしたちについて</h2>
        </div>
        <div class="p-about__grid">
            <div class="p-about__img"><img src="https://placehold.jp/3d4070/ffffff/600x400.png?text=Photo+01" alt="会社の様子1" loading="lazy"></div>
            <div class="p-about__img"><img src="https://placehold.jp/3d4070/ffffff/600x400.png?text=Photo+02" alt="会社の様子2" loading="lazy"></div>
            <div class="p-about__img"><img src="https://placehold.jp/3d4070/ffffff/600x400.png?text=Photo+03" alt="会社の様子3" loading="lazy"></div>
            <div class="p-about__img"><img src="https://placehold.jp/3d4070/ffffff/600x400.png?text=Photo+04" alt="会社の様子4" loading="lazy"></div>
        </div>
        <div class="p-about__body">
            <p>私たちは、テクノロジーとクリエイティビティの力で、社会の課題を解決するプロフェッショナル集団です。2010年の創業以来、多様なバックグラウンドを持つメンバーが集まり、互いの強みを活かしながら成長してきました。</p>
            <p>ここでは「挑戦」を称え、「失敗」を学びの機会と捉え、常に前進し続けることができます。あなたの情熱と行動力を、ぜひ私たちのチームに加えてください。</p>
        </div>
    </div>
</section>

<!-- ③ News -->
<section class="p-news l-section" id="news">
    <div class="l-container">
        <div class="p-section-header p-section-header--light">
            <span class="c-section-en">News</span>
            <h2 class="c-section-title">お知らせ</h2>
        </div>
        <ul class="p-news__list">
            <?php
            $news_query = new WP_Query([
                'post_type'      => 'news',
                'posts_per_page' => 5,
                'no_found_rows'  => true,
            ]);
            if ($news_query->have_posts()):
                while ($news_query->have_posts()): $news_query->the_post(); ?>
                <li class="p-news__item">
                    <a href="<?php the_permalink(); ?>" class="p-news__link">
                        <time class="p-news__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                        <?php
                        $cats = get_the_terms(get_the_ID(), 'news_category');
                        $cat_name = ($cats && !is_wp_error($cats)) ? esc_html($cats[0]->name) : 'お知らせ';
                        ?>
                        <span class="p-news__cat"><?php echo $cat_name; ?></span>
                        <span class="p-news__title"><?php the_title(); ?></span>
                    </a>
                </li>
                <?php endwhile; wp_reset_postdata();
            else: ?>
                <li class="p-news__item">
                    <span class="p-news__date">2025.03.15</span>
                    <span class="p-news__cat">採用情報</span>
                    <span class="p-news__title">2026年度 新卒採用エントリー受付開始</span>
                </li>
                <li class="p-news__item">
                    <span class="p-news__date">2025.02.01</span>
                    <span class="p-news__cat">お知らせ</span>
                    <span class="p-news__title">会社説明会のご案内（オンライン開催）</span>
                </li>
                <li class="p-news__item">
                    <span class="p-news__date">2025.01.10</span>
                    <span class="p-news__cat">プレスリリース</span>
                    <span class="p-news__title">新サービスローンチのお知らせ</span>
                </li>
                <li class="p-news__item">
                    <span class="p-news__date">2024.12.25</span>
                    <span class="p-news__cat">採用情報</span>
                    <span class="p-news__title">中途採用（エンジニア職）の募集を開始しました</span>
                </li>
                <li class="p-news__item">
                    <span class="p-news__date">2024.11.20</span>
                    <span class="p-news__cat">お知らせ</span>
                    <span class="p-news__title">オフィス移転のお知らせ</span>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</section>

<!-- ④ Message -->
<section class="p-message l-section" id="message">
    <div class="l-container">
        <div class="p-message__inner">
            <div class="p-message__img">
                <img src="https://placehold.jp/c8a96e/ffffff/500x620.png?text=President" alt="代表取締役 山田 太郎" loading="lazy">
            </div>
            <div class="p-message__body">
                <span class="c-section-en">President Message</span>
                <h2 class="c-section-title">代表メッセージ</h2>
                <p class="p-message__lead">挑戦を恐れず、共に未来を切り拓く仲間を求めています。</p>
                <p>私たちが大切にしているのは、「人」です。どんなに優れた技術や仕組みも、それを動かす人がいなければ意味を持ちません。だからこそ、私たちは一人ひとりの成長を最優先に考え、挑戦できる環境を整えてきました。</p>
                <p>失敗を恐れず前に進む勇気、そして仲間を思いやる心。この二つを持つあなたと、ぜひ一緒に働きたいと思っています。</p>
                <p class="p-message__name">代表取締役社長<br><strong>山田 太郎</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- ⑤ Recruit -->
<section class="p-recruit l-section" id="recruit">
    <div class="l-container">
        <div class="p-section-header p-section-header--light">
            <span class="c-section-en">Recruit</span>
            <h2 class="c-section-title">募集職種</h2>
        </div>
        <div class="p-recruit__grid">
            <?php
            $recruit_query = new WP_Query([
                'post_type'      => 'recruit',
                'posts_per_page' => 6,
                'no_found_rows'  => true,
            ]);
            if ($recruit_query->have_posts()):
                while ($recruit_query->have_posts()): $recruit_query->the_post(); ?>
                <article class="p-recruit__card">
                    <a href="<?php the_permalink(); ?>" class="p-recruit__card-link">
                        <span class="p-recruit__card-en"><?php echo esc_html(get_post_meta(get_the_ID(), 'position_en', true) ?: 'Position'); ?></span>
                        <h3 class="p-recruit__card-title"><?php the_title(); ?></h3>
                        <div class="p-recruit__card-excerpt"><?php the_excerpt(); ?></div>
                        <span class="p-recruit__card-more">詳細を見る →</span>
                    </a>
                </article>
                <?php endwhile; wp_reset_postdata();
            else: ?>
                <article class="p-recruit__card">
                    <span class="p-recruit__card-en">Engineering</span>
                    <h3 class="p-recruit__card-title">エンジニア</h3>
                    <p class="p-recruit__card-excerpt">新規サービスの設計・開発を担うコアメンバーを募集。モダンな技術スタックで、自由度高く開発できる環境です。</p>
                    <span class="p-recruit__card-more">詳細を見る →</span>
                </article>
                <article class="p-recruit__card">
                    <span class="p-recruit__card-en">Design</span>
                    <h3 class="p-recruit__card-title">デザイナー</h3>
                    <p class="p-recruit__card-excerpt">UI/UXからブランディングまで幅広く担当。ユーザー体験を起点にしたデザイン思考を持つ方を歓迎します。</p>
                    <span class="p-recruit__card-more">詳細を見る →</span>
                </article>
                <article class="p-recruit__card">
                    <span class="p-recruit__card-en">Sales</span>
                    <h3 class="p-recruit__card-title">営業・事業開発</h3>
                    <p class="p-recruit__card-excerpt">新規クライアント開拓から既存顧客との関係構築まで。事業全体を動かすやりがいある仕事です。</p>
                    <span class="p-recruit__card-more">詳細を見る →</span>
                </article>
                <article class="p-recruit__card">
                    <span class="p-recruit__card-en">Marketing</span>
                    <h3 class="p-recruit__card-title">マーケティング</h3>
                    <p class="p-recruit__card-excerpt">データドリブンな施策立案と実行。SNS・SEO・広告など多様な手法で成果を追求します。</p>
                    <span class="p-recruit__card-more">詳細を見る →</span>
                </article>
                <article class="p-recruit__card">
                    <span class="p-recruit__card-en">HR</span>
                    <h3 class="p-recruit__card-title">人事・採用</h3>
                    <p class="p-recruit__card-excerpt">組織づくりの中心を担うポジション。採用・研修・制度設計まで、人事全般をリードします。</p>
                    <span class="p-recruit__card-more">詳細を見る →</span>
                </article>
                <article class="p-recruit__card">
                    <span class="p-recruit__card-en">Management</span>
                    <h3 class="p-recruit__card-title">経営企画</h3>
                    <p class="p-recruit__card-excerpt">中長期戦略の策定から経営管理まで。事業を俯瞰できるポジションで会社全体を動かします。</p>
                    <span class="p-recruit__card-more">詳細を見る →</span>
                </article>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- ⑥ Flow -->
<section class="p-flow l-section" id="flow">
    <div class="l-container">
        <div class="p-section-header">
            <span class="c-section-en">Application Flow</span>
            <h2 class="c-section-title">選考フロー</h2>
        </div>
        <ol class="p-flow__list">
            <li class="p-flow__item">
                <span class="p-flow__num">01</span>
                <div class="p-flow__body">
                    <h3 class="p-flow__title">エントリー</h3>
                    <p class="p-flow__desc">フォームまたは各媒体からエントリーをお願いします。書類審査の結果は1週間以内にご連絡します。</p>
                </div>
            </li>
            <li class="p-flow__item">
                <span class="p-flow__num">02</span>
                <div class="p-flow__body">
                    <h3 class="p-flow__title">書類選考</h3>
                    <p class="p-flow__desc">履歴書・職務経歴書をもとに書類審査を行います。通過された方には面接日程の調整をご連絡します。</p>
                </div>
            </li>
            <li class="p-flow__item">
                <span class="p-flow__num">03</span>
                <div class="p-flow__body">
                    <h3 class="p-flow__title">一次面接</h3>
                    <p class="p-flow__desc">担当者との面接です。これまでの経験やキャリアビジョンについてお話しください。オンライン・対面どちらも可能です。</p>
                </div>
            </li>
            <li class="p-flow__item">
                <span class="p-flow__num">04</span>
                <div class="p-flow__body">
                    <h3 class="p-flow__title">最終面接</h3>
                    <p class="p-flow__desc">役員・代表との面接です。会社の方向性や今後のビジョンについてもお伝えします。</p>
                </div>
            </li>
            <li class="p-flow__item">
                <span class="p-flow__num">05</span>
                <div class="p-flow__body">
                    <h3 class="p-flow__title">内定・入社</h3>
                    <p class="p-flow__desc">内定後は入社準備のサポートをいたします。入社日はご事情に合わせて相談可能です。</p>
                </div>
            </li>
        </ol>
    </div>
</section>

<!-- ⑦ FAQ -->
<section class="p-faq l-section" id="faq">
    <div class="l-container">
        <div class="p-section-header p-section-header--light">
            <span class="c-section-en">FAQ</span>
            <h2 class="c-section-title">よくある質問</h2>
        </div>
        <div class="p-faq__list">
            <details class="c-accordion">
                <summary class="c-accordion__summary">
                    <span>未経験でも応募できますか？</span>
                    <span class="c-accordion__icon" aria-hidden="true"></span>
                </summary>
                <div class="c-accordion__body">
                    <div class="c-accordion__content">
                        はい、ポジションによっては未経験歓迎のものもございます。「やってみたい」という意欲と行動力を大切に評価しています。まずはお気軽にエントリーください。
                    </div>
                </div>
            </details>
            <details class="c-accordion">
                <summary class="c-accordion__summary">
                    <span>リモートワークは可能ですか？</span>
                    <span class="c-accordion__icon" aria-hidden="true"></span>
                </summary>
                <div class="c-accordion__body">
                    <div class="c-accordion__content">
                        ポジションや業務内容によって異なりますが、多くのポジションでフレキシブルな働き方が可能です。週2〜3日のリモートワーク制度を導入しています。
                    </div>
                </div>
            </details>
            <details class="c-accordion">
                <summary class="c-accordion__summary">
                    <span>選考にかかる期間はどのくらいですか？</span>
                    <span class="c-accordion__icon" aria-hidden="true"></span>
                </summary>
                <div class="c-accordion__body">
                    <div class="c-accordion__content">
                        エントリーから内定まで、通常2〜4週間程度です。選考スピードはご事情に合わせて柔軟に対応しますので、お気軽にご相談ください。
                    </div>
                </div>
            </details>
            <details class="c-accordion">
                <summary class="c-accordion__summary">
                    <span>転職活動中でも相談できますか？</span>
                    <span class="c-accordion__icon" aria-hidden="true"></span>
                </summary>
                <div class="c-accordion__body">
                    <div class="c-accordion__content">
                        もちろんです。カジュアル面談も随時受け付けています。「まずは話を聞いてみたい」という段階でもお気軽にご連絡ください。
                    </div>
                </div>
            </details>
        </div>
    </div>
</section>

<!-- ⑧ Interview -->
<section class="p-interview l-section" id="interview">
    <div class="l-container">
        <div class="p-section-header">
            <span class="c-section-en">Interview</span>
            <h2 class="c-section-title">社員インタビュー</h2>
        </div>
        <div class="p-interview__grid">
            <?php
            $member_query = new WP_Query([
                'post_type'      => 'member',
                'posts_per_page' => 3,
                'no_found_rows'  => true,
            ]);
            if ($member_query->have_posts()):
                while ($member_query->have_posts()): $member_query->the_post(); ?>
                <article class="p-interview__card">
                    <div class="p-interview__img">
                        <?php if (has_post_thumbnail()): the_post_thumbnail('medium_large');
                        else: ?><img src="https://placehold.jp/c8a96e/ffffff/400x500.png?text=Member" alt="<?php the_title(); ?>" loading="lazy"><?php endif; ?>
                    </div>
                    <div class="p-interview__body">
                        <p class="p-interview__role"><?php echo esc_html(get_post_meta(get_the_ID(), 'member_role', true) ?: 'スタッフ'); ?></p>
                        <h3 class="p-interview__name"><?php the_title(); ?></h3>
                        <p class="p-interview__comment"><?php echo wp_trim_words(get_the_excerpt(), 40); ?></p>
                        <a href="<?php the_permalink(); ?>" class="p-interview__more">インタビューを読む →</a>
                    </div>
                </article>
                <?php endwhile; wp_reset_postdata();
            else: ?>
                <article class="p-interview__card">
                    <div class="p-interview__img"><img src="https://placehold.jp/c8a96e/ffffff/400x500.png?text=Member+01" alt="田中 花子" loading="lazy"></div>
                    <div class="p-interview__body">
                        <p class="p-interview__role">エンジニア / 2021年入社</p>
                        <h3 class="p-interview__name">田中 花子</h3>
                        <p class="p-interview__comment">「失敗してもいい」という文化が、私の背中を押してくれました。ここでは毎日新しいことに挑戦できています。</p>
                        <span class="p-interview__more">インタビューを読む →</span>
                    </div>
                </article>
                <article class="p-interview__card">
                    <div class="p-interview__img"><img src="https://placehold.jp/c8a96e/ffffff/400x500.png?text=Member+02" alt="佐藤 健一" loading="lazy"></div>
                    <div class="p-interview__body">
                        <p class="p-interview__role">デザイナー / 2022年入社</p>
                        <h3 class="p-interview__name">佐藤 健一</h3>
                        <p class="p-interview__comment">デザインの枠を超えて、事業全体に関われることに魅力を感じて入社しました。裁量が大きく、やりがいがあります。</p>
                        <span class="p-interview__more">インタビューを読む →</span>
                    </div>
                </article>
                <article class="p-interview__card">
                    <div class="p-interview__img"><img src="https://placehold.jp/c8a96e/ffffff/400x500.png?text=Member+03" alt="鈴木 美咲" loading="lazy"></div>
                    <div class="p-interview__body">
                        <p class="p-interview__role">マーケティング / 2023年入社</p>
                        <h3 class="p-interview__name">鈴木 美咲</h3>
                        <p class="p-interview__comment">入社後すぐに大きなプロジェクトを任せてもらえました。成長スピードが早く、自分の限界を更新し続けられます。</p>
                        <span class="p-interview__more">インタビューを読む →</span>
                    </div>
                </article>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- ⑨ Blog -->
<section class="p-blog l-section" id="blog">
    <div class="l-container">
        <div class="p-section-header p-section-header--light">
            <span class="c-section-en">Blog</span>
            <h2 class="c-section-title">ブログ</h2>
        </div>
        <div class="p-blog__grid">
            <?php
            $blog_query = new WP_Query([
                'post_type'      => 'blog',
                'posts_per_page' => 3,
                'no_found_rows'  => true,
            ]);
            if ($blog_query->have_posts()):
                while ($blog_query->have_posts()): $blog_query->the_post(); ?>
                <article class="p-blog__card">
                    <a href="<?php the_permalink(); ?>" class="p-blog__card-link">
                        <div class="p-blog__thumb">
                            <?php if (has_post_thumbnail()): the_post_thumbnail('medium_large');
                            else: ?><img src="https://placehold.jp/3d4070/ffffff/600x400.png?text=Blog" alt="<?php the_title(); ?>" loading="lazy"><?php endif; ?>
                        </div>
                        <div class="p-blog__card-body">
                            <time class="p-blog__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                            <h3 class="p-blog__title"><?php the_title(); ?></h3>
                        </div>
                    </a>
                </article>
                <?php endwhile; wp_reset_postdata();
            else: ?>
                <article class="p-blog__card">
                    <div class="p-blog__thumb"><img src="https://placehold.jp/3d4070/ffffff/600x400.png?text=Blog+01" alt="ブログ記事1" loading="lazy"></div>
                    <div class="p-blog__card-body">
                        <time class="p-blog__date">2025.03.20</time>
                        <h3 class="p-blog__title">エンジニアが語る、うちの開発文化とは</h3>
                    </div>
                </article>
                <article class="p-blog__card">
                    <div class="p-blog__thumb"><img src="https://placehold.jp/3d4070/ffffff/600x400.png?text=Blog+02" alt="ブログ記事2" loading="lazy"></div>
                    <div class="p-blog__card-body">
                        <time class="p-blog__date">2025.02.10</time>
                        <h3 class="p-blog__title">新卒1年目に感じた「働くことの意味」</h3>
                    </div>
                </article>
                <article class="p-blog__card">
                    <div class="p-blog__thumb"><img src="https://placehold.jp/3d4070/ffffff/600x400.png?text=Blog+03" alt="ブログ記事3" loading="lazy"></div>
                    <div class="p-blog__card-body">
                        <time class="p-blog__date">2025.01.25</time>
                        <h3 class="p-blog__title">オフィス移転！新しい環境で働く魅力とは</h3>
                    </div>
                </article>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- ⑩ Company -->
<section class="p-company l-section" id="company">
    <div class="l-container">
        <div class="p-section-header">
            <span class="c-section-en">Company</span>
            <h2 class="c-section-title">会社情報</h2>
        </div>
        <div class="p-company__inner">
            <div class="p-company__table-wrap">
                <table class="p-company__table">
                    <tbody>
                        <tr>
                            <th>会社名</th>
                            <td><?php bloginfo('name'); ?></td>
                        </tr>
                        <tr>
                            <th>設立</th>
                            <td>2010年4月1日</td>
                        </tr>
                        <tr>
                            <th>代表取締役</th>
                            <td>山田 太郎</td>
                        </tr>
                        <tr>
                            <th>資本金</th>
                            <td>1億円</td>
                        </tr>
                        <tr>
                            <th>従業員数</th>
                            <td>120名（2025年1月現在）</td>
                        </tr>
                        <tr>
                            <th>所在地</th>
                            <td>〒100-0001 東京都千代田区千代田1-1-1 ○○ビル5F</td>
                        </tr>
                        <tr>
                            <th>事業内容</th>
                            <td>Webサービスの企画・開発・運営、デジタルマーケティング支援</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="p-company__map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.0!2d139.7527!3d35.6852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c0d02d514abcd%3A0x1!2z5oSb5pys!5e0!3m2!1sja!2sjp!4v1700000000000!5m2!1sja!2sjp"
                    width="100%"
                    height="400"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="<?php esc_attr_e('会社所在地', 'vite-wp-starter'); ?>">
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- ⑪ 固定CTAバー -->
<div class="p-cta-bar" id="entry">
    <div class="p-cta-bar__inner l-container">
        <p class="p-cta-bar__text">あなたのエントリーをお待ちしています</p>
        <div class="p-cta-bar__btns">
            <a href="#recruit" class="p-cta-bar__btn p-cta-bar__btn--career">キャリアエントリー</a>
            <a href="#recruit" class="p-cta-bar__btn p-cta-bar__btn--member">会員登録</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
