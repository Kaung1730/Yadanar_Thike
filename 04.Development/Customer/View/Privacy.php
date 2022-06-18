<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ကိုယ်​ရေးအချက်အလက် မူပိုင်ခွင့်များ</title>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <?php require "../Controller/iconController.php"; ?>
    <link rel="shortcut icon" href="../../Admin/resource/image/<?php echo $iconResult[0]['icon']; ?>" >
    <link rel="stylesheet" href="../resource/css/privacy.css">
    <link rel="stylesheet" href="../resource/css/commonUser.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!--Customize CSS-->

    <link rel="stylesheet" href="../resource/css/commonUser.css">
    <link rel="stylesheet" href="../resource/css/userSetting.css">
    <link rel="stylesheet" href="../resource/css/cartPop.css">
    <link rel="stylesheet" href="../resource/css/orderHistory.css">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/order.css">
    <link rel="stylesheet" href="../resource/css/footer.css ">

    <script src="../resource/js/nav.js" defer></script>
    <script src="../resource/js/userSetting.js" defer></script>
    <!--Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body>
    <div class="nav-bar"></div>
    <div class="setting"></div>
    <div class="cart"></div>
    <div class="order"></div>
    <div class="orderHistory"></div>
    
    <div class= "container">
       
            <div class="top">
                <h3>ကိုယ်ရေးအချက်အလက်ဆိုင်ရာမူပိုင်ခွင့်များ</h3>
            </div>
            <!-- <div class="smalltop">Privacy & Policy</div> -->
            <div class="title">Personal Data & Cookie Policy</div>

            <div class="main">
                <?php

                require "../Controller/privacyController.php";
                foreach ($result as $key => $value) {
                    echo "<div class='row'>";
                    echo "<div class='col-6 col-sm-6 ps-5  mb-5'>" . $value['question'] . "</div>";
                    echo "<div class='col-6 col-sm-6 mb-5'>" . $value['answer'] . "</div>";
                    echo "</div>";
                }
                ?>
            </div>
            <div class="bot"> </div>
            <!-- </div> -->
        </div>
  

    <div class="footer d-flex py-3 px-2 text-center mt-4"></div>

</body>

</html>