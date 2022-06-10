$(document).ready(function(){
    $("select.state").change(function(){
        // let selectState = $(this).children("option:selected").val();
        // window.alert("state is" + selectState);
        let postData = {
            "state_id": $(this).children("option:selected").val(),
        }
        $.ajax({
            url: "../Controller/delivarycontrolAddController.php",
            type: "POST",
            data: { send: JSON.stringify(postData) },
            success: function (result) {
                console.log("check");
            },
            error: function (error) {
                console.log("error");
            }
        })
    })
})