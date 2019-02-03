function Search (){
let query = $("input").val();
alert(query);
let count = 1;
$.ajax(
    {
        url: '/search/search',
        type: "POST",
        data: {"query":query},
        dataType: "text",
        error: function(){
            alert("Ошибка");
        },
        success: function (count) {
            alert(count);
        }
    });
}