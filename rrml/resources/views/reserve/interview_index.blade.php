<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="referrer" content="no-referrer-when-downgrade">
  <meta name="robots" content="noindex">
  <title>宿泊予約 - 宿泊者問診情報入力 | Mamma Levata</title>
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
      <h1 id="rrml-page-title">お試しページ</h1>
    </header>
    {{--
      <form id="rrml-form" class="confirm" method="POST" action="{{ route('reserve/interview/edit') }}">
      <form id="rrml-form" class="needs-validation h-adr" novalidate method="POST" action="{{ route('check') }}">

    --}}
      
    <form id="rrml-form" class="confirm" method="POST" action="{{ route('interview_edit') }}">
    @csrf

      問診情報ID：
      <input type="text" name="interview_id" >
      <button class="btn btn-primary d-block mx-auto w-100" type="submit">登録する</button>
      <button type="submit" class="btn btn-primary d-block mx-auto mb-3 w-100" disabled>付添者情報の入力へ<i class="bi bi-chevron-right ms-1" aria-hidden="true"></i></button>


    </form>

  </main>
  <footer id="footer">フッターが入ります</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/custom.js" async></script>
</body>
</html>