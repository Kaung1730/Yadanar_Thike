<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resource/css/commonUser.css">
    <link rel="stylesheet" href="../resource/css/homePage.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!--Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!--Customize Css-->
    <link rel="stylesheet" href="../resource/css/userSetting.css">
    <link rel="stylesheet" href="../resource/css/cartPop.css">
    <link rel="stylesheet" href="../resource/css/orderHistory.css">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/order.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-md d-none d-lg-block d-md-none mt-3">
            <div class="container-fluid">
                <a class="navbar-brand me-lg-5 me-md-0  me-0" href="./home.php">
                    <img src="../resource/image/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <!-- NAV for lg screen -->
                    <ul class="navbar-nav lg-screen text-center">
                        <li class="nav-item nav-color me-4 px-2">
                            <a class="nav-link mt-2 pt-3  active" aria-current="page" href="../View/HomePage.php">မူလစာမျက်နှာ</a>
                        </li>
                        <li class="nav-item py-lg-2 nav-color  me-4 px-4">
                            <a class="nav-link pt-3 active" href="../View/category.php">စာအုပ်များ</a>
                        </li>
                        <li class="nav-item nav-color me-4 px-1">
                            <a class="nav-link mt-2 pt-3 active" href="../View/authorlist.php">စာရေးဆရာများ</a>
                        </li>
                        <li class="nav-item   nav-color me-4 px-1">
                            <a class="nav-link mt-2 pt-3 active" href="../View/login.php">အကောင့်သို့ဝင်ရန်</a>
                        </li>
                        <li class="nav-item dropdown   mt-0 pt-lg-2 pt-md-1 pt-0">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../resource/image/useracc.jpg" alt="" class="useracc ">
                                <span class="acc-name">အကောင့်အမည်</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-dark" href="#lg-userSetting" data-bs-toggle="modal">ကိုယ်​ရေးအချက်အလက်များပြင်ဆင်မည်</a></li>
                                <li><a class="dropdown-item text-dark" href="#lg-orderHistory" data-bs-toggle="modal">မှာယူခဲ့သည့်စာရင်းများ</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item mt-lg-3  mt-0  ms-0 ms-lg-4 position-relative">
                            <a href="#lg-cartPopUp" class="text-dark" data-bs-toggle="modal">
                                <i class="bi bi-basket2-fill fs-2 mt-lg-5 mt-md-5 mt-0  ms-0 ms-lg-1"></i>
                                <span class="position-absolute top-0  badge bg-danger">2</span>
                            </a>
                        </li>
                    </ul>
                    <!--Stard of User Setting-->
                    <div class="modal ms-3 ms-lg-0 ms-md-0 fade" id="lg-userSetting" tabindex="-1" aria-labelledby="lg-userSettingLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content modal-parent">
                                        <div class="modal-header cart-header ps-lg-5">
                                            <h5 class="modal-title fw-bold" id="lg-userSettingLabel">ကိုယ်​ရေးအချက်အလက်များ ပြင်ဆင်မည်</h5>
                                            <button type="button" class="btn-close btn-close-dark me-lg-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="imgChange">
                                                <div class="text-center">
                                                        <img src="../resource/image/Vector.png" alt="" class="img-fluid"/>
                                                    </div>
                                                    <div class="text-center change-img-text mt-2">
                                                        <input type="file" name="photo" id="photo" accept="">
                                                        <label for="photo">
                                                            ပုံ​ပြောင်းမည်
                                                        </label>
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
                                                            <button type="button" class="btn btn-dark pt-2 text-center normal-btn" data-bs-dismiss="modal" aria-label="Close">မပြင်ဆင်ပါ</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End of User Setting-->

                            <!--Start of Order History-->
                            <div class="modal  fade " id="lg-orderHistory" tabindex="-1" aria-labelledby="lg-orderHistoryLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content modal-parent">
                                        <div class="modal-header cart-header ps-lg-5">
                                            <h5 class="modal-title ms-lg-5" id="lg-orderHistoryLabel">မှာယူခဲ့သည့်စာရင်းများ</h5>
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
                            <!--End of Order History-->
                            <!--Start of PopCart-->
                        <div class="modal  fade ms-3 ms-lg-0 ms-md-0" id="lg-cartPopUp" tabindex="-1" aria-labelledby="lg-cartPopUpLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content modal-parent">
                                    <div class="modal-header cart-header ps-lg-5">
                                        <h5 class="modal-title ms-lg-3" id="lg-cartPopUpLabel">လူကြီးမင်း၏​စျေးခြင်း(1)</h5>
                                        <button type="button" class="btn-close btn-close-dark me-lg-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row g-0">
                                            <div class="col-lg-3">
                                                <img src="../resource/image/The-beginning-of-attachment-and-the-end-of-forgiveness-1-300x300 13 copy 2.png" class="img-fluid ps-5 ps-md-0 ps-lg-0" alt=""/>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row text-white">
                                                    <div class="col-12">
                                                        <p class="book-title">ငြိတွယ်ခြင်းတို့ရဲ့အစခွင့်လွှတ်ရခြင်းတို့ရဲ့အဆုံး</p>
                                                    </div>
                                                    <div class="col-6 col-md-12 col-lg-12">
                                                        <span class="book-text">1</span>
                                                        <span class="book-text">x</span>
                                                        <span class="book-text">4500 (ကျပ်)</span>
                                                    </div>
                                                    <div class="col-6 d-block d-md-none d-lg-none col-md-12 col-lg-12">
                                                        <i class="bi bi-trash3 text-warning"></i>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class="book-text">= 4500 (ကျပ်)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1  d-none d-md-block d-lg-block">
                                                <i class="bi bi-trash3 text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="mb-lg-3 mt-lg-5 ps-5 ms-5 ms-lg-0 ms-md-0">
                                            <div class="row ms-lg-3">
                                                <div class="col-lg-8 col-12">
                                                    <button type="button" class="btn ms-3 rounded-pill text-dark order-btn" data-bs-toggle="modal" data-bs-target="#lg-order">အမှာတင်မည်</button>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of PopCart-->
                        <!--Start of Order Pg lg-->
                        <div class="modal position-realtive start-0 fade" id="lg-order" tabindex="-1" aria-labelledby="lg-orderLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
                                <div class="modal-content modal-parent">
                                    <div class="modal-header cart-header ps-lg-5">
                                        <h5 class="modal-title ms-lg-5" id="lg-orderLabel">​အော်ဒါနံပါတ် <span><b> 123</b></span></h5>
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
                                                                <div class="col-2 me-3 fw-bold pt-1 minus">
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
                                                        <select name="" id="" class="book-text my-2 px-lg-4 mx-auto py-1">
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
                        <!--End of Order Pg lg-->
                </div>
            </div>
        </nav>
        <!--End of the lg nav-->

        <!--Start md and sm nav-->
        <nav class="navbar navbar-expand-lg mt-lg-2 d-block d-md-block d-lg-none">
            <div class="container-fluid">
                <a class="navbar-brand me-lg-5 me-md-0  me-0" href="./home.php">
                    <img src="../resource/image/logo.png" alt="">
                </a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarNav">
                    <div class="row  collapse " id="navbarNav">
                        <div class="col-12  sm-bg py-2 text-center ">
                            <a href="./HomePage.php" class=" text-decoration-none text-dark">မူလစာမျက်နှာ</a>
                        </div>
                        <div class="col-12 sm-bg py-2 text-center ">
                            <a href="./category.php" class="text-decoration-none text-dark">စာအုပ်များ</a>
                        </div>
                        <div class="col-12 sm-bg py-2 text-center ">
                            <a href="./authorList.php" class="text-decoration-none text-dark">စာရေးဆရာများ</a>
                        </div>
                        <div class="col-12 sm-bg py-2 text-center ">
                            <a href="./login.php" class="text-decoration-none text-dark">အကောင့်သို့ဝင်ရန်</a>
                        </div>
                        <div class="col-12 sm-bg py-2 text-center ">
                            <!---search bar for md and sm screen-->
                            <button type="button" class="btn searchBorder" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <span class="text-dark">ရှာဖွေရန်</span> <i class="bi bi-search  fw-bold fs-5 text-center "></i>
                            </button>

                            <div class="modal fade search" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="input-group text-dark d-flex d-md-flex d-lg-none">
                                                <select name="" id="">
                                                    <option value="author">စာရေးဆရာများ</option>
                                                    <option value="book">စာအုပ်များ</option>
                                                </select>
                                                <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="သင်ဘာကိုရှာဖွေချင်ပါသလဲ?">
                                                <button class="btn" type="button" id="button-addon2">
                                                    <i class="bi bi-search fw-bold fs-5"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end of searchbar-->
                        </div>
                        <div class="dropdown col-12 sm-bg py-2 text-center">
                            <a class="dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../resource/image/useracc.jpg" alt="" class="useracc ">
                                <span class="acc-name ">အကောင့်အမည်</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item text-dark text-decoration-none" href="#userSetting" data-bs-toggle="modal">ကိုယ်​ရေးအချက်အလက်များပြင်ဆင်မည်</a>
                                </li>
                                <li><a class="dropdown-item text-dark text-decoration-none" href="#orderHistory" data-bs-toggle="modal">မှာယူခဲ့သည့်စာရင်းများ</a></li>
                            </ul>
                        </div>
                            <!--Stard of User Setting-->
                            <div class="modal ms-5 ms-lg-0 ms-md-0 fade" id="userSetting" tabindex="-1" aria-labelledby="userSettingLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content modal-parent">
                                        <div class="modal-header cart-header ps-lg-5">
                                            <h5 class="modal-title fw-bold" id="userSettingLabel">ကိုယ်​ရေးအချက်အလက်များ ပြင်ဆင်မည်</h5>
                                            <button type="button" class="btn-close btn-close-dark me-lg-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="imgChange">
                                                <div class="text-center">
                                                        <img src="../resource/image/Vector.png" alt="" class="img-fluid"/>
                                                    </div>
                                                    <div class="text-center change-img-text mt-2">
                                                        <input type="file" name="photo" id="photo" accept="">
                                                        <label for="photo">
                                                            ပုံ​ပြောင်းမည်
                                                        </label>
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
                                                            <button type="button" class="btn btn-dark pt-2 text-center normal-btn" data-bs-dismiss="modal" aria-label="Close">မပြင်ဆင်ပါ</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End of User Setting-->

                            <!--Start of Order History-->
                            <div class="modal  fade ms-5 ms-lg-0 ms-md-0" id="orderHistory" tabindex="-1" aria-labelledby="orderHistoryLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content modal-parent">
                                        <div class="modal-header cart-header ps-5">
                                            <h5 class="modal-title ms-5" id="orderHistoryLabel">မှာယူခဲ့သည့်စာရင်းများ</h5>
                                            <button type="button" class="btn-close btn-close-dark me-3" data-bs-dismiss="modal" aria-label="Close"></button>
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
                            <!--End of Order History-->
                        
                        <div class="col-12 text-center sm-bg py-2 position-relative">
                            <a href="#cartPopUp" class="text-decoration-none text-dark" data-bs-toggle="modal">
                                လူကြီးမင်း၏​စျေးခြင်း
                                <i class="bi bi-cart3 fs-2 mt-lg-5 mt-md-5 mt-0  ms-0 ms-lg-1"></i>
                                <span class="position-absolute top-0  badge bg-danger">2</span>
                            </a>
                        </div>
                        <!--Start of PopCart-->
                        <div class="modal  fade ms-5  ms-lg-0 ms-md-0" id="cartPopUp" tabindex="-1" aria-labelledby="cartPopUpLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content modal-parent">
                                    <div class="modal-header cart-header ps-5">
                                        <h5 class="modal-title ms-lg-3" id="cartPopUpLabel">လူကြီးမင်း၏​စျေးခြင်း(1)</h5>
                                        <button type="button" class="btn-close btn-close-dark me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row g-0">
                                            <div class="col-lg-3">
                                                <img src="../resource/image/The-beginning-of-attachment-and-the-end-of-forgiveness-1-300x300 13 copy 2.png" class="img-fluid ps-5 ps-md-5 ps-lg-0" alt=""/>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row text-white ps-5">
                                                    <div class="col-12">
                                                        <p class="book-title">ငြိတွယ်ခြင်းတို့ရဲ့အစခွင့်လွှတ်ရခြင်းတို့ရဲ့အဆုံး</p>
                                                    </div>
                                                    <div class="col-6   col-md-6 col-lg-12">
                                                        <span class="book-text">1</span>
                                                        <span class="book-text">x</span>
                                                        <span class="book-text">4500 (ကျပ်)</span>
                                                    </div>
                                                    <div class="col-6 col-md-6 d-block d-md-block d-lg-none ps-5">
                                                        <i class="bi bi-trash3 text-warning"></i>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class="book-text">= 4500 (ကျပ်)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-lg-3 mt-lg-5 ps-5 ms-5 ms-lg-0 ms-md-0">
                                            <div class="row ms-lg-3">
                                                <div class="col-lg-8 col-12">
                                                    <button type="button" class="btn ms-3 rounded-pill text-dark order-btn" data-bs-toggle="modal" data-bs-target="#sm-order" >အမှာတင်မည်</button>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of PopCart-->

                        <!---Start of Order Page-->
                        <div class="modal ps-5 ms-5 fade" id="sm-order" tabindex="-1" aria-labelledby="sm-orderLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ms-5 ms-lg-0 ms-md-0">
                                <div class="modal-content modal-parent ms-5">
                                    <div class="modal-header cart-header ps-lg-5">
                                        <h5 class="modal-title ms-lg-5" id="sm-orderLabel">​အော်ဒါနံပါတ် <span><b> 123</b></span></h5>
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
                                                                <div class="col-2 me-3 fw-bolder pt-1 minus">
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
                                                        <select name="" id="" class="book-text my-2 px-5 mx-auto py-1">
                                                            <option  value="ဧရာဝတီတိုင်းဒေသကြီး">ဧရာဝတီတိုင်းဒေသကြီး</option>
                                                            <option  value="ပဲခူးတိုင်းဒေသကြီး">ပဲခူးတိုင်းဒေသကြီး</option>
                                                            <option  value="ချင်းပြည်နယ်">ချင်းပြည်နယ်</option>
                                                            <option  value="ကချင်ပြည်နယ်">ကချင်ပြည်နယ်</option>
                                                            <option  value="ကယားပြည်နယ်">ကယားပြည်နယ်</option>
                                                            <option  value="ကရင်ပြည်နယ်">ကရင်ပြည်နယ်</option>
                                                            <option  value="	မကွေးတိုင်းဒေသကြီး">မကွေးတိုင်းဒေသကြီး</option>
                                                            <option  value="	မန္တလေးတိုင်းဒေသကြီး">မန္တလေးတိုင်းဒေသကြီး</option>
                                                            <option  value="မွန်ပြည်နယ်">မွန်ပြည်နယ်</option>
                                                            <option  value="နေပြည်တော် ပြည်ထောင်စုနယ်မြေ">နေပြည်တော် ပြည်ထောင်စုနယ်မြေ</option>
                                                            <option  value="ရခိုင်ပြည်နယ်">ရခိုင်ပြည်နယ်</option>
                                                            <option  value="စစ်ကိုင်းတိုင်းဒေသကြီး">စစ်ကိုင်းတိုင်းဒေသကြီး</option>
                                                            <option  value="ရှမ်းပြည်နယ်">ရှမ်းပြည်နယ်</option>
                                                            <option  value="တနင်္သာရီတိုင်းဒေသကြီး">တနင်္သာရီတိုင်းဒေသကြီး</option>
                                                            <option  value="ရန်ကုန်တိုင်းဒေသကြီး">ရန်ကုန်တိုင်းဒေသကြီး</option>
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
                        <!---End of Order Page-->
                    </div>
                </div>
            </div>
    </div>
    </nav>
    </div>
    <!--searchbar for large screen-->
    <div class="top-0 mt-lg-0 mt-md-3 mt-5 pt-lg-0 pt-md-5 pt-5 input-group text-dark d-none d-md-none d-lg-flex search">
        <select name="" id="">
            <option value="author">စာရေးဆရာများ</option>
            <option value="book">စာအုပ်များ</option>
        </select>
        <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="သင်ဘာကိုရှာဖွေချင်ပါသလဲ? ဒီကနေ ဝင်ရှာလို့ရပါတယ်">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">
            <i class="bi bi-search text-dark fw-bold fs-4"></i>
        </button>
    </div>
    <!--end of searchbar-->
</body>

</html>