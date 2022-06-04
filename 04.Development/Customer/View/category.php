<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../resource/image/logo.png">
    <!--Customize CSS-->
    <link rel="stylesheet" href="../resource/css/category.css">
    <link rel="stylesheet" href="../resource/css/commonUser.css">
    <link rel="stylesheet" href="../resource/css/userSetting.css">
    <link rel="stylesheet" href="../resource/css/cartPop.css">
    <link rel="stylesheet" href="../resource/css/orderHistory.css">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/order.css">
    <link rel="stylesheet" href="../resource/css/footer.css ">
    <!--Bootstrap CSS & JavaScript-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!--Slick JS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <!--Customize JS-->
    <script src="../resource/js/cSlik.js" defer></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/nav.js"></script>
</head>

<body>
    <!--Nav-->
    <div class="nav-bar"></div>
    <div class="setting"></div>
    <div class="cart"></div>
    <div class="order"></div>
    <div class="orderHistory"></div>
    <!--Category Start-->
    <div class="container-fluid px-0 mt-5">
        <div class="container">
            <div class="title text-center">စာအုပ်အမျိုးအစားများ</div>
            <div class="category">  
                <?php
                    require "../Controller/bookListController.php";
                    foreach ($result as $key => $value) {
                        echo '<div class="sub my-5">
                        <div class="sub-title ms-lg-5 mb-3 ps-lg-5">'.$value['category_name'].'</div>
                        <div class="autoplay book-list d-flex justify-content-between align-items-center">';
                        if($value['category_id'] == 1){
                            foreach ($yokePyaResult as $key => $value) {
                                echo '
<<<<<<< HEAD
                                <div class="ms-lg-5">
                                    <a href="../Controller/bookDespController.php?book_id='.$value['book_id'].'">
=======
                                <div class="ms-lg-5 id="yokepya">
                                    <a href="../View/bookDescription.php?book_id='.$value['book_id'].'">
>>>>>>> origin/main
                                        <img src="'.$value['book_img'].'" alt="" class="img-fluid"/>
                                    </a>
                                </div>';
                            }
                        }
                        else if($value['category_id'] == 2){
                            foreach ($novelResult as $key => $value) {
                                echo '
<<<<<<< HEAD
                                <div class="ms-lg-5">
                                    <img src="'.$value['book_img'].'" alt="" class="img-fluid"/>
=======
                                <div class="ms-lg-5" id="novel">
                                    <a href="../View/bookDescription.php?book_id='.$value['book_id'].'">
                                        <img src="'.$value['book_img'].'" alt="" class="img-fluid"/>
                                    </a>
>>>>>>> origin/main
                                </div>';
                            }
                        }
                        else if($value['category_id'] == 3){
                            foreach ($languageResult as $key => $value) {
                                echo '
<<<<<<< HEAD
                                <div class="ms-lg-5">
                                    <img src="'.$value['book_img'].'" alt="" class="img-fluid"/>
=======
                                <div class="ms-lg-5" id="language">
                                <a href="../View/bookDescription.php?book_id='.$value['book_id'].'">
                                    <img src="'.$value['book_img'].'" alt="" class="img-fluid"/>
                                </a>
>>>>>>> origin/main
                                </div>';
                            }
                        }
                        else if($value['category_id'] == 4){

                            foreach ($healthResult as $key => $value) {
                                echo '
<<<<<<< HEAD
                                <div class="ms-lg-5">
                                    <img src="'.$value['book_img'].'" alt="" class="img-fluid"/>
=======
                                <div class="ms-lg-5" id="health">
                                <a href="../View/bookDescription.php?book_id='.$value['book_id'].'">
                                    <img src="'.$value['book_img'].'" alt="" class="img-fluid"/>
                                </a>
>>>>>>> origin/main
                                </div>';
                            }
                        }
                        else if($value['category_id'] == 5){
                            foreach ($politicResult as $key => $value) {
                                echo '
<<<<<<< HEAD
                                <div class="ms-lg-5">
                                    <img src="'.$value['book_img'].'" alt="" class="img-fluid"/>
=======
                                <div class="ms-lg-5" id="politics">
                                    <a href="../View/bookDescription.php?book_id='.$value['book_id'].'">
                                        <img src="'.$value['book_img'].'" alt="" class="img-fluid"/>
                                    </a>
>>>>>>> origin/main
                                </div>';
                            }
                        }
                        else if($value['category_id'] == 6){
                            foreach ($poemResult as $key => $value) {
                                echo '
<<<<<<< HEAD
                                <div class="ms-lg-5">
                                    <img src="'.$value['book_img'].'" alt="" class="img-fluid"/>
=======
                                <div class="ms-lg-5" id="poem">
                                    <a href="../View/bookDescription.php?book_id='.$value['book_id'].'">
                                        <img src="'.$value['book_img'].'" alt="" class="img-fluid"/>
                                    </a>
>>>>>>> origin/main
                                </div>';
                            }
                        }
                        else if($value['category_id'] == 7){
                            foreach ($successResult as $key => $value) {
                                echo '
<<<<<<< HEAD
                                <div class="ms-lg-5">
                                    <img src="'.$value['book_img'].'" alt="" class="img-fluid"/>
=======
                                <div class="ms-lg-5" id="success">
                                    <a href="../View/bookDescription.php?book_id='.$value['book_id'].'">
                                        <img src="'.$value['book_img'].'" alt="" class="img-fluid"/>
                                    </a>
>>>>>>> origin/main
                                </div>';
                            }
                        }
                        else if($value['category_id'] == 8){
                            foreach ($biographyResult as $key => $value) {
                                echo '
<<<<<<< HEAD
                                <div class="ms-lg-5">
                                    <img src="'.$value['book_img'].'" alt="" class="img-fluid"/>
=======
                                <div class="ms-lg-5" id="biography">
                                    <a href="../View/bookDescription.php?book_id='.$value['book_id'].'">
                                        <img src="'.$value['book_img'].'" alt="" class="img-fluid"/>
                                    </a>
>>>>>>> origin/main
                                </div>';
                            }
                        }
                        else if($value['category_id'] == 9){
                            foreach ($otherResult as $key => $value) {
                                echo '
<<<<<<< HEAD
                                <div class="ms-lg-5">
                                    <img src="'.$value['book_img'].'" alt="" class="img-fluid"/>
=======
                                <div class="ms-lg-5" id="other">
                                    <a href="../View/bookDescription.php?book_id='.$value['book_id'].'">
                                        <img src="'.$value['book_img'].'" alt="" class="img-fluid"/>
                                    </a>
>>>>>>> origin/main
                                </div>';
                            }
                        }
                        echo '</div> 
                        </div>
                <hr class="yellow">';
                    }
                ?>
            </div>
        </div>
        <!--footer-->
        <div class="footer d-flex py-3 px-2 text-center mt-4"></div>

    </div>
    <!--Jquery Link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
</body>

</html>