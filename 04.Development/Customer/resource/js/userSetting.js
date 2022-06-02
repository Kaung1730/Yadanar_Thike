$(document).ready(function(){
    $("#userSettingUpdate").on("submit", function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../Controller/userSettingUpdate.php",
            data: new FormData(this),
            contentType: false,
            processData: false,
            cache: false,
            beforeSend: function () {
                $("#update-btn").attr("disabled", "disabled");
                $("#userSettingUpdate").css("opacity", "0.5");
            },
            success: function (res) {
                $("#update-btn").removeAttr("disabled");
                $("##userSettingUpdate").css("opacity", "1");
            },
            error: function (err) {
                alert("Error");
            }
        })
    })
})