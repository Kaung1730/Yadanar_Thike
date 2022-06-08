$(document).ready(function(){
    var data;
    $("#addToCart").click(function(){
        var book_id = $(this).val();
        var quantity = $(".qty").val();
        alert(book_id);
        let postData = {
            "book_id":book_id,
            "qty": quantity,
        }
        $.ajax({
            url: "../Controller/addToCartController.php",
            type: "POST",
            data:{send: JSON.stringify(postData)},
            success: function (res){
                data = $.parseJSON(res);
                // var data = ;
                // var test = data[0]
                // for (const key in test) {
                //         const element = test[key];
                //         console.log(element);
                        
                // }
                console.log(data);
            },
            error:function(err){
                console.log(err);
            }
        });
    })
});
