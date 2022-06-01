$(document).ready(function () {
    $("#register").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../Controller/registerController.php",
            data: new FormData(this),
            contentType: false,
            processData: false,
            cache: false,
            beforeSend: function () {
                $("#register-btn").attr("disabled", "disabled");
                $("#register").css("opacity", "0.5");
            },
            success: function (res) {
                $("#register-btn").removeAttr("disabled");
                $("#register").css("opacity", "1");
                if (res == "duplicate") {
                    swal({
                        title: "အ​ကောင့်ထပ်​နေပါသည်!",
                        text: "User Name နှင့် Email မှာ အသုံးပြုပြီးသား ဖြစ်​နေပါသည်",
                        icon: "warning",
                        button: {text:'OK',className:'sweet-warning'},
                    });
                } else if (res == "success") {
                    swal({
                        title: "ဖန်တီးမှု ​အောင်မြင်ပါသည်!",
                        text: "အ​ကောင့်အသစ် ဖန်တီးမှု ​အောင်မြင်ပါသည်",
                        icon: "success",
                        button: "အ​ကောင့်၀င်ရန်",
                    }).then((value) => {
                        window.location.href = `/YadnarThike/04.Development/Customer/View/login.php`;
                    });
                } else if (res == "password") {
                    swal({
                        title: "လျို့ဝှက် နံပါတ် မတူညီပါ!",
                        text: "လျို့ဝှက်နံပါတ် နှင့် အတည်ပြု လျို့ဝှက် နံပါတ် မတူညီပါ",
                        icon: "warning",
                        button: {text:'OK',className:'sweet-warning'},
                    });
                }
            },
            error: function (err) {
                alert("Error");
            },
        });
    });
});
