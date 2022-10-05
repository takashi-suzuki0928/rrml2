<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="referrer" content="no-referrer-when-downgrade">
  <meta name="robots" content="noindex">
  <title>会員登録内容確認 | Mamma Levata</title>
  <link rel="icon" sizes="any" href="../wp-content/themes/mammalevata/favicon.ico">
  <link rel="icon" type="image/svg+xml" href="../wp-content/themes/mammalevata/favicon.svg">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/custom.css?v1">
  <link rel="stylesheet" href="css/style.css?v4">
</head>
<body>
  <header id="header">ヘッダーが入ります</header>
  <main id="main">
    <header id="rrml-header">
      <h1 id="rrml-page-title">会員登録内容確認</h1>
    </header>
    @if ($errors->any())

    <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

会員登録メールを送信しました。




  </main>
  <footer id="footer">フッターが入ります</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="js/custom.js"></script>
</body>
</html>
