// 誕生日 日付の取得
function setDay() {
  const yearVal = document.getElementById('year').value;
  const monthVal = document.getElementById('month').value;

  let html = '<option value="" disabled selected></option>';

  if (yearVal !== '' && monthVal !== '') {
    const lastDay = (new Date(yearVal, monthVal, 0)).getDate();
    for (let day = 1; day <= lastDay; day++) {
      html += '<option value="' + day + '">' + day + '</option>';
    }
  }
  document.getElementById('day').innerHTML = html;
};

window.onload = function () {
  setDay();
  document.getElementById('year').addEventListener('change', setDay);
  document.getElementById('month').addEventListener('change', setDay);

  // リダイレクトした場合に元の入力値を復元する
  const dayElem = document.getElementById('day');
  dayElem.value = dayElem.getAttribute('data-old-value');
}