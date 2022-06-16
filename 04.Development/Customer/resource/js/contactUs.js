$(document).ready(function () {

    $("#send-btn").click(function () {
        var name = $("#name").val();
        var phno = $("#phone").val();
        var text = $("#text").val();
        if (text == '' || name == '' || phno == '' ||
            text == '' && name == '' && phno == '' ||
            text =='' && name == ''||
            text == '' && phno == ''||
            name == '' && phno == '') {
            swal({
                text: "​ဖြည့်စွက်ပြောလိုသည့်အကြောင်းအရာပေးပို့ရန်အတွက် အချက်အလက်များကို ပြည့်စုံစွာ ဖြည့်သွင်း​ပေးရန် လိုအပ်ပါသည်။",
                button: { text: 'OK', className: 'commentBtn' },
            });
            return false;
        }
        else {
            let postData = {
                "name": name,
                "phone" : phno,
                "text":  text,
            }
            $.ajax({
                url: "../Controller/contactUsController.php",
                type: "POST",
                data: { send: JSON.stringify(postData) },
                beforeSend: function () {
                    $("#send-btn").attr("disabled", "disabled");
                },
                success: function (res) {
                    $("#send-btn").removeAttr("disabled");
                    if (res == "login") {
                        swal("ဖြည့်စွက်ပြောလိုသည့်အကြောင်းအရာ ​ပေးပို့ရန်အတွက် အ​ကောင့်ဖွင့်ရန် (သို့မဟုတ်) အ​ကောင့်ဝင်ထားရန် လိုအပ်ပါသည်။", {
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
                                        window.location.href = `./login.php`;
                                        break;
                                }
                            });
                    }

                    else if (res = "success") {
                        $('#review-text').val("");
                        swal({
                            title: "ပေးပို့မှု​အောင်မြင်ပါသည်။",
                            text: "ဖြည့်စွက်ပြောလိုသည့်အကြောင်းအရာ ပေးပို့မှု​အောင်မြင်ပါသည်။",
                            icon: "success",
                            buttons: {
                                catch: {
                                    text: "မူလစာမျက်နှာ",
                                    value: "home",
                                    className: 'commentBtn'
                                },
                                defeat: false,
                            },
                        }).then((value) => {
                            switch (value) {
                                case "home":
                                    window.location.href = `./homePage.php`;
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
})