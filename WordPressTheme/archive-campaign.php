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
              <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-img-pc.jpeg"/>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-img.jpeg" alt="写真:海の中を泳ぐ二匹の黄色い熱帯魚。"/>
            </picture>
          </div>
        </div>
      </section>

      <!-- パンくず -->
      <?php get_template_part('parts/breadcrumb'); ?>

      <!-- sub-campaign -->
      <section class="sub-campaign sub-campaign-spacing sub-layout">
        <div class="sub-campaign__inner inner">
          <div class="sub-campaign__wrapper">
            <div class="sub-campaign__tab tab">
            <a href="<?php echo esc_url(add_query_arg('genre', 'all', get_post_type_archive_link('campaign'))); ?>" class="tab__menu <?php if (!isset($_GET['genre']) || $_GET['genre'] == 'all') echo 'is-active'; ?>">ALL</a>
              <a href="<?php echo esc_url(add_query_arg('genre', 'campaign-category-license', get_post_type_archive_link('campaign'))); ?>" class="tab__menu <?php if (isset($_GET['genre']) && $_GET['genre'] == 'campaign-category-license') echo 'is-active'; ?>">ライセンス講習</a>
              <a href="<?php echo esc_url(add_query_arg('genre', 'campaign-category-fun', get_post_type_archive_link('campaign'))); ?>" class="tab__menu <?php if (isset($_GET['genre']) && $_GET['genre'] == 'campaign-category-fun') echo 'is-active'; ?>">ファンダイビング</a>
              <a href="<?php echo esc_url(add_query_arg('genre', 'campaign-category-diving', get_post_type_archive_link('campaign'))); ?>" class="tab__menu <?php if (isset($_GET['genre']) && $_GET['genre'] == 'campaign-category-diving') echo 'is-active'; ?>">体験ダイビング</a>
            </div>
            <ul class="sub-campaign__cards sub-cards">

                <?php
              // タクソノミーのパラメータをクエリに追加するための条件分岐
              $genre = isset($_GET['genre']) ? $_GET['genre'] : 'all';
              $tax_query = array();
              if ($genre !== 'all') {
                  $tax_query = array(
                      array(
                          'taxonomy' => 'campaign-category',
                          'field'    => 'slug',
                          'terms'    => $genre,
                      ),
                  );
              }

              // ページ番号を取得
              $paged = get_query_var('paged') ? get_query_var('paged') : 1;

              // WP_Queryの実行
              $args = array(
                  'post_type'      => 'campaign',
                  'posts_per_page' => 4,
                  'paged'          => $paged,
                  'tax_query'      => $tax_query
              );
              $query = new WP_Query($args);?>

          <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            $image = get_field('campaign-img'); // ACFを使用して画像フィールドを取得
            $list_price = get_field('campaign-list-price'); // ACFを使用して通常価格を取得
            $discount_price = get_field('campaign-discount-price'); // ACFを使用して割引価格を取得
            $description = get_field('campaign-description'); // ACFを使用して説明を取得
            $period = get_field('campaign-period'); // ACFを使用してキャンペーン期間を取得
            $terms = get_the_terms(get_the_ID(), 'campaign-category'); // タクソノミー
          ?>
            <li class="sub-cards__info-card">
              <div class="info-card">
                  <div class="info-card__img">
                  <?php
                        $image = get_field('campaign-img'); // ACFを使用して画像フィールドを取得
                        if ($image) {
                            // ACFで設定された画像があればそのURLを使用
                            $image_url = esc_url($image['url']);
                            $image_alt = esc_attr($image['alt']);
                        } elseif (has_post_thumbnail()) {
                            // 投稿にアイキャッチ画像が設定されていればそのURLを使用
                            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            $image_alt = get_the_title(); // 代替テキストとして投稿のタイトルを使用
                        } else {
                            // どちらもない場合はデフォルト画像のURLを指定
                            $image_url = get_theme_file_uri('/assets/images/common/no_image.jpeg');
                            $image_alt = '画像がありません。'; // 代替テキスト
                        }
                        ?>
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>"/>
                  </div>
                <div class="info-card__content info-card__content--sub">
                  <div class="info-card__wrapper">
                    <?php if (!empty($terms)) : ?>
                      <p class="info-card__category"><?php echo esc_html($terms[0]->name); ?></p>
                    <?php endif; ?>
                  </div>
                  <h2 class="info-card__title info-card__title--sub"><?php the_title(); ?></h2> <!-- キャンペーンのタイトル -->
                  <p class="info-card__lead">全部コミコミ(お一人様)</p>
                  <div class="info-card__layout">
                    <div class="info-card__before"><span>¥<?php echo esc_html($list_price); ?></span></div>
                    <div class="info-card__after info-card__after--sub">¥<?php echo esc_html($discount_price); ?></div>
                  </div>
                  <div class="info-card__pc">
                    <p class="info-card__text"><?php echo nl2br(esc_html($description)); ?></p> <!-- nl2brを使用して改行を反映 -->
                    <p class="info-card__date"><?php echo esc_html($period); ?></p>
                    <div class="info-card__button">
                    <?php $contact_page = get_page_by_path('contact'); ?>
                      <a href="<?php echo get_permalink($contact_page->ID); ?>" class="button"><span>Contact us</span></a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <?php endwhile; wp_reset_postdata(); endif; ?>
            </ul>
          </div>
        </div>
      </section>

      <!-- ページネーション -->
      <div class="pagenavi sub-pagenavi-spacing">
        <div class="pagenavi__inner inner">
          <div class="wp-pagenavi" role="navigation">
            <?php wp_pagenavi(array('query' => $query)); ?>
          </div>
        </div>
      </div>

      <!-- contact -->
      <?php get_template_part('parts/contact'); ?>

    <?php get_footer(); ?>
