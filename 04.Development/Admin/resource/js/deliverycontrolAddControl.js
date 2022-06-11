$(document).ready(function(){
    $("select.state").change(function(){
        // let selectState = $(this).children("option:selected").val();
        // window.alert("state is" + selectState);
        
        let postData = {
            "state_id": $(this).children("option:selected").val(),
            "township":JSON.parse($_township)
        }
        console.log(postData);
        for (const key in postData) {
            $("select.township").append(
                `<option value="${postData[key].state_id}">${postData[key].township_name}</option>`
            );
        }
        $.ajax({
            url: "../Controller/deliverycontrolAddController.php",
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