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
    <link rel="stylesheet" href="../resource/css/contactEdit.css">
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
                    <button type="button" class="btn btn-danger btn-logout">Logout</button>
                </div>
                <div class="col-10">
                    <div class="title_bar">
                        <div class="title mt-1 mx-3 fs-4">Admin Settings</div>
                        <span class="title_list ms-3" id="adminCl">Admin</span>
                        <span class="title_list">></span>
                        <span class="title_list" id="adSet">admin settings</span>
                        <span class="title_list">></span>
                        <span class="title_list">Website Info</span>
                    </div>
                    <div class="contact-box mt-4">
                        <div class="head_text fs-3 pt-3 fw-normal">Website Info</div>
                        <hr />
                        <div class="btn">
                            <button type="button" class="btn btn-secondary mx-5 btn-1"><a href="contactEdit.php" class="a-edit">Contact Edit</a></button>
                            <button type="button" class="btn btn-secondary mx-5 btn-2"><a href="adminAdd.php" class="a-edit">Add Admin</a></button>
                            <button type="button" class="btn btn-secondary mx-5 btn-3"><a href="slideChange.php" class="a-edit">Slide change</a></button>
                        </div>
                        <div class="input-part ms-5">
                            <label for="admin" class="form-label mt-2">Admin Name</label>
                            <input type="password" id="admin" class="form-control input-edit" aria-describedby="passwordHelpBlock">
                            <label for="password" class="form-label mt-2">Password</label>
                            <input type="password" id="password" class="form-control input-edit" aria-describedby="passwordHelpBlock">
                            <label for="role" class="form-label mt-2">Role</label>
                            <input class="form-control input-edit" list="datalistOptions" id="role" placeholder="Type to search...">
                            <datalist id="datalistOptions">
                                <option value="Super Admin">
                                <option value="Normal Admin">
                            </datalist>
                            <button type="submit" class="btn btn-info mt-4 mb-3 btn-4">Submit</button>
                        </div>
                    </div>
                    <div class="copyright mt-4 text-center">Copyright@2022YadanarThike All Rights Reserved.</div>
                </div>
        </form>
    </div>
</body>

</html>