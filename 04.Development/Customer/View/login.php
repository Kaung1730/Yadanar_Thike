<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YadnarThike Login</title>
    <link rel="shortcut icon" href="../logo.png">
    <!--Customize CSS-->
    <link rel="stylesheet" href="../commonUser.css">
    <link rel="stylesheet" href="./login.css">
    <!--Bootstrap CSS & JavaScript-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <!--start login form-->
    <div class="container my-5 d-flex justify-content-center align-item-center">
        <div class="row  g-0 register-container mt-5">
            <div class="col-lg-7">
                <form action="../Controller/insertLoginData.php" class="px-3 px-lg-0 px-md-0" method="POST">
                        <div class="row my-4">
                            <div class="col">
                                <h3 class="text-center register-title">အ​ကောင့်ဝင်ရန်</h3>
                            </div>
                        </div>
                        <div class="row my-4 justify-content-center">
                            <div class="col-lg-10">
                                <input type="text" placeholder="User Name" class="form-control ps-4 pt-3" name="username"/>
                            </div>
                        </div>
                        <div class="row my-4 justify-content-center mb-lg-5">
                            <div class="col-lg-10 mb-lg-5">
                            <input type="password" placeholder="Password" class="form-control ps-4 pt-3" name="password"/>
                            </div>
                        </div>
                        <div class="row mt-5 mb-3 justify-content-center">
                            <div class="mt-lg-2 col-lg-10 d-flex justify-content-between">
                                <a href="../register.php"  class="btn btn-light me-2 me-md-0 me-lg-0 px-4 pt-2 text-center register-btn">အ​ကောင့်ဖွင့်ရန်</a>
                                <input type="submit" value="အ​ကောင့်ဝင်ရန်" class="btn btn-dark px-4 pt-2 text-center login-btn"/>
                            </div>
                        </div>
                </form>
            </div>
            <div class="col-lg-5 p-4 p-md-0 p-lg-0 p-xl-0 d-none d-md-block d-lg-block d-xl-block">
                <img src="../register1.jpg" alt="" class="img-fluid  img-register"/>
            </div>
        </div>
    </div>
</body>
</html>