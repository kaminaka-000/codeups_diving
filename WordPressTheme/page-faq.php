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
      <?php get_template_part('parts/breadcrumb'); ?>

      <!-- faq -->
      <section class="faq sub-faq-spacing sub-layout">
          <div class="faq__inner inner">
            <ul class="faq__list faq-list">
              <?php
                // 'faq'はグループフィールドのスラッグ名
                $faq_items = SCF::get('faq');
                foreach ( $faq_items as $faq_item ) {
                    // 'faq-question'は質問のサブフィールドのスラッグ名
                    $question = $faq_item['faq-question'];
                    // 'faq-answer'は回答のサブフィールドのスラッグ名
                    $answer = $faq_item['faq-answer'];
                  ?>
                <li class="faq-list__item">
                    <h2 class="faq-list__item-question js-faq-question"><?php echo esc_html( $question ); ?></h2>
                    <p class="faq-list__item-answer"><?php echo esc_html( $answer ); ?></p>
                </li>
                <?php
              }
            ?>
            </ul>
          </div>
      </section>





  <?php get_template_part('parts/contact'); ?>


<?php get_footer(); ?>