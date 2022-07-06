<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>အိမ်အ​ရောက်ပို့​ဆောင်​ပေးသည့် ဝန်​ဆောင်မှုများ</title>
    <?php require "../Controller/iconController.php"; ?>
    <link rel="shortcut icon" href="../../Admin/resource/image/<?php echo $iconResult[0]['icon']; ?>">
    <link rel="stylesheet" href="../resource/css/deliveryService.css">
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
    <script src="../resource/js/cSlik.js" defer></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/nav.js"></script>
</head>

<body>
    <div class="container-fluid">

        <div class="nav-bar"></div>
        <div class="setting"></div>
        <div class="cart"></div>
        <div class="order"></div>
        <div class="orderHistory"></div>
        <div class="container ">

            <!-- body -->
            <div class="deliList">
                <div class="deliHeader mt-5">
                    အိမ်အရောက်ပို့ဆောင်ပေးသောနေရာများ
                </div>

                <div class="deliBody">
                    <!-- YangonDivision -->
                    <?php
                    require "../Controller/stateController.php";
                    for ($i = 1; $i <= 14; $i++) {
                        $id = $i;
                        require "../Controller/townshipController.php";
                        echo "<div class ='division yangon'>" . $result[0]['state_name'] . "</div>";
                        echo "<div class='yangonTownList'>";
                        echo "<ul class='yagonTown lh-lg'>";
                        for ($j = 0; $j < count($result); $j++) {
                            echo "<li>" . $result[$j]['township_name'] . "</li>";
                        }
                        echo "</ul>";
                        echo "</div>";
                        echo "</hr>";
                    }
                    ?>
                </div>
            </div>

        </div>
        <!-- FOOTER -->
        <!-- <div class="footer mt-5">
        <div class="ps-2">@YadanarThike 2022</div>
        <div class="copyright">&#169;
            YadanarThike Company. All Rights Reserved.</div>
    </div> -->
        <div class="footer d-flex py-3 px-2 text-center mt-4"></div>

    </div>
</body>

</html>