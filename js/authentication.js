$("#authForm").submit(function () {
    let str = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "/authentication",
        data: str,
        success: function (html) {
            console.log(123);
        }
    });
    return false;
});


function UserRegististration() {
    let firstName = $('#inputFirstName').val();
    let secondName = $('#inputSecondName').val();
    let email = $('#inputEmail').val();
    let password = $('#inputPassword').val();

    $.ajax({
        url: '/authentication/register',
        type: "POST",
        data: {"email": email, "password": password, "firstName": firstName, "secondName": secondName},
        dataType: "text",
        error: function () {
            alert('U have some error');
        },

        success: success
    })
}

function success() {
    alert('LogIn is success');
}
