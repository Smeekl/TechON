$(document).ready(function() {
    $('button[type="submit"]').attr('disabled','disabled');
    $('#password, #confirm_password').on('keyup', function () {
        if (($('#password').val() || $('#confirm_password').val()) == ''){
            $('#message').html('').css('color', 'green');
        } else {
            if ($('#password').val() == $('#confirm_password').val() && $('#inputEmail').val() != '') {
                $('#message').html('Matching').css('color', 'green');
                $('button[type="submit"]').removeAttr('disabled');
            } else
                $('#message').html('Not Matching').css('color', 'red');
        }
    });
});

function AjaxRegister() {
    let password = $('#password').val();
    let email = $('#inputEmail').val();

    let xhr;
    let _orgAjax = jQuery.ajaxSettings.xhr;
    jQuery.ajaxSettings.xhr = function () {
        xhr = _orgAjax();
        return xhr;
    };
    
    $.ajax({
        type: "POST",
        url: "/reg",
        dataType: "text",
        data: {"email": email, "password":password},
        success: function () {
            location.href = xhr.responseURL;
        },
        error: function (message) {
            let result = jQuery.parseJSON(message.responseText);
            alertify.error(result.message);
        }
    });
}

function success(data){
    alert(data.msg);
}