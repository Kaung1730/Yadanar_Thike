<?php
session_start();
require "../../Controller/cartItemShow.php";
if (isset($_SESSION['status'])) {
    if (isset($_SESSION['cart'])) {
    
    }
    else{
        $item_array = array(
            'item_id' => $cartDataResult[0]['book_id'],
            'customer_id' => $cartDataResult[0]['customer_id'],
            'item_name' => $cartDataResult[0]['book_name'],
            'item_qty' => $cartDataResult[0]['quantity'],
        );
        $_SESSION['cart'][0] = $item_array;
    }
?>
<div class="modal  fade ms-5 ms-lg-5 ms-md-0" id="cartPopUp" tabindex="-1" aria-labelledby="lg-cartPopUpLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content modal-parent cardBody">
            <div class="modal-header cart-header ps-lg-5">
                <h5 class="modal-title ms-lg-4" id="lg-cartPopUpLabel">လူကြီးမင်း၏​စျေးခြင်း( <span class="order-count fw-bold"></span>)</h5>
                <button type="button" class="btn-close btn-close-dark me-lg-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body  fw-light " id="cartBody">
                <!-- will insert card body from add to cart js -->
                <?php foreach ($cartDataResult as $key => $value) {?>
                    <div class="row g-0">
                        <div class="col-lg-3">
                            <img src="<?php echo $value['book_img']?>" class="img-fluid ps-5 ps-md-0 ps-lg-0" alt="" id="imgCart"/>
                        </div>
                        <div class="col-lg-8">
                            <div class="row text-white">
                                <div class="col-12">
                                    <input type="hidden" name="book_id">
                                    <p class="book-title"><?php echo $value['book_name']?></p>
                                </div>
                                <div class="col-6 col-md-12 col-lg-12">
                                    <span class="book-text book-qty"><?php echo $value['quantity']?></span>
                                    <span class="book-text">x</span>
                                    <span class="book-text book-price"><?php echo $value['book_price']?>(ကျပ်)</span>
                                </div>
                                <button class="col-6 d-block d-md-none d-lg-none col-md-12 col-lg-12 delete-btn" value="<?php echo $value['book_id']?>">
                                    <i class="bi bi-trash3 bg-trasnparent text-warning" value="<?php echo $value['book_id']?>"></i>
                                </button>
                                <div class="col-12">
                                    <span class="book-text"><span>=</span> <span class="total-price"></span><?php echo ($value['quantity'] * $value['book_price'] )?>(ကျပ်)</span>
                                </div>
                            </div>
                        </div>
                        <button class="col-lg-1  d-none d-md-block d-lg-block delete-btn" value="<?php echo $value['book_id']?>">
                        <i class="bi bi-trash3  bg-trasnparent text-warning" value="<?php echo $value['book_id']?>"></i>
                        </button>
                    </div>
                    <hr>
                <?php }  ?>
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

<script>
    $(".order-count").text(localStorage.getItem('cartCount'));
</script>