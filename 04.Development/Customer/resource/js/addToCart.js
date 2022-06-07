$(document).ready(function(){
    
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
                console.log(res);
            },
            error:function(err){
                console.log(err);
            }
        });
    })
});
