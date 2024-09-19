window.addEventListener('load', function () {
    debugger;
    //要素を取得
    const modals = document.querySelectorAll('.js-modal'),
        opens = document.querySelectorAll('.js-modal-open'),
        closes = document.querySelectorAll('.js-modal-close');

    //「開くボタン」をクリックしてモーダルを開く
    function modalOpen() {
        modals.classList.add('is-active');
    }
    // open.addEventListener('click', modalOpen);

    //「閉じるボタン」をクリックしてモーダルを閉じる
    function modalClose() {
        modals.classList.remove('is-active');
    }
    // close.addEventListener('click', modalClose);

    //「モーダルの外側」をクリックしてモーダルを閉じる
    function modalOut(e) {
        if (e.target == modals) {
            modals.classList.remove('is-active');
        }
    }
    for (var i = 0; i < opens.length; i++) {
        (function (n) {
            opens[n].addEventListener('click', function () {
                modals[n].classList.add('is-active');
            }, false);
            closes[n].addEventListener('click', function () {
                  modals[n].classList.remove('is-active');
            }, false);
        })(i);
    }
    addEventListener('click', modalOut);
});