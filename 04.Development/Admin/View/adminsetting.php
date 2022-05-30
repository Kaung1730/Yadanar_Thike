<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Settings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link rel="stylesheet" href="../resource/css/adminsetting.css">
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
                            <div class="title mt-1 mx-3 fs-4 title_author">Admin Settings</div>
                            <span class="title_list ms-3" id="adminCl">Admin</span>
                            <span class="title_list">></span>
                            <span class="title_list" id="adSet">Settings</span>
                        </div>
                    </div>
                    <br />
                    <div class="setting_box">
                        <p class="text fs-3">Setting</p>
                        <div class="d-flex justify-content-around">
                            <div class="admin">
                                <p class="fs-5">Admin</p>
                                <p class="gmail">admin@gmail.com</p>
                            </div>
                            <div>
                                <img src="../resource/image/person icon.png" alt="" class="person_icon">
                            </div>
                        </div>
                        <button class="screen_box mt-3">
                            <div class="d-flex justify-content-around screen_btn">
                                <img src="../resource/image/home.png" alt="" class="image mt-2 ">
                                <div class="text_box">
                                    <p class="fs-5 text-light">Home Screen</p> 
                                    <p class="logo_text1 text-light mt-2">Logo: Icon</p>
                                </div>
                            </div>
                        </button>
                        <button class="screen_box mt-3">
                            <div class="d-flex justify-content-around screen_btn">
                                <img src="../resource/image/categories.webp" alt="" class="image mt-2">
                                <div class="text_box">
                                    <p class="fs-5 text-light">Categories</p> 
                                    <p class="logo_text2 text-light mt-2 ">Add, Edit, Delete</p>
                                </div>
                            </div>
                        </button>  
                        <button class="screen_box mt-3">
                            <div class="d-flex justify-content-around screen_btn">
                                <img src="../resource/image/webedit.png" alt="" class="image mt-2">
                                <div class="text_box">
                                    <p class="fs-5 text-light">Website Info</p> 
                                    <p class="logo_text3 text-light mt-2">Phone,Email,Address,Add Admin</p>
                                </div>
                            </div>
                        </button>
                        <button class="screen_box mt-3">
                            <div class="d-flex justify-content-around screen_btn">
                                <img src="../resource/image/delivery.png" alt="" class="image mt-2">
                                <div class="text_box">
                                    <p class="fs-5 text-light mt-2">Delivery Control</p> 
                                </div>
                            </div>
                        </button>
                        <button class="screen_box mt-3">
                            <div class="d-flex justify-content-around">
                                <img src="../resource/image/privicy.png" alt="" class="image mt-2">
                                <div class="text_box">
                                    <p class="fs-5 text-light mt-2">Privicy</p> 
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="copyright text-center">Copyright@2022YadanarThike All Rights Reserved.</div>
                </div>
        </form>
    </div>
</body>

</html>