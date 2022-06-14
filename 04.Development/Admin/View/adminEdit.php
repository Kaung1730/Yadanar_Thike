<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Add</title>
    <link rel="shortcut icon" href="../resource/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link rel="stylesheet" href="../resource/css/contactEdit.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/adminAdd.js"></script>
    <script src="../resource/js/adminAddController.js"></script>
</head>

<body>
    <div class="container-fluid">
        <form action="../Controller/adminUpdateController.php" method="POST">
            <div class="row">
                <div class="col-2 nav_box">

                </div>
                <div class="col-10">
                    <div class="title_bar">
                    </div>
                    <div class="contact-box mt-4">
                        <div class="head_text fs-3 pt-3 fw-normal">Website Info</div>
                        <hr />
                        <div class="btn">
                            <button type="button" class="btn btn-secondary mx-5 btn-1 btn-me"><a href="contactEdit.php" class="a-edit">Contact Edit</a></button>
                            <button type="button" class="btn btn-secondary mx-5 btn-2 btn-mag btn-me"><a href="adminList.php" class="a-edit">Login Management</a></button>
                            <button type="button" class="btn btn-secondary mx-5 btn-3 btn-me"><a href="slidechangeList.php" class="a-edit">Slide change</a></button>
                        </div>
                        <div class="input-part ms-5">
                            <?php require "../Controller/adminEditController.php" ?>
                            <input type="hidden" class="box1 input-edit" name="id" value="<?php echo $result[0]['admin_id'] ?>">
                            <label for="admin" class="form-label mt-2">Admin Name</label>
                            <input type="text" id="admin" class="form-control input-edit" aria-describedby="passwordHelpBlock" name="ad_name" value="<?php echo $result[0]['admin_name'] ?>">
                            <label for="admin" class="form-label mt-2">Admin Email</label>
                            <input type="email" id="admin" class="form-control input-edit" aria-describedby="passwordHelpBlock" name="email" value="<?php echo $result[0]['admin_email'] ?>">
                            <label for="password" class="form-label mt-2">Password</label>
                            <input type="password" id="password" class="form-control input-edit" aria-describedby="passwordHelpBlock" name="password" value="<?php echo $result[0]['admin_password'] ?>">
                            <label for="role" class="form-label mt-2">Role</label>
                            <div class="input-group inputgp input-width">
                                <select class="form-select input-edit" id="role_sel" aria-label="Example select with button addon" name="role">
                                    <option value="0">Super Admin</option>
                                    <option value="1">Normal Admin</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-info mt-4 mb-3 btn-4 btn-cen" id="submit">Update</button>
                        </div>
                    </div>
                    <div class="copyright mt-4 text-center">Copyright@2022YadanarThike All Rights Reserved.</div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>