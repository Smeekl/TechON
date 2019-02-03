$(document).ready(function(){
    update();
    count = 1
    $('.inputGrrr').change(function(){
        update();
    });
});

function update() {
    let sum = 0;
    let quantity = 0;
    $(".prices").each(function () {
        let price = $(this).find('.about-price').attr('data-price');
        quantity = $(this).find('.inputGrrr :selected').val();
        let amount = (quantity * price/100);
        sum += amount;
        $(this).find('.total-price').text(Math.round(amount).toFixed(2));
        $('.total').text(Math.round(sum).toFixed(2));
    })
}

function addToCart(product_id) {
    $.ajax({
        url: '/addToCart',
        type: "POST",
        data: {"product_id":product_id},
        dataType: "text",
        error: function () {
        },
        success: function () {
            alert('Ваш товар добавлен в корзину!')
        }
    });
}
