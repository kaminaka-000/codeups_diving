<?php get_header(); ?>


<main>
      <!-- 下層ページのmv -->
      <section class="sub-mv">
        <div class="sub-mv__inner">
          <div class="sub-mv__header">
            <h1 class="sub-mv__title">FAQ</h1>
          </div>
          <div class="sub-mv__img">
            <picture>
              <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv-pc.jpeg"/>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv.jpeg" alt="写真:青い空と雲、透き通る青い海水、白い砂浜が広がる熱帯のビーチ." />
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
            <span>よくある質問</span>
          </span>
        </div>
      </div>

      <!-- faq -->
      <section class="faq sub-faq-spacing sub-layout">
          <div class="faq__inner inner">
            <ul class="faq__list faq-list">
              <li class="faq-list__item">
                <h2 class="faq-list__item-question js-faq-question">ここに質問が入ります。</h2>
                <p class="faq-list__item-answer">ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります</p>
              </li>
              <li class="faq-list__item">
                <h2 class="faq-list__item-question js-faq-question">ここに質問が入ります。</h2>
                <p class="faq-list__item-answer">
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                </p>
              </li>
              <li class="faq-list__item">
                <h2 class="faq-list__item-question js-faq-question">ここに質問が入ります。</h2>
                <p class="faq-list__item-answer">
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                </p>
              </li>
              <li class="faq-list__item">
                <h2 class="faq-list__item-question js-faq-question">ここに質問が入ります。</h2>
                <p class="faq-list__item-answer">
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                </p>
              </li>
              <li class="faq-list__item">
                <h2 class="faq-list__item-question js-faq-question">ここに質問が入ります。</h2>
                <p class="faq-list__item-answer">
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                </p>
              </li>
              <li class="faq-list__item">
                <h2 class="faq-list__item-question js-faq-question">ここに質問が入ります。</h2>
                <p class="faq-list__item-answer">
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                </p>
              </li>
              <li class="faq-list__item">
                <h2 class="faq-list__item-question js-faq-question">ここに質問が入ります。</h2>
                <p class="faq-list__item-answer">
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                  ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                </p>
              </li>
            </ul>
          </div>
      </section>





  <?php get_template_part('parts/contact'); ?>


<?php get_footer(); ?>