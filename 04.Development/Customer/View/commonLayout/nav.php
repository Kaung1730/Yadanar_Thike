<nav class="navbar navbar-expand-lg navbar-light mt-lg-3 mt-md-0 mt-0">
        <div class="container">
            <a class="navbar-brand me-lg-5 me-md-0  me-0" href="../View/homePage.php">
                <img src="../resource/image/logo.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav lg-screen">
                    <li class="nav-item nav-color me-lg-4 me-md-0 me-0 px-lg-3 px-md-2 px-2 py-lg-0 py-md-2 py-2">
                        <a class="nav-link mt-lg-2 mt-md-0 mt-0 pt-lg-3 pt-md-0 pt-0 active" aria-current="page" href="../View/homePage.php">မူလစာမျက်နှာ</a>
                    </li>
                    <li class="nav-item nav-color me-lg-4 me-md-0 me-0 px-lg-4 px-md-2 px-2 py-lg-0 py-md-2 py-2">
                        <a class="nav-link mt-lg-2 mt-md-0 mt-0 pt-lg-3 pt-md-0 pt-0 active" href="../View/category.php">စာအုပ်အမျိုးအစားများ</a>
                    </li>
                    <li class="nav-item nav-color me-lg-4 me-md-0 me-0 px-lg-2 px-md-2 px-2 py-lg-0 py-md-2 py-2">
                        <a class="nav-link  mt-lg-2 mt-md-0 mt-0 pt-lg-3 pt-md-0 pt-0 active" href="../View/authorList.php">စာရေးဆရာများ</a>
                    </li>
                    <!---To show and hide acc name before and after login-->
                    <?php session_start();
                    if (isset($_SESSION['status'])) {
                        if (isset($_SESSION['customer_profileImg'])) {
                            echo ' <li class="nav-item dropdown color ms-lg-5 ms-md-5 ms-0 me-lg-3 me-md-0 me-0 px-lg-2 px-md-2 px-2 py-lg-0 py-md-2 py-2">
                        <a class="nav-link dropdown-toggle text-dark ms-lg-5 ms-md-5 ms-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src= ' . "" . $_SESSION['customer_profileImg'] . "" . ' alt="" class="useracc "/>
                            <span class="acc-name ps-3 ps-md-1 ps-2">' . $_SESSION['username'] . '</span>
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-dark" href="#userSetting" data-bs-toggle="modal">ကိုယ်​ရေးအချက်အလက်များပြင်ဆင်မည်</a></li>
                            <li><a class="dropdown-item text-dark order-history" href="#orderHistory" data-bs-toggle="modal">မှာယူခဲ့သည့်စာရင်းများ</a></li>
                            <li><a class="dropdown-item text-dark" href="../View/logout.php"><i class="bi bi-box-arrow-right text-dark fs-5 me-2"></i>အ​ကောင့်မှထွက်ရန်</a></li>
                        </ul>
                    </li>';
                        } else {
                            echo ' <li class="nav-item dropdown color ms-lg-5 ms-md-5 ms-0 me-lg-3 me-md-0 me-0 px-lg-2 px-md-2 px-2 py-lg-0 py-md-2 py-2">
                        <a class="nav-link dropdown-toggle text-dark ms-lg-5 ms-md-5 ms-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src= "../resource/image/Vector.png" alt="" class="useracc "/>
                            <span class="acc-name ps-3 ps-md-1 ps-2">' . $_SESSION['username'] . '</span>
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-dark" href="#userSetting" data-bs-toggle="modal">ကိုယ်​ရေးအချက်အလက်များပြင်ဆင်မည်</a></li>
                            <li><a class="dropdown-item text-dark order-history" href="#orderHistory" data-bs-toggle="modal">မှာယူခဲ့သည့်စာရင်းများ</a></li>
                            <li><a class="dropdown-item text-dark" href="../View/logout.php"><i class="bi bi-box-arrow-right text-dark fs-5 me-2"></i>အ​ကောင့်မှထွက်ရန်</a></li>
                        </ul>
                    </li>';
                        }
                    } else {
                        echo '<li class="nav-item   nav-color me-lg-4 me-md-0 me-0 px-lg-2 px-md-2 px-2 py-lg-0 py-md-2 py-2">
                            <a class="nav-link  mt-lg-2 mt-md-0 mt-0 pt-lg-3 pt-md-0 pt-0 active" href="../View/login.php">အကောင့်သို့ဝင်ရန်</a>
                                </li>';
                    }
                    ?>
                    <li class="nav-item  d-flex d-md-flex d-lg-none  nav-color me-lg-4 me-md-0 me-0 px-lg-2 px-md-2 ps-0 py-lg-0 py-md-2 py-2">
                        <button type="button" class="btn searchBorder" data-bs-toggle="modal" data-bs-target="#search-modal">
                            <span class="text-dark">ရှာဖွေရန်</span> <i class="bi bi-search  fw-bold fs-5 text-center "></i>
                        </button>
                        <form action="../Controller/searchDataSendController.php" method="GET">
                            <div class="modal fade search" id="search-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="input-group text-dark selectNav">
                                                <button class=" text-dark btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">ရှာဖွေရန်</button>
                                                <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                                                                            echo $_GET['search'];
                                                                                        } ?>" class="form-control searchInput ps-3 search-text" id=" search-text" aria-label="Text input with dropdown button" placeholder="သင်ဘာကိုရှာဖွေချင်ပါသလဲ?">
                                                <button class="btn search-btn" type="submit" id="button-addon2">
                                                    <i class="bi bi-search fw-bold fs-5"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end of searchbar-->
                        </form>
                    </li>
                    <li class="nav-item color  position-relative mt-lg-3  mt-0 mt-md-0  ms-0 ms-md-0 ms-lg-2 px-md-2 px-2 py-lg-0 py-md-2 py-2">
                        <a href="#cartPopUp" class="text-dark text-decoration-none cart" data-bs-toggle="modal">
                            <span class="d-inline d-lg-none d-md-inline cart">လူကြီးမင်း၏​စျေးခြင်း</span>
                            <i class="bi bi-basket2-fill fs-2 mt-lg-5 mt-md-5 mt-0  ms-0 ms-lg-1 cart"></i>
                            <span class="position-absolute cart top-0  badge bg-danger" id="basket"></span>
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--searchbar for large screen-->
    <form action="../Controller/searchDataSendController.php" method="GET">
        <div class="top-0 mt-lg-0 mt-md-3 mt-5 pt-lg-1 pt-md-5 pt-5 input-group text-dark d-none d-md-none d-lg-flex search">
            <button class=" text-dark btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">ရှာဖွေရန်</button>
            <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                                        echo $_GET['search'];
                                                    } ?>" class="form-control searchInput ps-3 search-text" id=" search-text" aria-label="Text input with dropdown button" placeholder="သင်ဘာကိုရှာဖွေချင်ပါသလဲ?">
            <button class="btn btn-outline-secondary search-btn" type="submit" id="button-addon2">
                <i class="bi bi-search text-dark  fs-5 search-icon"></i>
            </button>
        </div>
    </form>
    <!--end of searchbar-->
    <script>
        $(document).ready(function() {
            $("#basket").text(localStorage.getItem('cartCount'));

            //for search bar
            $(".search-btn").click(function() {
                window.location.href = `./searchResult.php`;
            });

            $(".order-count").text(localStorage.getItem('cartCount'));
            $("#basket").text(localStorage.getItem('cartCount'));
            $.ajax({
                url: "../Controller/cartNumberController.php",
                type: "POST",
                success: function(res) {
                    var cartCount = res;
                    localStorage.setItem('cartCount', cartCount);
                    $(".order-count").text(cartCount);
                    $("#basket").text(cartCount);
                },
                error: function(err) {
                    console.log(err);
                }
            });
            var orderArray = [],
                order_num = 0,
                order_number_title, bookTotal = 0,
                bookPrice = 0,
                deli_fee;
            //when user click order history button
            $(".order-history").click(function() {
                $(".delete").css("background-color", 'transparent');
                $(".delete").css("border", 'none');
                $.ajax({
                    url: "../Controller/orderHistoryShow.php",
                    type: "POST",
                    success: function(res) {
                        console.log(res);
                        var data = $.parseJSON(res);
                        $(".order_history").empty();
                        data.forEach(element => {
                            console.log("Hello");
                            if (element.order_status == 0) {
                                var status = "ပို့​ဆောင်​နေဆဲ ";
                            } else {
                                status = "ပို့​ဆောင်ပြီးပါပြီ။";
                            }
                            $(".delete").css("background-color", 'transparent');
                            $(".delete").css("border", 'none');
                            $(".order_history").append(`
                    <div class="row">
                        <div class="col-8 ">
                            ​အော်ဒါနံပါတ် - <span>${element.order_number}</span>
                        </div>
                        <div class="col-4 book-text">${element.orderDate}</div>
                        
                    </div>

                    <div class="row">
                        <div class="col-8 book-text mt-2 ">
                            <div class="my-2">ဝယ်ယူခဲ့သည့်စာအုပ်</div>
                            <div class="my-2 small-text">${element.bookName}</div>
                            <div class="my-2 small-text">အိမ်အ​ရောက်​ငွေ​ချေစနစ်</div>
                        </div>
                        <div class="col-4 mt-2">
                            <img src="../../Admin/resource/image/${element.book_img}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="row mt-3 fw-light">
                        <div class="col-10 book-text muted">
                        <div>စုစု​ပေါင်း - <span>${Number(element.totalPrice) + Number(element.delivery_fee)}</span> (ကျပ်)</div>
                        <div>အမှာအ​ခြေအ​​နေ - <span>${status}</span></div>
                        </div>
                        <button class="col-2 delete" value="${element.order_number}">
                            <i class="bi bi-trash3 text-warning "></i>
                        </button>
                    </div>
                    <hr>
                    `);
                            $(".delete").css("background-color", 'transparent');
                            $(".delete").css("border", 'none');
                        });
                        $(".delete").click(function() {
                            $(".commentBtn").css("background-color", 'var(--yellow)');
                            $(".commentBtn").css("border-radius", '1.5rem');
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
                                            var order_number = $(this).val();
                                            let postdata = {
                                                "order_number": order_number,
                                            }
                                            console.log(order_number);
                                            $.ajax({
                                                url: "../Controller/deleteOrderHistory.php",
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
                                                    console.log(err);
                                                }
                                            });
                                            break;
                                    }
                                    $(".commentBtn").css("background-color", 'var(--yellow)');
                                    $(".commentBtn").css("border-radius", '1.5rem');
                                });
                        })
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            })
        })
    </script>