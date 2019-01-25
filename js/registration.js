$(document).ready(function() {
    $('button[type="submit"]').attr('disabled','disabled');
    $('#password, #confirm_password').on('keyup', function () {
        if (($('#password').val() || $('#confirm_password').val()) == ''){
            $('#message').html('').css('color', 'green');
        } else {
            if ($('#password').val() == $('#confirm_password').val()) {
                $('#message').html('Matching').css('color', 'green');
                $('button[type="submit"]').removeAttr('disabled');
            } else
                $('#message').html('Not Matching').css('color', 'red');
        }
    });
});