<!DOCTYPE html>
<html lang="ja">
  @section('title','問診情報確認')
  @section('description','説明')
  @include('common.header')

  {{--
     エラー表示
     サーバサイトではメールアドレス重複だけ見れば良いはず？
  --}}
  @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
  @endforeach

  <form id="rrml-form" class="needs-validation" novalidate>
  @csrf
    <div class="rrml-sub-block">
      <div class="rrml-inner">
        <dl class="basic-row-dl mb-x2-5">
          <div class="d-flex justify-content-between flex-wrap flex-row dl-row">
            <dt class="dl-name flex-grow-1 mw-100">出産(予定)病院</dt>
            <dd class="text-end ms-3 flex-grow-1">{{$inputs->answer_01}}</dd>
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-row dl-row">
            <dt class="dl-name flex-grow-1 mw-100">出産(予定)日</dt>
            <dd class="text-end ms-3 flex-grow-1">{{$inputs->answer_02}}</dd>
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-row dl-row">
            <dt class="dl-name flex-grow-1 mw-100">出産経験</dt>
            <dd class="text-end ms-3 flex-grow-1">{{ $inputs->answer_03 == 0 ? '初めて' : '出産経験あり' }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-row dl-row rrml-nest-wrap ms-2 ps-2">
            <dt class="dl-name flex-grow-1 mw-100 ms-1">上のお子様</dt>
            <dd class="text-end ms-3 flex-grow-1">{{ isset($inputs->answer_04) ? $inputs->answer_04 : '－' }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-row dl-row mt-3">
            <dt class="dl-name flex-grow-1 mw-100">ご病気の有無</dt>
            <dd class="text-end ms-3 flex-grow-1">{{ $inputs->answer_05 == 0 ? 'なし' : 'あり' }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-row dl-row rrml-nest-wrap ms-2 ps-2">
            <dt class="dl-name flex-grow-1 mw-100 ms-1">ご病気の詳細</dt>
            <dd class="text-end ms-3 flex-grow-1">{{ isset($inputs->answer_06) ? $inputs->answer_06 : '－' }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-row dl-row mt-3">
            <dt class="dl-name flex-grow-1 mw-100">血液検査で陽性と言われた感染症の有無</dt>
            <dd class="text-end ms-3 flex-grow-1">{{ $inputs->answer_07 == 0 ? 'なし' : 'あり' }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-row dl-row rrml-nest-wrap ms-2 ps-2">
            <dt class="dl-name flex-grow-1 mw-100 ms-1">陽性と言われた感染症</dt>
            <dd class="text-end ms-3 flex-grow-1">{{ isset($inputs->answer_08) ? $inputs->answer_08 : '－' }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-row dl-row mt-3">
            <dt class="dl-name flex-grow-1 mw-100">毎日の服薬有無</dt>
            <dd class="text-end ms-3 flex-grow-1">{{ $inputs->answer_09 == 0 ? 'なし' : 'あり' }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-row dl-row rrml-nest-wrap ms-2 ps-2">
            <dt class="dl-name flex-grow-1 mw-100 ms-1">お薬の名前</dt>
            <dd class="text-end ms-3 flex-grow-1">{{ isset($inputs->answer_10) ? $inputs->answer_10 : '－' }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-row dl-row mt-3">
            <dt class="dl-name flex-grow-1 mw-100">アレルギー有無（食物以外）</dt>
            <dd class="text-end ms-3 flex-grow-1">{{ $inputs->answer_11 == 0 ? 'なし' : 'あり' }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-row dl-row rrml-nest-wrap ms-2 ps-2">
            <dt class="dl-name flex-grow-1 mw-100">食物以外のアレルギー詳細</dt>
            <dd class="text-end ms-3 flex-grow-1">{{ isset($inputs->answer_12) ? $inputs->answer_12 : '－' }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-row dl-row mt-3">
            <dt class="dl-name flex-grow-1 mw-100">お持ちの食物アレルギー</dt>
            <dd class="text-end ms-3 flex-grow-1">{{$inputs->answer_13}} {{ isset($inputs->answer_13_t) ? $inputs->answer_13_t : '' }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-row dl-row rrml-nest-wrap ms-2 ps-2">
            <dt class="dl-name flex-grow-1 mw-100">現在、食物アレルギーで医師の診断を受けている</dt>
            <dd class="text-end ms-3 flex-grow-1">{{ $inputs->answer_14 == 0 ? 'はい' : 'いいえ' }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-row dl-row rrml-nest-wrap ms-2 ps-2 mb-2">
            <dt class="dl-name flex-grow-1 mw-100">過去に、食物アレルギーでアナフィラキシーショックを発症したことがある</dt>
            <dd class="text-end ms-3 flex-grow-1">{{ $inputs->answer_15 == 0 ? 'はい' : 'いいえ' }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-row dl-row">
            <dt class="dl-name flex-grow-1 mw-100">ベジタリアンの方：摂取不可食品</dt>
            <dd class="text-end ms-3 flex-grow-1">{{$inputs->answer_16}} {{ isset($inputs->answer_16_t) ? $inputs->answer_16_t : '' }}</dd>
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-row dl-row">
            <dt class="dl-name flex-grow-1 mw-100">問診内容のご同意</dt>
            <dd class="text-end ms-3 flex-grow-1">同意する</dd>
          </div>
        </dl>
        <a href="{{route('interview_edit',['id' => $inputs->id])}}" class="link-primary d-block">問診情報を変更する<i class="bi bi-chevron-right ms-1" aria-hidden="true"></i></a>
      </div>
    </div>
  </form>

  @include('common.footer')
</body>
</html>