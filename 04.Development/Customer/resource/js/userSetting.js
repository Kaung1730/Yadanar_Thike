$(document).ready(function(){
    // $("#userSettingForm").on("submit", function(e){
    //     e.preventDefault();
    //     $.ajax({
    //         type: "POST",
    //         url: "../Controller/userSettingUpdate.php",
    //         data: new FormData(this),
    //         contentType: false,
    //         processData: false,
    //         cache: true,
    //         beforeSend: function () {
    //             $("#update-btn").attr("disabled", "disabled");
    //             $("#userSettingUpdate").css("opacity", "0.5");
    //         },
    //         success: function (res) {
    //             $("#update-btn").removeAttr("disabled");
    //             $("##userSettingUpdate").css("opacity", "1");
    //             alert(res);
    //         },
    //         error: function (err) {
    //             alert("Error");
    //         }
    //     })
    // })
    // $("#update-btn").click(function(){
    //     var userName = $(".username").val();
    //     var email = $('.email').val();
    //     var password = $('.password').val();
    //     var phone = $(".phone").val();

    //     let postData = {
    //         "userName": userName,
    //         "email" : email,
    //         "password" : password,
    //         "phone" : phone
    //     }
    //     $.ajax({
    //         url: "../Controller/userSettingUpdate.php",
    //         type: "POST",
    //         data:{send: JSON.stringify(postData)},
    //         success: function (res){
    //             console.log(res);
    //         },
    //         error:function(err){
    //             console.log(err);
    //         }
    //     });
    // })
})