
$(document).ready(function () {
    let storageLang = localStorage.getItem("lang");
    $(document).on('click', '._dev', function(e){
        e.preventDefault();
        $('.popup').fadeIn();
        $('.popupItem[data-name="development"]').fadeIn();
    });
    $(document).on('click', '._deactivate', function(e){
        e.preventDefault();
        $('.popup').fadeIn();
        $('.popupItem[data-name="deactivate"]').fadeIn();
    });
    $(document).on('click', '._access', function(e){
        e.preventDefault();
        $('.popup').fadeIn();
        $('.popupItem[data-name="access"]').fadeIn();
    });
    $(document).on('click', '.btnBuy', function(e){
        e.preventDefault();
        let name = $(this).attr('data-name');
        $('.popup').fadeIn();
        if ($('this').hasClass('_disabled')) {
            $('.popupItem[data-name="access"]').fadeIn();
        }else{
            $('.popupItem[data-name="'+name+'"]').fadeIn();
        }
    });
    $(document).on('click', '.popupBg, .responseBtn', function(e){
        e.preventDefault();
        $('.popup').fadeOut();
        $('.popupItem').fadeOut();
        location.reload();
    });
    $(document).on('click', '.currentLang', function(e){
        e.preventDefault();
        if ($('.changer').hasClass('_opened')) {
            $('.changer').removeClass('_opened');
            $('.changer').css('display', 'none');
        }else{
            $('.changer').addClass('_opened');
            $('.changer').css('display', 'flex');
        }
    });
    $(document).on('click', '.changer a', function(e){
        $(this).removeClass('_opened');
        $('.changer').css('display', 'none');
        // обновление страницы после смены языка
    });
    $('.linkCopy').click(function () {
        let copyText = $(this).next().text();
        let copytext2 = document.createElement('input');
        copytext2.value = copyText;
        document.body.appendChild(copytext2);
        copytext2.select();
        document.execCommand("copy");
        document.body.removeChild(copytext2);
        $(this).parent().children('.copy').addClass('_active');
        setTimeout(function () {
            $(".copy").removeClass('_active');
        }, 5000);
    });
    $(document).on('click', '.flowUser ._arrow', function(e){
        e.preventDefault();
        let line;
        if ($(this).hasClass('line2')) {
            line = 'line2';
        }else if($(this).hasClass('line3')){
            line = 'line3';
        }else if($(this).hasClass('line4')){
            line = 'line4';
        }
        if ($(this).hasClass('_active')) {
            $(this).removeClass('_active');
            $(this).parent().parent().find(".flowItem."+line+"").each(function(){
                $(this).slideUp();
            });
        }else{
            $(this).addClass('_active');
            $(this).parent().parent().find(".flowItem."+line+"").each(function(){
                $(this).slideDown();
            });
        }
    });
    $(document).on('click', '.pageTab', function(e){
        e.preventDefault();
        $('.pageTab').removeClass('_active');
        $('.pageTabItem').removeClass('_active');
        $(this).addClass('_active');
        let data = $(this).attr('data-table');
        $('.pageTabItem[data-table="'+data+'"]').addClass('_active');
    });
    $(document).on('click', '.headerTimer', function(e){
        e.preventDefault();
        $('.popup').fadeIn();
        $('.popupItem[data-name="timer"]').fadeIn();
    });
    $(document).on('click', '.selectHeader', function(e){
        e.preventDefault();
        $(this).next().slideToggle();
        $(this).prev().toggleClass('_active');
    });
    $(document).on('click', '.selectItem', function(e){
        e.preventDefault();
        let name = $(this).attr('data-plat');
        $(this).parent().prev().val(name);
        $(this).parent().prev().prev().removeClass('_active');
        $(this).parent().slideUp();
        $('.selectItem').removeClass('_active');
        $(this).addClass('_active');
        if ($(this).parent().parent().attr('data-select') == 'country') {
            $('label').removeClass('_disable');
            $('.contentSelect[data-select="city"]').children('.selectFlow').html('');
            $.getJSON("/assets/"+storageLang+".json",
                function (data) {
                    let items = data[name];
                    for (let index = 0; index < items.length; index++) {
                        $('.contentSelect[data-select="city"]').children('.selectFlow').append('<p class="selectItem" data-plat="'+items[index]+'">'+items[index]+'</p>');
                    }
            });
        }
    });
    // Бургер меню
    $('.burgerBtn').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('openMenu');
        $('.mobileBody').toggleClass('openMenu');
        $('.sidebar').toggleClass('openMenu');
        $('body').toggleClass('openMenu');
    });
    $('.mobileBody').click(function (e) {
        e.preventDefault();
        $(this).removeClass('openMenu');
        $('.burgerBtn').removeClass('openMenu');
        $('.sidebar').removeClass('openMenu');
        $('body').removeClass('openMenu');
    });
    $(document).on('click', '.searchSelect', function(e){
        $(this).next().slideToggle();
    });
    $('.searchSelect').keyup(function (e) {
        let search = $(this).val();
        $(this).next().slideDown();
        $(this).next().find('.selectItem').each(function() {
            let attr = $(this).attr('data-plat');
            if (attr.indexOf(search) != -1) {
                $(this).removeClass('_invisible');
            }else{
                $(this).addClass('_invisible');
            }
       });
    });
    $(document).mouseup(function (e) {
        let select = $(".contentSelect");
        if (!select.is(e.target) &&
            select.has(e.target).length === 0) {
            $('.selectFlow').slideUp();
        }
    });
    $('.avatarImage').change(function (e) {
        e.preventDefault();
        var file = document.getElementById('avatarImage').files[0];
        var reader = new FileReader();
        reader.onload = function (e) {
            src = e.target.result;
            $('.settingsAvatar').css('background-image', 'url(' + src + ')');
        }
        reader.readAsDataURL(file);
    });
    if ($('.contentSelect[data-select="country"]').length > 0) {
        $.getJSON("/assets/"+storageLang+".json",
            function (data) {
                let items = Object.keys(data);
                let countries = Object.entries(items);
                for (let index = 0; index < countries.length; index++) {
                    $('.contentSelect[data-select="country"]').children('.selectFlow').append('<p class="selectItem" data-plat="'+countries[index][1]+'">'+countries[index][1]+'</p>');
                }
        });
    }
    // Обратный отсчёт
    if( !$('.headerTimer').hasClass('disabled') ){
        setInterval(() => {

            let time = $('.headerTimer span').text();

            let hours = time.split(":")[0];
            let minutes = time.split(":")[1];
            let seconds = time.split(":")[2];

            if( seconds > 0 ){
                seconds--;
            }else{
                seconds = 59;
                if( minutes > 0 ){
                    minutes--;
                    if( minutes < 10 ){
                        minutes = '0' + minutes;
                    }
                }else{
                    minutes = 59;
                    hours--;
                }
            }

            if( seconds < 10 ){
                seconds = '0' + seconds;
            }

            if( minutes < 10 && minutes.length == 1 ){
                minutes = '0' + minutes;
            }

            $('.headerTimer span').text(hours+':'+minutes+':'+seconds);

            $('.popupItem ._time').text(hours+':'+minutes+':'+seconds);

        }, 1000);
    }
    $('.confirmEmail').click(function(e){
        e.preventDefault();
        $('#confirmEmailNotic').slideUp();
        $('#activator').slideDown();
    });
});
