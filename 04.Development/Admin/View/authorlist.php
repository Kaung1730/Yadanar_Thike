<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link rel="stylesheet" href="../resource/css/authorlist.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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
                            <div class="title mt-1 mx-3 fs-4 title_author">Author</div>
                            <span class="title_list ms-3" id="adminCl">Author</span>
                            <span class="title_list">></span>
                            <span class="title_list" id="adSet">Author Lists</span>
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
                    <div class="author_bar">
                        <div class="d-flex justify-content-between">
                            <p class="pt-4 author_list">Author List</p>
                            <button class="add_author mt-4 me-4">Add New Author</button>
                        </div>
                        <hr />
                        <br>
                        <div class="d-flex justify-content-end">
                            <label for="" class="pe-2">Search</label>
                            <input type="Search" class="search_auther me-3">
                        </div>
                        <br/>
                        <table class="table table-borderless-responsive-lg white_table">
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Author Name</th>
                                <th>Author Description</th>
                                <th>Author Life</th>
                                <th>Action</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- <div class="copyright mt-4 text-center">Copyright@2022YadanarThike All Rights Reserved.</div> -->
        </form>
    </div>
</body>

</html>