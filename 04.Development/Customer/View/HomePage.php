<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="../resource/css/homePage.css">
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

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Myanmar&display=swap" rel="stylesheet">

    <!-- centerSlick -->
    <link rel="stylesheet" href="../resource/css/slick.css">
    <link rel="stylesheet" href="../resource/css/slick-theme.css">
    <script src="../resource/js/slick.min.js"></script>
    <script src="../resource/js/slicker.js"></script>

    <!-- ionic icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>

<body>
    <div class="container ">
        <div class=" menubar_top ">
            <a href="" class="logo mt-2 me-2"><img src="../resource/image/logo.png" alt=""></a>
            <!-- <nav class="navbar"> -->
            <ul class="navList ">
                <li class="navItem"><a href="">မူလစာမျက်နှာ</a></li>
                <li class="navItem"><a href="">စာအုပ်များ</a></li>
                <li class="navItem"><a href="">စာရေးဆရာများ</a></li>
                <li class="navItem"><a href="">အကောင့်သို့ဝင်ရန်</a></li>
            </ul>
            <div>
                <a href=""><img src="../resource/image/useracc.jpg" alt="" class="useracc "></a>
                <a href=""><span class="me-5">အကောင့်အမည်</span></a>
                <a href="">
                    <img src="../resource/image/cart.png" alt="" class="cart">
                </a>
                <span class="position-absolute  translate-middle badge bg-danger">2</span>

            </div>
        </div>

        <div class="menubar_bottom">
            <div class="menubarIcon">
                <ion-icon name="menu" class="menubarIcon h-100 w-100"></ion-icon>
            </div>
            <!-- <div class="dropdown"> -->

            <div class="dropdown">
                <a class="btn  dropdown-toggle h-100" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown">
                    ရှာဖွေရန်
                </a>

                <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item dpd" href="#">AUTHOR</a></li>
                    <li><a class="dropdown-item dpd" href="#">BOOK</a></li>

                </ul>
            </div>

            <!-- search -->
            <div class="search">
                <input type="text" name="" class="searchBox" placeholder="သင်ဘာကိုရှာဖွေချင်ပါသလဲ? ဒီကနေ ဝင်ရှာလို့ရပါတယ်">
            </div>

            <button class="figured  ">
                <ion-icon name="search"></ion-icon>
            </button>
        </div>

        <!-- HeaderSlider -->

        <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner bg-danger">
                <div class="carousel-item active">
                    <img src="../resource/image/slide1.png" alt="">
                </div>
                <div class="carousel-item">
                    <!-- <img src="..." class="d-block w-100" alt="..."> -->
                    <img src="../resource/image/slide2.png" alt="">
                </div>
                <div class="carousel-item">
                    <img src="../resource/image/slide3.png" alt="">
                </div>
                <div class="carousel-item">
                    <img src="../resource/image/slide4.png" alt="">
                </div>
                <div class="carousel-item">
                    <img src="../resource/image/slide5.png" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- HeaderSlider End -->


        <!-- အသစ်ထွက်ရှိသော စာအုပ်များ -->
        <!-- <div class="centerSlider"> -->
        <h4 class=" newBookList ">အသစ်ထွက်ရှိသော စာအုပ်များ </h4>
        <div class="homeslider slicker mt-5">
            <div class="slide">
                <img src="../resource/image/arrival.png" alt="">
            </div>
            <div class="slide">
                <img src="../resource/image/arrival2.png" alt="">
            </div>
            <div class="slide">
                <img src="../resource/image/arrival3.png" alt="">
            </div>
            <div class="slide">
                <img src="../resource/image/arrival4.png" alt="">
            </div>
            <div class="slide">
                <img src="../resource/image/arrival5.png" alt="">
            </div>
            <div class="slide">
                <img src="../resource/image/arrival6.png" alt="">
            </div>
            <!-- <div class="slide">
                <img src="../resource/image/arrival2.png" alt="">
            </div> -->
            <!-- <div class="slide">
                <img src="../SlickCenter/images/arrival5.png" alt="">
            </div> -->
        </div>

        <!-- အသစ်ထွက်ရှိသော စာအုပ်များ End -->

        <!-- ယနေ့အတွက် ရည်ညွှန်းစာအုပ် -->
        <div class="BookForToday">

            <h4 class=""> ယနေ့အတွက် ရည်ညွှန်းစာအုပ်</h4>


            <div class="forToday row">
                <div class="forTodayLeftSide col-md-7">
                    <img src="../resource/image/forToday.webp" alt="" class="">
                    <p class="">ချစ်ခြင်းအားဖြင့် ကဗျာနှင့်စာ</p>
                </div>
                <div class="forTodayRightSide col-md-3">
                    <p class="lh-lg">အသက်သည် အိပ်မက်

                        အိပ်မက်သည် သူ
                        သူသည် အသက်ဖြစ်စေ
                        ဆောင်းနှောင်းလျှင် နွေဦး၏
                        နွေဦး၌ နှင်းကြွင်းသည် ။
                        နှင်းကြွင်းပြယ်သော်လည်း
                        သစ္စာကြွင်းစေ ။
                        မြတ်နိုးခြင်း ကြွင်းစေ ။ </p>
                </div>
            </div>
        </div>
        <!-- ယနေ့အတွက် ရည်ညွှန်းစာအုပ် end -->

        <!-- လတ်တလောလူကြိုက်များသော စာအုပ်များ  -->
        <p class="popularBookTitle"> <mark>လတ်တလောလူကြိုက်များသော စာအုပ်များ</mark> </p>
        <div class="popularBook">

            <!-- cardOne -->
            <div class="card">
                <div class="imgBox">
                    <img src="../resource/image/popular1.png" alt="" class="bookImg">
                    <div class="bookTitle">Sucide Diary</div>
                </div>
                <div class="content">

                    <p>6500</p>
                    <!-- <p>more info</p> -->
                    <button type="button" class="btn btn-outline-primary">Add to Basket</button>
                </div>
            </div>

            <!-- cardTwo -->
            <div class="card">
                <div class="imgBox">


                    <img src="../resource/image/popular2.webp" alt="" class="bookImg">
                    <div class="bookTitle">Sucide Diary</div>
                </div>
                <div class="content">

                    <p>6500</p>
                    <!-- <p>more info</p> -->
                    <button type="button" class="btn btn-outline-primary">Add to Basket</button>
                </div>
            </div>

            <!-- cardThree -->
            <div class="card">
                <div class="imgBox">


                    <img src="../resource/image/popular3.png" alt="" class="bookImg">
                    <div class="bookTitle">Sucide Diary</div>
                </div>
                <div class="content">

                    <p>6500</p>
                    <!-- <p>more info</p> -->
                    <button type="button" class="btn btn-outline-primary">Add to Basket</button>
                </div>
            </div>
            <!-- cardFour -->
            <div class="card">
                <div class="imgBox">


                    <img src="../resource/image/popular4.webp" alt="" class="bookImg">
                    <div class="bookTitle ">Sucide Diary</div>
                </div>
                <div class="content">

                    <p>6500</p>
                    <!-- <p>more info</p> -->
                    <button type="button" class="btn btn-outline-primary">Add to Basket</button>
                </div>
            </div>

            <!-- cardFive -->
            <div class="card">
                <div class="imgBox">


                    <img src="../resource/image/popular5.webp" alt="" class="bookImg">
                    <div class="bookTitle">Sucide Diary</div>
                </div>
                <div class="content">

                    <p>6500</p>
                    <!-- <p>more info</p> -->
                    <button type="button" class="btn btn-outline-primary">Add to Basket</button>
                </div>
            </div>

        </div>
        <!-- လတ်တလောလူကြိုက်များသော စာအုပ်များ end -->

        <!-- DISCOUNT -->

        <div class="disItem">
            <div class="disContent">
                <h1>ဒဂုန်တာရာ</h1>
                <p>သူ့ကဗျာနှင့်သူ့ကဗျာစာပေသဘောတရားကျမ်း (20% Off)</p>
                <p class="disPrice">၃၀၀၀ကျပ် <span class="text-decoration-line-through ms-2">၂၆၀၀ကျပ်</span></p>
            </div>

            <div class="discountCard">
                <div class="disTag">
                    <span>20% OFF</span>
                </div>
                <div>
                    <!-- <span>ribbon</span> -->
                    <img src="../resource/image/popular4.webp
                    " alt="" class="disImage">
                </div>
            </div>
        </div>
        <!-- DISCOUNT end-->

        <div class=" carousel">
            <h4>စာအုပ်အမျိုးအစားများ</h4>
            <div class="categoryList item row">
                <div class="col-sm-3">
                    <div class="thumb-wrapper">
                        <div class="img-box">
                            <img src="../resource/image/image2.png" class="img-responsive" alt="">
                        </div>
                        <div class="thumb-content">
                            <div class="authorName">poem</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumb-wrapper">
                        <div class="img-box">
                            <img src="../resource/image/image2.png" class="img-responsive" alt="">
                        </div>
                        <div class="thumb-content">
                            <div class="authorName">poem</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumb-wrapper">
                        <div class="img-box">
                            <img src="../resource/image/image2.png" class="img-responsive" alt="">
                        </div>
                        <div class="thumb-content">
                            <div class="authorName">poem</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumb-wrapper">
                        <div class="img-box">
                            <img src="../resource/image/image2.png" class="img-responsive" alt="">
                        </div>
                        <div class="thumb-content">
                            <div class="authorName">poem</div>
                        </div>
                    </div>
                </div>
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
                        <div class="content ">ဝန်ဆောင်မှုများ</div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="serviceCard">
                        <div class="icon"><img src="../resource/image/locationLogo.png" alt=""></div>
                        <div class="content">စာအုပ်ဆိုင်တည်နေရာများ</div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="serviceCard">
                        <div class="icon"><img src="../resource/image/deliveryLogo.png" alt=""></div>
                        <div class="content">အိမ်အရောက်ပို့ဆောင်ပေးသော နေရာများ</div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="serviceCard">
                        <div class="icon">
                            <img src="../resource/image/faqIcon.webp" alt="">
                        </div>
                        <div class="content">FAQ</div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="serviceCard">
                        <div class="icon">
                            <img src="../resource/image/privacyLogo.webp" alt="">
                        </div>
                        <div class="content">ကိုယ်ရေးအချက်အလက်ဆိုင်ရာ မူပိုင်ခွင့်များ</div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="serviceCard">
                        <div class="icon">
                            <img src="../resource/image/contactLogo.png" alt="">
                        </div>
                        <div class="content">ဆက်သွယ်ရန်</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SERVICES END -->
    </div>
</body>

</html>