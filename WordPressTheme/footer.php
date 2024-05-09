    <!-- to-top -->
    <a href="#top" class="to-top">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/to-top.svg" alt=""/>
    </a>


    <?php
          $campaign = esc_url( home_url( '/campaign/' ) );
          $information = esc_url( home_url( '/information/' ) );
          $about_us = esc_url( home_url( '/about-us/' ) );
          $blog = esc_url( home_url( '/blog/' ) );
          $voice = esc_url( home_url( '/voice/' ) );
          $price = esc_url( home_url( '/price/' ) );
          $faq = esc_url( home_url( '/faq/' ) );
          $privacypolicy = esc_url( home_url( '/privacypolicy/' ) );
          $terms_of_service = esc_url( home_url( '/terms-of-service/' ) );
          $contact = esc_url( home_url( '/contact/' ) );
          $sitemap = esc_url( home_url( '/sitemap/' ) );
    ?>
    <!-- footer -->
    <footer class="footer top-footer<?php if (is_404()) echo ' top-footer--not-found'; ?>">
      <div class="footer__inner inner">
        <div class="footer__group">
          <div class="footer__logo">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="ロゴ:codeups"/>
            </a>
          </div>
          <div class="footer__icons">
            <div class="footer__icon">
              <a href="https://www.facebook.com/?locale=ja_JP" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebooklogo.svg" alt="アイコン:facebook"/>
              </a>
            </div>
            <div class="footer__icon">
              <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagramlogo.svg" alt="アイコン:instagram"/>
              </a>
            </div>
          </div>
        </div>
        <nav class="footer__nav nav">
          <div class="nav__inner nav__inner--footer">
            <div class="nav__area nav__area--footer">
              <div class="nav__section">
                <div class="nav__content">
                  <ul class="nav__items">
                    <li class="nav__item">
                      <a href="<?php echo $campaign; ?>">
                        <div class="nav__item-wrapper">
                          <span>キャンペーン</span>
                        </div>
                      </a>
                    </li>
                    <?php
                        // ここで get_terms を使用してカスタムタクソノミーの用語を取得します
                        $terms = get_terms( array(
                          'taxonomy' => 'campaign_category',
                          'hide_empty' => false,
                        ) );

                        // 取得した用語をループしてリンクを生成します
                        foreach( $terms as $term ) {
                          echo '<li class="nav__item"><a href="' . esc_url( get_term_link( $term ) ) . '">' . esc_html( $term->name ) . '</a></li>';
                        }
                      ?>
                  </ul>
                </div>
                <div class="nav__content">
                  <ul class="nav__items">
                    <li class="nav__item">
                      <a href="<?php echo $about_us; ?>">
                        <div class="nav__item-wrapper">
                          <span>私たちについて</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="nav__section">
                <div class="nav__content">
                  <ul class="nav__items">
                    <li class="nav__item">
                      <a href="<?php echo $information; ?>">
                        <div class="nav__item-wrapper">
                          <span>ダイビング情報</span>
                        </div>
                      </a>
                    </li>
                    <li class="nav__item">
                      <a href="<?php echo $information; ?>?tab=tab01">ライセンス講習</a>
                    </li>
                    <li class="nav__item">
                      <a href="<?php echo $information; ?>?tab=tab03">体験ダイビング</a>
                    </li>
                    <li class="nav__item">
                      <a href="<?php echo $information; ?>?tab=tab02">ファンダイビング</a>
                    </li>
                  </ul>
                </div>
                <div class="nav__content">
                  <ul class="nav__items">
                    <li class="nav__item">
                      <a href="<?php echo $blog; ?>">
                        <div class="nav__item-wrapper">
                          <span>ブログ</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="nav__section">
                <div class="nav__content">
                  <ul class="nav__items">
                    <li class="nav__item">
                      <a href="<?php echo $voice; ?>">
                        <div class="nav__item-wrapper">
                          <span>お客様の声</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="nav__content">
                  <ul class="nav__items">
                    <li class="nav__item">
                      <a href="<?php echo $price; ?>">
                        <div class="nav__item-wrapper">
                          <span>料金一覧</span>
                        </div>
                      </a>
                    </li>
                    <li class="nav__item">
                      <a href="<?php echo $price; ?>#sub-price-license">ライセンス講習</a>
                    </li>
                    <li class="nav__item">
                      <a href="<?php echo $price; ?>#sub-price-experience">体験ダイビング</a>
                    </li>
                    <li class="nav__item">
                      <a href="<?php echo $price; ?>#sub-price-fan">ファンダイビング</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="nav__section">
                <div class="nav__content">
                  <ul class="nav__items">
                    <li class="nav__item">
                      <a href="<?php echo $faq; ?>">
                        <div class="nav__item-wrapper">
                          <span>よくある質問</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="nav__content">
                  <ul class="nav__items">
                    <li class="nav__item">
                      <a href="<?php echo $privacypolicy; ?>">
                        <div class="nav__item-wrapper">
                          <span>プライバシー<br class="u-mobile" />ポリシー</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="nav__content">
                  <ul class="nav__items">
                    <li class="nav__item">
                      <a href="<?php echo $terms_of_service; ?>">
                        <div class="nav__item-wrapper">
                          <span>利用規約</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="nav__content">
                  <ul class="nav__items">
                    <li class="nav__item">
                      <a href="<?php echo $contact; ?>">
                        <div class="nav__item-wrapper">
                          <span>お問い合わせ</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="nav__content">
                  <ul class="nav__items">
                    <li class="nav__item">
                      <a href="<?php echo $sitemap; ?>">
                        <div class="nav__item-wrapper">
                          <span>サイトマップ</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <div class="footer__copyright">
        <small>Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.</small>
      </div>
    </footer>

    <?php wp_footer(); ?>

  </body>
</html>