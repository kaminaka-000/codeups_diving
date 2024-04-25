<?php get_header(); ?>

    <main>
      <!-- 下層ページのmv -->
      <section class="sub-mv">
        <div class="sub-mv__inner">
          <div class="sub-mv__header">
            <h2 class="sub-mv__title">
            <?php echo get_the_date( 'Y年n月' ) . 'の投稿一覧'; ?>
            </h2>
          </div>
          <div class="sub-mv__img">
            <picture>
              <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog-mv-pc.jpeg"/>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog-mv.jpeg" alt="写真:水中で群れをなす無数の魚が海の光に照らされている。" />
            </picture>
          </div>
        </div>
      </section>

      <!-- パンくず -->
      <?php get_template_part('parts/breadcrumb'); ?>

            <!-- blog-section -->
            <section class="blog-section sub-blog-section-spacing sub-layout">
            <div class="blog-section__inner inner">
              <div class="blog-section__wrapper blog-section__wrapper--home">
                <ul class="blog-section__cards cards cards--blog-section">
                <?php if (have_posts()) : ?>
                  <?php while(have_posts()) : ?>
                      <?php the_post(); ?>
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
                        <h2 class="card__title"><?php the_title(); ?></h2>
                        <p class="card__text">
                          <?php the_excerpt(); ?>
                        </p>
                      </div>
                    </a>
                  </li>
                  <?php endwhile; ?>
                  <?php else : ?>
                    <li class="cards__content">
                      <p class="card__content-text">投稿がありません。</p>
                    </li>
                  <?php endif; ?>
                </ul>
                <!-- ページネーション -->
                <div class="blog-section__pagenavi pagenavi sub-pagenavi-spacing">
                <?php wp_pagenavi(); ?>
                </div>
              </div>
              <!-- サイドバー -->
              <?php get_template_part('parts/sidebar'); ?>
            </div>
          </section>

      <!-- contact -->
      <?php get_template_part('parts/contact'); ?>

    <?php get_footer(); ?>