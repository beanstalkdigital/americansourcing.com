<?php

function eversight_scripts() {
  wp_enqueue_style( 'typekit-fonts', "https://use.typekit.net/dgk5atv.css", null, "screen" );

  wp_enqueue_script(
    'eversight-js-index',
    get_stylesheet_directory_uri() . '/dist/index.min.bundle.js',
    array('jquery'),
    filemtime(get_stylesheet_directory() . '/dist/index.min.bundle.js'),
    true
  );

  wp_enqueue_style(
    'eversight-css',
    get_stylesheet_directory_uri() . '/dist/styles.css',
    false,
    filemtime(get_stylesheet_directory() . '/dist/styles.css')
  );

  // Page Specific Scripts
  if( is_front_page() && 1==2) {
    wp_enqueue_script(
      'eversight-js-home',
      get_stylesheet_directory_uri() . '/dist/home.bundle.js',
      array('jquery', 'match-height'),
      filemtime(get_stylesheet_directory() . '/dist/home.bundle.js'),
      true
    );
  }

  if ( is_page('solutions-retail-pricingsuite') ) {
    wp_enqueue_script(
      'eversight-gsap',
      '//cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js',
      null,
      null,
      true
    );
  }

  if ( is_page( 531 ) ) { // How it works page
    wp_enqueue_script(
      'eversight-slick',
      '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
      array('jquery'),
      null,
      true
    );

    wp_enqueue_style(
      'eversight-slick-css',
      '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
      null,
      null
    );
  }
}

add_action( 'wp_enqueue_scripts', 'eversight_scripts' );
