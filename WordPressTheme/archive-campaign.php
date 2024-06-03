<?php get_header(); ?>

<main>
    <!-- 下層ページのmv -->
    <section class="sub-mv">
        <div class="sub-mv__inner">
            <div class="sub-mv__header">
                <h1 class="sub-mv__title">Campaign</h1>
            </div>
            <div class="sub-mv__img">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/common/sub-mv-img-pc.jpeg')); ?>"/>
                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/sub-mv-img.jpeg')); ?>" alt="写真:海の中を泳ぐ二匹の黄色い熱帯魚。"/>
                </picture>
            </div>
        </div>
    </section>

    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb'); ?>

    <!-- sub-campaign -->
    <?php if (have_posts()) : // 記事があれば表示 ?>
        <section class="sub-campaign sub-campaign-spacing sub-layout">
        <div class="sub-campaign__inner inner">
            <div class="sub-campaign__wrapper">

            <!-- タブの表示 -->
            <div class="sub-campaign__tab tab">
                <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="tab__menu is-active">ALL</a>
                <?php
                $genre_terms = get_terms('campaign_category', array('hide_empty' => false));
                foreach ($genre_terms as $genre_term) :
                ?>
                <a href="<?php echo esc_url(get_term_link($genre_term, 'campaign_category')); ?>" class="tab__menu">
                    <?php echo esc_html($genre_term->name); ?>
                </a>
                <?php endforeach; ?>
            </div>

            <!-- 投稿のリスト -->
            <ul class="sub-campaign__cards sub-cards">
                <?php while (have_posts()) : the_post(); ?>
                <li class="sub-cards__info-card">
                <div class="info-card">
                    <div class="info-card__img">

                    <?php
                    // アイキャッチ画像が設定されていればそのURLを使用
                    if (has_post_thumbnail()) {
                    $image_url = esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full'));
                    $image_alt = esc_attr(get_the_title()); // 代替テキストとして投稿のタイトルを使用
                    } else {
                    // どちらもない場合はデフォルト画像のURLを指定
                    $image_url = esc_url(get_theme_file_uri('/assets/images/common/no_image.jpeg'));
                    $image_alt = esc_attr('画像がありません。'); // 代替テキスト
                    }
                    // 画像タグの出力
                    echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '"/>';
                    ?>

                    </div>
                    <div class="info-card__content info-card__content--sub">
                    <div class="info-card__wrapper">

                    <?php
                    // 現在の投稿に関連付けられているタームを取得
                    $terms = get_the_terms(get_the_ID(), 'campaign_category');
                    if (!empty($terms) && !is_wp_error($terms)) :
                    // ターム名を配列に追加
                    $term_names = array_map(function($term) {
                        return esc_html($term->name);
                    }, $terms);
                    // ターム名のリストをカンマ区切りで表示
                    $term_list = join(', ', $term_names);
                    ?>

                    <p class="info-card__category"><?php echo esc_html($term_list); ?></p>
                    <?php endif; ?>
                    </div>
                    <h2 class="info-card__title info-card__title--sub">
                    <?php echo esc_html(get_the_title()); ?>
                    </h2>
                    <p class="info-card__lead">全部コミコミ(お一人様)</p>
                    <div class="info-card__layout">
                    <?php
                    $list_price = get_field('campaign-list-price');
                    $discount_price = get_field('campaign-discount-price');
                    ?>
                    <div class="info-card__before">
                        <span><?php echo esc_html($list_price ? $list_price : '準備中'); ?></span>
                    </div>
                    <div class="info-card__after info-card__after--sub">
                        <?php echo esc_html($discount_price ? $discount_price : '準備中'); ?>
                    </div>
                    </div>
                    <div class="info-card__pc u-desktop">
                    <?php
                    $description = get_field('campaign-description');
                    $period = get_field('campaign-period');
                    $trimmed_description = mb_substr($description, 0, 165);
                    ?>
                    <p class="info-card__text">
                        <?php echo nl2br(esc_html($trimmed_description ? $trimmed_description : 'テキスト準備中')); ?>
                    </p>
                    <p class="info-card__date"><?php echo esc_html($period); ?></p>
                    <p class="info-card__button-text">ご予約・お問い合わせはコチラ</p>
                    <div class="info-card__button">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button"><span>Contact us</span></a>
                    </div>
                    </div>
                </div>
                </div>
                </li>
                <?php endwhile; ?>
            </ul>

            <!-- ページネーション -->
            <div class="pagenavi sub-pagenavi-spacing">
                <?php wp_pagenavi(); ?>
            </div>

            </div>
        </div>
        </section>
        <?php else : ?>
        <div class="sub-cards__content">
        <p class="sub-cards__text">投稿がありません。</p>
        </div>
        <?php endif; ?>



<?php get_footer(); ?>
