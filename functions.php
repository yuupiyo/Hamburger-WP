<?php
function add_files() {
  // リセットCSS
  wp_enqueue_style('reset-style', 'https://unpkg.com/destyle.css@3.0.2/destyle.min.css');
  // Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@700&display=swap');
  // メインのCSSファイル
  wp_enqueue_style('main-style', get_theme_file_uri('/css/style.css'));
}
add_action('wp_enqueue_scripts', 'add_files');