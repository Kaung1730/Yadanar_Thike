<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                        <div class="d-flex justify-content-around box_group">
                            <div class="total_user">
                                <div class="d-flex justify-content-around box">
                                    <img src="../resource/image/person icon.png" alt="" class="person_icon pt-3">
                                    <div class="pt-3 fs-2 text-success fw-bold">5000</div>
                                </div>
                                <p class="user_text">Total Users</p>
                            </div>
                            <div class="total_viewers">
                                <div class="d-flex justify-content-around box">
                                    <img src="../resource/image/person icon.png" alt="" class="person_icon pt-3">
                                    <div class="pt-3 fs-2 text-danger fw-bold">2000</div>
                                </div>
                                <p class="viewer_text">Total Viewers</p>
                            </div>
                            <div class="income">
                                <div class="d-flex justify-content-around box">
                                    <img src="../resource/image/person icon.png" alt="" class="person_icon pt-3">
                                    <div class="pt-3 fs-2 text-primary fw-bold">1.5k</div>
                                </div>
                                <p class="income_text">Income</p>
                            </div>
                            <div class="order">
                                <div class="d-flex justify-content-around box">
                                    <img src="../resource/image/person icon.png" alt="" class="person_icon pt-3">
                                    <div class="pt-3 fs-2 text-info fw-bold">300</div>
                                </div>
                                <p class="order_text">Order</p>
                            </div>
                        </div>
                    </div>
                    <div class="order_box">
                        <div class="d-flex ">
                            <a href="./dashBoard.php" class="m-3 fs-4">Recent Order</a>
                            <a href="./todayOrder.php" class="m-3 fs-4">Today Order</a>
                        </div>
                        <div>
                            <table class="table table-striped white_table tb-edit mt-3">
                                <tr>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Location</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </table>
                            <a href="faqAdd.php" class="a-edit"><button type="button" class="btn btn-secondary btn-3 mx-5 float-end">See more</button></a>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                    <div class="copyright text-center">Copyright@2022YadanarThike All Rights Reserved.</div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>