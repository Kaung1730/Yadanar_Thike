<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Control</title>
    <link rel="shortcut icon" href="../resource/image/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../resource/css/commonAdmin.css">
    <link rel="stylesheet" href="../resource/css/contactEdit.css">
    <link rel="stylesheet" href="../resource/css/privacyPolicyList.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/deliverycontrolAdd.js"></script>
    <script src="../resource/js/deliverycontrolAddControl.js"></script>
</head>

<body>
    <div class="container-fluid">
        <form action="../Controller/deliveryUpdateController.php" id="delivery" method="POST">
            <div class="row">
                <div class="col-2 nav_box">

                </div>
                <div class="col-10">
                    <div class="title_bar">

                    </div>
                    <div class="contact-box mt-4">
                        <div class="btn mt-4">
                            <button type="button" class="btn btn-secondary mx-3 btn-3 btn-size"><a href="privacyPolicyList.php" class="a-edit">Privicy & Policy</a></button>
                            <button type="button" class="btn btn-secondary mx-3 btn-3 btn-size"><a href="guideList.php" class="a-edit">Guide</a></button>
                            <button type="button" class="btn btn-secondary mx-3 btn-1 btn-size"><a href="deliverycontrolList.php" class="a-edit">Delivery Control</a></button>
                            <button type="button" class="btn btn-secondary mx-3 btn-2 btn-size"><a href="serviceList.php" class="a-edit">Service</a></button>
                            <button type="button" class="btn btn-secondary mx-3 btn-3 btn-size"><a href="faqList.php" class="a-edit">FAQ</a></button>
                        </div>
                        <div class="input-part ms-5">
                            <!-- <label for="state" class="form-label mt-5">State</label>
                            <input type="text" id="state" class="form-control input-edit" aria-describedby="passwordHelpBlock" name="state">
                            <div class="input-group inputgp mt-3 input-width">
                                <select class="form-select input-edit state" id="state" aria-label="Example select with button addon" name="state">
                                    <option value="1">ကချင်ပြည်နယ်</option>
                                    <option value="2">ကယားပြည်နယ်</option>
                                    <option value="3">ကရင်ပြည်နယ်</option>
                                    <option value="4">ချင်းပြည်နယ်</option>
                                    <option value="5">စစ်ကိုင်းတိုင်းဒေသကြီး</option>
                                    <option value="6">တနင်္သာရီတိုင်းဒေသကြီး</option>
                                    <option value="7">ပဲခူးတိုင်းဒေသကြီး</option>
                                    <option value="8">မကွေးတိုင်းဒေသကြီး</option>
                                    <option value="9">မန္တလေးတိုင်း‌ဒေသကြီး</option>
                                    <option value="10">မွန်ပြည်နယ်</option>
                                    <option value="11">ရခိုင်ပြည်နယ်</option>
                                    <option value="12" selected>ရန်ကုန်တိုင်းဒေသကြီး</option>
                                    <option value="13">ရှမ်းပြည်နယ်</option>
                                    <option value="14">ဧရာဝတီတိုင်းဒေသကြီး</option>
                                </select>
                            </div>
                            <label for="township" class="form-label mt-5">Township</label>
                            <input type="text" id="township" class="form-control input-edit" aria-describedby="passwordHelpBlock" name="township">
                            <div class="input-group inputgp mt-3 input-width">
                                <select class="form-select input-edit township" id="township" aria-label="Example select with button addon" name="township">

                                </select>
                            </div> -->
                            <?php require "../Controller/deliveryEditController.php" ?>
                            <input type="hidden" class="box1 input-edit" name="id" value="<?php echo $result[0]['delivery_id'] ?>">
                            <label for="fee" class="form-label mt-5">Delivery Fee</label>
                            <input type="text" id="fee" class="form-control input-edit" aria-describedby="passwordHelpBlock" name="fee" value="<?php echo $result[0]['delivery_fee'] ?>">
                            <div class="buttonGp mt-5">
                                <a href="deliverycontrolList.php" class="a-edit"><button type="button" class="btn mt-2 mb-2 float-start btn-5">Back</button></a>
                                <button type="submit" class="btn btn-info mt-2 me-5 float-end btn-4">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="copyright mt-4 text-center">Copyright@2022YadanarThike All Rights Reserved.</div>
                </div>
        </form>
    </div>
</body>

</html>