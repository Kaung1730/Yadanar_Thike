<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author List</title>
    <link rel="shortcut icon" href="../resource/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../resource/css/contactEdit.css">
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link rel="stylesheet" href="../resource/css/authorList.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/authorList.js"></script>
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
                    <div class="author_bar">
                        <div class="d-flex justify-content-between">
                            <p class="pt-4 author_list">Author List</p>
                            <button class="add_author mt-4 me-4"><a href="./authorAdd.php" class="a-edit">Add New Author</a></button>
                        </div>
                        <hr />
                        <table class="table table-striped white_table tb-edit">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Author Name</th>
                                <th class="text-center">Author Description</th>
                                <th class="text-center">Author Life</th>
                                <th class="text-center last" colspan="2">Action</th>
                            </tr>
                            <?php
                            require "../Controller/authorListController.php";
                            $count = 1;
                            foreach ($result as $key => $value) {
                                echo "<tr>";
                                echo "<td class='text-center'>" . $count . ".</td>";
                                echo "<td class='text-center w-25'><img src='../resource/image/" . $value['author_image'] . "'class='upload_img'></td>";
                                echo "<td class='text-center'>" . $value['author_name'] . "</td>";
                                echo "<td class='text-center'>" . substr($value['author_about'], 0, 50) . "</td>";
                                echo "<td class='text-center'>" . $value['author_life'] . "</td>";
                                echo "<td class='text-center last'><a href='../View/authorEdit.php?id=" . $value['author_id'] . "'><button type='button' class='btn btn-outline-info'><ion-icon name='create-outline'></ion-icon></button></a></td>";
                                echo "<td class='text-center last'><a href='../Controller/authorDeleteController.php?id=" . $value['author_id'] . "'><button type='button' class='btn btn-outline-danger'><ion-icon name='trash-outline'></ion-icon></button></a></td>";
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
                    <div class="copyright mt-4 text-center">Copyright@2022YadanarThike All Rights Reserved.</div>
                </div>

        </form>
    </div>
</body>

</html>