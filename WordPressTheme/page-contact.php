<?php get_header(); ?>

    <main>
      <!-- 下層ページのmv -->
      <section class="sub-mv">
        <div class="sub-mv__inner">
          <div class="sub-mv__header">
            <h1 class="sub-mv__title">Contact</h1>
          </div>
          <div class="sub-mv__img">
            <picture>
              <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-contact-mv-pc.jpeg"/>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-contact-mv.jpeg" alt="写真:" />
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
            <span>お問い合わせ</span>
          </span>
        </div>
      </div>

      <!-- contact -->
      <section class="sub-contact sub-contact-spacing sub-layout">
        <div class="sub-contact__inner inner">
          <div id="error-message" class="sub-contact__error-message">
            <p class="sub-contact__error-text">必須項目が入力されていません。入力してください。</p>
          </div>

          <?php echo do_shortcode('[contact-form-7 id="0168f41" title="お問い合わせ"]'); ?>



        </div>
      </section>
    </main>

    <!-- to-top -->
    <a href="#top" class="to-top">
      <img src="/assets/images/common/to-top.svg" alt=""/>
    </a>

    <?php get_footer(); ?>
