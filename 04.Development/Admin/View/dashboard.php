<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="../resource/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link rel="stylesheet" href="../resource/css/dashBoard.css">
    <link rel="stylesheet" href="../resource/css/contactEdit.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    </script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/dashBoard.js"></script>
</head>

<body>
    <?php session_start();
    if (isset($_SESSION['status'])) { ?>
        <div class="container-fluid">
            <form action="">
                <div class="row">
                    <div class="col-2 nav_box">

                    </div>
                    <div class="col-10">
                        <div class="d-flex title_bar text-align-center">

                        </div>
                        <br />
                        <div class="dashboard_box">
                            
                        </div>
                        <div class="order_box">
                            <div class="d-flex ">
                                <a href="./dashBoard.php" class="m-3 fs-4">Recent Order</a>
                                <a href="./todayOrder.php" class="m-3 fs-4">Today Order</a>
                            </div>
                            <div>
                                <table class="table table-striped white_table tb-edit mt-3">
                                    <?php require "../Controller/recentOrderController.php" ?>
                                    <tr>
                                        <th class="text-center">Username</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Location</th>
                                        <th class="text-center">Price</th>
                                        <!-- <th class="text-center">Status</th> -->
                                    </tr>
                                    <?php
                                    foreach ($result as $key => $value) {
                                        echo "<tr>";
                                        echo "<td class='text-center'>" . $value['customer_name'] . "</td>";
                                        echo "<td class='text-center'>" . $value['order_date'] . "</td>";
                                        echo "<td class='text-center'>" . $value['customer_address'] . "</td>";
                                        echo "<td class='text-center'>" . $value['total_price'] . "</td>";
                                        // echo "<td class='text-center'>";
                                        // if($value['order_status']==1) {
                                        //     echo "Complete";
                                        // }else{
                                        //     echo "Pending";
                                        // }
                                        // echo "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </table>
                                <a href="./orderInfo.php" class="a-edit"><button type="button" class="btn btn-secondary btn-3 mx-5 float-end">See more</button></a>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div class="copyright text-center">Copyright@2022YadanarThike All Rights Reserved.</div>
                    </div>
                </div>
            </form>
        </div>
    <?php } else {
        require "../View/adminLogin.php";
    } ?>
</body>

</html>