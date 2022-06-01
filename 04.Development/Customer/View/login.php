<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YadnarThike Login</title>
    <link rel="shortcut icon" href="../resource/image/logo.png">
    <!--Customize CSS-->
    <link rel="stylesheet" href="../resource/css/commonUser.css">
    <link rel="stylesheet" href="../resource/css/login.css">
    <!--Customize Js-->
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/login.js"></script>
    <!--Bootstrap CSS & JavaScript-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--Sweet Alert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <!--start login form-->
    <div class="container my-5 d-flex justify-content-center align-item-center">
        <div class="row  g-0 register-container mt-5">
            <div class="col-lg-7">
                <form id="loginform" class="px-3 px-lg-0 px-md-3">
                        <div class="row my-4">
                            <div class="col">
                                <h2 class="text-center register-title fw-normal">အ​ကောင့်ဝင်ရန်</h2>
                            </div>
                        </div>
                        <div class="row my-4 justify-content-center">
                            <div class="col-lg-10">
                                <input type="text" placeholder="User Name" class="form-control ps-4 pt-3" name="username"/>
                            </div>
                        </div>
                        <div class="row my-5 justify-content-center">
                            <div class="col-lg-10 mb-lg-5">
                            <input type="password" placeholder="Password" class="form-control ps-4 pt-3" name="password"/>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="mt-lg-2 col-lg-10 mb-4 mb-lg-0 mb-md-0 d-flex justify-content-between">
                                <a href="./register.php"  class="btn btn-light  me-2 me-md-0 me-lg-0 px-4 pt-2 text-center register-btn ">အ​ကောင့်ဖွင့်ရန်</a>
                                <input type="submit" value="အ​ကောင့်ဝင်ရန်" class="btn btn-dark px-4 pt-2 text-center login-btn" id="login-btn"/>
                            </div>
                        </div>
                </form>
            </div>
            <div class="col-lg-5 p-4 p-md-0 p-lg-0 p-xl-0 d-none d-md-block d-lg-block d-xl-block">
                <img src="../resource/image/register1.jpg" alt="" class="img-fluid  img-register"/>
            </div>
        </div>
    </div>
</body>
</html>