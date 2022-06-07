<!DOCTYPE html>
<html>

<head>
    <title>Author Profile</title>

    <link rel="stylesheet" href="../resource/css/authorProfile.css">
    <link rel="shortcut icon" href="../resource/image/logo.png">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- notosan myanmar font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Myanmar&display=swap" rel="stylesheet">
    <!--Customize CSS-->
    <link rel="stylesheet" href="../resource/css/bookDescription.css">
    <link rel="stylesheet" href="../resource/css/commonUser.css">
    <link rel="stylesheet" href="../resource/css/userSetting.css">
    <link rel="stylesheet" href="../resource/css/cartPop.css">
    <link rel="stylesheet" href="../resource/css/orderHistory.css">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/order.css">
    <link rel="stylesheet" href="../resource/css/footer.css ">
    <!--Bootstrap CSS & JavaScript-->

    <!--Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!--Slick JS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <!--Customize JS-->
    <!-- <script src="../resource/js/Cslik.js" defer></script> -->
    <script src="../resource/js/nav.js"></script>
</head>

<body>
    <div class="nav-bar"></div>
    <div class="setting"></div>
    <div class="cart"></div>
    <div class="order"></div>
    <div class="orderHistory"></div>

    <div class="container ">
        <div class="profile mb-5">
            <div class="row mt-5 ms-5 authorBio">
                <!-- PROFILE -->

                <?php

                require "../Controller/authorProfileController.php";
                echo "<div class='col-md-5'>. <img src='../resource/image/" . $result[0]['author_image'] . " 'class='image img-responsive'>. </div>";
                echo " <div class='col-md-7 mt-5 '>";
                echo " <h2 class='mb-3 '>" . $result[0]['author_name'] . "</h2>";
                echo "<h5 class='mb-4 fw-bold'> " . $result[0]['author_life'] . "</h5>";
                echo "<p class='lh-lg  authorBio'>" . $result[0]['author_about'] . "</p>";

                ?>

                <!-- PROFILE  end-->
            </div>
        </div>
        <!-- Card -->



        <div class="carousel mt-5">
            <div class="mt-5 itemTitle"> ရတနာသိုက် Book Shopတွင်ရရှိနိုင်သော ဤစာရေးဆရာ၏ စာအုပ်များအနက်မှ</div>
            <div class="item active row mt-5">
 
                <?php
                require "../Controller/authorProfileCardController.php";
                for ($i = 0; $i < 4; $i++) {
                    echo "<div class='col-sm-3'>";
                    echo " <div class='thumb-wrapper'>";
                    echo " <div class='img-box'>";
                    echo " <img src='../resource/image/" . $result[$i]['book_img'] . "' alt=''>";
                    echo "</div>";
                    echo "<div class='thumb-content'>";
                    echo "<div class='authorName'>" . $result[$i]['author_name'] . "</div>";
                    echo "<div class='bookName'>" . $result[$i]['book_name'] . "</div>";
                    echo "<p class='item-price'>" . $result[$i]['book_price'] . "</p>";
                    echo "<a href='#' class='btn '>စျေးဝယ်ခြင်းထဲသို့ထည့်ရန်</a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
                <!-- 
                <div class="col-sm-3">
                    <div class="thumb-wrapper">

                        <div class="img-box">
                            <img src="../resource/image/image1.png" class="" alt="">
                        </div>
                        <div class="thumb-content">
                            <div class="authorName">ချစ်ဦးညို</div>
                            <div class="bookName">
                                မဟာသေနာပတိ
                            </div>
                            <p class="item-price">၈၀၀၀ ကျပ်</p>
                            <a href="#" class="btn ">စျေးဝယ်ခြင်းထဲသို့ထည့်ရန်</a>
                        </div>
                    </div>
                </div> -->
                <!-- card2 -->
                <!-- <div class="col-sm-3">
                    <div class="thumb-wrapper">

                        <div class="img-box">
                            <img src="../resource/image/image2.png" class="img-responsive" alt="">
                        </div>
                        <div class="thumb-content">
                            <div class="authorName">ချစ်ဦးညို</div>
                            <div class="bookName">
                                နှင်းကေသရာချစ်တဲ့သူရဲကောင်း
                            </div>
                            <p class="item-price">၈၀၀၀ ကျပ်</p>
                            <a href="#" class="btn ">စျေးဝယ်ခြင်းထဲသို့ထည့်ရန်</a>
                        </div>
                    </div>
                </div> -->
                <!-- card3 -->
                <!-- <div class="col-sm-3">
                    <div class="thumb-wrapper">

                        <div class="img-box">
                            <img src="../resource/image/image3.png" class="img-responsive" alt="">
                        </div>
                        <div class="thumb-content">
                            <div class="authorName">ချစ်ဦးညို</div>
                            <div class="bookName">
                                လင်္ကာဒီပချစ်သူ
                            </div>
                            <p class="item-price">၈၀၀၀ ကျပ်</p>
                            <a href="#" class="btn ">စျေးဝယ်ခြင်းထဲသို့ထည့်ရန်</a>
                        </div>
                    </div>
                </div> -->
                <!-- card4 -->
                <!-- <div class="col-sm-3">
                    <div class="thumb-wrapper">

                        <div class="img-box">
                            <img src="../resource/image/image4.png" class="img-responsive" alt="">
                        </div>
                        <div class="thumb-content">
                            <div class="authorName">ချစ်ဦးညို</div>
                            <div class="bookName">
                                ချစ်သူသုန္ဒရီ
                            </div>
                            <p class="item-price">၈၀၀၀ ကျပ်</p>
                            <a href="#" class="btn">စျေးဝယ်ခြင်းထဲသို့ထည့်ရန်</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <!-- ------------------------------------------- -->

    </div>
    <!-- FOOTER -->
    <!-- <div class="footer mt-3">
        <div class="ps-2">@YadanarThike 2022</div>
        <div class="copyright">&#169;
            YadanarThike Company. All Rights Reserved.</div>
    </div> -->
</body>

</html>