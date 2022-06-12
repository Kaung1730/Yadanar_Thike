$(document).ready(function(){
    $("select.state").click(function(){
        // let selectState = $(this).children("option:selected").val();
        // window.alert("state is" + selectState);
        
        let state = {
            "state_id": $(this).children("option:selected").val(),
        }
        console.log(state);
        $.ajax({
            url: "../Controller/deliverytownshipController.php",
            type: "POST",
            data: { send: JSON.stringify(state) },
            success: function (result) {
                $("select.township").empty();
                let township = $.parseJSON(result);
                // let township = JSON.parse(result);
                township.forEach(element => {
                    $("select.township").append(
                        `<option value="${element.township_id}">${element.township_name}</option>`
                    );
                });
                console.log("check");
            },
            error: function (error) {
                console.log("error");
            }
        })
    })
})