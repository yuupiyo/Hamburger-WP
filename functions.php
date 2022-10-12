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
  add_theme_support('menus');
  register_nav_menus( array(
    'footer_nav' => esc_html__('footer navigation', 'rtbread'),
    'category_nav' => esc_html__('category navigation', 'rtbread'),
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

function add_files() {
  // リセットCSS
  wp_enqueue_style('reset-style', 'https://unpkg.com/destyle.css@3.0.2/destyle.min.css');
  // Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@700&display=swap');
  // メインのCSSファイル
  wp_enqueue_style('main-style', get_theme_file_uri('/css/style.css'));
}
add_action('wp_enqueue_scripts', 'add_files');