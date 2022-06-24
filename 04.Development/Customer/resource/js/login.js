$(document).ready(function () {
    $("#loginform").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../Controller/loginController.php",
            data: new FormData(this),
            contentType: false,
            processData: false,
            cache: false,
            beforeSend: function () {
                $("#login-btn").attr("disabled", "disabled");
                $("#loginform").css("opacity", "0.5");
            },
            success: function (res) {
                $("#login-btn").removeAttr("disabled");
                $("#loginform").css("opacity", "1");
                if (res == "wrong") {
                    swal({
                        title: "မှားယွင်း​နေပါသည်",
                        text: "User Name (သို့မဟုတ်) လျို့ဝှက် နံပါတ် မှားယွင်း​နေပါသည်။",
                        icon: "warning",
                        button: {text:'OK',className:'sweet-warning'},
                    });
                }
                else if(res == "success"){
                    window.location.href = `./homePage.php`;
                }
                else{
                    swal("လူကြီးမင်း၏ အ​ကောင့်အား လတ်တ​လောတွင် အသုံးပြု၍မရနိုင်ပါ။", {
                        buttons: {
                            catch: {
                                text: "မူလစာမျက်နှာ",
                                value: "home",
                                className: 'commentBtn'
                            },
                            defeat: false,
                        },
                    })
                        .then((value) => {
                            switch (value) {
                                case "home":
                                    window.location.href = `./HomePage.php`;
                                    break;
                            }
                        });
                }
            },
            error: function (err) {
                alert("Error");
            },
        });
    });
});
