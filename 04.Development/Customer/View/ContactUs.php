<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ဆက်သွယ်ရန်</title>
    <?php require "../Controller/iconController.php"; ?>
    <link rel="shortcut icon" href="../../Admin/resource/image/<?php echo $iconResult[0]['icon']; ?>">
    <link rel="stylesheet" href="../resource/css/contactUs.css">
    <link rel="stylesheet" href="../resource/css/commonUser.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!--JS & Jquery Link-->
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/contactUs.js"></script>
    <script src="../resource/js/nav.js" defer></script>
    <script src="../resource/js/userSetting.js" defer></script>
    <script src="../resource/js/cartShow.js"></script>
    <script src="../resource/js/cart.js"></script>
    <!--Sweet Alert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- ionic icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!--Customize CSS-->
    <link rel="stylesheet" href="../resource/css/commonUser.css">
    <link rel="stylesheet" href="../resource/css/userSetting.css">
    <link rel="stylesheet" href="../resource/css/orderHistory.css">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/order.css">
    <link rel="stylesheet" href="../resource/css/footer.css ">
    <link rel="stylesheet" href="../resource/css/cartPop.css">
    <!--Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

</head>

<body>
    <div class="container-fluid">
        <div class="nav-bar"></div>
        <div class="setting"></div>
        <div class="cart"></div>
        <div class="order"></div>
        <div class="orderHistory"></div>
        <div class="container-fluid ">


            <div class="container d-flex justify-content-center align-items-center mb-0 mb-md-0 mb-lg-4">
                <div class="left mt-lg-5 mt-md-3 mt-3 pb-2 pb-lg-3 pb-md-2 pe-3 pe-md-4 pe-lg-2 mb-4 mb-md-3 mb-lg-0">
                    <div class="title lh-lg mt-3">Contact Us</div>
                    <img src="../resource/image/contact.png" alt="" class="position-absolute d-none d-md-none d-lg-block contactImg" />
                    <div class="facts lh-lg pb-3 ">သင်ဖြည့်စွက်ပြောလိုသည့်အကြောင်းကို ကျွန်ုပ်တို့အား ထပ်မံပြောပြပေးပါ မကြာမီ သင့်ထံ အကြောင်းကြားပေးပါမည်။</div>
                    <div class="input pb-2">
                        <label class="label lh-lg mt-3">User ၏ အမည်</label>
                        <input class="inputbox i1 lh-lg" type="text" placeholder="အမည်" id="name" />
                    </div>
                    <div class="input pb-2">
                        <label class="label lh-lg">ဆက်သွယ်ရမည့်ဖုန်းနံပါတ်</label>
                        <input class="inputbox i2 lh-lg" type="text" placeholder="+959 123 456 789" id="phone" />
                    </div>
                    <div class="input">
                        <label class="label lh-lg">ဖြည့်စွက်ပြောလိုသည့်အကြောင်းအရာ</label>
                        <textarea name="" class="i3 lh-lg" cols="10" rows="2" id="text"></textarea>
                    </div>
                    <input type="submit" class="btn send-btn float-end me-5 px-5 rounded-pill" value="ပေးပို့ရန်" id="send-btn" />
                </div>

                <div class="right mt-5 py-4 d-none d-md-none d-lg-block">
                    <div class="righttitle ms-3 fs-5">Contact အချက်အလက်</div>
                    <div class="rightfact rightfontSize  pt-2">၁၂၃ ရတနာလမ်း,</div>
                    <div class="rightfact rightfontSize pt-3 fs-6 fw-bold">>>>>>>> </div>
                    <div class="rightfact rightfontSize pt-3"> ရန်ကုန်</div>
                    <div class="ps-3 pt-2 rightfontSize"> +၉၅၉ ၁၂၃ ၄၅၆ ၇၈၉ ကို ဆက်သွယ်ပါ၊</div>
                    <div class="ps-3 pt-2 rightfontSize">နေ့စဉ် မနက် ၉း၀၀ မှ ညနေ ၆း၀၀ အထိ ဖွင့်ပါသည်။</div>
                    <div class="gmail">info@yadanarthike.com, www.yadanarthike.com</div>
                    <div class="follow fs-4">Follow us</div>
                    <div class="icons">
                        <img class="icon" src="../resource/image/fb.png" alt="" />
                        <img class="icon" src="../resource/image/ins.png" alt="" />
                        <img class="icon" src="../resource/image/twi.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="footer d-flex py-3 px-2 text-center mt-4"></div>
    </div>
   
</body>

</html>