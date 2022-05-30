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
    <link rel="stylesheet" href="../resource/css/dashboard.css">
    <link rel="stylesheet" href="../resource/css/contactEdit.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    </script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/authorAdd.js"></script>
</head>

<body>
    <div class="container-fluid">
        <form action="">
            <div class="row">
                <div class="col-2 nav_box">
                    <img src="../resource/image/logo.png" alt="" class="mt-3 logo" />
                    <hr />
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <span class="nav_details mt-3 hover-li">
                                <img src="../resource/image/home icon.png" alt="" class="nav_img" />
                                <a class="nav-link link_details" aria-current="page" href="#">Dashboard</a>
                            </span>
                        </li>
                        <li class="nav-item">
                            <span class="nav_details mt-3 hover-li">
                                <img src="../resource/image/author-icon-21.jpg" alt="" class="nav_img circle" />
                                <a class="nav-link link_details" aria-current="page" href="#">Author Info</a>
                            </span>
                        </li>
                        <li class="nav-item">
                            <span class="nav_details mt-3 hover-li">
                                <img src="../resource/image/book1.png" alt="" class="nav_img circle" />
                                <a class="nav-link link_details" aria-current="page" href="#">Book Info</a>
                            </span>
                        </li>
                        <li class="nav-item">
                            <span class="nav_details mt-3 hover-li">
                                <img src="../resource/image/order.png" alt="" class="nav_img" />
                                <a class="nav-link link_details" aria-current="page" href="#">Order Info</a>
                            </span>
                        </li>
                        <li class="nav-item">
                            <span class="nav_details mt-3 hover-li">
                                <img src="../resource/image/person icon.png" alt="" class="nav_img" />
                                <a class="nav-link link_details" aria-current="page" href="#">User Info</a>
                            </span>
                        </li>
                        <li class="nav-item">
                            <span class="nav_details mt-3 hover-li">
                                <img src="../resource/image/person icon.png" alt="" class="nav_img" />
                                <a class="nav-link link_details" aria-current="page" href="#">Admin Settings</a>
                            </span>
                        </li>
                        <li class="nav-item">
                            <span class="nav_details mt-3 hover-li">
                                <img src="../resource/image/community.png" alt="" class="nav_img circle" />
                                <a class="nav-link link_details" aria-current="page" href="#">Community</a>
                            </span>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-danger logout">Logout</button>
                </div>
                <div class="col-10">
                    <div class="d-flex title_bar text-align-center">
                        <div class="ps-1 pt-2">
                            <div class="title mt-1 mx-3 fs-4 title_author">Dashboard</div>
                            <span class="title_list ms-3" id="adminCl">Admin</span>
                            <span class="title_list">></span>
                            <span class="title_list" id="adSet">Dashboard</span>
                        </div>
                        <div class="pt-3">
                            <input type="search" placeholder="Search" class="search" />
                        </div>
                        <div class="message_box">
                            <button><img src="../resource/image/message.png" class="message_icon" alt=""></button>
                        </div>
                        <div class="cart_box">
                            <button><img src="../resource/image/cart.png" class="cart_icon" alt=""></button>
                        </div>
                        <div class="admin_box">
                            <img src="../resource/image/person icon.png" class="person_icon" alt="">
                            <p>Admin</p>
                        </div>
                    </div>
                    <br />
                    <div class="dashboard_box">
                        <div class="d-flex justify-content-around box_group">
                            <div class="total_user">
                                <div class="d-flex justify-content-around box">
                                    <img src="../resource/image/person icon.png" alt="" class="person_icon pt-3">
                                    <div class="pt-3 fs-2 text-success">5000</div>
                                </div>
                                <p class="pt-3 ps-5 fs-3 user_text">Total Users</p>
                            </div>
                            <div class="total_viewers">
                                <div class="d-flex justify-content-around box">
                                    <img src="../resource/image/person icon.png" alt="" class="person_icon pt-3">
                                    <div class="pt-3 fs-2 text-danger">2000</div>
                                </div>
                                <p class="pt-3 ps-3 fs-3 viewer_text">Total Viewers</p>
                            </div>
                            <div class="income">
                                <div class="d-flex justify-content-around box">
                                    <img src="../resource/image/person icon.png" alt="" class="person_icon pt-3">
                                    <div class="pt-3 fs-2 text-primary">1.5k</div>
                                </div>
                                <p class="pt-3 ps-5 fs-3 income_text">Income</p>
                            </div>
                            <div class="order">
                                <div class="d-flex justify-content-around box">
                                    <img src="../resource/image/person icon.png" alt="" class="person_icon pt-3">
                                    <div class="pt-3 fs-2 text-info">300</div>
                                </div>
                                <p class="pt-3 ps-5 fs-3 order_text">Order</p>
                            </div>
                        </div>
                    </div>
                    <div class="order_box">
                        <div class="d-flex ">   
                            <a href="" class="m-3 fs-4">Recent Order</a>
                            <a href="" class="m-3 fs-4">Today Order</a>
                        </div>
                        <div>
                            <table class="table table-borderless-responsive-lg white_table tb-edit mx-5 mt-3">
                                <tr>
                                    <th>Username</th>
                                    <th>Date</th>   
                                    <th>Location</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="copyright text-center">Copyright@2022YadanarThike All Rights Reserved.</div>
        </form>
    </div>
</body>

</html>