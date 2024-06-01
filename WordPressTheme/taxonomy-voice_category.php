<?php get_header(); ?>

    <main>
      <!-- 下層ページのmv -->
      <section class="sub-mv">
        <div class="sub-mv__inner">
          <div class="sub-mv__header">
            <h1 class="sub-mv__title">Voice</h1>
          </div>
          <div class="sub-mv__img">
            <picture>
              <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice-mv-pc.jpeg"/>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice-mv.jpeg" alt="写真:海の中を泳ぐ二匹の黄色い熱帯魚。"/>
            </picture>
          </div>
        </div>
      </section>

      <!-- パンくず -->
      <?php get_template_part('parts/breadcrumb'); ?>


        <!-- sub-voice -->
        <section class="sub-voice sub-voice-spacing sub-layout">
        <div class="sub-voice__inner inner">
          <div class="sub-voice__wrapper">
              <div class="sub-voice__tab tab">
                  <a href="<?php echo get_post_type_archive_link('voice'); ?>" class="tab__menu <?php if(is_post_type_archive('campaign') && !is_tax('campaign_category')) echo 'is-active'; ?>">ALL</a>
              <?php
                  $genre_terms = get_terms('voice_category', array('hide_empty'=>false));
                    foreach($genre_terms as $genre_term) :
                      // クエリされたタームを取得
                      $queried_object = get_queried_object();
                      // 現在表示されているタームのIDをチェック
                      $is_active = ($queried_object && $queried_object->term_id === $genre_term->term_id) ? 'is-active' : '';
                      ?>
                  <a href="<?php echo get_term_link($genre_term, 'voice_category'); ?>" class="tab__menu <?php echo $is_active; ?>">
                      <?php echo $genre_term->name; ?>
                  </a>
              <?php endforeach; ?>
            </div>

            <ul class="sub-voice__testimonial-list testimonial-list">
            <?php if (have_posts()) : ?>
              <?php while(have_posts()) : ?>
                  <?php the_post(); ?>
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
                      <h2 class="testimonial-item__title">
                        <?php
                        $title = get_the_title();
                        echo esc_html(mb_substr($title, 0, 21));
                        ?>
                      </h2>
                    </div>
                    <div class="testimonial-item__img">
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
                  </div>
                  <?php
                    $text = get_field('voice-text');
                    $trimmed_text = mb_substr($text, 0, 173);
                  ?>
                  <p class="testimonial-item__text">
                    <?php echo nl2br(esc_html($trimmed_text ? $trimmed_text : 'テキスト準備中')); ?>
                  </p>
              </li>
              <?php endwhile; else : ?>
                <li class="testimonial-list__content">
                <p class="testimonial-list__text">投稿がありません。</p>
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

    <?php get_footer(); ?>