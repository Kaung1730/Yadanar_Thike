<!DOCTYPE html>
<html lang="my-MM">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Service</title>
        <link rel="stylesheet" href="../resource/css/service.css">
        <link rel="stylesheet" href="../resource/css/commonUser.css">
        <script src="jquery-3.6.0.min.js"></script>
    </head>
    <body>
    <div class="body">
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
                    foreach($result as $key => $value){
                        echo "<div class='tab'>";
                        echo "<div class='up'>";
                        echo "<div class='png'>"; 
                        echo  "<img src='../resource/image/".$value['icon']."' alt='' class='img'>";
                        echo "</div>";
                        echo "<p class='detail a'>". $value['question']. "</p>";
                        echo "</div>";
                        echo "<div class='down'>";
                        echo "<p class='back'>".$value['answer']."</p>";
                        echo "</div>";
                        echo "</div>";
                    }

                ?>
                <!-- <div class="tab">
                    <div class="up">
                    <div class="png"> <img src="../resource/image/Servicebookmark.png" alt="" class="img"></div>
                    <p class="detail a">စာမှတ်ကဒ် အခမဲ့</p></div>
                    <div class="down">
                    <p class="back">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="tab">
                    <div class="up">
                    <div class="png"> <img src="../resource/image/Servicedelifee.png" alt="" class="img"></div>
                    <p class="detail b">ပို့ခနှုန်းထား</p></div>
                    <div class="down">
                    <p class="back">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="tab">
                    <div class="up">
                    <div class="png"> <img src="../resource/image/Servicedelivery.png" alt="" class="img"></div>
                    <p class="detail c">ပြည်တွင်းပို့ဆောင်မှုစနစ်</p></div>
                    <div class="down">
                    <p class="back">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="footer">
        </div>
        </div>
    </div>
    </body>
</html>