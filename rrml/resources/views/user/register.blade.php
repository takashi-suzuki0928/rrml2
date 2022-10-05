<!DOCTYPE html>
<html lang="ja">
  @section('title','会員登録')
  @section('description','会員登録の説明')
  @include('common.header')

  {{--
     エラー表示
     サーバサイトではメールアドレス重複だけ見れば良いはず？
  --}}
  @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
  @endforeach
    <form id="rrml-form" class="needs-validation h-adr" novalidate method="POST" action="{{ route('check') }}">
    @csrf

      <div class="rrml-inner">
        <div class="mb-3">
          <div class="form-label">氏名 <span class="badge required-badge">必須</span></div>
          <div class="row g-2">
            <div class="col">
              <div class="form-floating">
                <input type="text" name="last_name" id="last-name" class="form-control" autocomplete="family-name" placeholder="名字" required value="{{ old('last_name') }}">
                <label for="last-name">姓</label>
                <div class="invalid-feedback">姓を入力してください</div>
              </div>
            </div>
            <div class="col">
              <div class="form-floating">
                <input type="text" name="first_name" id="first-name" class="form-control" autocomplete="given-name" placeholder="名前" required value="{{ old('first_name') }}">
                <label for="first-name">名</label>
                <div class="invalid-feedback">名を入力してください</div>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-x2">
          <div class="form-label">氏名フリガナ <span class="badge required-badge">必須</span></div>
          <div class="row g-2">
            <div class="col">
              <div class="form-floating">
                <input type="text" name="last_name_kana" id="last-name-kana" class="form-control" autocomplete="family-name" placeholder="ミョウジ" required value="{{ old('last_name_kana') }}">
                <label for="last-name-kana">セイ</label>
                <div class="invalid-feedback">姓を入力してください</div>
              </div>
            </div>
            <div class="col">
              <div class="form-floating">
                <input type="text" name="first_name_kana" id="first-name-kana" class="form-control" autocomplete="given-name" placeholder="ナマエ" required value="{{ old('first_name_kana') }}">
                <label for="first-name-kana">メイ</label>
                <div class="invalid-feedback">名を入力してください</div>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-x2">
          <div class="form-label">生年月日 <span class="badge required-badge">必須</span></div>
          <div class="text-start">

          {{-- 年の範囲どうする？現在より60年目をひとまず設定。とても高齢出産です --}}
          <select id="year" name="bday_y" class="form-select d-inline-block w-auto me-1 form-control" autocomplete="bday-year">
          <option value="" disabled selected></option>
            <?php $years = array_reverse(range(today()->year - 60, today()->year)); ?>
            @foreach($years as $year)
              <option
                  value="{{ $year }}"
                  {{ old('bday_y') == $year ? 'selected' : '' }}
              >{{ $year }}</option>
            @endforeach
          </select>年
          <select id="month" name="bday_m" class="form-select d-inline-block w-auto mx-1 form-control" autocomplete="bday-month">
            <option value="" disabled selected></option>
            @foreach(range(1, 12) as $month)
            <option
                value="{{ $month }}"
                {{ old('bday_m') == $month ? 'selected' : '' }}
                >{{ $month }}</option>
            @endforeach
          </select>月
          <select id="day" name="bday_d" class="form-select d-inline-block w-auto mx-1 form-control" autocomplete="bday-day" data-old-value="{{ old('bday_d') }}">
            <option value="" disabled selected></option>
          </select>日
          </div>
          <div class="invalid-feedback">生年月日を入力してください</div>
        </div>
        <div class="mb-3">
          <input type="hidden" class="p-country-name" value="Japan">
          <label for="zipcode" class="form-label">郵便番号 <span class="badge required-badge">必須</span></label>
          <input type="text" name="zipcode" id="zipcode" class="form-control form-short p-postal-code" autocomplete="postal-code" placeholder="1230001" required value="{{ old('zipcode') }}">
          <div class="invalid-feedback">郵便番号を入力してください</div>
        </div>
        <div class="mb-3">
          <label for="prefecture" class="form-label">都道府県 <span class="badge required-badge">必須</span></label>
          <select name="prefecture" id="prefecture" class="form-select form-short p-region" required>
            <option disabled selected>選択してください</option>
            <option value="北海道" @if('北海道' == old('prefecture')) selected @endif>北海道</option>
            <option value="青森県" @if('青森県' == old('prefecture')) selected @endif>青森県</option>
            <option value="岩手県" @if('岩手県' == old('prefecture')) selected @endif>岩手県</option>
            <option value="宮城県" @if('宮城県' == old('prefecture')) selected @endif>宮城県</option>
            <option value="秋田県" @if('秋田県' == old('prefecture')) selected @endif>秋田県</option>
            <option value="山形県" @if('山形県' == old('prefecture')) selected @endif>山形県</option>
            <option value="福島県" @if('福島県' == old('prefecture')) selected @endif>福島県</option>
            <option value="茨城県" @if('茨城県' == old('prefecture')) selected @endif>茨城県</option>
            <option value="栃木県" @if('栃木県' == old('prefecture')) selected @endif>栃木県</option>
            <option value="群馬県" @if('群馬県' == old('prefecture')) selected @endif>群馬県</option>
            <option value="埼玉県" @if('埼玉県' == old('prefecture')) selected @endif>埼玉県</option>
            <option value="千葉県" @if('千葉県' == old('prefecture')) selected @endif>千葉県</option>
            <option value="東京都" @if('東京都' == old('prefecture')) selected @endif>東京都</option>
            <option value="神奈川県" @if('神奈川県' == old('prefecture')) selected @endif>神奈川県</option>
            <option value="新潟県" @if('新潟県' == old('prefecture')) selected @endif>新潟県</option>
            <option value="富山県" @if('富山県' == old('prefecture')) selected @endif>富山県</option>
            <option value="石川県" @if('石川県' == old('prefecture')) selected @endif>石川県</option>
            <option value="福井県" @if('福井県' == old('prefecture')) selected @endif>福井県</option>
            <option value="山梨県" @if('山梨県' == old('prefecture')) selected @endif>山梨県</option>
            <option value="長野県" @if('長野県' == old('prefecture')) selected @endif>長野県</option>
            <option value="岐阜県" @if('岐阜県' == old('prefecture')) selected @endif>岐阜県</option>
            <option value="静岡県" @if('静岡県' == old('prefecture')) selected @endif>静岡県</option>
            <option value="愛知県" @if('愛知県' == old('prefecture')) selected @endif>愛知県</option>
            <option value="三重県" @if('三重県' == old('prefecture')) selected @endif>三重県</option>
            <option value="滋賀県" @if('滋賀県' == old('prefecture')) selected @endif>滋賀県</option>
            <option value="京都府" @if('京都府' == old('prefecture')) selected @endif>京都府</option>
            <option value="大阪府" @if('大阪府' == old('prefecture')) selected @endif>大阪府</option>
            <option value="兵庫県" @if('兵庫県' == old('prefecture')) selected @endif>兵庫県</option>
            <option value="奈良県" @if('奈良県' == old('prefecture')) selected @endif>奈良県</option>
            <option value="和歌山県" @if('和歌山県' == old('prefecture')) selected @endif>和歌山県</option>
            <option value="鳥取県" @if('鳥取県' == old('prefecture')) selected @endif>鳥取県</option>
            <option value="島根県" @if('島根県' == old('prefecture')) selected @endif>島根県</option>
            <option value="岡山県" @if('岡山県' == old('prefecture')) selected @endif>岡山県</option>
            <option value="広島県" @if('広島県' == old('prefecture')) selected @endif>広島県</option>
            <option value="山口県" @if('山口県' == old('prefecture')) selected @endif>山口県</option>
            <option value="徳島県" @if('徳島県' == old('prefecture')) selected @endif>徳島県</option>
            <option value="香川県" @if('香川県' == old('prefecture')) selected @endif>香川県</option>
            <option value="愛媛県" @if('愛媛県' == old('prefecture')) selected @endif>愛媛県</option>
            <option value="高知県" @if('高知県' == old('prefecture')) selected @endif>高知県</option>
            <option value="福岡県" @if('福岡県' == old('prefecture')) selected @endif>福岡県</option>
            <option value="佐賀県" @if('佐賀県' == old('prefecture')) selected @endif>佐賀県</option>
            <option value="長崎県" @if('長崎県' == old('prefecture')) selected @endif>長崎県</option>
            <option value="熊本県" @if('熊本県' == old('prefecture')) selected @endif>熊本県</option>
            <option value="大分県" @if('大分県' == old('prefecture')) selected @endif>大分県</option>
            <option value="宮崎県" @if('宮崎県' == old('prefecture')) selected @endif>宮崎県</option>
            <option value="鹿児島県" @if('鹿児島県' == old('prefecture')) selected @endif>鹿児島県</option>
            <option value="沖縄県" @if('沖縄県' == old('prefecture')) selected @endif>沖縄県</option>
          </select>
          <div class="invalid-feedback">都道府県を選択してください</div>
        </div>
        <div class="mb-3">
          <label for="locality" class="form-label">市区町村・番地 <span class="badge required-badge">必須</span></label>
          <input type="text" name="locality" id="locality" class="form-control p-locality p-street-address" required value="{{ old('locality') }}">
          <div class="invalid-feedback">入力してください</div>
        </div>
        <div class="mb-x2">
          <label for="extended-address" class="form-label">建物・部屋番号 <span class="badge bg-primary">集合住宅の場合は必須</span></label>
          <input type="text" name="extended_address" id="extended-address" class="form-control p-extended-address" value="{{ old('extended_address') }}">
        </div>
        <div class="mb-x2">
          <label for="tel" class="form-label">電話番号 <span class="badge required-badge">必須</span></label>
          <input type="text" name="tel" id="tel" class="form-control" autocomplete="tel" placeholder="0123001234" required value="{{ old('tel') }}">
          <div class="invalid-feedback">入力してください</div>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">メールアドレス <span class="badge required-badge">必須</span></label>
          <input type="email" name="email" id="email" class="form-control" autocomplete="email" placeholder="mail@mamma-levata.com" required value="{{ old('email') }}">
          <div class="invalid-feedback">入力してください</div>
        </div>
        <div class="mb-x2">
          <label for="email-confirmation" class="form-label">メールアドレス（確認用） <span class="badge required-badge">必須</span></label>
          <input type="email" name="email_confirmation" id="email-confirmation" class="form-control" autocomplete="email" required value="{{ old('email_confirm') }}">
          <div class="invalid-feedback">入力してください</div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">パスワード <span class="badge required-badge">必須</span></label>
          <input type="password" name="password" id="password" class="form-control" required>
          <div class="invalid-feedback">パスワードを入力してください</div>
          <p class="text-hint mt-1">パスワードには 半角英字（大文字/小文字）、半角数字、記号[.*/+-_&#@] が使用できます。</p>
        </div>
        <div class="mb-x2-5">
          <label for="new-password-confirm" class="form-label">パスワード（確認用） <span class="badge required-badge">必須</span></label>
          <input type="password" name="password_confirmation" id="new-password-confirm" class="form-control" placeholder="もう一度入力してください" required>
          <div class="invalid-feedback">パスワードを入力してください</div>
        </div>
        <div class="text-center">
          <p class="form-text mb-3">会員登録することで<a href="" target="_blank">個人情報保護方針</a>及び<a href="" target="_blank">利用規約</a>に同意したものとみなします。</p>
          <button class="btn btn-primary w-100" type="submit">登録内容を確認する</button>
        </div>
      </div>
    </form>
    {{-- 日付セット用 共通には含まないでおく --}}
    <script src="/js/setDay.js"></script>
  @include('common.footer')

</body>
</html>

