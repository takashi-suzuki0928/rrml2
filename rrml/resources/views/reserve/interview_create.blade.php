<!DOCTYPE html>
<html lang="ja">
  @section('title','宿泊者問診情報の入力')
  @section('description','説明')
  @include('common.header')

  {{--
     エラー表示
     サーバサイトではメールアドレス重複だけ見れば良いはず？
  --}}
  @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
  @endforeach

  <button onclick="location.href='{{route('interview_show',['id' => 1])}}'">詳細</button>

    <form id="rrml-form" class="needs-validation" novalidate method="POST" action="{{ route('interview_store') }}">
    @csrf
      <div class="rrml-inner">
        <div class="mb-3">
          <label for="hospital" class="form-label">出産（予定）病院 <span class="badge required-badge">必須</span></label>
          <input type="text" name="hospital" id="hospital" class="form-control" required>
          <div class="invalid-feedback">入力してください</div>
        </div>
        <div class="mb-x2"><!-- 利用期間が産後1年間なので、入力範囲は1年前〜1年後くらい？ -->
          <div for="baby-due" class="form-label">出産（予定）日 <span class="badge required-badge">必須</span></div>
          <div class="text-start">
            <select id="year" name="baby_bday_y" class="form-select d-inline-block w-auto me-1 form-control">
              <option value="" disabled selected></option>

            <?php $years = array_reverse(range(today()->year -2, today()->year +2)); ?>
            @foreach($years as $year)
              <option
                  value="{{ $year }}"
                  {{ old('baby_bday_y') == $year ? 'selected' : '' }}
              >{{ $year }}</option>
            @endforeach
            </select>年
            <select id="month" name="baby_bday_m" class="form-select d-inline-block w-auto mx-1 form-control">
              <option value="" disabled selected></option>
              @foreach(range(1, 12) as $month)
              <option
                value="{{ $month }}"
                {{ old('baby_bday_m') == $month ? 'selected' : '' }}
                >{{ $month }}</option>
              @endforeach
            </select>月
            <select id="day" name="baby_bday_d" class="form-select d-inline-block w-auto mx-1 form-control">
              <option value="" disabled selected></option>
            </select>日
          </div>
          <div class="invalid-feedback">出産予定日を入力してください</div>
        </div>
        <div class="mb-3">
          <p class="form-label">出産経験 <span class="badge required-badge">必須</span></p>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="multiparous" id="multiparous1" value="0" required>
            <label class="form-check-label" for="multiparous1">初めて</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="multiparous" id="multiparous2" value="1" required>
            <label class="form-check-label" for="multiparous2">出産経験あり</label>
          </div>
          <div class="invalid-feedback">入力してください</div>
        </div>
        <div class="rrml-nest-wrap mb-x2 ms-2 ps-2">
          <label for="children" class="form-label">上のお子様 <span class="badge bg-primary">ありの方のみ</span></label>
          <input type="text" name="children" id="children" class="form-control" placeholder="例）4歳の女の子と2歳の男の子" required>
          <div class="invalid-feedback">入力してください</div>
        </div>
        <div class="mb-3">
          <p class="form-label">ご病気の有無 <span class="badge required-badge">必須</span></p>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sick" id="sick1" value="0" required>
            <label class="form-check-label" for="sick1">なし</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sick" id="sick2" value="1" required>
            <label class="form-check-label" for="sick2">あり</label>
          </div>
        </div>
        <div class="rrml-nest-wrap mb-x2 ms-2 ps-2">
          <label for="sick-content" class="form-label">ご病気の詳細 <span class="badge bg-primary">ありの方のみ</span></label>
          <input type="text" name="sick_content" id="sick-content" class="form-control p-extended-address">
          <div class="invalid-feedback">入力してください</div>
        </div>
        <div class="mb-3">
          <p class="form-label">血液検査で感染症の数値が陽性と言われたものはありましたか <span class="badge required-badge">必須</span></p>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="blood" id="blood1" value="0" required>
            <label class="form-check-label" for="blood1">なし</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="blood" id="blood2" value="1" required>
            <label class="form-check-label" for="blood2">あり</label>
          </div>
        </div>
        <div class="rrml-nest-wrap mb-x2 ms-2 ps-2">
          <label for="blood-content" class="form-label">陽性と言われた感染症 <span class="badge bg-primary">ありの方のみ</span></label>
          <input type="text" name="blood_content" id="blood-content" class="form-control p-extended-address">
          <div class="invalid-feedback">入力してください</div>
        </div>
        <div class="mb-3">
          <p class="form-label">毎日飲んでいるお薬はありますか <span class="badge required-badge">必須</span></p>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="medicine" id="medicine1" value="0" required>
            <label class="form-check-label" for="medicine1">なし</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="medicine" id="medicine2" value="1" required>
            <label class="form-check-label" for="medicine2">あり</label>
          </div>
        </div>
        <div class="rrml-nest-wrap mb-x2 ms-2 ps-2">
          <label for="medicine-content" class="form-label">お薬の名前 <span class="badge bg-primary">ありの方のみ</span></label>
          <input type="text" name="medicine_content" id="medicine-content" class="form-control p-extended-address">
          <div class="invalid-feedback">入力してください</div>
        </div>
        <div class="mb-3">
          <p class="form-label">アレルギー有無（食物以外） <span class="badge required-badge">必須</span></p>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="alergie" id="alergie1" value="0" required>
            <label class="form-check-label" for="alergie1">なし</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="alergie" id="alergie2" value="1" required>
            <label class="form-check-label" for="alergie2">あり</label>
          </div>
        </div>
        <div class="rrml-nest-wrap mb-x2-5 ms-2 ps-2">
          <label for="alergie-content" class="form-label">食物以外のアレルギー詳細 <span class="badge bg-primary">ありの方のみ</span></label>
          <input type="text" name="alergie_content" id="alergie-content" class="form-control p-extended-address">
          <div class="invalid-feedback">入力してください</div>
        </div>
        <h2 class="mb-3">食物アレルギーに関して</h2>
        <p class="form-text">厚生労働省により、アレルギーの原因物質を含む食品は、「特定原材料」として28品目が指定されております。下記項目の28品目より、除去をご希望される食品につきまして、チェックをお願いします。<br>尚、メニューにつきましては可能な限り対応させていただきますが、多品目にわたるアレルギーをお持ちのお客様につきましては、お受けいたしかねる場合もございます。予めご了承下さい。</p>
        <p class="form-text mb-3">◆当ホテルでは、他メニューと同一の厨房で調理を致しております。食材自体にアレルギー物質を含んでいない場合も、加工や調理過程でアレルギー物質が微量に混入する可能性がございます。このような微量の混入でもアレルギー症状を引き起こす場合がございます。<br>◆調理・洗浄機器・食器などにつきましても、他メニューと共通のものを使用いたしております。ご用命とお食事の際は、上記をご勘案の上、お客様によるご判断をお願い申し上げます。</p>
        <div class="mb-3">
          <p class="form-label">お持ちの食物アレルギー <span class="badge required-badge">必須</span></p>
          <div class="form-check my-2">
            <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-nothing" value="なし">
            <label class="form-check-label" for="food-nothing">なし</label>
          </div>
          <p class="form-text mt-2 mb-1">特定原材料7品目</p>
          <div class="rrml-col-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-egg" value="卵" @if($errors->any()){{ is_array(old('food_alergie')) && array_keys(old('food_alergie'), "卵")? 'checked="checked"' : '' }}@endif>
              <label class="form-check-label" for="food-egg">卵</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-milk" value="乳">
              <label class="form-check-label" for="food-milk">乳</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-wheat" value="小麦">
              <label class="form-check-label" for="food-wheat">小麦</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-soba" value="そば">
              <label class="form-check-label" for="food-soba">そば</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-peanuts" value="落花生">
              <label class="form-check-label" for="food-peanuts">落花生</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-shrimp" value="えび">
              <label class="form-check-label" for="food-shrimp">えび</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-crab" value="かに">
              <label class="form-check-label" for="food-crab">かに</label>
            </div>
          </div>
          <p class="form-text mt-2 mb-1">特定原材料に準ずるもの21品目</p>
          <div class="rrml-col-4 mb-2">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-awabi" value="あわび">
              <label class="form-check-label" for="food-awabi">あわび</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-ika" value="いか">
              <label class="form-check-label" for="food-ika">いか</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-ikura" value="いくら">
              <label class="form-check-label" for="food-ikura">いくら</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-sake" value="鮭（さけ）">
              <label class="form-check-label" for="food-sake">鮭（さけ）</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-saba" value="鯖（さば）">
              <label class="form-check-label" for="food-saba">鯖（さば）</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-beef" value="牛肉">
              <label class="form-check-label" for="food-beef">牛肉</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-chicken" value="鶏肉">
              <label class="form-check-label" for="food-chicken">鶏肉</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-pork" value="豚肉">
              <label class="form-check-label" for="food-pork">豚肉</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-daizu" value="大豆">
              <label class="form-check-label" for="food-daizu">大豆</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-kurumi" value="くるみ">
              <label class="form-check-label" for="food-kurumi">くるみ</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-orange" value="オレンジ">
              <label class="form-check-label" for="food-orange">オレンジ</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-peach" value="桃">
              <label class="form-check-label" for="food-peach">桃</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-kiwi" value="キウイフルーツ">
              <label class="form-check-label" for="food-kiwi">キウイフルーツ</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-apple" value="リンゴ">
              <label class="form-check-label" for="food-apple">リンゴ</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-banana" value="バナナ">
              <label class="form-check-label" for="food-banana">バナナ</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-matsutake" value="まつたけ">
              <label class="form-check-label" for="food-matsutake">まつたけ</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-yamaimo" value="やまいも">
              <label class="form-check-label" for="food-yamaimo">やまいも</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-gelatin" value="ゼラチン">
              <label class="form-check-label" for="food-gelatin">ゼラチン</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-cashewnuts" value="カシューナッツ">
              <label class="form-check-label" for="food-cashewnuts">カシューナッツ</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-sesame" value="ごま">
              <label class="form-check-label" for="food-sesame">ごま</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="food_alergie[]" id="food-armond" value="アーモンド">
              <label class="form-check-label" for="food-armond">アーモンド</label>
            </div>
          </div>
          <div class="form-check d-flex align-items-center">
            <input class="form-check-input mt-0 me-2 flex-shrink-0" type="checkbox" name="food_alergie[]" id="food-other" value="その他">
            <label class="form-check-label me-2 flex-shrink-0" for="food-other">その他</label>
            <input type="text" name="food_alergie_other" class="form-control w-auto d-inline-block flex-grow-1">
          </div>
        </div>
        <p class="form-text mb-3">※下記症状のお客様につきましては、ご本人様に詳細を伺わせていただきます。</p>
        <div class="mb-3">
          <p class="form-label">現在、食物アレルギーで医師の診断を受けている <span class="badge required-badge">必須</span></p>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="have_food_alergie" id="have_food_alergie1" value="0" required>
            <label class="form-check-label" for="have_food_alergie1">はい</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="have_food_alergie" id="have_food_alergie2" value="1" required>
            <label class="form-check-label" for="have_food_alergie2">いいえ</label>
          </div>
        </div>
        <div class="mb-x2-5">
          <p class="form-label">過去に、食物アレルギーでアナフィラキシーショックを発症したことがある <span class="badge required-badge">必須</span></p>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="food_alergie_shock" id="food_alergie_shock1" value="0" required>
            <label class="form-check-label" for="food_alergie_shock1">はい</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="food_alergie_shock" id="food_alergie_shock2" value="1" required>
            <label class="form-check-label" for="food_alergie_shock2">いいえ</label>
          </div>
        </div>
        <div class="mb-x2">
          <p class="form-label">ベジタリアンのお客様</p>
          <p class="form-text">摂取不可の項目にチェックをお願いします。</p>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="vegetarian[]" id="vege-chicken" value="チキンブイヨン">
            <label class="form-check-label" for="vege-chicken">チキンブイヨン</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="vegetarian[]" id="vege-milk" value="乳製品">
            <label class="form-check-label" for="vege-milk">バター、牛乳等の乳製品</label>
          </div>
          <div class="form-check d-flex align-items-center">
            <input class="form-check-input mt-0 me-2 flex-shrink-0" type="checkbox" name="vegetarian[]" id="vege-other" value="その他">
            <label class="form-check-label me-2 flex-shrink-0" for="vege-other">その他</label>
            <input type="text" name="vegetarian_other" class="form-control w-auto d-inline-block flex-grow-1">
          </div>
        </div>
        <p class="form-text mb-x2">※該当食品をメニューから外すのみのご対応となります。その他のご要望につきましては、お受けいたしかねますので、予めご了承下さい。</p>
        <div class="mb-x2-5">
          <p class="form-text mb-2 w-auto mx-auto">問診内容をご確認の上、間違いがなければ同意のチェックをお願いいたします。</p>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="karte_agree" id="karte-agree" value="同意する" required>
            <label class="form-check-label" for="karte-agree">同意します <span class="badge required-badge">必須</span></label>
          </div>
        </div>
        {{--
        <button type="submit" class="btn btn-primary d-block mx-auto mb-3 w-100" disabled>付添者情報の入力へ<i class="bi bi-chevron-right ms-1" aria-hidden="true"></i></button>
        --}}
        <button type="submit" class="btn btn-primary d-block mx-auto mb-3 w-100">付添者情報の入力へ<i class="bi bi-chevron-right ms-1" aria-hidden="true"></i></button>
        <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-chevron-left me-1" aria-hidden="true"></i>宿泊者の入力に戻る</button>
      </div>
    </form>
    {{-- 日付セット用 共通には含まないでおく --}}
    <script src="/js/setDay.js"></script>
  @include('common.footer')
</body>
</html>