<?php
// テーマサポート
function custom_theme_support() {
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  // add_theme_support('menus');
  add_theme_support('automatic-feed-links');
  register_nav_menus( array(
    'categorymenu' => 'カテゴリーメニュー',
    'footermenu' => 'フッターメニュー',
  ));
  add_theme_support('editor-styles');
  add_editor_style();
}
add_action('after_setup_theme', 'custom_theme_support');

// タイトル出力
function hamburger_title($title) {
  if(is_front_page() && is_home()) {
    $title = get_bloginfo('name', 'display');
  } elseif(is_singular()) {
    $title = single_post_title('', false);
  }
  return $title;
}
add_filter('pre_get_document_title', 'hamburger_title');

// 
function hamburger_script() {
  // リセットCSS
  wp_enqueue_style('reset-css', get_theme_file_uri('/css/destyle.min.css'), array(), false, 'all');
  // Google Fonts
  wp_enqueue_style('M+PLUS+1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap', array());
  wp_enqueue_style('Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap', array());
  // メインのCSSファイル
  wp_enqueue_style('hamburger-css', get_theme_file_uri('/css/style.css') , array('reset-css'), '1.0.0');
  // テーマデフォルトCSSファイル
  wp_enqueue_style('hamburger-style', get_theme_file_uri('/style.css'), array(), '1.0.0');
  // jQuery読み込み
  wp_enqueue_script('scriptjs', get_theme_file_uri('/js/script.js'), array('jquery'), wp_get_theme()->get( 'Version' ), false );
}
add_action('wp_enqueue_scripts', 'hamburger_script');