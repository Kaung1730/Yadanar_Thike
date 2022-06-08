<?php
session_start();
if (isset($_SESSION['status'])) {
?>
    <div class="modal position-realtive start-0 fade ms-5 ms-lg-5 ms-md-0" id="order" tabindex="-1" aria-labelledby="lg-orderLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
            <div class="modal-content modal-parent">
                <div class="modal-header cart-header ps-lg-5">
                    <h5 class="modal-title ms-lg-5" id="lg-orderLabel">​အော်ဒါနံပါတ် - <span><b> 123</b></span></h5>
                    <button type="button" class="btn-close btn-close-dark me-lg-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body fw-light">
                    <div class="row g-0">
                        <div class="col-lg-4">
                            <img src="../resource/image/The-beginning-of-attachment-and-the-end-of-forgiveness-1-300x300 13 copy 2.png" class="img-fluid ps-5 ps-md-0 ps-lg-0" alt="" />
                        </div>
                        <div class="col-lg-7">
                            <div class="row text-white">
                                <div class="col">
                                    <p class="book-title">ငြိတွယ်ခြင်းတို့ရဲ့အစခွင့်လွှတ်ရခြင်းတို့ရဲ့အဆုံး</p>
                                    <p class="book-text">= 5000 (ကျပ်)</p>
                                </div>
                                <div class="col-6   col-md-12 col-lg-12">
                                    <!--Number of book increase or decrease-->
                                    <div>
                                        <div class="input-group mb-3 d-flex mt-2 numberContainer text-center align-item-center">
                                            <button class="input-group-text fw-bold text-dark decrease">ー</button>
                                            <input type="text" class="form-control fw-bold text-dark text-center qty-text" disabled value="1">
                                            <button class="input-group-text fw-bold text-dark increase">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 ">
                            <i class="bi bi-trash3 text-warning"></i>
                            <!-- <i class="fa-solid fa-trash text-white"></i> -->
                        </div>
                        <div class="row mb-1 mt-3 book-text">
                            <div class="col text-white">ပို့​ဆောင်ခ - 1000 (ကျပ်)</div>
                        </div>
                        <div class="row my-1 book-text">
                            <div class="col text-white">စုစု​ပေါင်း - 6000 (ကျပ်)</div>
                        </div>
                        <hr class="my-3">
                    </div>
                    <!--Lower form part-->
                    <div class="lower-form text-white">
                        <div class="form-title order-text">စာအုပ်ကို ပို့​ဆောင်​ပေးနိုင်ရန် ​အောက်ပါ အချက်အလက်များကို မှန်ကန်တိကျစွာ ဖြည့်ပါ</div>
                    </div>

                    <form action="" class="text-white" method="POST">
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                                <label for="" class="book-text my-2">အမည်</label>
                                <input type="text" name="username" required class="form-control ps-4 pt-2" />
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10 ">
                                <label for="" class="book-text my-2">ဖုန်းနံပါတ်</label>
                                <input type="number" name="phone" required class="form-control ps-4 pt-2" />
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                                <label for="" class="book-text my-2">တိုင်း​ဒေသကြီး/ပြည်နယ်</label>
                                <select name="" id="" class="book-text my-2 px-lg-4 mx-auto py-1">
                                    <option value="ဧရာဝတီတိုင်းဒေသကြီး">ဧရာဝတီတိုင်းဒေသကြီး</option>
                                    <option value="ပဲခူးတိုင်းဒေသကြီး">ပဲခူးတိုင်းဒေသကြီး</option>
                                    <option value="ချင်းပြည်နယ်">ချင်းပြည်နယ်</option>
                                    <option value="ကချင်ပြည်နယ်">ကချင်ပြည်နယ်</option>
                                    <option value="ကယားပြည်နယ်">ကယားပြည်နယ်</option>
                                    <option value="ကရင်ပြည်နယ်">ကရင်ပြည်နယ်</option>
                                    <option value="	မကွေးတိုင်းဒေသကြီး">မကွေးတိုင်းဒေသကြီး</option>
                                    <option value="	မန္တလေးတိုင်းဒေသကြီး">မန္တလေးတိုင်းဒေသကြီး</option>
                                    <option value="မွန်ပြည်နယ်">မွန်ပြည်နယ်</option>
                                    <option value="နေပြည်တော် ပြည်ထောင်စုနယ်မြေ">နေပြည်တော် ပြည်ထောင်စုနယ်မြေ</option>
                                    <option value="ရခိုင်ပြည်နယ်">ရခိုင်ပြည်နယ်</option>
                                    <option value="စစ်ကိုင်းတိုင်းဒေသကြီး">စစ်ကိုင်းတိုင်းဒေသကြီး</option>
                                    <option value="ရှမ်းပြည်နယ်">ရှမ်းပြည်နယ်</option>
                                    <option value="တနင်္သာရီတိုင်းဒေသကြီး">တနင်္သာရီတိုင်းဒေသကြီး</option>
                                    <option value="ရန်ကုန်တိုင်းဒေသကြီး">ရန်ကုန်တိုင်းဒေသကြီး</option>
                                </select>
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                                <label for="" class=" book-text my-2">မြို့</label>
                                <input type="text" name="town" required class="form-control ps-4 pt-2" />
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                                <label for="" class=" book-text my-2">အိမ်အမှတ်၊ လမ်းအမည်၊ ရပ်ကွက်၊ မြို့နယ်</label>
                                <input type="text" name="address" class="form-control ps-4 pt-2" />
                            </div>
                        </div>
                        <div class="order-text ps-lg-4 ps-md-4 ps-0">
                            အိမ်အ​ရောက်​ငွေ​ချေစနစ်
                        </div>
                        <div class="row ms-lg-3 justify-content-center my-2">
                            <div class="col-6">စုစု​ပေါင်း</div>
                            <div class="col-6">6000 (ကျပ်)</div>
                        </div>
                        <hr>
                        <div class="row mt-4 mb-3 justify-content-center">
                            <div class="col-lg-10 d-flex justify-content-center">
                                <input type="submit" value="အမှာတင်မည်" class="btn btn-dark pt-2 text-center order-btn rounded-pill text-dark" data-target="" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="modal fade" id="order" tabindex="-1" aria-labelledby="lg-orderLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lg-orderLabel">အ​ကောင့်ဝင်ထားရန် လိုအပ်ပါသည်။</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    အမှာတင်ရန်အတွက်  အ​ကောင့်ဝင်ထားရန် လိုအပ်ပါသည်။
                </div>
                <div class="modal-footer">
                    <a href="http://localhost:81/YadnarThike/04.Development/Customer/View/login.php" class="btn text-decoration-none btnLink btn-primary commentBtn">အ​ကောင့်ဝင်မည်</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<script>
    $(document).ready(function(){
    $(".increase").click(function(e){
        e.preventDefault();
        var qty = $(".qty-text").val();
        var value = parseInt(qty, 10);
        value = isNaN(value) ? 1 : value;
        //to set maximun 10 for each book
        if(value < 10){
            value++;
            $(".qty-text").val(value);
        }
    })
    $(".decrease").click(function(e){
        e.preventDefault();
        var qty = $(".qty-text").val();
        var value = parseInt(qty, 10);
        value = isNaN(value) ? 1 : value;
        //to set maximun 10 for each book
        if(value > 1){
            value--;
            $(".qty-text").val(value);
        }
    })
})
</script>