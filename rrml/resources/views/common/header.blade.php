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
<body class="rrml">
  <header id="header">
    ヘッダーが入ります
  </header>
  <main id="main">
    <header id="rrml-header">
<!-- START: フローの中 -->
      <div class="rrml-flow">
        <div class="rrml-flow-title mb-3">【フロータイトル】</div>
        <ul class="rrml-flow-body">
          <li class="rrml-flow-item">
            <span class="rrml-flow-step">STEP 1</span>
            <span class="rrml-flow-do">情報入力</span>
          </li>
          <li class="rrml-flow-item current">
            <span class="rrml-flow-step">STEP 2</span>
            <span class="rrml-flow-do">内容確認</span>
          </li>
          <li class="rrml-flow-item">
            <span class="rrml-flow-step">STEP 3</span>
            <span class="rrml-flow-do">メール認証</span>
          </li>
          <li class="rrml-flow-item">
            <span class="rrml-flow-step">STEP 4</span>
            <span class="rrml-flow-do">登録完了</span>
          </li>
        </ul>
      </div>
<!-- END: フローの中 -->
      <h1 id="rrml-page-title">【@yield('title')】</h1>
    </header>
    <div id="main-content">