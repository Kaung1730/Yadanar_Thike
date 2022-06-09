$(document).ready(function(){
    
    $(".check").change(function(){
        // console.log($(this).next(".user_id").val());
        let postData = {
            "check": ($(this).prop("checked")) ? 1:0,
            "user_id": $(this).next(".user_id").val()
        }
        $.ajax({
            url: "../Controller/userListController.php",
            type: "POST",
            data: { send: JSON.stringify(postData) },
            success:function(result){
                console.log("check");
            },
            error:function(error){
                console.log("error");
            }
        })
    })
})