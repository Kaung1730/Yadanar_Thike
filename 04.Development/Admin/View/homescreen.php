<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Categories</title>
    <link rel="shortcut icon" href="../resource/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link rel="stylesheet" href="../resource/css/homescreen.css">
    <link rel="stylesheet" href="../resource/css/contactEdit.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/homeScreen.js"></script>
</head>

<body>
    <?php session_start();
    if (isset($_SESSION['status'])) { ?>
        <div class="container-fluid">
            <form action="../Controller/homeScreenController.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-2 nav_box">

                    </div>
                    <div class="col-10">
                        <div class="title_bar">
                            <div class="ps-1 pt-2">
                                <div class="title mt-1 mx-3 fs-4 title_author">Admin Settings</div>
                                <span class="title_list ms-3" id="adminCl">Admin</span>
                                <span class="title_list">></span>
                                <span class="title_list" id="adSet">admin settings</span>
                                <span class="title_list">></span>
                                <span class="title_list" id="adSet">Home Screen</span>
                            </div>
                        </div>
                        <div class="add_author">
                            <div class="title_homescreen fs-5">Home Screen</div>
                            <hr />
                            <div class="input-part ms-5 mt-5 slide-me">
                                <label for="logo" class="form-label mt-2 fs-5">Choose Logo</label>
                                <div class="input-group mt-2 mb-3 input-width">
                                    <input type="file" class="form-control input-edit" id="logo" name="logo">
                                    <label class="input-group-text input-btn" for="logo">Browse</label>
                                </div>
                            </div>
                            <div class="input-part ms-5 mt-5 slide-me">
                                <label for="icon" class="form-label mt-2 fs-5">Choose Icon</label>
                                <div class="input-group mt-2 mb-3 input-width">
                                    <input type="file" class="form-control input-edit" id="icon" name="icon">
                                    <label class="input-group-text input-btn" for="icon">Browse</label>
                                </div>
                            </div>
                            <div>
                                <label class="name fs-5 mt-3" for="shop">Choose Shop Name</label>
                                <input type="text" id="shop" class="form-control box1 input-edit" name="shop">
                                <!-- <br />
                            <input type="text" class="box2"> -->
                            </div>
                            <button class="submit" name="submit">Submit</button>
                        </div>
                        <div class="copyright text-center mt-2">Copyright@2022YadanarThike All Rights Reserved.</div>
                    </div>
                </div>
            </form>
        </div>
    <?php } else {
        require "../View/adminLogin.php";
    } ?>
</body>

</html>