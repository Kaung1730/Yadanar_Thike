<?php
session_start();
if (isset($_SESSION['status'])) {
?>
<div class="modal  fade ms-5 ms-lg-5 ms-md-0" id="cartPopUp" tabindex="-1" aria-labelledby="lg-cartPopUpLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content modal-parent cardBody">
            <div class="modal-header cart-header ps-lg-5">
                <h5 class="modal-title ms-lg-4" id="lg-cartPopUpLabel">လူကြီးမင်း၏​စျေးခြင်း( <span class="order-count"></span>)</h5>
                <button type="button" class="btn-close btn-close-dark me-lg-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body  fw-light " id="cartBody">
                <!-- will insert card body from add to cart js -->
            </div>
            <div class="mb-lg-3 mt-lg-5 ps-5 ms-5 ms-lg-0 ms-md-0">
                    <div class="row ms-lg-5">
                        <div class="col-lg-8 col-12">
                            <button type="button" class="btn ms-3 rounded-pill text-dark order-btn" data-bs-toggle="modal" data-bs-target="#order">အမှာတင်မည်</button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<?php } else { ?>
    <div class="modal fade" id="cartPopUp" tabindex="-1" aria-labelledby="lg-cartPopUpLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lg-cartPopUpLabel">အ​ကောင့်ဝင်ထားရန် လိုအပ်ပါသည်။</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    ခြင်းတောင်းထဲထည့်ရန်အတွက်  အ​ကောင့်ဝင်ထားရန် လိုအပ်ပါသည်။
                </div>
                <div class="modal-footer">
                    <a href="http://localhost:81/YadnarThike/04.Development/Customer/View/login.php" class="btn text-decoration-none btnLink btn-primary commentBtn">အ​ကောင့်ဝင်မည်</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>