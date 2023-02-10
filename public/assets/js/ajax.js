$(document).ready(function () {

    $('#register, #login, #updateSettings').submit(function(e){
        e.preventDefault();
        let ajaxUrl = $(this).attr('action');
        let formData = $(this).serialize();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            url: ajaxUrl,
            method: 'post',
            data: formData,
            success: function(result){
                // console.log(result);
                if( result.register || result.auth || result.updated ){
                    if( result.updated ){
                        $('.popup').fadeIn();
                        $('.popupItem[data-name="success"]').fadeIn();
                    }else{
                        if( result.error ){
                            $('#register input[name="name"]').addClass('alert-danger');
                            $('#register input[name="name"]').before('<p class="alert alert-danger">'+result.message+'</p>');
                        }else{
                            window.location.href = result.redirect;
                        }
                    }
                }
            },
            error: function (data) {

                console.log(data);

                $('p.alert-danger').remove();
                $('input').removeClass('alert-danger');
                $.each(data.responseJSON.errors, function(key,value) {
                    $('input[name="'+key+'"]').addClass('alert-danger');
                    $('input[name="'+key+'"]').before('<p class="alert alert-danger">'+value+'</p>');
                });
            }
        });
    });

    $('#changePassword').submit(function(e){
        e.preventDefault();
        let ajaxUrl = $(this).attr('action');
        let formData = $(this).serialize();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            url: ajaxUrl,
            method: 'post',
            data: formData,
            success: function(result){
                console.log(result);

                if( result.error == 1 ){
                    $('.popup').fadeIn();
                    $('.popupItem[data-name="error"] .responseText').text(result.message);
                    $('.popupItem[data-name="error"]').fadeIn();
                }else{
                    $('.popup').fadeIn();
                    $('.popupItem[data-name="success"]').fadeIn();
                }
            },
            error: function (data) {
                console.log(data);
            }
        });
    });

    $('#deposite').submit(function(e){
        e.preventDefault();
        let ajaxUrl = $(this).attr('action');
        let formData = $(this).serialize();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            url: ajaxUrl,
            method: 'post',
            data: formData,
            success: function(result){
                console.log(result);

                if( result.error == 1 ){
                    $('.popup').fadeIn();
                    $('.popupItem[data-name="error"] .responseText').text(result.message);
                    $('.popupItem[data-name="error"]').fadeIn();
                }else{
                    $('.popup').fadeIn();
                    $('.popupItem[data-name="success"] .responseText').text(result.message);
                    $('.popupItem[data-name="success"]').fadeIn();
                }
            },
            error: function (data) {
                console.log(data);
            }
        });
    });

    $('.btnPopup.buy').click(function(e){
        e.preventDefault();
        let ajaxUrl = $(this).attr('data-action');
        let pacage = $(this).attr('data-name');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            url: ajaxUrl,
            method: 'post',
            data: {pacage: pacage},
            success: function(result){
                console.log(result);

                $('.popupItem').hide();

                if( result.error == 1 ){
                    $('.popup').fadeIn();
                    $('.popupItem[data-name="error"] .responseText').text(result.message);
                    $('.popupItem[data-name="error"]').fadeIn();
                }else{
                    $('.popup').fadeIn();
                    $('.popupItem[data-name="success"] .responseText').text(result.message);
                    $('.popupItem[data-name="success"]').fadeIn();
                }
            },
            error: function (data) {
                console.log(data);
            }
        });

    });

    $('#setAvatar').submit(function(e){
        e.preventDefault();
        let ajaxurl = $(this).attr('action');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        var files = $('#avatarImage')[0].files;

        if(files.length > 0){

            var fd = new FormData();

            fd.append('file',files[0]);

            $.ajax({
                url: ajaxurl,
                data: fd,
                type: 'POST',
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    location.reload();
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }else{
            console.log('Файл не загружен');
        }
    });

    $('.confirmEmail').click(function(e){
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        let ajaxUrl = $(this).attr('data-url');
        let email = $(this).attr('data-email');

        $.ajax({
            url: ajaxUrl,
            method: 'post',
            data: {email: email},
            success: function(result){
                console.log(result);
            },
            error: function (data) {
                console.log(data);
            }
        });
    });

    $('#messageSend').submit(function(e){
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        let ajaxUrl = $(this).attr('action');
        let data = $(this).serialize();
        // let email = $(this).attr('data-email');

        $.ajax({
            url: ajaxUrl,
            method: 'post',
            data: data,
            success: function(result){
                console.log(result);
            },
            error: function (data) {
                console.log(data);
            }
        });
    })

    $('#activator').submit(function(e){
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        let ajaxUrl = $(this).attr('action');
        let data = $(this).serialize();
        // let email = $(this).attr('data-email');

        $.ajax({
            url: ajaxUrl,
            method: 'post',
            data: data,
            success: function(result){
                console.log(result);

                if( result.error == 1 ){
                    $('.erorrMsg').text(result.message)
                    $('.formInput').addClass('error');
                }else{
                    location.reload();
                }

            },
            error: function (data) {
                console.log(data);
            }
        });
    })

    $('.pdfCreate').click(function(e){
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        let ajaxUrl = $(this).attr('data-action');
        let from = $(this).attr('data-where');

        $.ajax({
            url: ajaxUrl,
            method: 'post',
            data: {from: from},
            success: function(response){
                const link = document.createElement('a');
                link.href = response;
                link.download = "MySkyline Company - Operation Story.pdf";
                link.click();
                document.body.removeChild(link);
            },
            error: function (data) {
                console.log(data);
            }
        });

    })

    $('#sendMessageFromAdmin').submit(function(e){
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        let ajaxUrl = $(this).attr('action');
        let data = $(this).serialize();

        $.ajax({
            url: ajaxUrl,
            method: 'post',
            data: data,
            success: function(result){
                console.log(result);

                // if( result.error == 1 ){
                //     $('.erorrMsg').text(result.message)
                //     $('.formInput').addClass('error');
                // }else{
                //     location.reload();
                // }

            },
            error: function (result) {
                console.log(result);
            }
        });
    })

    $('#adminAuth').click(function(e){
        e.preventDefault();
        $('#typeInfoGet').val('auth');
        $('#getInfoForm').submit();
    })

    $('#adminEdit').click(function(e){
        e.preventDefault();
        $('#typeInfoGet').val('edit');
        $('#getInfoForm').submit();
    })
    $('#getInfoForm').submit(function(e){
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        let ajaxUrl = $(this).attr('action');
        let data = $(this).serialize();

        $.ajax({
            url: ajaxUrl,
            method: 'post',
            data: data,
            success: function(result){
                console.log(result);
                if( result['email'] ){
                    if( result['avatar'] != null ){
                        $('.popupItem[data-name="adminAuth"] .popupAvatar').css({'background': 'url('+ result['avatar'] +')'});
                    }else{
                        $('.popupItem[data-name="adminAuth"] .popupAvatar').css({'background': 'url(/image/users/user.png)'});
                    }

                    $('.popupItem[data-name="adminAuth"] .userPopupName').text(result['name']+' '+result['surname']);
                    $('.popupItem[data-name="adminAuth"] .userPopupId').text('ID: '+result['user_show_id']);
                    $('.popupItem[data-name="adminAuth"] .userPopupEmail').text('Email: '+result['email']);

                    $('.popupItem[data-name="adminAuth"] #authBtn').attr('href', 'https://myskylinecompany.com/admin/show/'+result['user_show_id'])
                }else{
                    if( result['avatar'] != null ){
                        $('.popupItem[data-name="adminEdit"] .popupAvatar').css({'background': 'url('+ result['avatar'] +')'});
                    }else{
                        $('.popupItem[data-name="adminEdit"] .popupAvatar').css({'background': 'url(/image/users/user.png)'});
                    }

                    $('.popupItem[data-name="adminEdit"] .userPopupName').text(result['name']+' '+result['surname']);
                    $('.popupItem[data-name="adminEdit"] #userId').val(result['user_id']);
                    $('.popupItem[data-name="adminEdit"] .userPopupSponsor').text('Реферер: 00000');
                }

            },
            error: function (result) {
                console.log(result);
            }
        });
    })

    $('#changeSponsorForm').submit(function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        let ajaxUrl = $(this).attr('action');
        let data = $(this).serialize();

        $.ajax({
            url: ajaxUrl,
            method: 'post',
            data: data,
            success: function(result){
                console.log(result);

                $('.popup .popupItem[data-name="adminEdit"]').hide();

                if( result.error == 1 ){
                    $('.popup .popupItem[data-name="error"]').fadeIn();
                    $('.popupItem[data-name="error"] .responseText').text(result.message);
                    $('.popupItem[data-name="error"]').fadeIn();
                }else{
                    $('.popup .popupItem[data-name="success"]').fadeIn();
                    $('.popupItem[data-name="success"] .responseText').text(result.message);
                    $('.popupItem[data-name="success"]').fadeIn();
                }

            },
            error: function (result) {
                console.log(result);
            }
        });
    })
});
