<?php
  require "../../Controller/userSettingShowController.php"
?>

<div class="modal ms-5 ms-lg-5 ms-md-0 fade" id="userSetting" tabindex="-1" aria-labelledby="userSettingLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content modal-parent">
            <div class="modal-header cart-header ps-lg-5">
                <h5 class="modal-title fw-bold" id="userSettingLabel">ကိုယ်​ရေးအချက်အလက်များ ပြင်ဆင်မည်</h5>
                <button type="button" class="btn-close btn-close-dark me-lg-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="">
                <input type="hidden" name="customer_id" value ="<?php echo $result[0]['customer_id']?>">
                    <form id="userSettingForm" enctype="multipart/form-data">
                        <div class="imgChange">
                            <div class="text-center">
                                <img src="../resource/image/Vector.png" alt="" class="img-fluid" />
                            </div>
                            <div class="text-center change-img-text mt-2">
                                <input type="file" name="photo" id="photo" accept="" class="form-control">
                                <label for="photo">
                                    ပုံ​ပြောင်းမည်
                                </label>
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                                <input type="text" name="username"  placeholder="User Name (English Only)" class="form-control ps-4 pt-2" value ="<?php echo $result[0]['customer_name']?>" />
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                                <input type="email" name="email"  placeholder="Email Address" class="form-control ps-4 pt-2" value ="<?php echo $result[0]['customer_email']?>"/>
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                                <input type="password" name="password"  placeholder="Password" class="form-control ps-4 pt-2" value ="<?php echo $result[0]['customer_password']?>"/>
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                                <input type="number" name="phone" placeholder="Phone Number" class="form-control ps-4 pt-2" value ="<?php echo $result[0]['customer_phno']?>"/>
                            </div>
                        </div>
                        <div class="row mt-4 mb-3 justify-content-center">
                            <div class="col-lg-10 d-flex justify-content-between">
                                <input type="submit" value="ပြင်ဆင်မည်" class="btn btn-dark pt-2 text-center update-btn" id="update-btn" />
                                <button type="button" class="btn btn-dark pt-2 text-center normal-btn" data-bs-dismiss="modal" aria-label="Close">မပြင်ဆင်ပါ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>