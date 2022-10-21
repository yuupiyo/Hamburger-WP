<form method="get" action="<?php echo home_url('/'); ?>" class="p-search">
  <label for="">
    <input type="text" class="p-search__input c-border__round" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="キーワード">
  </label>
  <label for="">
    <input class="p-search__button c-text__font02--bold c-text-color__primary c-border__round c-button" id="searchsubmit" type="submit" value="検索">
  </label>
</form>