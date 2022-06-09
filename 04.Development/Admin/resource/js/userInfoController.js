$(document).ready(function(){
    $("#check").change(function(){
        $.ajax({
            URL: "../Controller/userListController.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            cache: false,
            success:function(result){
                console.log("check");
            },
            error:function(error){
                console.log("error");
            }
        })
    })
})