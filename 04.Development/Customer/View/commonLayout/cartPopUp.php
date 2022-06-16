<?php
session_start();
require "../../Controller/cartItemShow.php";
if (isset($_SESSION['status'])) {
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
                    <?php foreach ($cartDataResult as $key => $value) { ?>
                        <div class="row g-0">
                            <div class="col-lg-3">
                                <img src="../../Admin/resource/image/<?php echo $value['book_img'] ?>" class="img-fluid ps-5 ps-md-0 ps-lg-0" alt="" id="imgCart" />
                            </div>
                            <div class="col-lg-8">
                                <div class="row text-white">
                                    <div class="col-12">
                                        <?php if (isset($_SESSION['status'])) {
                                            $customer_id = $_SESSION['customer_id']; ?>
                                            <input type="hidden" id="customer_id" name="customer_id" value="<?php echo $customer_id; ?>">
                                        <?php } ?>
                                        <p class="book-title"><?php echo $value['book_name'] ?></p>
                                    </div>
                                    <div class="col-6 col-md-12 col-lg-12">
                                        <span class="book-text book-qty"><?php echo $value['quantity'] ?></span>
                                        <span class="book-text">x</span>
                                        <!-- Discount -->
                                        <?php if (isset($value['discount_price'])) { ?>
                                            <span class="book-text book-price"><?php echo $value['discount_price'] ?>(ကျပ်)</span>
                                        <?php } else { ?>
                                            <span class="book-text book-price"><?php echo $value['book_price'] ?>(ကျပ်)</span>
                                        <?php } ?>
                                    </div>
                                    <button class="col-6 d-block d-md-none d-lg-none col-md-12 col-lg-12 delete-btn" value="<?php echo $value['book_id'] ?>">
                                        <i class="bi bi-trash3 bg-trasnparent text-warning" value="<?php echo $value['book_id'] ?>"></i>
                                    </button>
                                    <div class="col-12">
                                        <span class="book-text"><span>=</span> <span class="total-price"></span><?php echo ($value['quantity'] * $value['book_price']) ?>(ကျပ်)</span>
                                    </div>
                                </div>
                            </div>
                            <button class="col-lg-1  d-none d-md-block d-lg-block delete-btn" value="<?php echo $value['book_id'] ?>">
                                <i class="bi bi-trash3  bg-trasnparent text-warning" value="<?php echo $value['book_id'] ?>"></i>
                            </button>
                        </div>
                        <hr>
                    <?php }  ?>
                </div>
                <div class="mb-lg-3 mt-lg-5 ps-5 ms-5 ms-lg-0 ms-md-0">
                    <div class="row ms-lg-5">
                        <div class="col-lg-8 col-12">
                            <button type="button" class="btn ms-3 rounded-pill text-dark order-btn hide-order" data-bs-toggle="modal" data-bs-target="#order">အမှာတင်မည်</button>
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
                    ခြင်းတောင်းထဲထည့်ရန်အတွက် အ​ကောင့်ဝင်ထားရန် လိုအပ်ပါသည်။
                </div>
                <div class="modal-footer">
                    <a href="http://localhost:81/YadnarThike/04.Development/Customer/View/login.php" class="btn text-decoration-none btnLink btn-primary commentBtn">အ​ကောင့်ဝင်မည်</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<script>
    $(document).ready(function() {
        $(".order-count").text(localStorage.getItem('cartCount'));
        $(".delete-btn").click(function() {
            swal("ခြင်း​တောင်းထဲက စာအုပ်ကို ဖျက်မှာ ​သေချာ ပါသလား။", {
                    buttons: {
                        catch: {
                            text: "ဖျက်မည်။",
                            value: "send",
                            className: 'commentBtn'
                        },
                        defeat: false,
                    },
                })
                .then((value) => {
                    switch (value) {
                        case "send":
                            var item_id = $(this).val();
                            let postdata = {
                                "item_id": item_id,
                            }
                            console.log(name);
                            $.ajax({
                                url: "../Controller/deleteCartItem.php",
                                type: "POST",
                                data: {
                                    senddata: JSON.stringify(postdata)
                                },
                                success: function(res) {
                                    swal("ခြင်း​တောင်းထဲက စာအုပ်ကို ဖျက်ပြီးပါပြီ။", {
                                        buttons: {
                                            catch: {
                                                text: "OK",
                                                value: "remove",
                                                className: 'commentBtn'
                                            },
                                            defeat: false,
                                        },
                                    }).then((value) => {
                                        switch (value) {
                                            case "remove":
                                                location.reload();
                                        }
                                    })

                                },
                                error: function(err) {
                                    alert(err);
                                }
                            });
                            break;
                    }
                });
        })

        //order btn
        var cartArray = [],
            cart_id, customer_id, totalPrice = [],
            newqty = 0,
            newBookPrice = 0,
            selected, bookId, delivery_id, delivery_fee, qty, book_price, qtyArray = [],
            book_priceArray = [];
        $(".order-btn").click(function() {
            $customer_id = $("#customer_id").val();
            if (parseInt($(".order-count").text()) != 0) {
                let sendData = {
                    "customer_id": $customer_id,
                }
                $.ajax({
                    url: "../Controller/takeCartItemController.php",
                    type: "POST",
                    data: {
                        send: JSON.stringify(sendData)
                    },
                    success: function(res) {
                        var data = $.parseJSON(res);
                        data.forEach(element => {
                            bookId = element.book_id;
                            qty = element.quantity;
                            qtyArray.push(qty);
                            cart_id = element.cart_id;
                            //discount
                            if (element.discount_price) {
                                book_price = element.discount_price;
                                book_priceArray.push(book_price);
                                totalPrice.push(element.quantity * element.discount_price);
                                $(".first-part").append(`
                <div class="row g-0">
                        <div class="col-lg-4">
                            <img src="../../Admin/resource/image/${element.book_img}" class="img-fluid ps-5 ps-md-0 ps-lg-0" alt="" />
                        </div>
                        <div class="col-lg-7">
                            <div class="row text-white">
                                <div class="col">
                                    <p class="book-title">${element.book_name}</p>
                                    <p class="book-title">${element.quantity} x  ${element.discount_price}</p>
                                    <p class="book-text">= <span class="book_p">${(Number(element.quantity))*(Number(element.discount_price))}</span>(ကျပ်)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                `);
                            } else {
                                book_price = element.book_price;
                                book_priceArray.push(book_price);
                                totalPrice.push(element.quantity * element.book_price);
                                $(".first-part").append(`
                <div class="row g-0">
                        <div class="col-lg-4">
                            <img src="../../Admin/resource/image/${element.book_img}" class="img-fluid ps-5 ps-md-0 ps-lg-0" alt="" />
                        </div>
                        <div class="col-lg-7">
                            <div class="row text-white">
                                <div class="col">
                                    <p class="book-title">${element.book_name}</p>
                                    <p class="book-title">${element.quantity} x  ${element.book_price}</p>
                                    <p class="book-text ">= <span class="book_p">${(Number(element.quantity))*(Number(element.book_price))}</span>(ကျပ်)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                `);
                            }
                            // book_price = element.book_price;
                            // book_priceArray.push(book_price);
                            customer_id = element.customer_id;
                            cartArray.push(cart_id);
                            // totalPrice.push(element.quantity * element.book_price);
                            //     $(".first-part").append(`
                            // <div class="row g-0">
                            //         <div class="col-lg-4">
                            //             <img src="../resource/image/${element.book_img}" class="img-fluid ps-5 ps-md-0 ps-lg-0" alt="" />
                            //         </div>
                            //         <div class="col-lg-7">
                            //             <div class="row text-white">
                            //                 <div class="col">
                            //                     <p class="book-title">${element.book_name}</p>
                            //                     <p class="book-title">${element.quantity} x  ${element.book_price}</p>
                            //                     <p class="book-text">= ${(element.quantity)*(element.book_price)}(ကျပ်)</p>
                            //                 </div>
                            //             </div>
                            //         </div>
                            //     </div>
                            //     <hr>
                            // `);


                        });
                        $("#township").css("width", "16rem !important");
                        $(".second-part").append(`
                <div class="lower-form text-white">
                        <div class="form-title order-text">စာအုပ်ကို ပို့​ဆောင်​ပေးနိုင်ရန် ​အောက်ပါ အချက်အလက်များကို မှန်ကန်တိကျစွာ ဖြည့်ပါ</div>
                    </div>

                    <div  class="text-white">
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                                <label for="" class="book-text my-2">အမည်</label>
                                <input type="text" name="username" required class="form-control ps-4 pt-2 name" />
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10 ">
                                <label for="" class="book-text my-2">ဖုန်းနံပါတ်</label>
                                <input type="number" name="phone" required class="form-control ps-4 pt-2 phno" />
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                                <label for="" class="book-text my-2">တိုင်း​ဒေသကြီး/ပြည်နယ်</label>
                                <select name="" id="state" class="book-text my-2 px-lg-4 mx-auto py-1">
                                    <option value=""></option>
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
                                <label for="township" class=" book-text my-2">မြို့</label>
                                <br>
                                <select name="" id="township" class="book-text my-2 px-lg-5 mx-auto py-1 township">

                                </select>
                            </div>
                        </div>
                        <div class="row my-3 justify-content-center">
                            <div class="col-lg-10">
                                <label for="" class=" book-text my-2">အိမ်အမှတ်၊ လမ်းအမည်၊ ရပ်ကွက်၊ မြို့နယ်</label>
                                <input type="text" name="address" class="form-control ps-4 pt-2 address" />
                            </div>
                        </div>
                        <div class="order-text ps-lg-4 ps-md-4 ps-0">
                            အိမ်အ​ရောက်​ငွေ​ချေစနစ်
                        </div>
                        <div class="total-price">
                            <div class="book_fee"></div>
                            <div class="deli_fee"></div>
                            <div class="total_fee"></div>
                        </div>
                        <hr>
                        <div class="row mt-4 mb-3 justify-content-center">
                            <div class="col-lg-10 d-flex justify-content-center">
                                <button type="button" class="btn btn-dark pt-2 text-center order-btn rounded-pill text-dark buy-btn" data-target="">အမှာတင်မည်</button>
                            </div>
                        </div>
                    </div>
                `);
<<<<<<< HEAD
                $("#township").css("width","16rem !important");
                $("#state").click(function(){
                    selected = $(this).val();
                    let stateData = {
                        'state': selected
                    }
                    $.ajax({
                        url: "../Controller/stateSearchController.php",
                        type: "POST",
                        data: { send: JSON.stringify(stateData) },
                        success: function (res) {
                            var data = $.parseJSON(res);
                            $("#township").empty();
                            data.forEach(element => {
                                $("#township").append(`
=======
                        $("#township").css("width", "16rem !important");
                        $("#state").click(function() {
                            selected = $(this).val();
                            let stateData = {
                                'state': selected
                            }
                            $.ajax({
                                url: "../Controller/stateSearchController.php",
                                type: "POST",
                                data: {
                                    send: JSON.stringify(stateData)
                                },
                                success: function(res) {
                                    var data = $.parseJSON(res);
                                    $("#township").empty();
                                    data.forEach(element => {
                                        $("#township").append(`
                                
>>>>>>> origin/main
                                    <option value="${element.township_name}">${element.township_name}</option>
                                `);
                                    });
                                    console.log(res);
                                },
                                error: function(err) {
                                    console.log(err)
                                }

                            });
                        })

                        $("#township").click(function() {
                            town = $(this).val();
                            console.log($(".book_p").text());
                            let townData = {
                                'town': town
                            }
                            $.ajax({
                                url: "../Controller/townSearchController.php",
                                type: "POST",
                                data: {
                                    send: JSON.stringify(townData)
                                },
                                success: function(res) {
                                    var data = $.parseJSON(res);
                                    console.log(data.length);
                                    data.forEach(element => {
                                        delivery_id = element.delivery_id;
                                        delivery_fee = element.delivery_fee;
                                        console.log(delivery_id);
                                        $(".deli_fee").empty();
                                        $(".deli_fee").append(`
                                        <div class="row mb-1 mt-3 ms-3 book-text">
                                            <div class="col text-white deli-fee">ပို့​ဆောင်ခ - ${element.delivery_fee} (ကျပ်)</div>
                                        </div>
                                    `);
<<<<<<< HEAD
                            });
                            var book = 0;
                            book_priceArray.forEach(element => {
                                book += Number(element);
                                console.log((book));
                            });
                            console.log(book);
                            console.log(typeof(book));
                            $(".book_fee").empty();
                            $(".book_fee").append(`
=======
                                    });
                                    ////////////////                           /*error to change to number */
                                    var book = 0;
                                    bookArray = [];
                                    bookArray.push(Number($(".book_p").text()));
                                    book_priceArray.forEach(element => {
                                        book += Number(element);
                                        console.log((book));
                                    });
                                    console.log(book);
                                    console.log(typeof(book));
                                    $(".book_fee").empty();
                                    $(".book_fee").append(`
>>>>>>> origin/main
                            <div class="row mb-1 mt-3 ms-3 book-text">
                                <div class="col text-white">စာအုပ်တန်ဖိုး - ${Number(book)}(ကျပ်)</div>
                            </div>
                            `);
                                    $(".total_fee").empty();
                                    $(".total_fee").append(`
                                    <div class="row ms-lg-3 justify-content-center my-2">
                                        <div class="col-6">စုစု​ပေါင်း</div>
                                        <div class="col-6">${ Number(delivery_fee) + Number(book)}</div>
                                    </div>
                            `);

                                    // console.log(newBookPrice);
                                    // $(".total-price").empty();
                                    // $(".total-price").append(`
                                    //     <div class="row mb-1 mt-3 ms-3 book-text">
                                    //         <div class="col text-white">စာအုပ်တန်ဖိုး - ${newBookPrice} (ကျပ်)</div>
                                    //     </div>
                                    //     <div class="row mb-1 mt-3 ms-3 book-text">
                                    //         <div class="col text-white">ပို့​ဆောင်ခ - ${delivery_fee} (ကျပ်)</div>
                                    //     </div>
                                    //     <div class="row ms-lg-3 justify-content-center my-2">
                                    //         <div class="col-6">စုစု​ပေါင်း</div>
                                    //         <div class="col-6">${(newBookPrice)+delivery_fee} (ကျပ်)</div>
                                    //     </div>
                                    //     `);
                                },
                                error: function(err) {
                                    console.log(err)
                                }

                            });
                        });

                        // $("#state").change(function(){
                        //     selected = $(this).val();
                        //     let stateData = {
                        //         'state': selected
                        //     }
                        //     $.ajax({
                        //         url: "../Controller/stateSearchController.php",
                        //         type: "POST",
                        //         data: { send: JSON.stringify(stateData) },
                        //         success: function (res) {
                        //             var data = $.parseJSON(res);
                        //             data.forEach(element => {
                        //                 delivery_id = element.delivery_id;
                        //                 delivery_fee = element.delivery_fee;
                        //                 console.log(delivery_id);
                        //             });
                        //             totalPrice.forEach(element => {
                        //                 newBookPrice += element;
                        //             });
                        //             console.log(newBookPrice);
                        //             $(".total-price").empty();
                        //             $(".total-price").append(`
                        //                 <div class="row mb-1 mt-3 ms-3 book-text">
                        //                     <div class="col text-white">စာအုပ်တန်ဖိုး - ${newBookPrice} (ကျပ်)</div>
                        //                 </div>
                        //                 <div class="row mb-1 mt-3 ms-3 book-text">
                        //                     <div class="col text-white">ပို့​ဆောင်ခ - ${delivery_fee} (ကျပ်)</div>
                        //                 </div>
                        //                 <div class="row ms-lg-3 justify-content-center my-2">
                        //                     <div class="col-6">စုစု​ပေါင်း</div>
                        //                     <div class="col-6">${(newBookPrice)+delivery_fee} (ကျပ်)</div>
                        //                 </div>
                        //                 `);
                        //         },
                        //         error: function (err) {
                        //             console.log(err)
                        //         }

                        //     });
                        // });


                        $(".buy-btn").click(function() {
                            var name = $(".name").val();
                            var phno = $(".phno").val();
                            var state = selected;
                            var town = $("#township").val();
                            var address = $(".address").val();
                            if (name == '' || phno == '' ||
                                state == '' || town == '' ||
                                address == '') {
                                swal({
                                    text: "အမှာတင်ရန် အတွက် အချက်အလက်များကို ပြည့်စုံစွာ ​ဖြည့်စွက်​ပေးပါ။",
                                    button: {
                                        text: 'OK',
                                        className: 'commentBtn'
                                    },
                                });
                                return false;
                            } else {
                                swal("အမှာတင်မှာ ​သေချာ ပါသလား။", {
                                        buttons: {
                                            catch: {
                                                text: "အမှာတင်မည်။",
                                                value: "send",
                                                className: 'commentBtn'
                                            },
                                            defeat: false,
                                        },
                                    })
                                    .then((value) => {
                                        switch (value) {
                                            case "send":
                                                let cartData = {
                                                    'cart_id': cartArray,
                                                    'customer_id': customer_id,
                                                    'customer_name': name,
                                                    'state': selected,
                                                    'phno': phno,
                                                    'town': town,
                                                    'address': address,
                                                    'total_price': totalPrice,
                                                    'delivery_id': delivery_id,
                                                    'delivery_fee': delivery_fee,
                                                }
                                                console.log(name);
                                                $.ajax({
                                                    url: "../Controller/orderInsertController.php",
                                                    type: "POST",
                                                    data: {
                                                        send: JSON.stringify(cartData)
                                                    },
                                                    success: function(res) {
                                                        var data = $.parseJSON(res);
                                                        console.log(data);
                                                        // console.log(res);
                                                        //                  //                       //to continue to do quantity reduce
                                                        
                                                        $("#cardBody").empty();
                                                        swal("အမှာတင်ပြီးပါပြီ။ မှာယူခဲ့​သည့် စာရင်းများတွင် ကြည့်ရှုနိုင်ပါသည်။", {
                                                                buttons: {
                                                                    catch: {
                                                                        text: "OK",
                                                                        value: "send",
                                                                        className: 'commentBtn'
                                                                    },
                                                                    defeat: false,
                                                                },
                                                            })
                                                            .then((value) => {
                                                                switch (value) {
                                                                    case "send":
                                                                        location.reload();
                                                                        break;
                                                                }
                                                            });
                                                        // location.reload();

                                                    },
                                                    error: function(err) {
                                                        console.log(err)
                                                    }

                                                });
                                                break;
                                        }
                                    });
                            }
                        });
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            }
        });


    });
</script>