<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Privacy</title>
    <link rel="stylesheet" href="../resource/css/privacy.css">
    <link rel="stylesheet" href="../resource/css/commonUser.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>

    <div class="body container">
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
    </div>

    <!-- <div class="smallbot"> </div> -->

</body>