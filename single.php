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
      <h1 class="p-header__title c-text__font01 c-text-color__primary"><a href="./index.html">Hamburger</a></h1>

      <form action="" class="p-search">
        <label for="">
          <input type="text" class="p-search__input c-border__round c-text__font02--bold c-text-color__primary" placeholder="">
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

      <!-- ページタイトル部分 -->
      <div class="p-page-title__single c-background__single">
          <h1 class="p-page-title__single--main c-text__font02--bold c-text-color__secondary">h1 チーズバーガー</h1>
      </div>

      <div class="c-inner--single">
        <section class="p-heading">
          <h2 class="p-heading__h2 c-text__font02--bold c-text-color__third">見出しh2</h2>
          <p class="p-heading__text c-text__font02 c-text-color__third">pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。</p>
          <h3 class="p-heading__h3 c-text__font02--bold c-text-color__third">見出しh3</h3>
          <h4 class="p-heading__h4 c-text__font02--bold c-text-color__third">見出しh4</h4>
          <h5 class="p-heading__h5 c-text__font02--bold c-text-color__third">見出しh5</h5>
          <h6 class="p-heading__h6 c-text__font02--bold c-text-color__third">見出しh6</h6>
        </section>

        <!-- 引用部分 -->
        <figure class="p-blockquote c-background-color__gray">
          <blockquote class="p-blockquote__text c-text__font02 c-text-color__third" cite="#">
            <p>Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
          </blockquote>
          <figcaption class="p-blockquote__cite c-text__font02 c-text-color__third">
            出典元 :<cite class="c-cite-name"><a href="#">◯◯◯◯◯◯◯◯◯◯◯◯</a></cite>
          </figcaption>
        </figure>
        
        <!-- 1番大きなハンバーガーの画像部分 -->    
        <img class="c-image__big" src="./images/img-cheeseburger-big.jpg" alt="ハンバーガーの写真">
    
        <!-- テキスト付きハンバーガー画像部分 -->
        <section class="p-burger-description__first">
          <img src="./images/img-cheeseburger.jpg" alt="ハンバーガーの写真" class="c-image__description">
          <p class="p-burger-description__text c-text__font02 c-text-color__third">
            テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
          </p>
        </section>
        <section class="p-burger-description__second">
          <p class="p-burger-description__text c-text__font02 c-text-color__third">
            テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
          </p>
          <img src="./images/img-cheeseburger.jpg" alt="ハンバーガーの写真" class="c-image__description">
        </section>

        <!-- 真ん中のハンバーガー画像 -->
        <img src="./images/img-cheeseburger.jpg" alt="真ん中のハンバーガー画像" class="c-image__medium">

        <!-- タイル状のハンバーガー画像 -->
        <div class="p-burger-tile">
          <img src="./images/img-cheeseburger.jpg" alt="パネル状のハンバーガー画像" class="c-image__tile">
          <img src="./images/img-cheeseburger.jpg" alt="パネル状のハンバーガー画像" class="c-image__tile">
          <img src="./images/img-cheeseburger.jpg" alt="パネル状のハンバーガー画像" class="c-image__tile">
          <img src="./images/img-cheeseburger.jpg" alt="パネル状のハンバーガー画像" class="c-image__tile">
          <img src="./images/img-cheeseburger.jpg" alt="パネル状のハンバーガー画像" class="c-image__tile">
          <img src="./images/img-cheeseburger.jpg" alt="パネル状のハンバーガー画像" class="c-image__tile">
          <img src="./images/img-cheeseburger.jpg" alt="パネル状のハンバーガー画像" class="c-image__tile">
          <img src="./images/img-cheeseburger.jpg" alt="パネル状のハンバーガー画像" class="c-image__tile">
          <img src="./images/img-cheeseburger.jpg" alt="パネル状のハンバーガー画像" class="c-image__tile">
        </div>

        <!-- リストの部分 -->
        <section class="p-list__order">
          <ol class="c-list-item c-list-item__first c-text__font02 c-text-color__third">
            <li>リストリストリスト</li>
            <li>リストリストリスト</li>
          </ol>
          <ol class="c-list-item c-list-item__second c-text__font02 c-text-color__third">
            <li>リスト2リスト2リスト2</li>
            <li>リスト2リスト2リスト2</li>
          </ol>
          <ol class="c-list-item c-list-item__third c-text__font02 c-text-color__third">
            <li>リストリストリスト</li>
            <li>リストリストリスト</li>
          </ol>
        </section>
        <section class="p-list__random">
          <ul class="c-list-item c-list-item__first c-text__font02 c-text-color__third">
            <li>リストリストリスト</li>
            <li>リストリストリスト</li>
          </ul>
          <ul class="c-list-item c-list-item__second c-text__font02 c-text-color__third">
            <li>リスト2リスト2リスト2</li>
            <li>リスト2リスト2リスト2</li>
          </ul>
          <ul class="c-list-item c-list-item__third c-text__font02 c-text-color__third">
            <li>リストリストリスト</li>
            <li>リストリストリスト</li>
          </ul>
        </section>

        <!-- コード表記部分 -->
        <pre class="p-preformatted c-background-color__gray">
          <code class="c-code c-text__font02 c-text-color__third">
            &lt;html&gt;
                    &lt;head&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                    &lt;/body&gt;
            &lt;/html&gt;
          </code>
        </pre>

        <!-- 表の部分 -->
        <table class="p-table c-background-color__white">
          <tr class="p-table__tr">
            <th class="p-table__th--first c-text__font02 c-text-color__third c-border__table">テーブル</th>
            <th class="p-table__th--second c-text__font02 c-text-color__third c-border__table">テーブル</th>
          </tr>
          <tr class="p-table__tr">
            <th class="p-table__th--first c-text__font02 c-text-color__third c-border__table">テーブル</th>
            <th class="p-table__th--second c-text__font02 c-text-color__third c-border__table">テーブル</th>
          </tr>
          <tr class="p-table__tr">
            <th class="p-table__th--first c-text__font02 c-text-color__third c-border__table">テーブル</th>
            <th class="p-table__th--second c-text__font02 c-text-color__third c-border__table">テーブル</th>
          </tr>
          <tr class="p-table__tr">
            <th class="p-table__th--first c-text__font02 c-text-color__third c-border__table">テーブル</th>
            <th class="p-table__th--second c-text__font02 c-text-color__third c-border__table">テーブル</th>
          </tr>
        </table>

        <!-- 大きなボタン部分 -->
        <button class="c-button c-button__big c-border__big c-text__font02--bold c-text-color__third">ボタン</button>

        <!-- 太字のbold部分 -->
        <p class="p-text-bold c-text__font02--bold c-text-color__third">boldboldboldboldboldboldbold</p>
      </div>
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
      <nav class="p-nav">
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