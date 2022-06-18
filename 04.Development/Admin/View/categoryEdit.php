<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories Edit</title>
    <link rel="shortcut icon" href="../resource/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link rel="stylesheet" href="../resource/css/addNewCategories.css">
    <link rel="stylesheet" href="../resource/css/contactEdit.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/addNewCategories.js"></script>
</head>

<body>
    <?php session_start();
    if (isset($_SESSION['status'])) { ?>
        <div class="container-fluid">
            <form action="../Controller/categoryUpdateController.php" method="POST">
                <div class="row">
                    <div class="col-2 nav_box">

                    </div>
                    <div class="col-10">
                        <div class="title_bar">

                        </div>
                        <div class="add_author">
                            <div class="title_addnewcat fs-5">Update Categories</div>
                            <hr />
                            <div>
                                <?php require "../Controller/categoryEditController.php"; ?>
                                <input type="hidden" class="box1 input-edit" name="id" value="<?php echo $result[0]['category_id'] ?>">
                                <label class="cat_name fs-5" for="">Category Name</label>
                                <input type="text" class="box1 input-edit" name="cate_name" value="<?php echo $result[0]['category_name'] ?>">
                            </div>
                            <button class="submit" name="submit">Submit</button>
                        </div>
                        <div class="copyright text-center">Copyright@2022YadanarThike All Rights Reserved.</div>
            </form>
        </div>
    <?php } else {
        require "../View/adminLogin.php";
    } ?>
</body>

</html>