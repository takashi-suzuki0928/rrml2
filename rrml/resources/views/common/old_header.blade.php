<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="referrer" content="no-referrer-when-downgrade">
  <meta name="robots" content="noindex">
  <meta name="description" content="@yield('description')">
  <title>@yield('title') | Mamma Levata</title>
  <link rel="icon" sizes="any" href="../wp-content/themes/mammalevata/favicon.ico">
  <link rel="icon" type="image/svg+xml" href="../wp-content/themes/mammalevata/favicon.svg">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/css/custom.css?v1">
  <link rel="stylesheet" href="/css/style.css?v4">
</head>
<body class="index">
  <header id="header">
    <a href="" class="header-logo-link"><img src="img/mamma-levata-logo-horizontal.svg" alt="mamma levata logo" class="header-logo-image" width="300" height="65"></a>
    <input type="checkbox" id="header-menu-switch" name="header-menu-switch">
    <label for="header-menu-switch" id="header-menu-trigger" aria-label="サイトメニューの開閉">予約menu</label>
    <nav id="header-menu-wrap">
      <ul id="header-menu-list">
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="l-01.html">◯ ログイン</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="l-02.html">◯ パスワード忘れ</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="l-03.html">◯ パスワード再設定</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="k-01.html">◯ 新規会員登録</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="k-02.html">◯ 新規会員登録　内容確認</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-01.html">◯ マイページ</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-k-01.html">◯ マイページ会員情報　確認</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-k-02.html">◯ マイページ会員情報　変更</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-k-03.html">◯ マイページ会員情報　変更内容確認</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-m-01.html">◯ マイページ会員メアド変更</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-m-02.html">◯ マイページ会員メアド変更　内容確認</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-p-01.html">◯ マイページ会員パスワード変更</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-s-01.html">◯ マイページ宿泊者　確認</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-s-02.html">◯ マイページ宿泊者　変更</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-s-03.html">◯ マイページ宿泊者　変更内容確認</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-t-01.html">◯ マイページ付添者　確認</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-th-01.html">◯ マイページ付添者　変更</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-th-02.html">◯ マイページ付添者　変更内容確認</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-tt-01.html">◯ マイページ付添者　追加</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-tt-02.html">◯ マイページ付添者　追加内容確認</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-oh-01.html">◯ マイページ付添者　宿泊日変更</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-oh-02.html">◯ マイページ付添者　宿泊日変更内容確認</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-y-01.html">◯ マイページ宿泊内容　確認</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-yh-01.html">◯ マイページ宿泊チェックイン変更</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-yh-02.html">◯ マイページ宿泊チェックイン変更　内容確認</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="m-yk-01.html">◯ マイページ宿泊チェックイン確定</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="y-01.html">◯ 基本予約</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="y-s-01.html">◯ 基本予約　宿泊者情報</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="y-s-01-02.html">◯ 基本予約　宿泊者問診</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="y-s-02.html">◯ 基本予約　付添者情報</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="y-s-03.html">◯ 基本予約　付添者宿泊日</a></li>
        <li class="sub-menu-item menu-item"><a class="menu-link" target="test-iframe" href="y-s-04.html">◯ 基本予約　内容確認</a></li>
      </ul>
    </nav>
  </header>
