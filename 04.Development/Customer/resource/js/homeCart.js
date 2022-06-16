$(document).ready(function(){
    $(".btn-basket").click(function(){
        var book_id = $(this).val();
        let searchCart = {
            "book_id":book_id
        };
        $.ajax({
            url: "../Controller/homeCartController.php",
            type: "POST",
            data: { send: JSON.stringify(searchCart) },
            success: function (res) {
                console.log(res);
                swal("စာအုပ်အား ​စျေးခြင်း​တောင်းထဲသို့ ထည့်ပြီးပါပြီ။ မူလစာမျက်နှာ၏ ​စျေးခြင်း​တောင်းတွင် ကြည့်နိုင်ပါသည်။", {
                    buttons: {
                        catch: {
                            text: "OK",
                            value: "remove",
                            className: 'commentBtn'
                        },
                        defeat: false,
                    },
                    }).then((value) => {
                        switch (value){
                            case "remove":
                            location.reload();
                        }
                    })
            },
            error: function (err) {
                console.log(err)
            }
            
        });
    });
});