<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Raise Techの最終課題です">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="c-grid">

    <!-- header -->
    <header class="c-grid__header l-header p-header">
      <h1 class="p-header__title c-text__font01 c-text-color__primary"><a href=""<?php echo esc_url(home_url('/')); ?>><?php bloginfo('name'); ?></a></h1>

      <!-- <form action="" class="p-search">
        <label for="">
          <input type="text" class="p-search__input c-border__round">
        </label>
        <label for="">
          <input class="p-search__button c-text__font02--bold c-text-color__primary c-border__round c-button" type="submit" value="検索">
        </label>
      </form> -->
      <?php get_search_form(); ?>
      <!-- ハンバーガーボタン(Menu)部分 -->
      <button class="p-header__button c-text__font01 c-text-color__primary">
        Menu
      </button>
    </header>