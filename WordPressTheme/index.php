<?php get_header(); ?>

    <main>
      <!-- mv -->
      <section class="mv">
        <div class="mv__inner">
          <div class="mv__header">
            <h2 class="mv__title">DIVING</h2>
            <p class="mv__subtitle">into the ocean</p>
          </div>
          <div class="swiper mv__swiper js-mv-swiper">
            <div class="swiper-wrapper mv__wrapper">
            <?php
              // Smart Custom Fieldsから画像を取得
              $top_imgs = SCF::get('top-img');
              foreach ($top_imgs as $imgs) {
                // 繰り返しフィールド内の各画像をループして表示
                  $pc_image_id = $imgs["top-img-pc"];
                  $sp_image_id = $imgs["top-img-sp"];

                  // PCサイズとSPサイズの画像が設定されているか確認
                  if ($pc_image_id && $sp_image_id) {
                    // PCサイズのALT属性を取得
                    $pc_image_alt = get_post_meta($pc_image_id, '_wp_attachment_image_alt', true);
                    // SPサイズのALT属性を取得
                    $sp_image_alt = get_post_meta($sp_image_id, '_wp_attachment_image_alt', true);
                    // ALT属性が両方ともある場合、PCサイズのALTを優先する
                    $alt = !empty($pc_image_alt) ? $pc_image_alt : $sp_image_alt;
                    // PCサイズの画像URLを取得
                    $pc_image_url = wp_get_attachment_image_url($pc_image_id, 'full');
                    // SPサイズの画像URLを取得
                    $sp_image_url = wp_get_attachment_image_url($sp_image_id, 'full');
                    echo '<div class="swiper-slide mv__img">';
                    echo '<picture>';
                    echo '<source media="(min-width: 768px)" srcset="' . esc_url($pc_image_url) . '"/>';
                    echo '<img src="' . esc_url($sp_image_url) . '" alt="写真:' . esc_attr($alt) . '"/>';
                    echo '</picture>';
                    echo '</div>';
                  }
                }
              ?>
            </div>
          </div>
        </div>
      </section>

      <!-- campaign -->
      <section class="campaign top-campaign">
        <div class="campaign__inner">
          <div class="campaign__title heading">
            <p class="heading__engtitle">Campaign</p>
            <h2 class="heading__jatitle">キャンペーン</h2>
          </div>
          <div class="swiper campaign__cards js-campaign-cards">
            <ul class="swiper-wrapper campaign__cards-wrapper">

            <?php
            $args = array(
              'post_type' => 'campaign', // カスタム投稿タイプのスラッグ
              'posts_per_page' => -1, // すべての投稿を取得する
              // その他のパラメータを必要に応じて追加
            );
            $custom_query = new WP_Query( $args );

            if ( $custom_query->have_posts() ) :
              while ( $custom_query->have_posts() ) : $custom_query->the_post();
            ?>

                <li class="swiper-slide campaign__cards-info-card">
                  <div class="info-card">
                    <div class="info-card__img">

                    <?php
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
                    <div class="info-card__content">
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
                      <h3 class="info-card__title"><?php the_title(); ?></h3>
                        <p class="info-card__lead">全部コミコミ(お一人様)</p>
                        <div class="info-card__layout">
                          <div class="info-card__before"><span><?php the_field('campaign-list-price'); ?></span></div>
                          <div class="info-card__after"><?php the_field('campaign-discount-price'); ?></div>
                        </div>
                    </div>
                  </div>
                </li>

                <?php endwhile; endif; wp_reset_postdata();?>

            </ul>
          </div>
          <div class="campaign__wrap">
            <div class="swiper-button-prev campaign__prev"></div>
            <div class="swiper-button-next campaign__next"></div>
          </div>
          <div class="campaign__button">
            <a href="<?php echo home_url('/campaign/'); ?>" class="button"><span>View more</span></a>
          </div>
        </div>
      </section>

      <!-- about -->
      <section class="about top-about">
        <div class="about__inner">
          <div class="about__content">
            <div class="about__title heading">
              <p class="heading__engtitle">About us</p>
              <h2 class="heading__jatitle">私たちについて</h2>
            </div>
            <div class="about__image-design image-design">
              <div class="image-design__img">
                <div class="image-design__img-small">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about1.jpeg" alt="写真:屋根に乗っているシーサー。"/>
                </div>
                <div class="image-design__img-large">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about2.jpeg" alt="写真:海の中を泳ぐ二匹の熱帯魚。"/>
                </div>
              </div>
              <div class="image-design__body">
                <p class="image-design__title">Dive into <br/>the Ocean</p>
                <div class="image-design__box">
                  <p class="image-design__text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br/>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                  <div class="image-design__button">
                    <a href="<?php echo home_url('/about-us/'); ?>" class="button"><span>View more</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- information -->
      <section class="information top-information">
        <div class="information__inner inner">
          <div class="information__title heading">
            <p class="heading__engtitle">Information</p>
            <h2 class="heading__jatitle">ダイビング情報</h2>
          </div>
          <div class="information__course course">
            <div class="course__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information.jpeg" alt="写真:サンゴ礁に泳ぐ熱帯魚の群れ。"/>
            </div>
            <div class="course__wrapper">
              <h3 class="course__title">ライセンス講習</h3>
              <p class="course__text">
                当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br/>
                正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
              </p>
              <div class="course__button">
                <a href="<?php echo home_url('/information/'); ?>" class="button"><span>View more</span></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- blog -->
      <section class="blog top-blog">
        <div class="blog__inner">
          <div class="blog__title heading heading--blog">
            <p class="heading__engtitle heading__engtitle--blog">Blog</p>
            <h2 class="heading__jatitle heading__jatitle--blog">ブログ</h2>
          </div>

          <ul class="blog__cards cards">
          <?php
            $args = array(
              'post_type' => 'post', // カスタム投稿タイプのスラッグ
              'posts_per_page' => 3,
            );
            $custom_query = new WP_Query( $args );

            if ( $custom_query->have_posts() ) :
              while ( $custom_query->have_posts() ) : $custom_query->the_post();
            ?>
            <li class="cards__item">
              <a href="<?php the_permalink(); ?>" class="card">
                <div class="card__img">
                <?php if ( has_post_thumbnail() ): ?>
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像。">
                <?php else: ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no_image.jpeg" alt="画像がありません。">
                <?php endif; ?>
                </div>
                <div class="card__content">
                  <time class="card__meta" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
                  <p class="card__title"><?php the_title(); ?></p>
                  <p class="card__text">
                  <?php echo wp_trim_words(get_the_excerpt(), 85, ''); ?>
                  </p>
                </div>
              </a>
            </li>
            <?php endwhile; endif; wp_reset_postdata();?>
          </ul>
          <div class="blog__button">
            <a href="<?php echo home_url('/blog/'); ?>" class="button"><span>View more</span></a>
          </div>
        </div>
      </section>

      <!-- voice -->
      <section class="voice top-voice">
        <div class="voice__inner inner">
          <div class="voice__title heading">
            <p class="heading__engtitle">Voice</p>
            <h2 class="heading__jatitle">お客様の声</h2>
          </div>
          <ul class="voice__testimonial-list testimonial-list">

          <?php
            $args = array(
              'post_type' => 'voice', // カスタム投稿タイプのスラッグ
              'posts_per_page' => 2,
            );
            $custom_query = new WP_Query( $args );

            if ( $custom_query->have_posts() ) :
              while ( $custom_query->have_posts() ) : $custom_query->the_post();
            ?>

            <li class="testimonial-list__item testimonial-item">
                <div class="testimonial-item__box">
                  <div class="testimonial-item__layout">
                    <div class="testimonial-item__group">
                      <p class="testimonial-item__personal"><?php the_field('voice-era'); ?></p>
                      <?php
                        // 現在の投稿に関連付けられているタームを取得
                        $terms = get_the_terms(get_the_ID(), 'voice_category');
                        if (!empty($terms) && !is_wp_error($terms)) :
                          // ターム名を配列に追加
                          $term_names = array_map(function($term) {
                            return $term->name;
                          }, $terms);
                          // ターム名のリストをカンマ区切りで表示
                          $term_list = join(', ', $term_names);
                        ?>
                      <p class="testimonial-item__category"><?php echo esc_html($term_list); ?></p>
                      <?php endif; ?>
                    </div>
                    <h3 class="testimonial-item__title">
                    <?php the_title(); ?>
                    </h3>
                  </div>
                  <div class="testimonial-item__img">
                  <?php
                      // ACFを使用して画像フィールドを取得
                      $image = get_field('voice-img');
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
                </div>
                <p class="testimonial-item__text">
                <?php echo nl2br(get_field('voice-text')); ?>
                </p>
            </li>
            <?php endwhile; endif; wp_reset_postdata();?>
          </ul>
          <div class="voice__button">
            <a href="<?php echo home_url('/voice/'); ?>" class="button"><span>View more</span></a>
          </div>
        </div>
      </section>

      <!-- price -->
      <section class="price top-price">
        <div class="price__inner inner">
          <div class="price__title heading">
            <p class="heading__engtitle">Price</p>
            <h2 class="heading__jatitle">料金一覧</h2>
          </div>
          <div class="price__content">
            <div class="price__img-sp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price.jpeg" alt="写真:海の中でたくさんの魚がサンゴのそばを泳いでいる。"/>
            </div>
            <div class="price__items">
              <div class="price__item">
                <h3 class="price__sub-title">ライセンス講習</h3>
                <dl class="price__group">
                <?php
                    // 特定の固定ページの投稿ID
                    $post_id = 42;

                    // 'trial-diving'がグループフィールドのスラッグ名
                    $price_list_items = SCF::get('license-course', $post_id);

                    foreach ($price_list_items as $item) {
                      // サブフィールドの数だけループ
                      for ($i = 1; $i <= count($item) / 2; $i++) {
                        $title_field_name = "license-course-title{$i}";
                        $cost_field_name = "license-course-cost{$i}";

                        // タイトルとコストが存在するかを確認
                        if (isset($item[$title_field_name]) && isset($item[$cost_field_name])) {
                          echo '<div class="price__layout">';
                          echo '<dt class="price__menu">' . esc_html($item[$title_field_name]) . '</dt>';
                          echo '<dd class="price__cost">' . esc_html($item[$cost_field_name]) . '</dd>';
                          echo '</div>';
                        }
                      }
                    }
                  ?>
                </dl>
              </div>
              <div class="price__item">
                <h3 class="price__sub-title">体験ダイビング</h3>
                <dl class="price__group">
                <?php
                    // 特定の固定ページの投稿ID
                    $post_id = 42;

                    // 'trial-diving'がグループフィールドのスラッグ名
                    $price_list_items = SCF::get('trial-diving', $post_id);

                    foreach ($price_list_items as $item) {
                      // サブフィールドの数だけループ
                      for ($i = 1; $i <= count($item) / 2; $i++) {
                        $title_field_name = "trial-diving-title{$i}";
                        $cost_field_name = "trial-diving-cost{$i}";

                        // タイトルとコストが存在するかを確認
                        if (isset($item[$title_field_name]) && isset($item[$cost_field_name])) {
                          echo '<div class="price__layout">';
                          echo '<dt class="price__menu">' . esc_html($item[$title_field_name]) . '</dt>';
                          echo '<dd class="price__cost">' . esc_html($item[$cost_field_name]) . '</dd>';
                          echo '</div>';
                        }
                      }
                    }
                  ?>
                </dl>
              </div>
              <div class="price__item">
                <h3 class="price__sub-title">ファンダイビング</h3>
                <dl class="price__group">
                <?php
                    // 特定の固定ページの投稿ID
                    $post_id = 42;

                    // 'trial-diving'がグループフィールドのスラッグ名
                    $price_list_items = SCF::get('fun-diving', $post_id);

                    foreach ($price_list_items as $item) {
                      // サブフィールドの数だけループ
                      for ($i = 1; $i <= count($item) / 2; $i++) {
                        $title_field_name = "fun-diving-title{$i}";
                        $cost_field_name = "fun-diving-cost{$i}";

                        // タイトルとコストが存在するかを確認
                        if (isset($item[$title_field_name]) && isset($item[$cost_field_name])) {
                          echo '<div class="price__layout">';
                          echo '<dt class="price__menu">' . esc_html($item[$title_field_name]) . '</dt>';
                          echo '<dd class="price__cost">' . esc_html($item[$cost_field_name]) . '</dd>';
                          echo '</div>';
                        }
                      }
                    }
                  ?>
                </dl>
              </div>
              <div class="price__item">
                <h3 class="price__sub-title">スペシャルダイビング</h3>
                <dl class="price__group">
                <?php
                    // 特定の固定ページの投稿ID
                    $post_id = 42; // このIDは特定の固定ページのものに置き換えてください。

                    // 'trial-diving'がグループフィールドのスラッグ名
                    $price_list_items = SCF::get('special-diving', $post_id);

                    foreach ($price_list_items as $item) {
                      // サブフィールドの数だけループ
                      for ($i = 1; $i <= count($item) / 2; $i++) {
                        $title_field_name = "special-diving-title{$i}";
                        $cost_field_name = "special-diving-cost{$i}";

                        // タイトルとコストが存在するかを確認
                        if (isset($item[$title_field_name]) && isset($item[$cost_field_name])) {
                          echo '<div class="price__layout">';
                          echo '<dt class="price__menu">' . esc_html($item[$title_field_name]) . '</dt>';
                          echo '<dd class="price__cost">' . esc_html($item[$cost_field_name]) . '</dd>';
                          echo '</div>';
                        }
                      }
                    }
                  ?>
                </dl>
              </div>
            </div>
            <div class="price__img-pc">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc.jpeg" alt="写真:海の中でたくさんの魚がサンゴのそばを泳いでいる。"/>
            </div>
          </div>
          <div class="price__button">
            <a href="<?php echo home_url('/price/'); ?>" class="button"><span>View more</span></a>
          </div>
        </div>
      </section>


<?php get_footer(); ?>