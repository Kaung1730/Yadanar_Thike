<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>​မေး​​လေ့ရှိ​သော ​မေးခွန်းများ</title>
    <?php require "../Controller/iconController.php"; ?>
    <link rel="shortcut icon" href="../../Admin/resource/image/<?php echo $iconResult[0]['icon']; ?>" >
    <link rel="stylesheet" href="../resource/css/faq.css">
    <link rel="stylesheet" href="../resource/css/commonUser.css">
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/faqs.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="../resource/js/nav.js" defer></script>
    <script src="../resource/js/userSetting.js" defer></script>
    <!--Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!--Customize CSS-->

    <link rel="stylesheet" href="../resource/css/commonUser.css">
    <link rel="stylesheet" href="../resource/css/userSetting.css">
    <link rel="stylesheet" href="../resource/css/cartPop.css">
    <link rel="stylesheet" href="../resource/css/orderHistory.css">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/order.css">
    <link rel="stylesheet" href="../resource/css/footer.css ">
</head>

<body>
<div class="container-fluid p-0">
    <div class="nav-bar"></div>
    <div class="setting"></div>
    <div class="cart"></div>
    <div class="order"></div>
    <div class="orderHistory"></div>

    
        <div class="containerBox">
            <div class="title">
                <h1>FAQs</h1>
            </div>

            <div class="main">
                <!-- <div class="part"> -->
                <!-- faq start -->
                <div class="faq">
                    <div class=" upper">

                        <?php

                        require "../Controller/faqController.php";
                        for ($i = 0; $i < count($result); $i++) {

                            echo "<div class='firstRow'>";

                            echo "<div class='question'>" . $result[$i]['question'] . "</div>";
                            echo " <button class='updown-icon'>";
                            echo "<ion-icon class='down' name='chevron-down-outline'></ion-icon>";
                            echo "<ion-icon class='up' name='chevron-up-outline'></ion-icon>";
                            echo " </button>";
                            echo "</div>";

                            echo "<div class='answer mx-5'>";
                            echo "<p>" . $result[$i]['answer'] . "</p>";
                            echo "</div>";
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer d-flex py-3 text-center mt-4"></div>
</body>

</html>