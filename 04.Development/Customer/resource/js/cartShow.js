$(document).ready(function(){
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
