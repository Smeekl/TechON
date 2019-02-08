function Authentication() {
    let email = $('#inputEmail').val();
    let password = $('#inputPassword').val();
    $.ajax({
        type: "POST",
        url: "/auth",
        dataType: "json",
        data: {"email": email, "password":password},
        success: function (message) {
            console.log(message);
        },
        error: function (message) {
            console.log(message);
        }
    });
}
