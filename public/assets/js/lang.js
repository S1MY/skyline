$(document).ready(function () {
  let storageLang = localStorage.getItem("lang");
  if (storageLang == null) {
    let userLang = navigator.language || navigator.userLanguage;
    if (userLang.indexOf("-") > -1) {
      let userLangs = userLang.split("-");
      userLang = userLangs[0];
    }
    if (userLang == "ru") {
      storageLang = "ru";
    } else if (userLang == "de") {
      storageLang = "de";
    } else {
      storageLang = "en";
    }

    let url = '/locale/'+storageLang;

    $.ajax({
        type: "GET",
        url: url,
        data: {locale: storageLang},
        success: function (response) {
            console.log(response);
            window.location.reload ();
        },
        error: function (response) {
            console.log(response);
        }
    });

    localStorage.setItem("lang", storageLang);
    location.reload();
  }
  $('.changerItem').click(function (e) {
    e.preventDefault();
    localStorage.removeItem("lang");
    let lang = $(this).text();
    let url = $(this).children().attr('href');
    localStorage.setItem("lang", lang);

    $.ajax({
        type: "GET",
        url: url,
        data: {locale: lang},
        success: function (response) {
            console.log(response);
            window.location.reload ();
        }
    });

  });
  $('.langLink').click(function (e) {
    e.preventDefault();
    localStorage.removeItem("lang");
    let lang = $(this).attr('data-lang');
    let url = $(this).attr('href');
    console.log(url);
    localStorage.setItem("lang", lang);

    $.ajax({
        type: "GET",
        url: url,
        data: {locale: lang},
        success: function (response) {
            console.log(response);
            window.location.reload ();
        }
    });

  });
  if ($('.changerItem').length > 0) {
    $.each($('.changerItem'), function (indexInArray, valueOfElement) {
       if ($(valueOfElement).text() == storageLang) {
        $(valueOfElement).addClass('_active');
       }else{
        $(valueOfElement).removeClass('_active');
       }
    });
  }
  if ($('.langLink').length > 0) {
    $.each($('.langLink'), function (indexInArray, valueOfElement) {
       if ($(valueOfElement).attr('data-lang') == storageLang) {
        $(valueOfElement).addClass('_active');
        $('.lang').html(storageLang);
       }else{
        $(valueOfElement).removeClass('_active');
       }
    });
  }
});
