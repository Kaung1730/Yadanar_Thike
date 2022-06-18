<?php
  require "../../Controller/userSettingShowController.php";
?>

<div class="modal ms-5 ms-lg-5 ms-md-0 fade" id="userSetting" tabindex="-1" aria-labelledby="userSettingLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content modal-parent">
            <div class="modal-header cart-header ps-lg-5">
                <h5 class="modal-title fw-bold" id="userSettingLabel">ကိုယ်​ရေးအချက်အလက်များ ပြင်ဆင်မည်</h5>
                <button type="button" class="btn-close btn-close-dark me-lg-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-setting">
                <div class="">
                <input type="hidden" id="customer_id" value ="<?php echo $result[0]['customer_id']?>">
                        <!-- upload img and change img auto -->
                        <form method="post" action="" enctype="multipart/form-data" id="myform">
                            <div class="text-center preview">
                                <?php
                                    $_SESSION['customer_profileImg'] = $result[0]['customer_profileImg'];
                                ?>
                                <img src="<?php echo $result[0]['customer_profileImg']?>" class="" alt="" id="img" />
                            </div>
                            <div class="text-center change-img-text mt-2">
                                <input type="file" name="file" id="file" accept="" class="form-control">
                                <label for="file">
                                ပုံ​ရွေးချယ်ရန်
                                </label>
                                <span class="btn border-none change-img-text" id="but_upload">
                                    ရွေးချယ်ထား​​သောပုံ​ပြောင်းမည်။
                                </span>
                            </div>
                        </form>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                                <input type="text" name="username"  placeholder="User Name (English Only)" class="form-control ps-4 pt-2 username" value ="<?php echo $result[0]['customer_name']?>" />
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                                <input type="email" name="email"  placeholder="Email Address" class="form-control ps-4 pt-2 email" value ="<?php echo $result[0]['customer_email']?>"/>
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                                <input type="password" name="password"  placeholder="Password" class="form-control ps-4 pt-2 password" value ="<?php echo $result[0]['customer_password']?>"/>
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                                <input type="number" name="phone" placeholder="Phone Number" class="form-control ps-4 pt-2 phone" value ="<?php echo $result[0]['customer_phno']?>"/>
                            </div>
                        </div>
                        <div class="row mt-4 mb-3 justify-content-center">
                            <div class="col-lg-10 d-flex justify-content-between">
                                <button type="button" class="btn btn-dark pt-2 text-center update-btn" id="update-btn">ပြင်ဆင်မည်</button>
                                <button type="button" class="btn btn-dark pt-2 text-center normal-btn" data-bs-dismiss="modal" aria-label="Close">မပြင်ဆင်ပါ</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Sweet Alert-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--JS-->
    <script src="../resource/js/jquery3.6.0.js"></script>
<script>

$("#but_upload").click(function(){
    var fd = new FormData();
    var files = $('#file')[0].files;
// Check file selected or not
    if(files.length > 0 ){
    fd.append('file',files[0]);

    $.ajax({
        url: '../Controller/uploadImg.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
            console.log(response);
        if(response != 0){
            $("#img").attr("src",response); 
            $(".preview img").show(); // Display image element
        }else{
            swal({
                text: "ပုံ မ​ရွေးချယ်ရ​သေးပါ။ 11",
                button: { text: 'OK', className: 'commentBtn' },
            });
        }
    },
});
}else{
    swal({
        text: "ပုံ မ​ရွေးချယ်ရ​သေးပါ။",
        button: { text: 'OK', className: 'commentBtn' },
    });
}
});

$("#update-btn").click(function(){
        var userName = $(".username").val();
        var email = $('.email').val();
        var password = $('.password').val();
        var phone = $(".phone").val();
        var img =  $('#img').attr('src');
        var customer_id = $("#customer_id").val();
        let postData = {
            "userName": userName,
            "email" : email,
            "password" : password,
            "phone" : phone,
            "img" : img,
            "customer_id" :customer_id
        }
        $.ajax({
            url: "../Controller/userSettingUpdate.php",
            type: "POST",
            data:{send: JSON.stringify(postData)},
            success: function (res){
                console.log(res);
                if(res == 'success'){
                    //to update data
                    $.ajax({
                        url:"../Controller/userSettingUpdateShow.php",
                        type:"POST",
                        success:function(res){
                            console.log(res);
                        },
                        error:function(err){
                            console.log(err);
                        }

                    })
                    swal("ကိုယ်​ရေးအချက်အလက်များ ပြင်ဆင်မှု ​အောင်မြင်ပါသည်။", {
                        buttons: {
                        catch: {
                                text: "OK",
                                value: "success",
                                className: 'commentBtn'
                                },
                                defeat: false,
                        },
                    }).then((value) => {
                                        switch (value){
                                            case "success":
                                                location.reload();
                                        }
                        });
                }
            },
            error:function(err){
                alert(err);
            }
        });
    })

</script>