$(document).ready(function(){
    $(".order-count").text(localStorage.getItem('cartCount'));
    $("#basket").text(localStorage.getItem('cartCount'));
        $.ajax({
            url: "../Controller/cartNumberController.php",
            type: "POST",
            success: function (res){
                var cartCount = res;
                localStorage.setItem('cartCount', cartCount);
                $(".order-count").text(cartCount);
                $("#basket").text(cartCount);
            },
            error:function(err){
                console.log(err);
            }
        });
    });