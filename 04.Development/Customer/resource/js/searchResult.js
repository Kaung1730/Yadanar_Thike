$(document).ready(function(){
    $(".search-cart").click(function(){
        swal({
            text: "စာအုပ်အား ​စျေးခြင်း​တောင်းထဲသို့ ထည့်ပြီးပါပြီ။ မူလစာမျက်နှာ၏ ​စျေးခြင်း​တောင်းတွင် ကြည့်နိုင်ပါသည်။",
            button: {text:'OK',className:'commentBtn'},
        });
        var book_id = $(".search-cart").val();
        let searchCart = {
            "book_id":book_id
        };
        $.ajax({
            url: "../Controller/searchCartController.php",
            type: "POST",
            data: { send: JSON.stringify(searchCart) },
            success: function (res) {
                var data = $.parseJSON(res);
                console.log(data);
            },
            error: function (err) {
                console.log(err)
            }
            
        });
    });
});