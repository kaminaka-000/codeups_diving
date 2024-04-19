<?php

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

