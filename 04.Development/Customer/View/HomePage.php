<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>မူလစာမျက်နှာ</title>
    <link rel="stylesheet" href="../resource/css/homePage.css">

    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/home.js"></script>
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
    <?php require "../Controller/iconController.php"; ?>
    <link rel="shortcut icon" href="../../Admin/resource/image/<?php echo $iconResult[0]['icon']; ?>">
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
    <link rel="stylesheet" href="../resource/css/orderHistory.css">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/order.css">
    <link rel="stylesheet" href="../resource/css/footer.css ">
    <link rel="stylesheet" href="../resource/css/cartPop.css">
    <!--Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <script src="../resource/js/nav.js" defer></script>
    <script src="../resource/js/userSetting.js" defer></script>
    <script src="../resource/js/cartShow.js"></script>
    <script src="../resource/js/cart.js"></script>
    <script src="../resource/js/homeCart.js"></script>
</head>

<body>
    <div class="container-fluid p-0">
        <?php session_start(); ?>
        <div class="nav-bar"></div>
        <div class="setting"></div>
        <div class="cart"></div>
        <div class="order"></div>
        <div class="orderHistory"></div>
        <div>
            <!-- HeaderSlider -->

            <?php

            require "../Controller/homePageCarouselController.php";
            echo "<div  id='carouselExampleInterval' class='carousel slide mt-5' data-bs-ride='carousel'>";

            echo " <div class='carousel-inner'>";
            for ($i = 0; $i < count($result); $i++) {
                if ($i == 0) {
                    echo " <div class='carousel-item active' data-bs-interval='2000'>";
                } else {
                    echo " <div class='carousel-item' data-bs-interval='2000'>";
                }
                echo " <img src='../../Admin/resource/image/" . $result[$i]['slider_image'] . "' alt='' class='d-block w-100'>";
                // echo " <img src='../resource/image/" . $result[$i]['slider_image'] . "' alt='' class='d-block w-100'>";
                echo "</div>";
            }
            echo "</div>";

            echo " <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleInterval' data-bs-slide='prev'>";
            echo "<span class='carousel-control-prev-icon' aria-hidden='true'>";
            echo "</span>";
            echo " <span class='visually-hidden'>Previous</span>";
            echo "</button>";

            echo " <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleInterval' data-bs-slide='next'>";
            echo "<span class='carousel-control-next-icon' aria-hidden='true'>";
            echo "</span>";
            echo " <span class='visually-hidden'>Next</span>";
            echo "</button>";

            echo "</div>";
            ?>

            <!-- HeaderSlider End -->


            <!-- အသစ်ထွက်ရှိသော စာအုပ်များ -->

            <div class="centerSlider px-4">
                <h4 class=" newBookList mt-5">အသစ်ထွက်ရှိသော စာအုပ်များ </h4>

                <?php
                require "../Controller/homePageController.php";
                echo "<div class='homeslider slicker mt-5 d-flex justify-content-center'>";
                for ($i = 0; $i < count($result); $i++) {
                    echo " <div class='slide  d-flex justify-content-center'>";
                    echo "<a  href='../View/bookDescription.php?book_id=" . $result[$i]['book_id'] . "'>";
                    echo " <img src='../../Admin/resource/image/" . $result[$i]['book_img'] . "' alt='' class='newBookImg'>";
                    // echo " <img src='../resource/image/" . $result[$i]['book_img'] . "' alt='' class='newBookImg'>";
                    echo "</a>";
                    echo "</div>";
                }
                echo "</div>";
                ?>
                <!-- အသစ်ထွက်ရှိသော စာအုပ်များ End -->
                <?php require "../Controller/sitemasterController.php" ?>
                <!-- ယနေ့အတွက် ရည်ညွှန်းစာအုပ် -->
                <div class="">
                    <h4 class="mt-5 text-center ">ယနေ့အတွက် ရည်ညွှန်းစာအုပ် </h4>
                    <img src="../../Admin/resource/image/<?php echo $result[0]['slider_1'] ?>" alt="" class="BookForToday img-fluid ">
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
                <p class="popularBookTitle"> <mark>လတ်တလောလူကြိုက်များသော စာအုပ်များ</mark> </p>
                <div class="popularBook">
                    <?php
                    require "../Controller/homePageController.php";
                    for ($i = 0; $i < 4; $i++) {
                        echo "<div class='card'>";
                        echo "<a class='text-decoration-none' href='../View/bookDescription.php?book_id=" . $popularBook[$i]['book_id'] . "'>";
                        echo " <div class='imgBox'>";
                        echo " <img src='../../Admin/resource/image/" . $popularBook[$i]['book_img'] . "' alt='' class='bookImg'>";
                        // echo " <img src='../resource/image/" . $result[$i]['book_img'] . "' alt='' class='bookImg'>";
                        echo "<div class='bookTitle text-decoration-none'>" . $popularBook[$i]['book_name'] . "</div>";
                        echo "</div>";
                        echo "<div class='content'>";
                        echo " <p class= 'text-center  text-decoration-none'>" . $popularBook[$i]['book_price'] . "</p>";

                        echo "</a>";
                        if (isset($_SESSION['status-customer'])) {
                            echo "<button type='button' class='btn btn-basket' value='" . $popularBook[$i]['book_id'] . "'>ခြင်းတောင်းထဲထည့်ရန်</button>";
                        }
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>
                </div>

            </div>
            <!-- လတ်တလောလူကြိုက်များသော စာအုပ်များ end -->

            <!-- DISCOUNT -->
            <?php

            require "../Controller/discountController.php";
            echo "<a class='text-decoration-none' href='../View/bookDescription.php?book_id=" . $result[0]['book_id'] . "'>";
            echo " <div class='disItem'>";
            echo "<div class='disContent'>";
            echo "<h2>" . $result[0]['author_name'] . "</h2>";
            echo "<p>" . $result[0]['book_name'] . "</p>";
            echo "<span class='disPrice text-decoration-line-through'>" . $result[0]['book_price'] . "(ကျပ်)</span>";
            echo "<span class='disPrice pb-5 ms-2 text-danger'>" .  $result[0]['discount_price'] . "(ကျပ်)</span>";
            echo "</div>";
            echo "<div class='discountCard'>";
            echo "<div class='disTag'>";
            echo "<span> 20% OFF </span>";
            echo "</div>";
            echo "<div>";
            echo " <img src='../../Admin/resource/image/" .  $result[0]['book_img'] . "' alt='' class='disImage'>";
            // echo " <img src='../resource/image/" .  $result[0]['book_img'] . "' alt='' class='disImage'>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</a>";
            ?>
            <!-- DISCOUNT end-->

            <!-- category -->
            <div class=" carousels">
                <h4 class="mt-3 mb-4">စာအုပ်အမျိုးအစားများ</h4>
                <div class="item row">

                    <?php

                    require "../Controller/categoryBookPageController.php";

                    for ($i = 0; $i < 4; $i++) {
                        echo "<div class='col-sm-3'>";
                        echo "<a href='../View/category.php' class='categoryList text-decoration-none'>";
                        echo " <div class='thumb-wrapper'>";
                        echo " <div class='img-box'>";
                        echo " <img src='../../Admin/resource/image/" . $result[$i]['category_image'] . "' alt='' class='img-responsive'>";
                        // echo " <img src='../resource/image/" . $result[$i]['category_image'] . "' alt='' class='img-responsive'>";
                        echo "</div>";
                        echo "<div class='thumb-content'>";
                        echo "  <div class='authorName pb-2'>" . $result[$i]['category_name'] . "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</a>";
                        echo "</div>";
                    }
                    ?>

                </div>
            </div>
            <a href="../View/category.php" class="seeMoreTagA">
                <div class="seeMore">ဆက်လက်ကြည့်ရှုရန်</div>
            </a>
            <!-- end category -->

            <!-- SERVICES -->
            <div class="services">
                <div class="d-flex flex-wrap justify-content-between text-center">
                    <div class="">
                        <a href="./Service.php" class="serviceATag">
                            <div class="serviceCard">
                                <div class="icon">
                                    <img src="../resource/image/serviceLogo.png" alt="">
                                </div>

                                <div class="content ">ဝန်ဆောင်မှုများ</div>

                            </div>
                        </a>
                    </div>

                    <div class="">
                        <a href="./shopList.php" class="serviceATag">
                            <div class="serviceCard">
                                <div class="icon">
                                    <img src="../resource/image/locationLogo.png" alt="">
                                </div>
                                <div class="content ps-2 pe-2">စာအုပ်ဆိုင်တည်နေရာများ</div>
                            </div>
                        </a>
                    </div>

                    <div class="">
                        <a href="./deliveryService.php" class="serviceATag">
                            <div class="serviceCard">
                                <div class="icon">
                                    <img src="../resource/image/deliveryLogo.png" alt="" class="homeDelivery">
                                    <div class="content homeDeliveryContent ps-2 pe-2 ">အိမ်အရောက်ပို့ဆောင်ပေးသော နေရာများ</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="">
                        <a href="./FAQs.php" class="serviceATag">
                            <div class="serviceCard">
                                <div class="icon">
                                    <img src="../resource/image/faqIcon.webp" alt="">
                                </div>

                                <div class="content">FAQ</div>
                            </div>
                        </a>
                    </div>

                    <div class="">
                        <a href="./Privacy.php" class="serviceATag">
                        <div class="serviceCard">
                            <div class="icon">
                                <img src="../resource/image/privacyLogo.webp" alt="">
                            </div>
                            <div class="content ps-2 pe-2">ကိုယ်ရေးအချက်အလက်ဆိုင်ရာ မူပိုင်ခွင့်များ</div>
                        </div>
                        </a>
                    </div>
                    <div class="">
                        <a href="./ContactUs.php" class="serviceATag">
                            <div class="serviceCard">
                                <div class="icon">
                                    <img src="../resource/image/contactLogo.png" alt="">
                                </div>
                                <div class="content">ဆက်သွယ်ရန်</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- <a href="./GuideofWeb.php" class="seeMoreTag guide text-decoration-none">
            <div class="usage text-dark">စာမျက်နှာအသုံးပြုနည်း ကြည့်ရှုရန်</div>
        </a> -->
            <a href="./GuideofWeb.php" class="btn  text-decoration-none guide-btn">
                <div class="  text-dark">စာမျက်နှာအသုံးပြုနည်း ကြည့်ရှုရန်</div>
            </a>
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
                            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
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
                                <h6 class="mb-4 font-weight-bold">
                                    <i class="bi bi-geo-alt-fill fa-lg me-lg-3 me-md-0 me-0"></i>ရုံးချုပ်တည်နေရာ
                                </h6>
                                <!-- <p>အမှတ် (၁၂၃) ၊ ရတနာလမ်း၊တောင်ဥက္ကလာပမြို့နယ်၊ ရန်ကုန်။</p>
                            <p> yadanarthikebookshop@gmail.com</p>
                            <p> +၉၅၉ ၁၂၃ ၄၅၆ ၇၈၉</p>
                            <p> နေ့စဉ် မနက် ၉း၀၀ မှ ညနေ ၆း၀၀ အထိ ဖွင့်လှစ်ပါသည်။</p> -->
                                <p><?php echo $result[0]['address'] ?></p>
                                <p><?php echo $result[0]['email'] ?></p>
                                <p><?php echo $result[0]['phone'] ?></p>
                                <p> နေ့စဉ် <?php echo $result[0]['available_time'] ?> အထိ ဖွင့်လှစ်ပါသည်။</p>
                            </div>
                            <!-- Grid column -->
                            <hr class="w-100 clearfix d-md-none" />
                            <!-- Grid column -->
                            <div class="col-md-5 col-lg-5 col-xl-5 mx-auto mt-3">
                                <h6 class=" mb-4 font-weight-bold">ကျွန်ုပ်တို့နှင့်ထိတွေ့ဆက်ဆံရန်</h6>

                                <ul class="list-unstyled">
                                    <li>
                                        <p>
                                            <ion-icon class="fs-4" name="logo-facebook"></ion-icon>
                                            <a class="text-decoration-none text-dark ms-lg-5 ms-md-0 ms-0" href="https://www.facebook.com"><?php echo $result[0]['facebook'] ?></a>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ion-icon class="fs-4" name="logo-instagram"></ion-icon>
                                            <a class="text-decoration-none text-dark ms-lg-5 ms-md-0 ms-0" href="https://www.instagram.com"><?php echo $result[0]['instagram'] ?></a>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ion-icon class="fs-4" name="logo-twitter"></ion-icon>
                                            <a class="text-decoration-none text-dark ms-lg-5 ms-md-0 ms-0" href="https://www.twitter.com"><?php echo $result[0]['twitter'] ?></a>
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

            </div>
        </div>
    </div>
    <div class="footer d-flex py-3 text-center mt-4 "></div>
    </div>
    <button id="topBtn" class="pt-2 bg-warning border-warning rounded position-fixed bottom-0 end-0 m-5 border-none">
        <i class="bi bi-arrow-up-circle  text-white fw-bolder fs-4 px-2 "></i>
    </button>
</body>

</html>