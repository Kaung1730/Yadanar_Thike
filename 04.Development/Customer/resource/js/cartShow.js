$(document).ready(function(){
    // $(window).on("load", function(){
    //     if($("#basket").val() == 0){
    //         $(".hide-order").hide();
    //     }
    //     else{
    //         $(".hide-order").show();
    //     }
    // })
    $(".cart").click(function(){

        $.ajax({
            url: "../Controller/cartItemShow.php",
            type: "POST",
            success: function (res){
            console.log(res);
            },
            error:function(err){
                console.log(err);
            }
        });
        });

});
