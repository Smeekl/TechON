$(document).ready(function(){
    $('#inputGroupSelect01').change(function(){
        alert($('#inputGroupSelect01 :selected').text());
        alert($('.about-price').text());
    });
});

