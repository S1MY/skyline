$(document).ready(function () {
    $(".burgerBtn").click(function (e) {
      e.preventDefault();
      $(".burgerBtn").toggleClass("_open");
      $(".mobileMenu").toggleClass("_open");
    });
    $('.popupBtn').click(function (e) {
      e.preventDefault();
      let name = $(this).attr('data-name');
      $('.popupItem').hide();
      $('.popup').fadeIn();
      $('.popupItem[data-name="'+name+'"]').fadeIn();
    });
    $('.popupBg, .popupCross').click(function (e) {
      e.preventDefault();
      $('.popup').fadeOut();
      $('.popupItem').fadeOut();
    });
    // FAQ
    $('.answerHeader').click(function (e) {
        e.preventDefault();
        $(this).children('.answerIcon').toggleClass('active');
        $(this).next().slideToggle();
    });
    $(document).on('click', '.popupBg, .responseBtn', function(e){
        e.preventDefault();
        if( !$(this).hasClass('confirmEmail') ){
            $('.popup').fadeOut();
            $('.popupItem').fadeOut();
            location.reload();
        }
    });
});
