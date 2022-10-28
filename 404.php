<!-- archive.phpをコピペして、コードを変更して作成 -->

<?php get_header(); ?>
    
    <!-- article -->
    <article class="c-grid__article c-background-color__article">

      <!-- ページタイトル部分 -->
      <div class="p-page-title__archive c-background__archive c-background-color__black">
        <div class="p-page-title__wrapper">
          <h1 class="p-page-title__main c-text__font01 c-text-color__secondary">404 NOT FOUND</h1>
          <p class="p-page-title__sub c-text__font02--bold c-text-color__secondary">ERROR</p>
        </div>
      </div>
      <div class="c-inner">
        <section class="p-about c-text-color__third">
          <h2 class="p-about__title c-text__font02--bold">お探しのページが見つかりませんでした。</h2>
          <p class="p-about__text c-text__font02">申し訳ございませんが、<a href="<?php echo home_url( '/' ); ?>">こちらのリンク</a>からトップページにお戻りください。</p>
        </section>
      </div>
    </article>

  <?php get_sidebar(); ?>
  
  <?php get_footer(); ?>