"use strict";

var itemStatus = false;
var filterIndex;

function showFilterLine() {
  $('.filter-line').css('width', "".concat($('.filter__item:eq(0)').offset().left + 20, "px"));
}

showFilterLine();
window.addEventListener('resize', function () {
  showFilterLine();
});

function setActive(event, index) {
  if (!itemStatus) {
    filterIndex = index;
    $('.filter__drop-down').fadeIn({
      duration: 200
    });
    setTimeout(function () {
      for (var i = $('.filter__item-text').length - 1; i > index; i--) {
        $('.filter__item').get(i).classList.remove('active');
      }
    }, 100);

    for (var h = 0; h <= index; h++) {
      $('.filter__item').get(h).classList.add('active');
    }

    itemStatus = true;
  } else {
    itemStatus = false;
    $('.filter__drop-down').fadeOut({
      duration: 200
    });
  }
}

function setItem(event) {
  $('.filter__item-text').eq(filterIndex).html(event.target.innerHTML);
  $('.filter__drop-down').fadeOut({
    duration: 200
  });
  itemStatus = false;
  showFilterLine();
}

function showSelect() {
  $('.select-drop-down').slideToggle({
    duration: 200
  }).toggleClass('select-show');
  $('.header__select').toggleClass('header__input-active');
}

function hideSelect(event) {
  $('.header__select-model').html(event.target.innerHTML);
  $('.select-drop-down').slideToggle({
    duration: 200
  }).toggleClass('select-show');
  $('.header__select').toggleClass('header__input-active');
}

function searchActive() {
  $('.header__search-wrap').addClass('header__input-active');
  $('.header__search-icon').attr('src', 'style/images/icons/search-orang.svg');
  $('.header__search').focus();
}

$('.header__search').blur(function () {
  $('.header__search-wrap').toggleClass('header__input-active');
  $('.header__search-icon').attr('src', 'style/images/icons/search.svg');
});

function changeLang(event) {
  var isActive = event.target.classList.contains('header__language_active');

  if (!isActive && event.target.innerHTML === 'Рус') {
    $('.header__language-ua').removeClass('header__language_active');
    $('.header__language-ru').addClass('header__language_active');
  }

  if (!isActive && event.target.innerHTML === 'Укр') {
    $('.header__language-ru').removeClass('header__language_active');
    $('.header__language-ua').addClass('header__language_active');
  }
}

