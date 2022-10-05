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


    <form id="rrml-form" class="confirm" method="POST" action="{{ route('register_store') }}">
    @csrf
      <div class="rrml-inner">
        <dl class="basic-row-dl mb-x2">
          <div class="d-flex justify-content-between flex-row dl-row">
            <dt class="dl-name">氏名</dt>
            <dd class="text-end">{{ $inputs['last_name'] }} {{ $inputs['first_name'] }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-row dl-row">
            <dt class="dl-name">氏名フリガナ</dt>
            <dd class="text-end">{{ $inputs['last_name_kana'] }} {{ $inputs['first_name_kana'] }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-row dl-row">
            <dt class="dl-name">生年月日</dt>
            <dd class="text-end">{{ $inputs['bday_y'] }}年{{ $inputs['bday_m'] }}月{{ $inputs['bday_d'] }}日</dd>
          </div>
          <div class="d-flex justify-content-between flex-row dl-row">
            <dt class="dl-name">郵便番号</dt>
            <dd class="text-end">〒{{ $inputs['zipcode'] }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-row dl-row">
            <dt class="dl-name">都道府県</dt>
            <dd class="text-end">{{ $inputs['prefecture'] }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-row dl-row">
            <dt class="dl-name">市区町村・番地</dt>
            <dd class="text-end">{{ $inputs['locality'] }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-row dl-row">
            <dt class="dl-name">建物・部屋番号</dt>
            <dd class="text-end">{{ $inputs['extended_address'] }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-row dl-row">
            <dt class="dl-name">電話番号</dt>
            <dd class="text-end">{{ $inputs['tel'] }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-row dl-row">
            <dt class="dl-name">メールアドレス</dt>
            <dd class="text-end">{{ $inputs['email'] }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-row dl-row">
            <dt class="dl-name">パスワード</dt>
            <dd class="text-end">******</dd>
          </div>
        </dl>
        <input type="hidden" name="last_name" value="{{ $inputs['last_name'] }}">
        <input type="hidden" name="first_name" value="{{ $inputs['first_name'] }}">
        <input type="hidden" name="last_name_kana" value="{{ $inputs['last_name_kana'] }}">
        <input type="hidden" name="first_name_kana" value="{{ $inputs['first_name_kana'] }}">
        <input type="hidden" name="bday" value="{{ $inputs['bday_y'] }} . '-' . {{ $inputs['bday_m'] }} . '-' . {{ $inputs['bday_d'] }}">
        <input type="hidden" name="zipcode" value="{{ $inputs['zipcode'] }}">
        <input type="hidden" name="prefecture" value="{{ $inputs['prefecture'] }}">
        <input type="hidden" name="locality" value="{{ $inputs['locality'] }}">
        <input type="hidden" name="extended_address" value="{{ $inputs['extended_address'] }}">
        <input type="hidden" name="tel" value="{{ $inputs['tel'] }}">
        <input type="hidden" name="email" value="{{ $inputs['email'] }}">
        <input type="hidden" id="password" value="{{ $inputs['password'] }}">
        <button class="btn btn-primary d-block mx-auto w-100" type="submit">登録する</button>
      </div>
    </form>

  </main>
  <footer id="footer">フッターが入ります</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="js/custom.js"></script>
</body>
</html>
