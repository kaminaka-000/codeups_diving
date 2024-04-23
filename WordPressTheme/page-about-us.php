<?php get_header(); ?>


  <main>
      <!-- 下層ページのmv -->
      <section class="sub-mv">
        <div class="sub-mv__inner">
          <div class="sub-mv__header">
            <h1 class="sub-mv__title">About us</h1>
          </div>
          <div class="sub-mv__img">
            <picture>
              <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about-img-pc.jpeg"/>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about-img.jpeg" alt="写真:青空を背にした鮮やかな黄色のシーサーの像。" />
            </picture>
          </div>
        </div>
      </section>

      <!-- パンくず -->
      <?php get_template_part('parts/breadcrumb'); ?>


      <!-- sub-about -->
      <section class="sub-about sub-about-spacing sub-layout sub-layout--about">
        <div class="sub-about__inner inner">
            <div class="sub-about__img">
              <div class="sub-about__img-small">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about1.jpeg" alt="真:屋根に乗っているシーサー。"/>
              </div>
              <div class="sub-about__img-large">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about2.jpeg" alt="写真:海の中を泳ぐ二匹の熱帯魚。"/>
              </div>
            </div>
            <div class="sub-about__body">
              <p class="sub-about__title">Dive into <br />the Ocean</p>
              <div class="sub-about__box">
                <p class="sub-about__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </div>
        </div>
      </section>

      <!--  gallery -->
      <section class="gallery sub-gallery-spacing">
        <div class="gallery__inner inner">
          <div class="gallery__title heading">
            <p class="heading__engtitle heading__engtitle--sub">Gallery</p>
            <h2 class="heading__jatitle">フォト</h2>
          </div>

          <ul class="gallery__list gallery-list">
          <?php
            $gallery_images = SCF::get('gallery-picture');
            foreach ($gallery_images as $index => $fields) {
                foreach ($fields as $field_name => $image_id) {
                    // IDから画像のURLを取得する
                    $image_url = wp_get_attachment_image_url($image_id, 'full');
                    if ($image_url) : // 画像が存在するかチェック
                        $modal_id = 'modal-' . $index . '-' . sanitize_title($field_name); // モーダルのIDを生成
            ?>
                        <li class="gallery-list__item gallery-item js-modal-open" data-target="<?php echo $modal_id; ?>">
                            <img src="<?php echo esc_url($image_url); ?>" alt="画像の説明" />
                            <div class="gallery-item__modal js-modal" id="<?php echo $modal_id; ?>">
                                <div class="gallery-item__content js-modal-close">
                                    <img src="<?php echo esc_url($image_url); ?>" alt="画像の説明" />
                                </div>
                            </div>
                        </li>
            <?php
                    endif;
                }
            }
            ?>
        </ul>
        </div>
      </section>




  <!-- contact -->
  <?php get_template_part('parts/contact'); ?>


<?php get_footer(); ?>