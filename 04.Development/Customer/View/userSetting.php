<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YadanarThinke Cart</title>
    <link rel="shortcut icon" href="./logo.png">
    <!--Customize CSS-->
    <link rel="stylesheet" href="./userSetting.css">
    <link rel="stylesheet" href="../commonUser.css">
    <!--Bootstrap CSS & JavaScript-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--Fontawsome Link-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>
<body>
    <!--CartPop Up start-->
    <!-- Button trigger modal -->
    <div class="container">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            User Setting
        </button>

        <!-- Modal -->
        <div class="modal  fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content modal-parent">
                    <div class="modal-header cart-header ps-lg-5">
                        <h5 class="modal-title fw-bold" id="exampleModalLabel">ကိုယ်​ရေးအချက်အလက်များ ပြင်ဆင်မည်</h5>
                        <button type="button" class="btn-close btn-close-dark me-lg-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="imgChange">
                            <div class="text-center">
                                <i class="bi bi-person-circle fs-1"></i>
                            </div>
                            <div class="text-center change-img-text">
                                    ပုံ​ပြောင်းမည်
                            </div>
                        </div>
                        <div class="form">
                            <form action="" class="" method="POST">
                                <div class="row my-3 justify-content-center">
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
                                        <input type="number" name="phone" placeholder="Phone Number" class="form-control ps-4 pt-2"/>
                                    </div>
                                </div>
                                <div class="row mt-4 mb-3 justify-content-center">
                                    <div class="col-lg-10 d-flex justify-content-between">
                                        <input type="submit" value="ပြင်ဆင်မည်" class="btn btn-dark pt-2 text-center update-btn" data-target=""/>
                                        <a href="./home.php" class="btn btn-dark pt-2 text-center normal-btn">မပြင်ဆင်ပါ</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</body>
</html>