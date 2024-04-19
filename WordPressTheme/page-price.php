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
      <div class="breadcrumb sub-breadcrumb-spacing">
        <div class="breadcrumb__inner inner">
          <span>
            <a href="index.html">
              <span>TOP</span>
            </a>
          </span>
          &nbsp;&gt;&nbsp;
          <span>
            <span>料金一覧</span>
          </span>
        </div>
      </div>

      <!-- sub-price -->
      <section class="sub-price sub-price-spacing sub-layout">
        <div class="sub-price__inner inner">
          <div class="sub-price__wrapper">
            <div id="sub-price-license" class="sub-price__title-group">
              <h2 class="sub-price__title">ライセンス講習</h2>
            </div>
            <table class="sub-price__list">
              <tbody>
                <tr>
                  <td class="sub-price__data">オープンウォーター<br class="u-mobile">ダイバーコース</td>
                  <td class="sub-price__cost">¥50,000</td>
                </tr>
                <tr>
                  <td class="sub-price__data">アドバンスド<br class="u-mobile">オープンウォーターコース</td>
                  <td class="sub-price__cost">¥60,000</td>
                </tr>
                <tr>
                  <td class="sub-price__data">レスキュー＋EFRコース</td>
                  <td class="sub-price__cost">¥70,000</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="sub-price-experience" class="sub-price__wrapper">
            <div class="sub-price__title-group">
              <h2 class="sub-price__title">体験ダイビング</h2>
            </div>
            <table class="sub-price__list">
              <tbody>
                <tr>
                  <td class="sub-price__data">ビーチ体験ダイビング<br class="u-mobile">(半日)</td>
                  <td class="sub-price__cost">¥7,000</td>
                </tr>
                <tr>
                  <td class="sub-price__data">ビーチ体験ダイビング<br class="u-mobile">(1日)</td>
                  <td class="sub-price__cost">¥14,000</td>
                </tr>
                <tr>
                  <td class="sub-price__data">ボート体験ダイビング<br class="u-mobile">(半日)</td>
                  <td class="sub-price__cost">¥10,000</td>
                </tr>
                <tr>
                  <td class="sub-price__data">ボート体験ダイビング<br class="u-mobile">(1日)</td>
                  <td class="sub-price__cost">¥18,000</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="sub-price-fan" class="sub-price__wrapper">
            <div class="sub-price__title-group">
              <h2 class="sub-price__title">ファンダイビング</h2>
            </div>
            <table class="sub-price__list">
              <tbody>
                <tr>
                  <td class="sub-price__data">ビーチダイビング<br class="u-mobile">(2ダイブ)</td>
                  <td class="sub-price__cost">¥14,000</td>
                </tr>
                <tr>
                  <td class="sub-price__data">ボートダイビング<br class="u-mobile">(2ダイブ)</td>
                  <td class="sub-price__cost">¥18,000</td>
                </tr>
                <tr>
                  <td class="sub-price__data">スペシャルダイビング<br class="u-mobile">(2ダイブ)</td>
                  <td class="sub-price__cost">¥24,000</td>
                </tr>
                <tr>
                  <td class="sub-price__data">ナイトダイビング<br class="u-mobile">(2ダイブ)</td>
                  <td class="sub-price__cost">¥10,000</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="sub-price__wrapper">
            <div class="sub-price__title-group">
              <h2 class="sub-price__title">スペシャルダイビング</h2>
            </div>
            <table class="sub-price__list">
              <tbody>
                <tr>
                  <td class="sub-price__data">貸切ダイビング<br class="u-mobile">(2ダイブ)</td>
                  <td class="sub-price__cost">¥24,000</td>
                </tr>
                <tr>
                  <td class="sub-price__data">1日ダイビング<br class="u-mobile">(3ダイブ)</td>
                  <td class="sub-price__cost">¥32,000</td>
                </tr>
                <tr>
                  <td class="sub-price__data">ナイトダイビング<br class="u-mobile">(2ダイブ)</td>
                  <td class="sub-price__cost">¥14,000</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>





  <?php get_template_part('parts/contact'); ?>


<?php get_footer(); ?>