    <!-- to-top -->
    <a href="#top" class="to-top">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/to-top.svg" alt=""/>
    </a>

    <!-- footer -->
    <footer class="footer top-footer<?php if (is_404()) echo ' top-footer--not-found'; ?>">
      <div class="footer__inner inner">
        <div class="footer__group">
          <div class="footer__logo">
            <a href="index.html">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="ロゴ:codeups"/>
            </a>
          </div>
          <div class="footer__icons">
            <div class="footer__icon">
              <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebooklogo.svg" alt="アイコン:facebook"/>
              </a>
            </div>
            <div class="footer__icon">
              <a href="#" target="_blank" rel="noopener noreferrer">
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
                      <a href="archive-campaign.html">
                        <div class="nav__item-wrapper">
                          <span>キャンペーン</span>
                        </div>
                      </a>
                    </li>
                    <li class="nav__item">
                      <a href="archive-campaign.html">ライセンス取得</a>
                    </li>
                    <li class="nav__item">
                      <a href="archive-campaign.html">貸切体験ダイビング</a>
                    </li>
                    <li class="nav__item">
                      <a href="archive-campaign.html">ナイトダイビング</a>
                    </li>
                  </ul>
                </div>
                <div class="nav__content">
                  <ul class="nav__items">
                    <li class="nav__item">
                      <a href="page-about.html">
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
                      <a href="page-information.html">
                        <div class="nav__item-wrapper">
                          <span>ダイビング情報</span>
                        </div>
                      </a>
                    </li>
                    <li class="nav__item">
                      <a href="page-information.html?tab=tab01">ライセンス講習</a>
                    </li>
                    <li class="nav__item">
                      <a href="page-information.html?tab=tab03">体験ダイビング</a>
                    </li>
                    <li class="nav__item">
                      <a href="page-information.html?tab=tab02">ファンダイビング</a>
                    </li>
                  </ul>
                </div>
                <div class="nav__content">
                  <ul class="nav__items">
                    <li class="nav__item">
                      <a href="home.html">
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
                      <a href="archive-voice.html">
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
                      <a href="page-price.html">
                        <div class="nav__item-wrapper">
                          <span>料金一覧</span>
                        </div>
                      </a>
                    </li>
                    <li class="nav__item">
                      <a href="page-price.html#sub-price-license">ライセンス講習</a>
                    </li>
                    <li class="nav__item">
                      <a href="page-price.html#sub-price-experience">体験ダイビング</a>
                    </li>
                    <li class="nav__item">
                      <a href="page-price.html#sub-price-fan">ファンダイビング</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="nav__section">
                <div class="nav__content">
                  <ul class="nav__items">
                    <li class="nav__item">
                      <a href="page-faq.html">
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
                      <a href="page-privacy-policy.html">
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
                      <a href="page-terms-of-service.html">
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
                      <a href="page-contact.html">
                        <div class="nav__item-wrapper">
                          <span>お問い合わせ</span>
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