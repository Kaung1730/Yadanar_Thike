<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User info</title>
    <link rel="shortcut icon" href="../resource/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link rel="stylesheet" href="../resource/css/userInfo.css">
    <link rel="stylesheet" href="../resource/css/contactEdit.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/userInfo.js"></script>
    <script src="../resource/js/userInfoController.js"></script>
</head>

<body>
    <?php session_start();
    if (isset($_SESSION['status'])) { ?>
        <?php require "../Controller/userInfoController.php" ?>
        <div class="container-fluid">
            <form action="">
                <div class="row">
                    <div class="col-2 nav_box">

                    </div>
                    <div class="col-10">
                        <div class="d-flex title_bar text-align-center">

                        </div>
                        <div class="author_bar">
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <table class="table table-striped white_table tb-edit">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">User's Name</th>
                                    <th class="text-center">Email</th>
                                    <!-- <th class="text-center">Address</th> -->
                                    <th class="text-center">Ph.No</th>
                                    <th class="text-center">Valid</th>
                                </tr>
                                <?php
                                $count = 1;
                                foreach ($result as $key => $value) {
                                    echo "<tr>";
                                    echo "<td class='text-center'>" . $count . ".</td>";
                                    echo "<td class='text-center'>" . $value['customer_name'] . "</td>";
                                    echo "<td class='text-center'>" . $value['customer_email'] . "</td>";
                                    echo "<td class='text-center'>" . $value['customer_phno'] . "</td>";
                                    echo "<td class='text-center'>";
                                    if ($value['valid'] == 1)
                                        echo "<input type='checkbox' name='' id='check' class='check' checked>";
                                    else
                                        echo "<input type='checkbox' name='' id='check' class='check'>";
                                    echo '<input type="hidden" class="user_id" value="' . $value["customer_id"] . '">';
                                    echo "</td>";
                                    echo "</tr>";
                                    $count++;
                                }
                                ?>
                            </table>
                            <nav aria-label="Page navigation example">
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
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </div>
                        <div class="copyright mt-4 text-center mt-2">Copyright@2022YadanarThike All Rights Reserved.</div>
                    </div>

            </form>
        </div>
    <?php } else {
        require "../View/adminLogin.php";
    } ?>
</body>

</html>