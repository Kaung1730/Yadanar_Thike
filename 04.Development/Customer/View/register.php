<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>အ​ကောင့်အသစ်ဖန်တီးရန်</title>
    <?php require "../Controller/iconController.php"; ?>
    <link rel="shortcut icon" href="../../Admin/resource/image/<?php echo $iconResult[0]['icon']; ?>" >
    <!--Customize CSS-->
    <link rel="stylesheet" href="../resource/css/commonUser.css">
    <link rel="stylesheet" href="../resource/css/register.css">
    <!--Bootstrap CSS & JavaScript-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--JQuery & Customize JS file-->
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/register.js"></script>
    <!--Sweet Alert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <!--start register form-->
    <div class="container my-5 d-flex justify-content-center align-item-center">
        <div class="row  g-0 register-container mt-lg-5">
            <div class="col-lg-5">
                <img src="../resource/image/register1.jpg" alt="" class="img-fluid  img-register"/>
            </div>
            <div class="col-lg-7 p-4 p-md-3 p-lg-0 p-xl-0">
                <form id="register" enctype="multipart/form-data">
                    <div class="row mt-4">
                            <div class="col">
                                <h2 class="text-center text-white fw-normal">အ​ကောင့်ဖွင့်ရန်</h2>
                            </div>
                        </div>
                        <div class="row mb-3 mt-2 justify-content-center">
                            <div class="col-lg-10">
                                <input type="text" name="username" required placeholder="User Name (English Only)" class="form-control ps-4 pt-2"/>
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                            <input type="email" name="email" required placeholder="Email Address" class="form-control ps-4 pt-2"/>
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                            <input type="password"name="password" required placeholder="Password" class="form-control ps-4 pt-2"/>
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                            <input type="password" name="c_password" required placeholder="Confirm Password" class="form-control ps-4 pt-2"/>
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                            <input type="number" name="phone" placeholder="Phone Number" class="form-control ps-4 pt-2"/>
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10 d-flex justify-content-between">
                                <input type="submit" value="အ​ကောင့်ဖွင့်ရန်" class="btn btn-dark px-4 pt-2 text-center register-btn" id="register-btn"/>
                                <a href="./login.php" class="btn btn-light px-4 pt-2 text-center login-btn">အ​ကောင့်ဝင်ရန်</a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>