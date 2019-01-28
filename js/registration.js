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
    $.ajax(
        {
            url: '/',
            type: "POST",
            data: {email:email, password:password},
            dataType: "json",
            error: function(data){
                alert(data.msg);
            },
            success: success
        }
    );
}

function success(data){
    alert(data.msg);
}