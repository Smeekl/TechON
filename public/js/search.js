$( document ).ready(function() {
    $('input').on('keyup', delay(function () {
        let query = $('.search-inp').val();
        if (query) {
            $.ajax(
                {
                    url: '/search',
                    type: "POST",
                    data: {"query": query},
                    dataType: "text",
                    error: function () {
                        alert("Ошибка");
                    },
                    success: function (products) {
                        $('.search-res').text('');
                        let result = JSON.parse(products);
                        console.log(result);
                        let html;
                        let htmlContains ='';
                        if (result.length == 0){
                            htmlContains = '<h6>Sorry, we can\'t find anything for you :(</h6>';
                            html = '<div class="position-absolute" id="search-result">\n' + htmlContains + '</div>';
                        } else {
                            let i;
                            console.log(result.length);
                            for (i = 0; i <= result.length - 1; i++) {
                                htmlContains += '<h6 class="search-link"><a href="http://techon/product/'+ result[i].id +'/' + result[i].short_title + '">' + result[i].title + '</a></h6>\n';
                            }
                            html = '<div class="position-absolute" id="search-result">\n' + htmlContains + '</div>';
                        }
                        $('.search-res').prepend(html);
                    }
                });
        } else {
            $('.search-res').html('');
        }
    },500));
});

function Search (){
let query = $("input").text();
$.ajax(
    {
        url: '/search',
        type: "POST",
        data: {"query":query},
        dataType: "text",
        error: function(){
            alert("Ошибка");
        },
        success: function (products) {
            let result = JSON.parse(products);
            console.log(result[0].title);
        }
    });
}

function delay(callback, ms) {
    let timer = 0;
    return function() {
        var context = this, args = arguments;
        clearTimeout(timer);
        timer = setTimeout(function () {
            callback.apply(context, args);
        }, ms || 0);
    };
}
