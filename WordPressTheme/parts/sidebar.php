          <!-- サイドバー -->
          <aside class="blog-section__sidebar blog-section__sidebar--single sidebar">
            <?php if ( is_active_sidebar( 'sidebar' )) : ?>
              <?php dynamic_sidebar( 'sidebar' ) ?>
            <?php endif; ?>
            <ul class="sidebar__list">
            <li class="sidebar__item">
                <div class="sidebar__container">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/home-blog-icon.svg" alt="" />
                    <h2 class="sidebar__sidebar-title">人気記事</h2>
                </div>
                <div class="sidebar__popular sidebar-popular">
                    <?php
                    $args = array(
                        'posts_per_page' => 3, // 表示する投稿数
                        'meta_key' => 'post_views_count', // カスタムフィールドのキー
                        'orderby' => 'meta_value_num', // メタ値として数値を指定
                        'order' => 'DESC', // 降順に並べ替え
                    );
                    $popular_posts = new WP_Query($args);

                    if ($popular_posts->have_posts()) : 
                        while ($popular_posts->have_posts()) : $popular_posts->the_post();
                    ?>
                        <a href="<?php the_permalink(); ?>" class="sidebar-popular__item popular-item">
                            <div class="popular-item__box">
                                <time class="popular-item__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m/d'); ?></time>
                                <p class="popular-item__title"><?php the_title(); ?></p>
                            </div>
                            <div class="popular-item__img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像。">
                                <?php else: ?>
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no_image.jpeg" alt="画像がありません。">
                                <?php endif; ?>
                            </div>
                        </a>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>人気の投稿はありません。</p>';
                    endif;
                    ?>
                </div>
            </li>
            <li class="sidebar__item">
              <div class="sidebar__container">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/home-blog-icon.svg" alt="" />
                <h2 class="sidebar__sidebar-title">口コミ</h2>
              </div>
              <div class="sidebar__review sidebar-review">
                <?php
                  $args = array(
                    'post_type' => 'voice', // カスタム投稿タイプ
                    'posts_per_page' => 1
                  );
                  $voice_query = new WP_Query($args);
                  if ($voice_query->have_posts()) :
                    while ($voice_query->have_posts()) : $voice_query->the_post();
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
                      echo '<div class="sidebar-review__img"><img src="' . $image_url . '" alt="' . $image_alt . '"/></div>';
                ?>
                  <p class="sidebar-review__age"><?php the_field('voice-era'); ?></p>
                  <h3 class="sidebar-review__title"><?php the_title(); ?></h3>
                  <div class="sidebar-review__button">
                    <a href="<?php echo get_permalink(); ?>" class="button"><span>詳細を見る</span></a>
                  </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                  else :
                ?>
                  <p class="sidebar-review__text">口コミがありません。</p>
                <?php endif; ?>
              </div>
            </li>
              <li class="sidebar__item">
                <div class="sidebar__container">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/home-blog-icon.svg" alt="" />
                  <h2 class="sidebar__sidebar-title">キャンペーン</h2>
                </div>
                <div class="sidebar__cards sidebar-cards">
                <?php
                  // カスタム投稿タイプ 'campaign' の最新の投稿を取得
                  $sidebar_campaigns = new WP_Query(array(
                    'post_type' => 'campaign',
                    'posts_per_page' => 2, // ここで表示したい投稿数を指定
                  ));

                  if ($sidebar_campaigns->have_posts()) :
                    while ($sidebar_campaigns->have_posts()) : $sidebar_campaigns->the_post();
                ?>
                  <div class="sidebar__card sidebar-card">
                    <div class="sidebar-card__img">
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
                <div class="sidebar-card__content">
                  <h3 class="sidebar-card__title"><?php the_title(); ?></h3>
                  <p class="sidebar-card__lead">全部コミコミ(お一人様)</p>
                  <div class="sidebar-card__layout">
                    <div class="sidebar-card__before">
                      <span><?php the_field('campaign-list-price'); ?></span>
                    </div>
                    <div class="sidebar-card__after"><?php the_field('campaign-discount-price'); ?></div>
                  </div>
                </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata(); // クエリのリセット
                  else :
                ?>
                  <p>キャンペーンの投稿がありません。</p>
                <?php endif; ?>
                    <div class="sidebar-card__button">
                      <a href="archive-campaign.html" class="button"><span>View more</span></a>
                    </div>
                </div>
              </li>
              <li class="sidebar__item">
                <div class="sidebar__container">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/home-blog-icon.svg" alt="" />
                  <h2 class="sidebar__sidebar-title">アーカイブ</h2>
                </div>
                <ul class="sidebar__archive sidebar-archive">
                <?php
                  $years = $wpdb->get_results( "SELECT YEAR(post_date) AS `year` FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' GROUP BY YEAR(post_date) ORDER BY post_date DESC", OBJECT );

                  foreach ( $years as $year ) {
                      // 年ごとのリストアイテム
                      echo '<li class="sidebar-archive__item archive-item">';
                      // 修正: get_year_linkを正しく出力するための引用符を修正
                      echo '<a href="' . get_year_link($year->year) . '" class="archive-item__past js-toggle-year">' . esc_html($year->year) . '</a>';

                      // 月ごとのサブリスト
                      echo '<ul class="archive-item__months js-months-list" style="display: none;">';
                      $months = $wpdb->get_results( "SELECT MONTH(post_date) AS `month`, count(ID) as posts FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' AND YEAR(post_date) = '".$year->year."' GROUP BY MONTH(post_date) ORDER BY post_date DESC", OBJECT );

                      foreach ( $months as $month ) {
                          $dateObj   = DateTime::createFromFormat('!m', $month->month);
                          $monthName = $dateObj->format('n月'); // Convert month number to month name
                          echo '<li class="archive-item__month">';
                          echo '<a href="' . get_month_link($year->year, $month->month) . '" class="archive-item__link">' . $monthName . '</a>';
                          echo '</li>';
                      }
                      echo '</ul>';
                      echo '</li>';
                  }
                  ?>
                </ul>
              </li>
            </ul>
          </aside>