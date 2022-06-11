<!DOCTYPE html>

<head>
    <title>Delivery Service</title>
    <link rel="shortcut icon" href="../resource/image/logo.png">
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
    <link rel="shortcut icon" href="../resource/image/logo.png">
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
                require"../Controller/stateController.php"; 
                require"../Controller/townshipController.php";
                echo "<div class ='division yangon'>" .$result1[0]['state_name']."</div>";
                echo "<div class='yangonTownList'>";
                echo "<ul class='yagonTown lh-lg'>";
                for($i = 0; $i < 43; $i++){
                    echo "<li>" .$result[$i]['township_name'] ."</li>";
                }
                echo "</div>";
                //MandalayDivision//
                echo "<div class ='division yangon'>" .$result1[1]['state_name']."</div>";
                echo "<div class='yangonTownList'>";
                echo "<ul class='yagonTown lh-lg'>";
                for($i = 43; $i < 71; $i++){
                    echo "<li>" .$result[$i]['township_name'] ."</li>";
                }
                echo "</div>";
                //BagoDivision//
                echo "<div class ='division yangon'>" .$result1[2]['state_name']."</div>";
                echo "<div class='yangonTownList'>";
                echo "<ul class='yagonTown lh-lg'>";
                for($i = 71; $i < 96; $i++){
                    echo "<li>" .$result[$i]['township_name'] ."</li>";
                }
                echo "</div>";
                //AyeYarWaDiDivision//
                echo "<div class ='division yangon'>" .$result1[3]['state_name']."</div>";
                echo "<div class='yangonTownList'>";
                echo "<ul class='yagonTown lh-lg'>";
                for($i = 96; $i < 124; $i++){
                    echo "<li>" .$result[$i]['township_name'] ."</li>";
                }
                echo "</div>";
                //MaWayDivision
                echo "<div class ='division yangon'>" .$result1[4]['state_name']."</div>";
                echo "<div class='yangonTownList'>";
                echo "<ul class='yagonTown lh-lg'>";
                for($i = 124; $i < 149; $i++){
                    echo "<li>" .$result[$i]['township_name'] ."</li>";
                }
                echo "</div>";
                //SaGaingDivision
                echo "<div class ='division yangon'>" .$result1[5]['state_name']."</div>";
                echo "<div class='yangonTownList'>";
                echo "<ul class='yagonTown lh-lg'>";
                for($i = 149; $i < 186; $i++){
                    echo "<li>" .$result[$i]['township_name'] ."</li>";
                }
                echo "</div>";
                //TaNninTharYeDivision
                echo "<div class ='division yangon'>" .$result1[6]['state_name']."</div>";
                echo "<div class='yangonTownList'>";
                echo "<ul class='yagonTown lh-lg'>";
                for($i = 186; $i < 190; $i++){
                    echo "<li>" .$result[$i]['township_name'] ."</li>";
                }
                echo "</div>";
                //NayPyiTaw
                echo "<div class ='division yangon'>" .$result1[7]['state_name']."</div>";
                echo "<div class='yangonTownList'>";
                echo "<ul class='yagonTown lh-lg'>";
                for($i = 190; $i < 199; $i++){
                    echo "<li>" .$result[$i]['township_name'] ."</li>";
                }
                echo "</div>";
                //KaChin
                echo "<div class ='division yangon'>" .$result1[8]['state_name']."</div>";
                echo "<div class='yangonTownList'>";
                echo "<ul class='yagonTown lh-lg'>";
                for($i = 199; $i < 206; $i++){
                    echo "<li>" .$result[$i]['township_name'] ."</li>";
                }
                echo "</div>";
                //KaYar
                echo "<div class ='division yangon'>" .$result1[9]['state_name']."</div>";
                echo "<div class='yangonTownList'>";
                echo "<ul class='yagonTown lh-lg'>";
                for($i = 206; $i < 207; $i++){
                    echo "<li>" .$result[$i]['township_name'] ."</li>";
                }
                echo "</div>";
                //KaYin
                echo "<div class ='division yangon'>" .$result1[10]['state_name']."</div>";
                echo "<div class='yangonTownList'>";
                echo "<ul class='yagonTown lh-lg'>";
                for($i = 207; $i < 211; $i++){
                    echo "<li>" .$result[$i]['township_name'] ."</li>";
                }
                echo "</div>";
                //Chin
                echo "<div class ='division yangon'>" .$result1[11]['state_name']."</div>";
                echo "<div class='yangonTownList'>";
                echo "<ul class='yagonTown lh-lg'>";
                for($i = 211; $i < 212; $i++){
                    echo "<li>" .$result[$i]['township_name'] ."</li>";
                }
                echo "</div>";
                //Mon
                echo "<div class ='division yangon'>" .$result1[12]['state_name']."</div>";
                echo "<div class='yangonTownList'>";
                echo "<ul class='yagonTown lh-lg'>";
                for($i = 212; $i <223 ; $i++){
                    echo "<li>" .$result[$i]['township_name'] ."</li>";
                }
                echo "</div>";
                //YaKaing
                echo "<div class ='division yangon'>" .$result1[13]['state_name']."</div>";
                echo "<div class='yangonTownList'>";
                echo "<ul class='yagonTown lh-lg'>";
                for($i = 223; $i < 236; $i++){
                    echo "<li>" .$result[$i]['township_name'] ."</li>";
                }
                echo "</div>";
                //Shan
                echo "<div class ='division yangon'>" .$result1[14]['state_name']."</div>";
                echo "<div class='yangonTownList'>";
                echo "<ul class='yagonTown lh-lg'>";
                for($i = 236; $i < 251; $i++){
                    echo "<li>" .$result[$i]['township_name'] ."</li>";
                }
                echo "</div>";
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
</body>

</html>