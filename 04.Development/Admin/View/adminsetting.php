<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Settings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link rel="stylesheet" href="../resource/css/adminSetting.css">
    <link rel="stylesheet" href="../resource/css/contactEdit.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    </script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/adminSetting.js"></script>
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
                    <br />
                    <div class="setting_box">
                        <p class="text fs-3">Setting</p>
                        <div class="d-flex justify-content-around">
                            <div class="admin">
                                <p class="fs-4">Admin</p>
                                <p class="gmail fs-6">admin@gmail.com</p>
                            </div>
                            <div>
                                <img src="../resource/image/person icon.png" alt="" class="person_icon">
                            </div>
                        </div>
                        <!-- Home screen -->
                        <button class="screen_box mt-3">
                            <div class="d-flex justify-content-around screen_btn">
                                <img src="../resource/image/home.png" alt="" class="image mt-2 ms-4">
                                <div class="text_box d-flex justify-content-center">
                                    <p class="fs-4 text-light"><a href="./homeScreen.php" class="a-edit">Home Screen</a></p>
                                    <p class="logo_text1 text-light mt-2">Logo . Icon</p>
                                </div>
                            </div>
                        </button>
                        <!-- categories -->
                        <button class="screen_box mt-3">
                            <div class="d-flex justify-content-around screen_btn">
                                <img src="../resource/image/categories.webp" alt="" class="image mt-2 ms-4">
                                <div class="text_box">
                                    <p class="fs-5 text-light"><a href="./categoriesList.php" class="a-edit">Categories</a></p>
                                    <p class="logo_text2 text-light mt-2 ">Add . Edit . Delete</p>
                                </div>
                            </div>
                        </button>
                        <!-- website info -->
                        <button class="screen_box mt-3">
                            <div class="d-flex justify-content-around screen_btn">
                                <img src="../resource/image/webedit.png" alt="" class="image mt-2 ms-4">
                                <div class="text_box">
                                    <p class="fs-5 text-light"><a href="./contactEdit.php" class="a-edit">Website Info</a></p>
                                    <p class="logo_text3 text-light mt-2">Phone . Email . Address . Add Admin</p>
                                </div>
                            </div>
                        </button>
                        <!-- Delivery Control -->
                        <button class="screen_box mt-3">
                            <div class="d-flex justify-content-around screen_btn">
                                <img src="../resource/image/delivery.png" alt="" class="image mt-2 ms-4">
                                <div class="text_box">
                                    <p class="fs-5 text-light mt-2"><a href="./deliverycontrolList.php" class="a-edit">Delivery Control</a></p>
                                </div>
                            </div>
                        </button>
                        <!-- Privacy -->
                        <button class="screen_box mt-3">
                            <div class="d-flex justify-content-around">
                                <img src="../resource/image/privicy.png" alt="" class="image mt-2 ms-4">
                                <div class="text_box">
                                    <p class="fs-5 text-light mt-2"><a href="./privacyPolicyList.php" class="a-edit">Privacy</a></p>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="copyright text-center">Copyright@2022YadanarThike All Rights Reserved.</div>
                </div>
        </form>
    </div>
</body>

</html>