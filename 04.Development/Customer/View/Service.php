<!DOCTYPE html>
<html lang="my-MM">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ဝန်​ဆောင်မှုများ</title>
    <link rel="stylesheet" href="../resource/css/service.css">
    <link rel="stylesheet" href="../resource/css/commonUser.css">
    <script src="jquery-3.6.0.min.js"></script>
    <?php require "../Controller/iconController.php"; ?>
    <link rel="shortcut icon" href="../../Admin/resource/image/<?php echo $iconResult[0]['icon']; ?>" >
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <!--Customize JS-->
        <script src="../resource/js/cSlik.js" defer></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/nav.js"></script>
</head>

<body>
    <div class="container-fluid p-0">
    <div class="nav-bar"></div>
    <div class="setting"></div>
    <div class="cart"></div>
    <div class="order"></div>
    <div class="orderHistory"></div>
    <div class=" service">
        <div class="main">
            <div class="header">
                <p class="title">မင်္ဂလာပါ… ဝန်ဆောင်မှုများစွာဖြင့် Yadanar Thikeမှ ကြိုဆိုပါသည်
                </p>
            </div>
            <div class="logos">
                <img class="logo1" src="../resource/image/Servicelogo1.png" alt="">
                <img class="logo2" src="../resource/image/Servicelogo2.png" alt="">
            </div>
            <div class="service">
                <div class="service-a">
                    <?php
                    require("../Controller/serviceController.php");
                    foreach ($result as $key => $value) {
                        echo "<div class='tab'>";
                        echo "<div class='up'>";
                        echo "<div class='png'>";
                        echo  "<img src='../../Admin/resource/image/" . $value['icon'] . "' alt='' class='img'>";
                        echo "</div>";
                        echo "<p class='detail a text-center'>" . $value['question'] . "</p>";
                        echo "</div>";
                        echo "<div class='down'>";
                        echo "<p class='back'>" . substr($value['answer'],0,80) . "</p>";
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
            <div class="footer">
            </div>
        </div>
    </div>
    </div>
</body>

</html>