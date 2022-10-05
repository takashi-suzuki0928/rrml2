(function () {
  'use strict';

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach((form) => {
      form.addEventListener('submit', (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add('was-validated');
      }, false);
  });

  window.addEventListener('load', () => {
    if (document.querySelector('form.h-adr')) {
      new YubinBango.MicroformatDom();
    }
  });
})();

function copyToClipboard(targetId) {
  const target = document.getElementById(targetId);
  console.log(target.innerHTML);
  navigator.clipboard.writeText(target.innerHTML)
    .then(val => {
      const tooltip = new bootstrap.Tooltip(target, {
        container: 'body',
        title: 'コピーしました',
        trigger: 'manual'
      });
      tooltip.show();
      setTimeout(() => {
        tooltip.hide();
      }, 1000);
    }, reason => {
      const tooltip = new bootstrap.Tooltip(target, {
        container: 'body',
        title: 'コピーに失敗しました',
        trigger: 'manual'
      });
      tooltip.show();
      setTimeout(() => {
        tooltip.hide();
      }, 1000);
    });

}