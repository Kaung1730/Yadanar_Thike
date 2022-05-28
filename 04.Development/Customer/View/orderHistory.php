<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YadanarThinke Cart</title>
    <link rel="shortcut icon" href="../resource/image/logo.png">
    <!--Customize CSS-->
    <link rel="stylesheet" href="../resource/css/orderHistory.css">
    <link rel="stylesheet" href="../resource/css/commonUser.css">
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
            Order History
        </button>

    <!-- Popup order page -->
    <div class="modal  fade ms-3 ms-lg-0 ms-md-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal-parent">
                <div class="modal-header cart-header ps-lg-5">
                    <h5 class="modal-title ms-lg-5" id="exampleModalLabel">မှာယူခဲ့သည့်စာရင်းများ</h5>
                    <button type="button" class="btn-close btn-close-dark me-lg-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-white">
                    
                    <div class="row">
                        <div class="col-8">
                            ​အော်ဒါနံပါတ် - <span>123</span>
                        </div>
                        <div class="col-4 book-text">May 21, 2022</div>
                    </div>

                    <div class="row">
                        <div class="col-8 book-text mt-2">
                            <div class="my-2">ဝယ်ယူခဲ့သည့်စာအုပ်</div>
                            <div class="my-2 small-text">ငြိတွယ်ခြင်းတို့ရဲ့အစခွင့်လွှတ်ရခြင်းတို့ရဲ့အဆုံး</div>
                            <div class="my-2 small-text">အိမ်အ​ရောက်​ငွေ​ချေစနစ်</div>
                        </div>
                        <div class="col-4 mt-2"> 
                            <img src="../resource/image/The-beginning-of-attachment-and-the-end-of-forgiveness-1-300x300 13 copy 2.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-10 book-text">
                            <div>ပို့​ဆောင်ခ - <span>1000</span> (ကျပ်)</div>
                            <div>စုစု​ပေါင်း - <span>6000</span> (ကျပ်)</div>
                        </div>
                        <div class="col-2">
                            <i class="bi bi-trash3 text-warning"></i>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>