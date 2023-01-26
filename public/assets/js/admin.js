$(document).ready(function () {
    $('#adminAuth').click(function (e) { 
        e.preventDefault();
        let id = $(this).parent().children('input').val();
        // Делаешь AJAX запрос на пользователя по ID
        // При успешной хуйне выводишь данные
        $('.popup').fadeIn();
        $('.popupItem[data-name="adminAuth"]').fadeIn();
    });
    $('#adminEdit').click(function (e) { 
        e.preventDefault();
        let id = $(this).parent().children('input').val();
        // Делаешь AJAX запрос на пользователя по ID
        // При успешной хуйне выводишь данные
        $('.popup').fadeIn();
        $('.popupItem[data-name="adminEdit"]').fadeIn();
    });
});