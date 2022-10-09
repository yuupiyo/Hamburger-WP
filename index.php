<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Raise Techの最終課題です">
  <title>Hamburger</title>
  <!-- css -->
  <link rel="stylesheet" href="https://unpkg.com/destyle.css@3.0.2/destyle.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="c-grid">

    <!-- header -->
    <header class="c-grid__header l-header p-header">
      <h1 class="p-header__title c-text__font01 c-text-color__primary">Hamburger</h1>

      <form action="" class="p-search">
        <label for="">
          <input type="text" class="p-search__input c-border__round">
        </label>
        <label for="">
          <input class="p-search__button c-text__font02--bold c-text-color__primary c-border__round c-button" type="submit" value="検索">
        </label>
      </form>

      <!-- ハンバーガーボタン(Menu)部分 -->
      <button class="p-header__button c-text__font01 c-text-color__primary">
        Menu
      </button>
    </header>
    
    <!-- article -->
    <article class="c-grid__article c-background-color__article">
      <!-- mainvisual部分 -->
      <div class="p-mainvisual c-background__main">
        <h2 class="p-mainvisual__title c-text__font02--bold c-text-color__secondary">ダミーサイト</h2>
      </div>

      <!-- takeoutとeatin部分 -->
      <ul class="p-brunch-menu">
        <!-- Take Out -->
        <li class="p-brunch-menu__list">
          <h2 class="p-brunch-menu__title c-text__font01">Take Out</h2>
          <a href="#" class="p-brunch-menu__link">
            <div>
              <dl class="p-brunch-menu__text-box">
                <dt class="p-brunch-menu__sub-title c-text__font02--bold c-text-color__third">Take OUT</dt>
                <dd class="p-brunch-menu__text c-text__font02 c-text-color__third">当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています</dd>
              </dl>
              <dl class="p-brunch-menu__text-box">
                <dt class="p-brunch-menu__sub-title c-text__font02--bold c-text-color__third">Take OUT</dt>
                <dd class="p-brunch-menu__text c-text__font02 c-text-color__third">当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで</dd>
              </dl>
            </div>
          </a>
        </li>

          <!-- Eat In -->
        <li class="p-brunch-menu__list">
          <h2 class="p-brunch-menu__title c-text__font01 c-text-color__secondary">Eat In</h2>
          <a href="#" class="p-brunch-menu__link">
            <div>
              <dl class="p-brunch-menu__text-box">
                <dt class="p-brunch-menu__sub-title c-text__font02--bold c-text-color__third">Eat In</dt>
                <dd class="p-brunch-menu__text c-text__font02 c-text-color__third">当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで</dd>
              </dl>
              <dl class="p-brunch-menu__text-box">
                <dt class="p-brunch-menu__sub-title c-text__font02--bold c-text-color__third">Eat In</dt>
                <dd class="p-brunch-menu__text c-text__font02">当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています</dd>
              </dl>
            </div>
          </a>
        </li>
      </ul>

      <!-- map部分 -->
      <section class="p-access">
        <h2 class="p-access__title c-text__font02--bold c-text-color__secondary">見出しが入ります</h2>
        <p class="p-access__text c-text__font02--bold c-text-color__secondary">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        <!-- テキスト背景の黒い透過部分 -->
        <div class="p-access__layer"></div> 
      </section>
    </article>

    <!-- footer -->
    <footer class="l-footer p-footer c-grid__footer c-text-color__secondary">
      <ul class="p-footer__menu">
        <li class="p-footer__menu-item c-text__font02">ショップ情報</li>
        <li class="p-footer__menu-item c-text__font02">ヒストリー</li>
      </ul>
      <p class="p-footer__copyright c-text__font02"><small>Copyright: RaiseTech</small></p>
    </footer>

    <!-- nav -->
    <aside class="l-sidebar p-sidebar c-grid__sidebar c-text-color__primary">
      <!-- ハンバーガーボタンの×印 -->
      <button class="p-sidebar__button c-close">
        <span class="c-close__line"></span>
        <span class="c-close__line"></span>
      </button>

      <h2 class="p-sidebar__title c-text__font01">Menu</h2>
      <nav>
        <dl class="c-nav__list">
          <dt class="c-nav__title c-text__font02--bold"><a href="./archive.html">バーガー</a></dt>
          <dd class="c-nav__list-item c-text__font02"><a href="#">ハンバーガー</a></dd>
          <dd class="c-nav__list-item c-text__font02"><a href="#">チーズバーガー</a></dd>
          <dd class="c-nav__list-item c-text__font02"><a href="#">テリヤキバーガー</a></dd>
          <dd class="c-nav__list-item c-text__font02"><a href="#">アボカドバーガー</a></dd>
          <dd class="c-nav__list-item c-text__font02"><a href="#">フィッシュバーガー</a></dd>
          <dd class="c-nav__list-item c-text__font02"><a href="#">ベーコンバーガー</a></dd>
          <dd class="c-nav__list-item c-text__font02"><a href="#">チキンバーガー</a></dd>
        </dl>

        <dl class="c-nav__list">
          <dt class="c-nav__title c-text__font02--bold"><a href="./archive.html">サイド</a></dt>
          <dd class="c-nav__list-item c-text__font02"><a href="#">ポテト</a></dd>
          <dd class="c-nav__list-item c-text__font02"><a href="#">サラダ</a></dd>
          <dd class="c-nav__list-item c-text__font02"><a href="#">ナゲット</a></dd>
          <dd class="c-nav__list-item c-text__font02"><a href="#">コーン</a></dd>
        </dl>

        <dl class="c-nav__list">
          <dt class="c-nav__title c-text__font02--bold"><a href="./archive.html">ドリンク</a></dt>
          <dd class="c-nav__list-item c-text__font02"><a href="#">コーラ</a></dd>
          <dd class="c-nav__list-item c-text__font02"><a href="#">ファンタ</a></dd>
          <dd class="c-nav__list-item c-text__font02"><a href="#">オレンジ</a></dd>
          <dd class="c-nav__list-item c-text__font02"><a href="#">アップル</a></dd>
          <dd class="c-nav__list-item c-text__font02"><a href="#">紅茶（Ice/Hot）</a></dd>
          <dd class="c-nav__list-item c-text__font02"><a href="#">コーヒー（Ice/Hot）</a></dd>
        </dl>
      </nav>
    </aside>
    <!-- サイドバー後ろの黒い透過部分 -->
    <div class="c-overlay"></div>
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>
</html>