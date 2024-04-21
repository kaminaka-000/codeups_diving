<?php get_header(); ?>


<main>
      <!-- 下層ページのmv -->
      <section class="sub-mv">
        <div class="sub-mv__inner">
          <div class="sub-mv__header">
            <h1 class="sub-mv__title">Price</h1>
          </div>
          <div class="sub-mv__img">
            <picture>
              <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price-mv-pc.jpeg"/>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price-mv.jpeg" alt="写真:海面からわずかに突き出たスノーケリングをしている人。" />
            </picture>
          </div>
        </div>
      </section>

      <!-- パンくず -->
      <?php get_template_part('parts/breadcrumb'); ?>

      <!-- sub-price -->
      <section class="sub-price sub-price-spacing sub-layout">
        <div class="sub-price__inner inner">
          <div class="sub-price__wrapper">
            <div id="sub-price-license" class="sub-price__title-group">
              <h2 class="sub-price__title">ライセンス講習</h2>
            </div>
            <table class="sub-price__list">
              <tbody>
              <?php
                  $price_list_items = SCF::get('license-course');
                  foreach ($price_list_items as $item) {
                    // サブフィールドの数だけループ
                    for ($i = 1; $i <= count($item) / 2; $i++) {
                      $title_field_name = "license-course-title{$i}";
                      $cost_field_name = "license-course-cost{$i}";

                      // タイトルとコストが存在するかを確認
                      if (isset($item[$title_field_name]) && isset($item[$cost_field_name])) {
                        echo '<tr>';
                        echo '<td class="sub-price__data">' . esc_html($item[$title_field_name]) . '</td>';
                        echo '<td class="sub-price__cost">' . esc_html($item[$cost_field_name]) . '</td>';
                        echo '</tr>';
                      }
                    }
                  }
                ?>
              </tbody>
            </table>
          </div>
          <div id="sub-price-experience" class="sub-price__wrapper">
            <div class="sub-price__title-group">
              <h2 class="sub-price__title">体験ダイビング</h2>
            </div>
            <table class="sub-price__list">
              <tbody>
              <?php
                  $price_list_items = SCF::get('trial-diving');
                  foreach ($price_list_items as $item) {
                    // サブフィールドの数だけループ
                    for ($i = 1; $i <= count($item) / 2; $i++) {
                      $title_field_name = "trial-diving-title{$i}";
                      $cost_field_name = "trial-diving-cost{$i}";

                      // タイトルとコストが存在するかを確認
                      if (isset($item[$title_field_name]) && isset($item[$cost_field_name])) {
                        echo '<tr>';
                        echo '<td class="sub-price__data">' . esc_html($item[$title_field_name]) . '</td>';
                        echo '<td class="sub-price__cost">' . esc_html($item[$cost_field_name]) . '</td>';
                        echo '</tr>';
                      }
                    }
                  }
                ?>
              </tbody>
            </table>
          </div>
          <div id="sub-price-fan" class="sub-price__wrapper">
            <div class="sub-price__title-group">
              <h2 class="sub-price__title">ファンダイビング</h2>
            </div>
            <table class="sub-price__list">
              <tbody>
              <?php
                  $price_list_items = SCF::get('fun-diving');
                  foreach ($price_list_items as $item) {
                    // サブフィールドの数だけループ
                    for ($i = 1; $i <= count($item) / 2; $i++) {
                      $title_field_name = "fun-diving-title{$i}";
                      $cost_field_name = "fun-diving-cost{$i}";

                      // タイトルとコストが存在するかを確認
                      if (isset($item[$title_field_name]) && isset($item[$cost_field_name])) {
                        echo '<tr>';
                        echo '<td class="sub-price__data">' . esc_html($item[$title_field_name]) . '</td>';
                        echo '<td class="sub-price__cost">' . esc_html($item[$cost_field_name]) . '</td>';
                        echo '</tr>';
                      }
                    }
                  }
                ?>
              </tbody>
            </table>
          </div>
          <div class="sub-price__wrapper">
            <div class="sub-price__title-group">
              <h2 class="sub-price__title">スペシャルダイビング</h2>
            </div>
            <table class="sub-price__list">
              <tbody>
              <?php
                  $price_list_items = SCF::get('special-diving');
                  foreach ($price_list_items as $item) {
                    // サブフィールドの数だけループ
                    for ($i = 1; $i <= count($item) / 2; $i++) {
                      $title_field_name = "special-diving-title{$i}";
                      $cost_field_name = "special-diving-cost{$i}";

                      // タイトルとコストが存在するかを確認
                      if (isset($item[$title_field_name]) && isset($item[$cost_field_name])) {
                        echo '<tr>';
                        echo '<td class="sub-price__data">' . esc_html($item[$title_field_name]) . '</td>';
                        echo '<td class="sub-price__cost">' . esc_html($item[$cost_field_name]) . '</td>';
                        echo '</tr>';
                      }
                    }
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </section>





  <?php get_template_part('parts/contact'); ?>


<?php get_footer(); ?>