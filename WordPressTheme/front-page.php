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

              <!-- <div class="swiper-slide mv__img">
                <picture>
                  <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-main-pc.jpeg"/>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-main.jpeg" alt="写真:透明度の高い海の中を海亀が泳いでいます。"/>
                </picture>
              </div>
              <div class="swiper-slide mv__img">
                <picture>
                  <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-img-pc.jpeg"/>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-img.jpeg" alt="写真:海亀と2人のダイビングをしている人たち。"/>
                </picture>
              </div>
              <div class="swiper-slide mv__img">
                <picture>
                  <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-img-2-pc.jpeg"/>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-img-2.jpeg" alt="写真:晴れた空と海に浮かぶ船たち。"/>
                </picture>
              </div>
              <div class="swiper-slide mv__img">
                <picture>
                  <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-img-3-pc.jpeg"/>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-img-3.jpeg" alt="写真:砂浜と澄んだ水色の海で遊ぶ人たち。"/>
                </picture>
              </div> -->

              <?php
                // Smart Custom Fieldsで設定された繰り返しフィールドの値を取得
                $top_images = SCF::get('top-img');
                foreach ($top_images as $fields) {
                  foreach ($fields as $image_id) { // すべての画像IDをループ処理
                    $image_url = wp_get_attachment_image_url($image_id, 'full');
                    if ($image_url) { // 画像が存在する場合
                      $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true); // 画像の代替テキストを取得
                ?>
                      <div class="swiper-slide mv__img">
                        <picture>
                          <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt_text); ?>"/>
                        </picture>
                      </div>
                <?php
                    }
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
              <li class="swiper-slide campaign__cards-info-card">
                <div class="info-card">
                  <div class="info-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpeg" alt="写真:透明度の高い海の中にいるたくさんの種類の魚たち。"/>
                  </div>
                  <div class="info-card__content">
                    <div class="info-card__wrapper">
                      <p class="info-card__category">ライセンス講習</p>
                    </div>
                    <h3 class="info-card__title">ライセンス取得</h3>
                      <p class="info-card__lead">全部コミコミ(お一人様)</p>
                      <div class="info-card__layout">
                        <div class="info-card__before"><span>¥56,000</span></div>
                        <div class="info-card__after">¥46,000</div>
                      </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide campaign__cards-info-card">
                <div class="info-card">
                  <div class="info-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.jpg" alt="写真:視界の開けた場所に青く透き通った海と二隻の船。"/>
                  </div>
                  <div class="info-card__content">
                    <div class="info-card__wrapper">
                      <p class="info-card__category">体験ダイビング</p>
                    </div>
                    <h3 class="info-card__title">貸切体験ダイビング</h3>
                    <p class="info-card__lead">全部コミコミ(お一人様)</p>
                    <div class="info-card__layout">
                      <div class="info-card__before"><span>¥24,000</span></div>
                      <div class="info-card__after">¥18,000</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide campaign__cards-info-card">
                <div class="info-card">
                  <div class="info-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3.jpg" alt="写真:夜の暗い海の中に浮かびあがる複数のクラゲ。"/>
                  </div>
                  <div class="info-card__content">
                    <div class="info-card__wrapper">
                      <p class="info-card__category">体験ダイビング</p>
                    </div>
                    <h3 class="info-card__title">ナイトダイビング</h3>
                    <p class="info-card__lead">全部コミコミ(お一人様)</p>
                    <div class="info-card__layout">
                      <div class="info-card__before"><span>¥10,000</span></div>
                      <div class="info-card__after">¥8,000<span></span></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide campaign__cards-info-card">
                <div class="info-card">
                  <div class="info-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign4.jpeg" alt="写真:複数の人たちが海の水面に頭だけを出し合図を送り合っている。"/>
                  </div>
                  <div class="info-card__content">
                    <div class="info-card__wrapper">
                      <p class="info-card__category">ファンダイビング</p>
                    </div>
                    <h3 class="info-card__title">貸切ファンダイビング</h3>
                    <p class="info-card__lead">全部コミコミ(お一人様)</p>
                    <div class="info-card__layout">
                      <div class="info-card__before"><span>¥20,000</span></div>
                      <div class="info-card__after">¥16,000</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide campaign__cards-info-card">
                <div class="info-card">
                  <div class="info-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpeg" alt="写真:透明度の高い海の中にいるたくさんの種類の魚たち。"/>
                  </div>
                  <div class="info-card__content">
                    <div class="info-card__wrapper">
                      <p class="info-card__category">ライセンス講習</p>
                    </div>
                    <h3 class="info-card__title">ライセンス取得</h3>
                    <p class="info-card__lead">全部コミコミ(お一人様)</p>
                    <div class="info-card__layout">
                      <div class="info-card__before"><span>¥56,000</span></div>
                      <div class="info-card__after">¥46,000</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide campaign__cards-info-card">
                <div class="info-card">
                  <div class="info-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.jpg" alt="写真:視界の開けた場所に青く透き通った海と二隻の船。"/>
                  </div>
                  <div class="info-card__content">
                    <div class="info-card__wrapper">
                      <p class="info-card__category">体験ダイビング</p>
                    </div>
                    <h3 class="info-card__title">貸切体験ダイビング</h3>
                    <p class="info-card__lead">全部コミコミ(お一人様)</p>
                    <div class="info-card__layout">
                      <div class="info-card__before"><span>¥24,000</span></div>
                      <div class="info-card__after">¥18,000</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide campaign__cards-info-card">
                <div class="info-card">
                  <div class="info-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3.jpg" alt="写真:夜の暗い海の中に浮かびあがる複数のクラゲ。"/>
                  </div>
                  <div class="info-card__content">
                    <div class="info-card__wrapper">
                      <p class="info-card__category">体験ダイビング</p>
                    </div>
                    <h3 class="info-card__title">ナイトダイビング</h3>
                    <p class="info-card__lead">全部コミコミ(お一人様)</p>
                    <div class="info-card__layout">
                      <div class="info-card__before"><span>¥10,000</span></div>
                      <div class="info-card__after">¥8,000<span></span></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide campaign__cards-info-card">
                <div class="info-card">
                  <div class="info-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign4.jpeg" alt="写真:複数の人たちが海の水面に頭だけを出し合図を送り合っている。"/>
                  </div>
                  <div class="info-card__content">
                    <div class="info-card__wrapper">
                      <p class="info-card__category">ファンダイビング</p>
                    </div>
                    <h3 class="info-card__title">貸切ファンダイビング</h3>
                    <p class="info-card__lead">全部コミコミ(お一人様)</p>
                    <div class="info-card__layout">
                      <div class="info-card__before"><span>¥20,000</span></div>
                      <div class="info-card__after">¥16,000</div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="campaign__wrap">
            <div class="swiper-button-prev campaign__prev"></div>
            <div class="swiper-button-next campaign__next"></div>
          </div>
          <div class="campaign__button">
            <a href="archive-campaign.html" class="button"><span>View more</span></a>
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
                    <a href="page-about.html" class="button"><span>View more</span></a>
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
                <a href="page-information.html" class="button"><span>View more</span></a>
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
            <li class="cards__item">
              <a href="single.html" class="card">
                <div class="card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog1.jpeg" alt="写真:鮮やかな色のサンゴ。"/>
                </div>
                <div class="card__content">
                  <time class="card__meta" datetime="2023-11-17">2023.11/17</time>
                  <p class="card__title">ライセンス取得</p>
                  <p class="card__text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br/>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                </div>
              </a>
            </li>
            <li class="cards__item">
              <a href="single.html" class="card">
                <div class="card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog2.jpeg" alt="写真:海を泳ぐ海亀。"/>
                </div>
                <div class="card__content">
                  <time class="card__meta" datetime="2023-11-17">2023.11/17</time>
                  <p class="card__title">ウミガメと泳ぐ</p>
                  <p class="card__text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br/>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                </div>
              </a>
            </li>
            <li class="cards__item">
              <a href="single.html" class="card">
                <div class="card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog3.jpeg" alt="写真:イソギンチャクに隠れるカクレクマノミ。"/>
                </div>
                <div class="card__content">
                  <time class="card__meta" datetime="2023-11-17">2023.11/17</time>
                  <p class="card__title">カクレクマノミ</p>
                  <p class="card__text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br/>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                </div>
              </a>
            </li>
          </ul>
          <div class="blog__button">
            <a href="home.html" class="button"><span>View more</span></a>
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
            <li class="testimonial-list__item testimonial-item">
              <a href="#">
                <div class="testimonial-item__box">
                  <div class="testimonial-item__layout">
                    <div class="testimonial-item__group">
                      <p class="testimonial-item__personal">20代(女性)</p>
                      <p class="testimonial-item__category">ライセンス講習</p>
                    </div>
                    <h3 class="testimonial-item__title">
                      ここにタイトルが入ります。ここにタイトル
                    </h3>
                  </div>
                  <div class="testimonial-item__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice1.jpeg" alt="写真:麦わら帽子を被った女性。"/>
                  </div>
                </div>
                <p class="testimonial-item__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br/>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br/>
                  ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </a>
            </li>
            <li class="testimonial__item testimonial-item">
              <a href="#">
                <div class="testimonial-item__box">
                  <div class="testimonial-item__layout">
                    <div class="testimonial-item__group">
                      <p class="testimonial-item__personal">20代(男性)</p>
                      <p class="testimonial-item__category">ファンダイビング</p>
                    </div>
                    <h3 class="testimonial-item__title">
                      ここにタイトルが入ります。ここにタイトル
                    </h3>
                  </div>
                  <div class="testimonial-item__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice2.jpeg" alt="写真:グッドマークをしている男性。"/>
                  </div>
                </div>
                <p class="testimonial-item__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br/>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br/>
                  ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </a>
            </li>
          </ul>
          <div class="voice__button">
            <a href="archive-voice.html" class="button"><span>View more</span></a>
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
                    $post_id = 42; // このIDは特定の固定ページのものに置き換えてください。

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
                    $post_id = 42; // このIDは特定の固定ページのものに置き換えてください。

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
                    $post_id = 42; // このIDは特定の固定ページのものに置き換えてください。

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
            <a href="page-price.html" class="button"><span>View more</span></a>
          </div>
        </div>
      </section>

  <?php get_template_part('parts/contact'); ?>


<?php get_footer(); ?>