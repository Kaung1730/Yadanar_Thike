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
                        title: "Duplicate!",
                        text: "User Name and Password is duplicate",
                        icon: "warning",
                        button: {text:'OK',className:'sweet-warning'},
                    });
                } else if (res == "success") {
                    swal({
                        title: "Success!",
                        text: "Your account is created successfully! Press Login",
                        icon: "success",
                        button: "Login",
                    }).then((value) => {
                        window.location.href = `/FPj/04.Development/Customer/View/login.php`;
                    });
                } else if (res == "password") {
                    swal({
                        title: "Password!",
                        text: "Confirm Password and Given Password are not same",
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
