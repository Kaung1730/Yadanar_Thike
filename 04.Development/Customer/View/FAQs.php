<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQs</title>
    <link rel="stylesheet" href="../resource/css/faq.css">
    <link rel="stylesheet" href="../resource/css/commonUser.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
    <div class="body container">
        <div class="title">
            <h1>FAQs</h1>
        </div>

        <div class="main">
            <!-- <div class="part"> -->
            <!-- faq start -->
            <div class="faq">
                <div class=" upper">

                    <?php
                    // $count = 1;
                    require "../Controller/faqController.php";
                    for ($i = 0; $i < count($result); $i++) {

                        echo "<div class='firstRow'>";
                        echo "<div class='question'>" . $result[$i]['question'] . "</div>";
                        echo " <button class='updown-icon'>";
                        echo "<ion-icon class='down' name='chevron-down-outline'></ion-icon>";
                        echo "<ion-icon class='up' name='chevron-up-outline'></ion-icon>";
                        echo " </button>";
                        echo "</div>";
                        echo "<div class='answer'>";
                        echo "<p>" . $result[$i]['answer'] . "</p>";
                        echo "</div>";
                    }

                    // foreach ($result as $key => $value) {
                    //     echo "<div class='firstRow'>";
                    //     echo "<div class='question'>" . $value['question'] . "</div>";
                    //     echo " <button class='updown-icon'>";
                    //     echo "<ion-icon class='down' name='chevron-down-outline'></ion-icon>";
                    //     echo "<ion-icon class='up' name='chevron-up-outline'></ion-icon>";
                    //     echo " </button>";
                    //     echo "</div>";
                    //     echo "<div class='answer'>";
                    //     echo "<p>" .  $value['answer'] . "</p>";
                    //     echo "</div>";
                    // }
                    ?>

        </div>
    </div>
    <script src="../resource/js/faqs.js"></script>
</body>
</div>

</html>