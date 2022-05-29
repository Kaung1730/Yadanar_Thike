<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link rel="stylesheet" href="../resource/css/bookadd.css">
    <link rel="stylesheet" href="../resource/css/contactEdit.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
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
                    <div class="title_bar">
                        <div class="ps-1 pt-2">
                            <div class="title mt-1 mx-3 fs-4 title_author">Book</div>
                            <span class="title_list ms-3" id="adminCl">Admin</span>
                            <span class="title_list">></span>
                            <span class="title_list" id="adSet">Book Lists</span>
                        </div>
                    </div>
                    <div class="add_author">
                        <form action="">
                            <div class="title_addauthor fs-5">Add Books</div>
                            <hr />
                            <div>
                                <label class="book_name fs-5" for="">Book Name:</label>
                                <br />
                                <input type="text" class="box1">
                            </div>
                            <div>
                                <label class="categories fs-5" for="">Categories:</label>
                                <br />
                                <input type="text" class="box1">
                            </div>
                            <div>
                                <label for="" class="author fs-5">Author:</label>
                                <br />
                                <input type="text" class="box1">
                            </div>
                            <div>
                                <label for="" class="book_image fs-5">Book Image:</label>
                                <br />
                                <input type="text" class="box2">
                                <span><button class="browse_btn">Browse</button></span>
                            </div>
                            <div>
                                <label for="" class="book_price fs-5">Book Price:</label>
                                <br />
                                <input type="text" class="box1">
                            </div>
                            <div>
                                <label for="" class="book_des fs-5">Book Description:</label>
                                <br />
                                <input type="text" class="box1">
                            </div>
                            <div>
                                <label for="" class="page_no fs-5">Page No:</label>
                                <br />
                                <input type="text" class="box1">
                            </div>
                            <div>
                                <label for="" class="size fs-5">Size</label>
                                <div class="d-flex ">
                                    <div>
                                        <label for="" class="length fs-5">Length:</label>
                                        <select id="box_lwh" name="length">
                                        </select>
                                    </div>
                                    <div>
                                        <label for="" class="width fs-5">Width:</label>
                                        <select id="box_lwh" name="width">
                                        </select>
                                    </div>
                                    <div>
                                        <label for="" class="height fs-5">Height:</label>
                                        <select id="box_lwh" name="height">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="" class="publisher fs-5">Publisher:</label>
                                <br />
                                <input type="text" class="box1">
                            </div>
                            <div>
                                <button type="submit" name="submit" class="submit">Submit</button>
                                <button type="reset" name="reset" class="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                    <div class="copyright text-center">Copyright@2022YadanarThike All Rights Reserved.</div>
        </form>
    </div>
</body>

</html>