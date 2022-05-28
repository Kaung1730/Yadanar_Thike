<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YadanarThinke Cart</title>
    <link rel="shortcut icon" href="../resource/image/logo.png">
    <!--Customize CSS-->
    <link rel="stylesheet" href="../resource/css/order.css">
    <link rel="stylesheet" href="../resource/css/commonUser.css">
    <!--Bootstrap CSS & JavaScript-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--Fontawsome Link-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>
<body>
    <!--OrderPop Up start-->
    <!-- Button trigger modal -->
    <div class="container">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            order
        </button>

    <!-- Modal -->
    <div class="modal  fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ms-4 ms-lg-0 ms-md-0">
            <div class="modal-content modal-parent">
                <div class="modal-header cart-header ps-lg-5">
                    <h5 class="modal-title ms-lg-5" id="exampleModalLabel">​အော်ဒါနံပါတ် <span><b> 123</b></span></h5>
                    <button type="button" class="btn-close btn-close-dark me-lg-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-0">
                        <div class="col-lg-4">
                            <img src="../resource/image/The-beginning-of-attachment-and-the-end-of-forgiveness-1-300x300 13 copy 2.png" class="img-fluid ps-5 ps-md-0 ps-lg-0" alt=""/>
                        </div>
                        <div class="col-lg-7">
                            <div class="row text-white">
                                <div class="col">
                                    <p class="book-title">ငြိတွယ်ခြင်းတို့ရဲ့အစခွင့်လွှတ်ရခြင်းတို့ရဲ့အဆုံး</p>
                                    <p class="book-text">= 5000 (ကျပ်)</p>
                                </div>
                                <div class="col-6   col-md-12 col-lg-12">
                                    <!--Number of book increase or decrease-->
                                    <div>
                                        <div class="d-flex text-dark  numberContainer text-center align-item-center">
                                            <div class="col-2 me-3 fw-bold pt-1">
                                                ー
                                            </div>
                                            <div class="col-4 me-3 fw-bold pt-1">1</div>
                                            <div class="col-2 fw-bold pt-1">+</div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1  d-none d-md-block d-lg-block">
                            <i class="bi bi-trash3 text-warning"></i>
                            <!-- <i class="fa-solid fa-trash text-white"></i> -->
                        </div>
                        <div class="row mb-1 mt-3 book-text">
                            <div class="col text-white">ပို့​ဆောင်ခ - 1000 (ကျပ်)</div>
                        </div>
                        <div class="row my-1 book-text">
                            <div class="col text-white">စုစု​ပေါင်း - 6000 (ကျပ်)</div>
                        </div>
                        <hr class="my-3">
                    </div>
                    <!--Lower form part-->
                    <div class="lower-form text-white">
                        <div class="form-title order-text">စာအုပ်ကို ပို့​ဆောင်​ပေးနိုင်ရန် ​အောက်ပါ အချက်အလက်များကို မှန်ကန်တိကျစွာ ဖြည့်ပါ</div>
                    </div>
                    
                    <form action="" class="text-white" method="POST">
                                <div class="row my-3 justify-content-center">
                                    <div class="col-lg-10">
                                        <label for="" class="book-text my-2">အမည်</label>
                                        <input type="text" name="username" required class="form-control ps-4 pt-2"/>
                                    </div>
                                </div>
                                <div class="row my-3 justify-content-center">
                                    <div class="col-lg-10 ">
                                    <label for="" class="book-text my-2">ဖုန်းနံပါတ်</label>
                                    <input type="number" name="phone" required class="form-control ps-4 pt-2"/>
                                    </div>
                                </div>
                                <div class="row my-3 justify-content-center">
                                    <div class="col-lg-10">
                                    <label for="" class="book-text my-2">တိုင်း​ဒေသကြီး/ပြည်နယ်</label>
                                    <select name="" id="" class="book-text my-2 px-lg-3 py-1">
                                        <option value="ဧရာဝတီတိုင်းဒေသကြီး">ဧရာဝတီတိုင်းဒေသကြီး</option>
                                        <option value="ပဲခူးတိုင်းဒေသကြီး">ပဲခူးတိုင်းဒေသကြီး</option>
                                        <option value="ချင်းပြည်နယ်">ချင်းပြည်နယ်</option>
                                        <option value="ကချင်ပြည်နယ်">ကချင်ပြည်နယ်</option>
                                        <option value="ကယားပြည်နယ်">ကယားပြည်နယ်</option>
                                        <option value="ကရင်ပြည်နယ်">ကရင်ပြည်နယ်</option>
                                        <option value="	မကွေးတိုင်းဒေသကြီး">မကွေးတိုင်းဒေသကြီး</option>
                                        <option value="	မန္တလေးတိုင်းဒေသကြီး">မန္တလေးတိုင်းဒေသကြီး</option>
                                        <option value="မွန်ပြည်နယ်">မွန်ပြည်နယ်</option>
                                        <option value="နေပြည်တော် ပြည်ထောင်စုနယ်မြေ">နေပြည်တော် ပြည်ထောင်စုနယ်မြေ</option>
                                        <option value="ရခိုင်ပြည်နယ်">ရခိုင်ပြည်နယ်</option>
                                        <option value="စစ်ကိုင်းတိုင်းဒေသကြီး">စစ်ကိုင်းတိုင်းဒေသကြီး</option>
                                        <option value="ရှမ်းပြည်နယ်">ရှမ်းပြည်နယ်</option>
                                        <option value="တနင်္သာရီတိုင်းဒေသကြီး">တနင်္သာရီတိုင်းဒေသကြီး</option>
                                        <option value="ရန်ကုန်တိုင်းဒေသကြီး">ရန်ကုန်တိုင်းဒေသကြီး</option>
                                    </select>
                                </div>
                                </div>
                                <div class="row my-3 justify-content-center">
                                    <div class="col-lg-10">
                                    <label for="" class=" book-text my-2">မြို့</label>
                                    <input type="text" name="town" required class="form-control ps-4 pt-2"/>
                                    </div>
                                </div>
                                <div class="row my-3 justify-content-center">
                                    <div class="col-lg-10">
                                        <label for="" class=" book-text my-2">အိမ်အမှတ်၊ လမ်းအမည်၊ ရပ်ကွက်၊ မြို့နယ်</label>
                                        <input type="text" name="address" class="form-control ps-4 pt-2"/>
                                    </div>
                                </div>
                                <div class="order-text">
                                    အိမ်အ​ရောက်​ငွေ​ချေစနစ်
                                </div>
                                <div class="row ms-lg-3 justify-content-center my-2">
                                    <div class="col-6">စုစု​ပေါင်း</div>
                                    <div class="col-6">6000 (ကျပ်)</div>
                                </div>
                                <hr>
                                <div class="row mt-4 mb-3 justify-content-center">
                                    <div class="col-lg-10 d-flex justify-content-center">
                                        <input type="submit" value="အမှာတင်မည်" class="btn btn-dark pt-2 text-center order-btn rounded-pill text-dark" data-target=""/>
                                    </div>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>