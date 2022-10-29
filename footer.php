    <!-- footer -->
    <footer class="l-footer p-footer c-grid__footer c-text-color__secondary">
      <!-- <ul class="p-footer__menu">
        <li class="p-footer__menu-item c-text__font02">ショップ情報</li>
        <li class="p-footer__menu-item c-text__font02">ヒストリー</li>
      </ul> -->
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footermenu',
            'container' => '',
            'menu_class' => 'p-footer__menu',
          )
        );
      ?>
      <p class="p-footer__copyright c-text__font02"><small>Copyright: RaiseTech</small></p>
    </footer> 
  </div>
  <?php wp_footer(); ?>
</body>
</html>