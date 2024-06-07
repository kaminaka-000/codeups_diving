<?php

//
function my_theme_enqueue_scripts() {
  // Preconnect for Google Fonts
  wp_enqueue_style('google-fonts-preconnect', 'https://fonts.googleapis.com', array(), null);
  wp_enqueue_style('google-fonts-preconnect-gstatic', 'https://fonts.gstatic.com', array(), null, true);

  // Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);

  // Swiper CSS
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);

  // Custom Stylesheet
  wp_enqueue_style('my-custom-styles', get_theme_file_uri('/assets/css/style.css'), array(), null);

  // jQuery - WordPress includes jQuery, but if you need a specific version or CDN:
  wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);

  // Swiper JS
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery-cdn'), null, true);

  // Custom Scripts
  wp_enqueue_script('my-custom-script', get_theme_file_uri('/assets/js/script.js'), array('jquery-cdn'), null, true);

  // jQuery inview Plugin
  wp_enqueue_script('jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery-cdn'), null, true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

//セットアップ
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );

//アーカイブの表示件数変更
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;
  //
  if ( $query->is_archive('campaign') ) { //カスタム投稿タイプを指定
      $query->set( 'posts_per_page', '4' ); //表示件数を指定
  }

  // 'event' カスタム投稿タイプのアーカイブで表示される投稿数を別の値に設定
  if ( $query->is_post_type_archive('voice') ) {
    $query->set( 'posts_per_page', '6' ); // 例として6に設定
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

//date.phpの表示件数変更
function change_date_archive_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;

  if ( $query->is_date() ) { // 日付アーカイブページを指定
      $query->set( 'posts_per_page', '10' ); // 表示件数を10件に設定
  }
}
add_action( 'pre_get_posts', 'change_date_archive_posts_per_page' );



//投稿を人気順に表示する
function set_post_view($post_id) {
  $count_key = 'post_views_count';
  $count = get_post_meta($post_id, $count_key, true);
  if ($count == '') {
      $count = 1;
      add_post_meta($post_id, $count_key, $count);
  } else {
      $count++;
      update_post_meta($post_id, $count_key, $count);
  }
}


//コンタクトフォームにカスタム投稿のタイトルを反映させる
function filter_wpcf7_form_tag( $scanned_tag ) {
  if ( 'your-campaign' === $scanned_tag['name'] ) {
    $args = array(
      'post_type'      => 'campaign',
      'posts_per_page' => 4,
      'orderby'        => 'date',
      'order'          => 'DESC',
    );
    $posts_query = new WP_Query( $args );
    if ( $posts_query->have_posts() ) {
      $scanned_tag['raw_values'] = array(); // 初期化
      while ( $posts_query->have_posts() ) {
        $posts_query->the_post();
        $scanned_tag['values'][] = get_the_title();
        $scanned_tag['labels'][] = get_the_title();
        $scanned_tag['raw_values'][] = get_the_title();
      }
      wp_reset_postdata();
    }
  }
  return $scanned_tag;
}
add_filter( 'wpcf7_form_tag', 'filter_wpcf7_form_tag', 10, 1 );


//<p>タグを生成しない
add_filter('wpcf7_autop_or_not', '__return_false');


//サンクスページ
add_action('wp_footer', 'redirect_to_thanks_page');
function redirect_to_thanks_page() {
  if (is_page('contact')) {
    $homeUrl = esc_url(home_url());
    echo <<<EOD
    <script>
      document.addEventListener('wpcf7mailsent', function(event) {
        location = '{$homeUrl}/contact-thanks/';
      }, false);
    </script>
EOD;
  }
}

//投稿のみにカスタムフィールドを表示
function my_custom_field_visibility($state) {
  if (get_post_type() == 'post') {
      return false;  // ACF によるカスタムフィールドメタボックスの削除を無効化
  }
  return $state;  // それ以外の場合は元の状態を保持
}
add_filter('acf/settings/remove_wp_meta_box', 'my_custom_field_visibility');
