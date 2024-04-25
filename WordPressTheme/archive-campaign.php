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
                <a href="<?php echo get_post_type_archive_link('campaign') ?>" class="tab__menu is-active">ALL</a>
                <?php $genre_terms = get_terms('campaign_category', array('hide_empty'=>false)); ?>
                <?php foreach($genre_terms as $genre_term) : ?>
                  <a href="<?php echo get_term_link($genre_term, 'campaign_category'); ?>" class="tab__menu"><?php echo $genre_term->name; ?></a>
                  <?php endforeach; ?>
            </div>


            <ul class="sub-campaign__cards sub-cards">
            <?php if (have_posts()) : ?>
              <?php while(have_posts()) : ?>
                  <?php the_post(); ?>
                  <li class="sub-cards__info-card">
                <div class="info-card">
                  <div class="info-card__img">
                  <?php
                      // ACFを使用して画像フィールドを取得
                      $image = get_field('campaign-img');
                      if ($image) {
                          // ACFで設定された画像があればそのURLとaltテキストを使用
                          $image_url = esc_url($image['url']);
                          $image_alt = esc_attr($image['alt']);
                      } elseif (has_post_thumbnail()) {
                          // 投稿にアイキャッチ画像が設定されていればそのURLを使用
                          $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                          $image_alt = esc_attr(get_the_title()); // 代替テキストとして投稿のタイトルを使用
                      } else {
                          // どちらもない場合はデフォルト画像のURLを指定
                          $image_url = esc_url(get_theme_file_uri('/assets/images/common/no_image.jpeg'));
                          $image_alt = '画像がありません。'; // 代替テキスト
                      }
                      // 画像タグの出力
                      echo '<img src="' . $image_url . '" alt="' . $image_alt . '"/>';
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
                            return $term->name;
                          }, $terms);
                          // ターム名のリストをカンマ区切りで表示
                          $term_list = join(', ', $term_names);
                        ?>
                          <p class="info-card__category"><?php echo esc_html($term_list); ?></p>
                        <?php endif; ?>
                    </div>
                    <h2 class="info-card__title info-card__title--sub">
                    <?php the_title(); ?>
                    </h2>
                    <p class="info-card__lead">全部コミコミ(お一人様)</p>
                    <div class="info-card__layout">
                        <div class="info-card__before"><span><?php the_field('campaign-list-price'); ?></span></div>
                      <div class="info-card__after info-card__after--sub"><?php the_field('campaign-discount-price'); ?></div>
                    </div>
                    <div class="info-card__pc u-desktop">
                      <p class="info-card__text">
                      <?php echo nl2br(get_field('campaign-description')); ?>
                      </p>
                      <p class="info-card__date"><?php the_field('campaign-period'); ?></p>
                      <p class="info-card__button-text">
                        ご予約・お問い合わせはコチラ
                      </p>
                      <div class="info-card__button">
                        <a href="page-contact.html" class="button"><span>Contact us</span></a>
                      </div>
                    </div>
                    </div>
                  </div>
              </li>
              <?php endwhile; else : ?>
              <li class="sub-cards__content">
                <p class="sub-cards__text">投稿がありません。</p>
              </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </section>

      <!-- ページネーション -->
      <div class="pagenavi sub-pagenavi-spacing">
      <?php wp_pagenavi(); ?>
      </div>

      <!-- contact -->
      <?php get_template_part('parts/contact'); ?>

    <?php get_footer(); ?>
