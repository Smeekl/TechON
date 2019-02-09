function Authentication() {
    let email = $('#inputEmail').val();
    let password = $('#inputPassword').val();

    let xhr;
    let _orgAjax = jQuery.ajaxSettings.xhr;
    jQuery.ajaxSettings.xhr = function () {
        xhr = _orgAjax();
        return xhr;
    };

    $.ajax({
        type: "POST",
        url: "/auth",
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
