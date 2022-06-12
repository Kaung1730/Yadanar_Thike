<!DOCTYPE html>

<head>
    <title>Search Result</title>
    <link rel="stylesheet" href="../resource/css/searchResult.css">
    <link rel="shortcut icon" href="../resource/image/logo.png">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/nav.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- notosan myanmar font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Myanmar&display=swap" rel="stylesheet">

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
    <!--Slick JS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <!--Customize JS-->
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/searchResult.js"></script>
    <!--Sweet Alert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
    <div class="nav-bar"></div>
    <div class="setting"></div>
    <div class="cart"></div>
    <div class="order"></div>
    <div class="orderHistory"></div>

    <div class="container ">
        <div class="resultBox pt-4">
            <a class="h5  text-decoration-none" href="../View/HomePage.php">
                <span><i class="bi bi-arrow-left fw-bold fs-4"></i></span> မူလစာမျက်နှာ ပြန်သွားမည်။
            </a>
            <div class="resultHeader">
                <h5>စာအုပ်များ</h5>
                <br>
                <div class="result">ရလဒ်: </div>
            </div>
            <div class="resultBody">
                <div class="item row">
                    <?php session_start();
                        if(count($result)>0) { foreach ($result as $key => $value) { ?>
                        <div class="col-sm-3">
                        <a href="../View/bookDescription.php?book_id=<?php echo $value['book_id'];?>" class="text-decoration_none">       
                            <div class="result-wrapper">
                                <div class="img-box">
                                    <img src="<?php echo $value['book_img'] ?>" class="img-responsive" alt="">
                                </div>
                                <div class="result-content">
                                    <div class="authorName "><?php echo $value['author_name'] ?></div>
                                    <p><?php echo $value['book_name'] ?></p>

                                    <p><?php echo $value['book_price'] ?></p>
                                    <?php if(isset($_SESSION['status'])){ ?>
                                    <button type="button" class="btn search-cart" value="<?php echo $value['book_id'] ?>">ခြင်းတောင်းထဲထည့်ရန်</button>
                                    <?php } ?>
                                </div>
                            </div>
                        </a> 
                    </div>
                    <?php } } else{?>
                        <div class="lead">ရှာမ​တွေ့ပါ။</div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <div class="footer ">
        <div class="">@YadanarThike 2022</div>
        <div class="copyright">&#169;
            YadanarThike Company2022. All Rights Reserved.</div>
    </div>
</body>

</html>