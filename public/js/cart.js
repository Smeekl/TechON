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
        let amount = (quantity * Math.round(price)/100);
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
            alert('Что-то пошло не так');
        },
        success: function (product) {
            let prod = JSON.parse(product);
            let html = '<div class="row cart-product justify-content-between">'+
                '<div class="col-2 product-img">'+
                '<div class="row">'+
                '<div class="col-sm">'+
                '<div class="col-sm">'+
                '<div class="row d-inline">'+
                '<div class="col">'+
                '<div class="cart-img">'+
                '<img width="120px" height="120px" src="'+prod[0].image+'">'+
                '</div> </div> </div> </div> </div> </div> </div>'+
                '<div class="col-10 product-about"> <div class="row d-inline">'+
                '<div class="col mb-4"> <div class="col">'+
                '<div class="col-sm product-name text-left">' +
                '<a class="cart-product" href="http://techon/product/'+prod[0].id+'/'+prod[0].short_title+'">'+prod[0].title+'</a>' +
                '</div></div></div>'+
                '<div class="row ml-1">'+
                '<div class="col"> ' +
                '<div class="col">'+
                '<div class="col-sm"><strong class="about-price">'+prod[0].price/100+'$</strong>' +
                '</div></div></div>'+
            '<div class="col d-flex">' +
                '</div> </div>'+
                '<div class="col ml-3">'+
                '<div class="col"><span class="seller">Seller:</span><br>'+
            '<img width="100px" height="40px" src="../../../public/img/walmart.png" alt=""></div>'+
                '</div> </div> </div> </div>';
            console.log(html);
            $('.modal-body').prepend(html);
            $('#qt-value').text(+$('#qt-value').text()+1);
        }
    });
}

function deleteFromCart(product_id) {
    $.ajax({
        url: '/deleteFromCart',
        type: "POST",
        data: {"product_id":product_id},
        dataType: "text",
        error: function () {
    },
        success: function () {
            swal({
                title: "Are you sure?",
                text: "You will delete item from cart!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        location.reload();
                    }
                });
        }
    });
}

function createOrder() {
    let prods = [];
    let quantity = null;
    let id = 0;
    let count = 0;
    $(".prices").each(function () {
        let products = {};
        products.id = [];
        products.quantity = [];
        id = $(this).find('.product_id').text();
        quantity = $(this).find('.inputGrrr :selected').val();
        products.id = parseInt(id);
        products.quantity = parseInt(quantity);
        prods[count] = products;
        count++;
    });
    let prod = JSON.stringify(prods);
    $.ajax({
        url: '/createOrder',
        type: "POST",
        data: {"products":prod},
        dataType: "text",
        error: function () {
        },
        success: function () {
            window.location.href = "http://techon/orders";
        }
    });
}

function goToCart() {
    window.location.href = "http://techon/cart";
}