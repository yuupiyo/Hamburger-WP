<?php get_header(); ?>
    <!-- article -->
    <article class="c-grid__article c-background-color__article">
    <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ): the_post(); ?>
          <!-- ページタイトル部分 -->
          <div class="p-page-title__single c-background__page">
              <h1 class="p-page-title__page--main c-text__font02--bold c-text-color__secondary"><?php the_title(); ?></h1>
          </div>

          <div class="c-inner--single">
            <?php the_content(); ?>
          </div>
        <?php endwhile; else: ?>
          <P>記事はありません。</P>
      <?php endif; ?>
    </article>

<?php get_sidebar(); ?>
  
<?php get_footer(); ?>