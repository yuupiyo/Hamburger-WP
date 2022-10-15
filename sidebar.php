<!-- nav -->
<aside class="l-sidebar p-sidebar c-grid__sidebar c-text-color__primary">
      <!-- ハンバーガーボタンの×印 -->
      <button class="p-sidebar__button c-close">
        <span class="c-close__line"></span>
        <span class="c-close__line"></span>
      </button>

      <h2 class="p-sidebar__title c-text__font01">Menu</h2>
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'categorymenu',
            'container' => 'nav',
            'menu_class' => 'c-nav__list',
          )
        );
      ?>
    </aside>
    <!-- サイドバー後ろの黒い透過部分 -->
    <div class="c-overlay"></div>