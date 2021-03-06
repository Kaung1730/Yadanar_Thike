<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="shortcut icon" href="../resource/img/logo.png">
    <link rel="stylesheet" href="../resource/css/login.css">
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!--JS & Jquery-->
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/login.js"></script>
    <!--Sweet Alert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid py-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="login_box text-center">
                        <form id="loginform">
                            <h2 class="pt-4 pb-5">အကောင့်ဝင်ရန် </h2>
                            <div class="form-outline pb-5">
                                <input type="text" placeholder="   Admin Name" class="name_box ps-2" name="admin_name" />
                            </div>
                            <div class="form-outline pb-1">
                                <input type="password" placeholder="   Password" class="password_box ps-2" name="admin_password" />
                            </div>
                            <button class="box mb-3" type="submit" id="login-btn">အကောင့်ဝင်ရန်</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>