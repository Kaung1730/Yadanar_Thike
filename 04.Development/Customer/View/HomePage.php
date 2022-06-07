<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="../resource/css/HomePage.css">
    <!-- <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/nav.js"></script> -->
    <script src="../resource/js/jquery3.6.0.js"></script>
    <link rel="stylesheet" href="../resource/css/commonUser.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- notosan myanmar font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="../resource/image/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Myanmar&display=swap" rel="stylesheet">

    <!-- centerSlick -->
    <link rel="stylesheet" href="../resource/css/slick.css">
    <link rel="stylesheet" href="../resource/css/slick-theme.css">
    <script src="../resource/js/slick.min.js"></script>
    <script src="../resource/js/slicker.js"></script>

    <!-- ionic icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!--Customize CSS-->
    <link rel="stylesheet" href="../resource/css/commonUser.css">
    <link rel="stylesheet" href="../resource/css/userSetting.css">
    <link rel="stylesheet" href="../resource/css/cartPop.css">
    <link rel="stylesheet" href="../resource/css/orderHistory.css">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/order.css">
    <link rel="stylesheet" href="../resource/css/footer.css ">

    <!--Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <script src="../resource/js/nav.js" defer></script>
    <script src="../resource/js/userSetting.js" defer></script>
</head>

<body>
    <div class="nav-bar"></div>
    <div class="setting"></div>
    <div class="cart"></div>
    <div class="order"></div>
    <div class="orderHistory"></div>
    <div class="container container-fluid ">
        <!-- HeaderSlider -->
        <div id="carouselExampleInterval" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="../resource/image/slide1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../resource/image/slide2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../resource/image/slide3.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../resource/image/slide4.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../resource/image/slide5.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- HeaderSlider End -->


        <!-- အသစ်ထွက်ရှိသော စာအုပ်များ -->


        <div class="centerSlider px-4">
            <h4 class=" newBookList mt-5">အသစ်ထွက်ရှိသော စာအုပ်များ </h4>

            <?php

            require "../Controller/homePageController.php";
            echo "<div class='homeslider slicker mt-5 d-flex justify-content-center'>";
            for ($i = 0; $i < count($result); $i++) {
                echo " <div class='slide  d-flex justify-content-center'>";
                echo " <img src='../resource/image/" . $result[$i]['book_img'] . "' alt=''>";
                echo "</div>";
                // print_r("result");
            }
            echo "</div>";
            ?>

            <!-- အသစ်ထွက်ရှိသော စာအုပ်များ End -->

            <!-- ယနေ့အတွက် ရည်ညွှန်းစာအုပ် -->
            <div class="">
            <img src="../resource/image/bookForToday1.png" alt="" class="BookForToday img-fluid ">
               
            </div>
            <!-- ယနေ့အတွက် ရည်ညွှန်းစာအုပ် end -->

            <!-- advertisement start -->
            <div class=" advertise">
                <div class="advertiseCard row">
                    <div class="col-sm-4">
                        <div class="advertise-wrapper">
                            <div class="adver-img">
                                <img src="../resource/image/delivery.png" class="img-responsive" alt="">
                            </div>
                            <div class="advertise-content">
                                <div class="name">လွယ်ကူလျင်မြန်စွာ ပို့ဆောင်ပေးခြင်း</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="advertise-wrapper">
                            <div class="adver-img">
                                <img src="../resource/image/payment.png" class="img-responsive" alt="">
                            </div>
                            <div class="advertise-content">
                                <div class="name">ငွေပေးချေရလွယ်ကူခြင်း</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="advertise-wrapper">
                            <div class="adver-img">
                                <img src="../resource/image/best price.png" class="img-responsive" alt="">
                            </div>
                            <div class="advertise-content">
                                <div class="name">စျေးနှုန်းသက်သာခြင်း</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- advertisement end -->
            <!-- လတ်တလောလူကြိုက်များသော စာအုပ်များ  -->
            <p class="popularBookTitle mt-4"> <mark>လတ်တလောလူကြိုက်များသော စာအုပ်များ</mark> </p>
            <div class="popularBook">


                <?php

                require "../Controller/homePageController.php";

                for ($i = 0; $i < 4; $i++) {
                    echo "<div class='card'>";
                    echo " <div class='imgBox'>";
                    echo " <img src='../resource/image/" . $result[$i]['book_img'] . "' alt='' class='bookImg'>";
                    echo "<div class='bookTitle'>" . $result[$i]['book_name'] . "</div>";
                    echo "</div>";
                    echo "<div class='content'>";
                    echo " <p>" . $result[$i]['book_price'] . "</p>";
                    echo "<button type='button' class='btn '>ခြင်းတောင်းထဲထည့်ရန်</button>";
                    echo "</div>";
                    echo "</div>";
                    // print_r("result");
                }
                ?>

                <!-- cardOne -->
                <!-- <div class="card">
                    <div class="imgBox">
                        <img src="../resource/image/popular1.png" alt="" class="bookImg">
                        <div class="bookTitle">ချစ်သူရေးတဲ့ကျွန်မရဲ့ညတွေ</div>
                    </div>
                    <div class="content">

                        <p>၅၀၀၀ကျပ်</p>
                        <button type="button" class="btn ">ခြင်းတောင်းထဲထည့်ရန်</button>
                    </div>
                </div> -->

            </div>
            <!-- လတ်တလောလူကြိုက်များသော စာအုပ်များ end -->

            <!-- DISCOUNT -->


            <?php
            
            require "../Controller/discountController.php";
            echo " <div class='disItem'>";
            echo "<div class='disContent'>";
            echo "<h2>" . $result[0]['author_name'] . "</h2>"; //edit or full outer join table
            echo "<p>" . $result[0]['book_name'] . "</p>";
            echo "<span class='disPrice text-decoration-line-through'>" . $result[0]['book_price'] . "</span>";
            echo "<span class='disPrice pb-5 ms-2 text-danger'>" .  $result[0]['book_price'] . "</span>";
            echo "</div>";
            echo "<div class='discountCard'>";
            echo "<div class='disTag'>";
            echo "<span> 20% OFF </span>";
            echo "</div>";
            echo "<div>";
            echo " <img src='../resource/image/" .  $result[0]['book_img'] . "' alt='' class='disImage'>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            ?>
            <!-- <div class="disContent">
                    <h2>မြသန်းတင့်</h2>
                    <p>ရှားလော့ဟုမ်း၏ မှတ်တမ်း </p>
                    <span class="disPrice text-decoration-line-through">၆၀၀၀ကျပ်</span> 
                    <span class=" disPrice pb-5 ms-2 text-danger">၄၈၀၀ကျပ်</span>
                </div>

                <div class="discountCard">
                    <div class="disTag">
                        <span>20% OFF</span>
                    </div>
                    <div>
                        <img src="../resource/image/Memoirs-of-600x600.webp" alt="" class="disImage">
                    </div>
                </div> -->
            <!-- </div> -->
            <!-- DISCOUNT end-->

            <!-- category -->
            <div class=" carousels">
                <h4 class="mt-3 mb-4">စာအုပ်အမျိုးအစားများ</h4>
                <div class="item row">

                    <?php

                    require "../Controller/categoryBookPageController.php";

                    for ($i = 0; $i < 4; $i++) {
                        echo "<div class='col-sm-3'>";
                        echo " <div class='thumb-wrapper'>";
                        echo " <div class='img-box'>";
                        echo " <img src='../resource/image/" . $result[$i]['category_image'] . "' alt='' class='img-responsive'>";
                        echo "</div>";
                        echo "<div class='thumb-content'>";
                        echo "  <div class='authorName pb-2'>" . $result[$i]['category_name'] . "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        // print_r("result");
                    }
                    ?>

                </div>
            </div>
            <div class="seeMore">ဆက်လက်ကြည့်ရှုရန်</div>
            <!-- end category -->

            <!-- SERVICES -->
            <div class="services">
                <div class="row text-center">
                    <div class="col-md-2">
                        <div class="serviceCard">
                            <div class="icon">
                                <img src="../resource/image/serviceLogo.png" alt="">
                            </div>
                            <a href="./Service.php">
                                <div class="content ">ဝန်ဆောင်မှုများ</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="serviceCard">
                            <div class="icon"><img src="../resource/image/locationLogo.png" alt=""></div>
                            <a href="./shopList.php">
                                <div class="content ps-2 pe-2">စာအုပ်ဆိုင်တည်နေရာများ</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="serviceCard">
                            <div class="icon"><img src="../resource/image/deliveryLogo.png" alt="" class="homeDelivery"></div>
                            <a href="./deliveryService.php">
                                <div class="content homeDeliveryContent ps-2 pe-2 ">အိမ်အရောက်ပို့ဆောင်ပေးသော နေရာများ</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="serviceCard">
                            <div class="icon">
                                <img src="../resource/image/faqIcon.webp" alt="">
                            </div>
                            <a href="./FAQs.php">
                                <div class="content">FAQ</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="serviceCard">
                            <div class="icon">
                                <img src="../resource/image/privacyLogo.webp" alt="">
                            </div>
                            <a href="./Privacy.php">
                                <div class="content ps-2 pe-2">ကိုယ်ရေးအချက်အလက်ဆိုင်ရာ မူပိုင်ခွင့်များ</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="serviceCard">
                            <div class="icon">
                                <img src="../resource/image/contactLogo.png" alt="">
                            </div>
                            <a href="./ContactUs.php">
                                <div class="content">ဆက်သွယ်ရန်</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SERVICES END -->

            <!-- homeAddress -->
            <div class="text-center text-lg-start homeAddress">
                <!-- Grid container -->
                <div class=" p-4 pb-0">
                    <!-- Section: Links -->
                    <section class="">
                        <!--Grid row-->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                                <!-- <h6 class="text-uppercase mb-4 font-weight-bold">
                                <a href="">ရတနာသိုက်</a>
                            </h6> -->
                                <a href=""><img src="../resource/image/logo.png" alt="" class="w-50" h-50 mt-5 ms-5></a>
                                <br>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->

                            <hr class="w-100 clearfix d-md-none" />

                            <!-- Grid column -->
                            <hr class="w-100 clearfix d-md-none" />

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">
                                    <i class="bi bi-geo-alt-fill fa-lg"></i>ရုံးချုပ်တည်နေရာ
                                </h6>
                                <p>အမှတ် (၁၂၃) ၊ ရတနာလမ်း၊တောင်ဥက္ကလာပမြို့နယ်၊ ရန်ကုန်။</p>
                                <p> yadanarthikebookshop@gmail.com</p>
                                <p> +၉၅၉ ၁၂၃ ၄၅၆ ၇၈၉</p>
                                <p> နေ့စဉ် မနက် ၉း၀၀ မှ ညနေ ၆း၀၀ အထိ ဖွင့်လှစ်ပါသည်။</p>
                            </div>
                            <!-- Grid column -->
                            <hr class="w-100 clearfix d-md-none" />
                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">ကျွန်ုပ်တို့နှင့်ထိတွေ့ဆက်ဆံရန်</h6>

                                <ul class="list-unstyled">
                                    <li>
                                        <p>
                                            <ion-icon name="logo-facebook"></ion-icon> www.facebook.com/yadanarthike
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ion-icon name="logo-instagram"></ion-icon> www.instagram.com/yadanarthike
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ion-icon name="logo-twitter"></ion-icon> www.twitter.com/yadanarthike
                                        </p>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <!--Grid row-->
                    </section>
                    <!-- Section: Links -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <!-- 
            <div class="text-center p-3 copyright fw-bold">
                ⓒ YadanarThike Company. All Rights Reserved.
            </div> -->

                <!-- Copyright -->
            </div>
            <!-- homeAddress -->
            <div class="footer ">
                <div class="">@YadanarThike 2022</div>
                <div class="copyright">&#169;
                    YadanarThike Company2022. All Rights Reserved.</div>
            </div>
        </div>


    <script>
        $(document).ready(function(){
    $("#userSettingForm").on("submit", function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../Controller/userSettingUpdate.php",
            data: new FormData(this),
            contentType: false,
            processData: false,
            cache: true,
            beforeSend: function () {
                $("#update-btn").attr("disabled", "disabled");
                $("#userSettingUpdate").css("opacity", "0.5");
            },
            success: function (res) {
                $("#update-btn").removeAttr("disabled");
                $("##userSettingUpdate").css("opacity", "1");
                alert(res);
            },
            error: function (err) {
                alert("Error");
            }
        })
    })
})
    </script>
</body>

</html>