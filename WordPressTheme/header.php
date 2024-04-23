<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="robots" content="noindex" />

    <?php wp_head(); ?>

  </head>
  <?php
  $campaign = esc_url( home_url( '/campaign/' ) );
  $information = esc_url( home_url( '/information/' ) );
  $about_us = esc_url( home_url( '/about-us/' ) );
  $price = esc_url( home_url( '/price/' ) );
  $faq = esc_url( home_url( '/faq/' ) );
  $contact = esc_url( home_url( '/contact/' ) );
    ?>
  <body>
    <!-- header -->
    <header class="header">
      <div class="header__inner">
        <div class="header__logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="ロゴ:codeups" />
          </a>
        </div>
        <button class="header__hamburger header-hamburger js-header-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <nav class="header__nav-pc nav-pc">
          <ul class="nav-pc__items">
            <li class="nav-pc__item">
              <a href="<?php echo $campaign; ?>">Campaign<span>キャンペーン</span></a>
            </li>
            <li class="nav-pc__item">
              <a href="<?php echo $about_us; ?>">About us<span>私たちについて</span></a>
            </li>
            <li class="nav-pc__item">
              <a href="<?php echo $information; ?>">Information<span>ダイビング情報</span></a>
            </li>
            <li class="nav-pc__item">
              <a href="home.html">Blog<span>ブログ</span></a>
            </li>
            <li class="nav-pc__item">
              <a href="archive-voice.html">Voice<span>お客様の声</span></a>
            </li>
            <li class="nav-pc__item">
              <a href="<?php echo $price; ?>">Price<span>料金一覧</span></a>
            </li>
            <li class="nav-pc__item">
              <a href="<?php echo $faq; ?>">FAQ<span>よくある質問</span></a>
            </li>
            <li class="nav-pc__item">
              <a href="<?php echo $contact; ?>">Contact<span>お問い合わせ</span></a>
            </li>
          </ul>
        </nav>

        <nav class="header__nav nav js-nav">
          <div class="nav__inner">
            <div class="nav__area">
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
                          <span>プライバシー<br class="u-mobile"/>ポリシー</span>
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
    </header>