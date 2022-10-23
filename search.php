  <?php get_header(); ?>
    
    <!-- article -->
    <article class="c-grid__article c-background-color__article">

      <!-- ページタイトル部分 -->
      <div class="p-page-title__archive c-background__archive c-background-color__black">
        <div class="p-page-title__wrapper">
          <h1 class="p-page-title__main c-text__font01 c-text-color__secondary">Search:</h1>
          <p class="p-page-title__sub c-text__font02--bold c-text-color__secondary"><?php echo get_search_query(); ?></p>
        </div>
      </div>
      <div class="c-inner">
      
        <!-- カード部分 -->
        <?php if ( have_posts() ): ?>
          <p class="p-search-title"><?php echo get_search_query(); ?>の検索結果:<?php echo $wp_query->found_posts; ?>件</p>
          <?php while ( have_posts() ): the_post(); ?>
            <section id="post-<?php the_ID(); ?>" <?php post_class( 'p-menu-list' ); ?>>
              <figure class="c-card">
                <a href="<?php the_permalink(); ?>" <?php post_class( 'c-card__link' ); ?>>
                    <?php if ( has_post_thumbnail() ): ?>
                      <?php the_post_thumbnail("full", array("alt" => get_the_title(), "class" => "p-menu-list__image c-card__image")); ?>
                    <?php else: ?>
                      <img src="/wp-content/themes/hamburger-wp/images/no-image.svg" alt="no-imageのイメージ画像" class="p-menu-list__image c-card__image">
                    <?php endif; ?>
                  <figcaption class="p-menu-list__wrapper c-background-color__brown">
                    <div class="p-menu-list__content">
                      <h2 class="c-card__title c-text__font02--bold c-text-color__secondary"><?php the_title(); ?></h2>
                      <h3 class="c-card__sub-title c-text__font02--bold c-text-color__secondary">小見出しが入ります</h3>
                      <p class="c-card__text c-text__font02 c-text-color__secondary">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                      </p>
                    </div>
                    <buttom onclick="location.href='<?php the_permalink(); ?>'" class="p-menu-list__button c-card__button c-background-color__white c-text__font02--bold c-text-color__primary">詳しく見る</buttom>
                  </figcaption>
                </a>
              </figure>
            </section>
          <?php endwhile; else: ?>
            <p>検索結果はありません。</p>
        <?php endif; ?>

        <?php wp_pagenavi(); ?>
      </div>
    </article>
  
  <?php get_sidebar(); ?>

  <?php get_footer(); ?>