$('#modal-bg, .modal i.fa-times, .modal .close').click(function () {
  if ($('#video.modal[style="display: block;"]')) {
    var iframe = $('#video.modal').find('iframe');
    var video = iframe.attr("src");
    iframe.attr("src", "");
    iframe.attr("src", video);
  }

  $('#modal-bg, .modal').fadeOut();
  $('body').css('overflow-y', 'auto');
});
$('.to-modal').click(function (event) {
  event.preventDefault();
  var modal = $(this).data('modal');

  if (modal) {
    $('#modal-bg, ' + modal).fadeIn();
    $('body').css('overflow-y', 'hidden');
    $('.input__phone').focus();
  }
});
$("form.ajax").submit(function (e) {
  var form = $(this);
  var url = form.data('action');
  if (url == undefined) url = form.attr('action');

  if (url) {
    $("#divLoading").addClass('show');
    $('#modal-bg, .modal').slideUp();
    $('html, body').css('overflow-y', 'hidden');
    $.ajax({
      type: "POST",
      url: url,
      data: form.serialize(),
      complete: function complete() {
        $("div#divLoading").removeClass('show');
      },
      success: function success(res) {
        var text = '';
        if (res['success']) text = res['success'];else if (res['errors']) text = res['errors'];
        $('#ajaxFormResult p').html(text);
        $("#ajaxFormResult").addClass('show');
        if (form.data('gtm-event')) dataLayer.push({
          'event': form.data('gtm-event')
        });
      },
      error: function error() {
        e.preventDefault();
        $('#ajaxFormResult p').html('РџРѕРјРёР»РєР°! РЎРїСЂРѕР±СѓР№С‚Рµ Р·Р° 2С…РІ С‰Рµ СЂР°Р·');
        $("#ajaxFormResult").addClass('show');
      }
    });
    return false;
  }
});
$("#ajaxFormResult").click(function () {
  $("div#ajaxFormResult").removeClass('show');
  $('#modal-bg, .modal').slideUp();
  $('html').css('overflow-y', 'auto');
});
var phoneOrMail = false;
$('.btn-login').on('click', function () {
  var responseFromserver = false;
  var code = '1111';
  var timer = true;

  if ($('.input__code').val() !== code && $('.input__code').val() !== '') {
    $('.input__code').css('border-color', 'red');
    return;
  }

  if ($('.btn-login').html() === 'Зареєструватись') {
    $('#modal-bg').hide();
    $('#colToUs').hide();
    return;
  }

  if (responseFromserver) {
    $('.btn-login').html('Увійти');
  } else {
    $('.btn-login').html('Приєднатись');
  }

  if ($('.input__code').val() === code && $('.btn-login').html() === 'Увійти') {
    $('#modal-bg').hide();
    $('#colToUs').hide();
    return;
  }

  if ($('.input__code').val() === code && $('.btn-login').html() === 'Приєднатись') {
    if (!phoneOrMail) {
      $('.input__phone').attr('readonly', true).css('background-color', '#e1e1e1');
      $('.input__email').fadeIn();
    } else {
      $('.input__email').attr('readonly', true).css('order', '-1').css('background-color', '#e1e1e1');
      $('.input__phone').fadeIn();
    }

    $('.input__code').hide();
    $('.again-wrap').hide();
    $('.input__name').fadeIn();
    $('.input__secondName').fadeIn();
    $('.btn-login').html('Зареєструватись');
    return;
  }

  $('.input__code').fadeIn();
  $('.login-type').hide();
  $('.again-wrap').fadeIn();

  if (timer) {
    startTimer();
    timer = false;
  }
});
$('.login-type__again').on('click', startTimer);
var againBtnStatus = false;

function startTimer() {
  if (!againBtnStatus) {
    againBtnStatus = true;
    var count = 10;
    $('.login-type__again').removeClass('again-wrap-active');
    var timer = setInterval(function () {
      count--;
      $('.login-type__again').html("\u0412\u0456\u0434\u043F\u0440\u0430\u0432\u0438\u0442\u0438 \u043F\u043E\u0432\u0442\u043E\u0440\u043D\u043E ".concat(count));

      if (count === 0) {
        clearInterval(timer);
        $('.login-type__again').html("\u0412\u0456\u0434\u043F\u0440\u0430\u0432\u0438\u0442\u0438 \u043F\u043E\u0432\u0442\u043E\u0440\u043D\u043E");
        $('.login-type__again').addClass('again-wrap-active');
        againBtnStatus = false;
      }
    }, 1000);
  }
}

$('.input__phone').keyup(function (event) {
  if (event.target.value.length === 16) {
    $('.btn-login').removeClass('btn-disable');
  } else {
    $('.btn-login').addClass('btn-disable');
  }
});
$('.input__email').keyup(function (event) {
  var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var checkMail = event.target.value;

  if (re.test(checkMail.toLowerCase())) {
    $('.btn-login').removeClass('btn-disable');
  } else {
    $('.btn-login').addClass('btn-disable');
  }
});
$('.login-type__email').on('click', function () {
  phoneOrMail = true;
  $('.login-type__phone').toggle();
  $('.login-type__email').toggle();
  $('.input__email').fadeIn();
  $('.input__phone').hide();
});
$('.login-type__phone').on('click', function () {
  phoneOrMail = false;
  $('.login-type__email').toggle();
  $('.login-type__phone').toggle();
  $('.input__email').hide();
  $('.input__phone').fadeIn();
});
$('.phone-icon, .item').on('click', function () {
  $('.header__phone-desctop').fadeToggle();
});
$('.header__call').on('click', function () {
  $('.phone-drop-down-mobile').fadeToggle();
});
$('body').on('click', function (event) {
  if (event.target.classList[0] !== 'phone-icon') {
    $('.header__phone-desctop').fadeOut();
  }

  if (event.target.classList[0] !== 'mobile-phone-icon') {
    $('.phone-drop-down-mobile').fadeOut();
  }
});
Maska.create('.masked');