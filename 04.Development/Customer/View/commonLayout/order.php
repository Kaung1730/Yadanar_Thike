<?php
session_start();
if (isset($_SESSION['status-customer'])) {
?>
    <div class="modal position-realtive start-0 fade ms-5 ms-lg-5 ms-md-0" id="order" tabindex="-1" aria-labelledby="lg-orderLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
            <div class="modal-content modal-parent">
                <div class="modal-header cart-header ps-lg-5">
                    <h5 class="modal-title ms-lg-5" id="lg-orderLabel">​အမှာတင်ရန်</h5>
                    <button type="button" class="btn-close btn-close-dark me-lg-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body fw-light order-body">
                    <div class="row first-part"></div>
                    <div class="row second-part"></div>
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
