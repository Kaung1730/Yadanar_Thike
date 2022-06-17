<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide Change</title>
    <link rel="shortcut icon" href="../resource/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link rel="stylesheet" href="../resource/css/contactEdit.css">
    <link rel="stylesheet" href="../resource/css/privacyPolicyList.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/slidechangeList.js"></script>
</head>

<body>
    <?php session_start();
    if (isset($_SESSION['status'])) { ?>
        <?php require "../Controller/slidechangeListController.php" ?>
        <div class="container-fluid">
            <form action="">
                <div class="row">
                    <div class="col-2 nav_box">

                    </div>
                    <div class="col-10">
                        <div class="title_bar">

                        </div>
                        <div class="contact-box mt-4">
                            <div class="btn mt-3">
                                <button type="button" class="btn btn-secondary mx-5 btn-1 btn-me"><a href="contactEdit.php" class="a-edit">Contact Edit</a></button>
                                <button type="button" class="btn btn-secondary mx-5 btn-2 btn-mag btn-me"><a href="adminList.php" class="a-edit">Login Management</a></button>
                                <button type="button" class="btn btn-secondary mx-5 btn-3 btn-me"><a href="slidechangeList.php" class="a-edit">Slide change</a></button>
                            </div>
                            <div class="input-part">
                                <table class="table table-striped white_table tb-edit mt-3">
                                    <tr>
                                        <th class="text-center w-25">No.</th>
                                        <th class="text-center">Slide Image</th>
                                        <th class="text-center last" colspan="2">Action</th>
                                    </tr>
                                    <?php
                                    $count = 1;
                                    foreach ($result as $key => $value) {
                                        echo "<tr>";
                                        echo "<td class='text-center'>" . $count . ".</td>";
                                        echo "<td class='text-center w-30'><img src='../resource/image/" . $value['slider_image'] . "'class='upload_img_sl'></td>";
                                        echo "<td class='text-center last'><a href='../View/slidechangeEdit.php?id=" . $value['slider_id'] . "'><button type='button' class='btn btn-outline-info'><ion-icon name='create-outline'></ion-icon></button></a></td>";
                                        echo "<td class='text-center last'><a href='../Controller/slidechangeDeleteController.php?id=" . $value['slider_id'] . "'><button type='button' class='btn btn-outline-danger'><ion-icon name='trash-outline'></ion-icon></button></a></td>";
                                        echo "</tr>";
                                        $count++;
                                    }
                                    ?>
                                </table>
                                <nav aria-label="Page navigation example">
                                    <a href="slidechangeAdd.php" class="a-edit"><button type="button" class="btn btn-secondary btn-3 mx-5 float-start">Add</button></a>
                                    <ul class="pagination float-end me-5">
                                        <li class="page-item"><a class="page-link" href="?pageno=1">First</a></li>
                                        <li class="page-item 
                                <?php
                                if ($pageno <= 1) {
                                    echo 'disabled';
                                }
                                ?>">
                                            <a class="page-link" href="
                                    <?php
                                    if ($pageno <= 1) {
                                        echo '#';
                                    } else {
                                        echo "?pageno=" . ($pageno - 1);
                                    }
                                    ?>
                                    ">
                                                <span aria-hidden="true">Pre</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#"><?php echo $pageno; ?></a></li>
                                        <li class="page-item
                                <?php
                                if ($pageno >= $total) {
                                    echo 'disabled';
                                }
                                ?>">
                                            <a class="page-link" href="
                                    <?php
                                    if ($pageno >= $total) {
                                        echo '#';
                                    } else {
                                        echo "?pageno=" . ($pageno + 1);
                                    }
                                    ?>
                                    ">Next</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="?pageno=<?php echo $total; ?>" aria-label="Next"><span aria-hidden="true">Last</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="copyright mt-4 text-center">Copyright@2022YadanarThike All Rights Reserved.</div>
                    </div>
            </form>
        </div>
    <?php } else {
        require "../View/adminLogin.php";
    } ?>
</body>

</html>