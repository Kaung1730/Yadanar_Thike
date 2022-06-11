$(document).ready(function () {
    //star rating
    var STARRATING = 0;
    $("#rateYo").rateYo({
        fullStar: true,
        spacing: "5px",
        onSet: function (rating) {
            $("#rating").val(rating);
            STARRATING = rating;
            sessionStorage.setItem('star', STARRATING);
        },
    });

    $("#comment-btn").click(function () {
        var star = sessionStorage.getItem('star');
        var text = $('#review-text').val();
        if (text == '') {
            swal({
                text: "စာအုပ် ​ဝေဖန်ချက်​ပေးပို့ရန်အတွက် စာသား​ရေးသား​ပေးရန် (သို့မဟုတ်) အ​ကောင့်ဝင်ထားရန် လိုအပ်ပါသည်။",
                button: { text: 'OK', className: 'commentBtn' },
            });
            return false;
        }
        else {
            let postData = {
                "star": star,
                "textComment":text,
            }
            $.ajax({
                url: "../Controller/commentController.php",
                type: "POST",
                data: { send: JSON.stringify(postData) },
                beforeSend: function () {
                    $("#comment-btn").attr("disabled", "disabled");
                    $("#commentForm").css("opacity", "0.5");
                },
                success: function (res) {
                    $("#comment-btn").removeAttr("disabled");
                    $("#commentForm").css("opacity", "1");
                    if (res == "login") {
                        swal("စာအုပ်​ဝေဖန်ချက် ​ပေးပို့ရန်အတွက် အ​ကောင့်ဖွင့်ရန် (သို့မဟုတ်) အ​ကောင့်ဝင်ထားရန် လိုအပ်ပါသည်။", {
                            buttons: {
                                catch: {
                                    text: "အ​ကောင့်ဝင်မည်",
                                    value: "login",
                                    className: 'commentBtn'
                                },
                                defeat: false,
                            },
                        })
                            .then((value) => {
                                switch (value) {
                                    case "login":
                                        window.location.href = `/YadnarThike/04.Development/Customer/View/login.php`;
                                        break;
                                }
                            });
                    }

                    else if (res = "success") {
                        $('#review-text').val("");
                        swal("စာအုပ်​ဝေဖန်ချက်​ပေးပို့မှု​အောင်မြင်ပါသည်။", {
                            buttons: {
                                catch: {
                                    text: "OK",
                                    value: "send",
                                    className: 'commentBtn'
                                },
                                defeat: false,
                            },
                        })
                            .then((value) => {
                                switch (value) {
                                    case "send":
                                    location.reload();
                                    break;
                                }
                            });
                    }
                    console.log(res);
                },
                error: function (err) {
                    console.log(err);
                },
            });
        }

    });
    sessionStorage.setItem('star', 0);
})