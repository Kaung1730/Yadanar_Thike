<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link rel="stylesheet" href="../resource/css/contactEdit.css">
    <link rel="stylesheet" href="../resource/css/privicy&policyList.css">
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
                        <span class="title_list">Privicy & Policy</span>
                    </div>
                    <div class="contact-box mt-4">
                        <div class="btn mt-4">
                            <button type="button" class="btn btn-secondary mx-3 btn-1 btn-size"><a href="privicy&policyList.php" class="a-edit">Privicy & Policy</a></button>
                            <button type="button" class="btn btn-secondary mx-3 btn-2 btn-size"><a href="guide.php" class="a-edit">Guide</a></button>
                            <button type="button" class="btn btn-secondary mx-3 btn-3 btn-size"><a href="deliverycontrolList.php" class="a-edit">Delivery Control</a></button>
                            <button type="button" class="btn btn-secondary mx-3 btn-3 btn-size"><a href="service.php" class="a-edit">Service</a></button>
                            <button type="button" class="btn btn-secondary mx-3 btn-3 btn-size"><a href="faqList.php" class="a-edit">FAQ</a></button>
                        </div>
                        <table class="table table-borderless tb-edit mx-5 mt-3">
                            <tr class="table-secondary">
                                <th class="text-start">No.</th>
                                <th class="text-center">Question</th>
                                <th class="text-center">Answer</th>
                                <th class="text-end">Action</th>
                            </tr>
                            <tr class="table-light">
                                <td class="text-start">1</td>
                                <td class="text-center">1</td>
                                <td class="text-center">1</td>
                                <td class="text-end">1</td>
                            </tr>
                            <tr class="table-secondary">
                                <td class="text-start">1</td>
                                <td class="text-center">1</td>
                                <td class="text-center">1</td>
                                <td class="text-end">1</td>
                            </tr>
                            <tr class="table-light">
                                <td class="text-start">1</td>
                                <td class="text-center">1</td>
                                <td class="text-center">1</td>
                                <td class="text-end">1</td>
                            </tr>
                            <tr class="table-secondary">
                                <td class="text-start">1</td>
                                <td class="text-center">1</td>
                                <td class="text-center">1</td>
                                <td class="text-end">1</td>
                            </tr>
                            <tr class="table-light">
                                <td class="text-start">1</td>
                                <td class="text-center">1</td>
                                <td class="text-center">1</td>
                                <td class="text-end">1</td>
                            </tr>
                            <tr class="table-secondary">
                                <td class="text-start">1</td>
                                <td class="text-center">1</td>
                                <td class="text-center">1</td>
                                <td class="text-end">1</td>
                            </tr>
                        </table>

                        <nav aria-label="Page navigation example">
                            <button type="button" class="btn btn-secondary btn-3 mx-5"><a href="privicy&policyAdd.php" class="a-edit">Add</a></button>
                            <ul class="pagination justify-content-end me-5">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&#10094;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&#10095;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                    <div class="copyright mt-3 text-center">Copyright@2022YadanarThike All Rights Reserved.</div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>