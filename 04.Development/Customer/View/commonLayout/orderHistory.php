<div class="modal  fade ms-5 ms-lg-5 ms-md-0 " id="orderHistory" tabindex="-1" aria-labelledby="lg-orderHistoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content modal-parent">
            <div class="modal-header cart-header ps-lg-5">
                <h5 class="modal-title ms-lg-5" id="lg-orderHistoryLabel">မှာယူခဲ့သည့်စာရင်းများ</h5>
                <button type="button" class="btn-close btn-close-dark me-lg-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-history text-white  fw-light">
                <?php session_start();
                    if(!isset($_SESSION['status'])){ ?>
                        <div class="lead">စာအုပ်မဝယ်ယူရ​သေးပါ</div>
                    <?php }else{ ?>
                        <div class="order_history">

                        </div>
                        <!-- <div class="order_upper"></div>
                        <div class="book"></div>
                        <div class="order_status"></div>
                        <div class="deli_fee"></div>
                        <div class="total"></div> -->
                    <?php }?>
                
            </div>
        </div>
    </div>
</div>
