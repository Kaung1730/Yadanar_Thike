<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Add</title>
    <link rel="shortcut icon" href="../resource/image/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link rel="stylesheet" href="../resource/css/contactEdit.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/adminAdd.js"></script>
</head>

<body>
    <div class="container-fluid">
        <form action="">
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
                            <button type="button" class="btn btn-secondary mx-5 btn-2 btn-me"><a href="adminAdd.php" class="a-edit">Add Admin</a></button>
                            <button type="button" class="btn btn-secondary mx-5 btn-3 btn-me"><a href="slidechangeList.php" class="a-edit">Slide change</a></button>
                        </div>
                        <div class="input-part ms-5">
                            <label for="admin" class="form-label mt-2">Admin Name</label>
                            <input type="password" id="admin" class="form-control input-edit" aria-describedby="passwordHelpBlock">
                            <label for="password" class="form-label mt-2">Password</label>
                            <input type="password" id="password" class="form-control input-edit" aria-describedby="passwordHelpBlock">
                            <label for="role" class="form-label mt-2">Role</label>
                            <div class="input-group inputgp input-width">
                                <select class="form-select input-edit" id="inputGroupSelect04" aria-label="Example select with button addon">
                                    <option value="1">Super Admin</option>
                                    <option value="2">Normal Admin</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-info mt-4 mb-3 btn-4 btn-cen">Submit</button>
                        </div>
                    </div>
                    <div class="copyright mt-4 text-center">Copyright@2022YadanarThike All Rights Reserved.</div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>