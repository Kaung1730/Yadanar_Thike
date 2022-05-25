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
    <link rel="stylesheet" href="../resource/css/privacyPolicyList.css">
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/deliverycontrolAdd.js"></script>
</head>

<body>
    <div class="container-fluid">
        <form action="">
            <div class="row">
                <div class="col-2 nav_box">

                </div>
                <div class="col-10">
                    <div class="title_bar">
                        <div class="title mt-1 mx-3 fs-4">Admin Settings</div>
                        <span class="title_list ms-3" id="adminCl">Admin</span>
                        <span class="title_list">></span>
                        <span class="title_list" id="adSet">admin settings</span>
                        <span class="title_list">></span>
                        <span class="title_list">Privacy & Policy</span>
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
                            <label for="question" class="form-label mt-2">Question</label>
                            <input type="password" id="question" class="form-control input-edit" aria-describedby="passwordHelpBlock">
                            <label for="address" class="form-label mt-2">Answer</label>
                            <textarea type="password" id="address" class="form-control input-edit" aria-describedby="passwordHelpBlock" cols="30" rows="10"></textarea>
                            <div class="buttonGp">
                                <a href="privacyPolicyList.php" class="a-edit"><button type="button" class="btn mt-2 mb-2 float-start btn-5">Back</button></a>
                                <button type="submit" class="btn btn-info mt-2 me-5 float-end btn-4">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="copyright mt-3 mb-2 text-center">Copyright@2022YadanarThike All Rights Reserved.</div>
                </div>
        </form>
    </div>
</body>

</html>