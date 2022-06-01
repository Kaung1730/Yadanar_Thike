    <nav class="navbar navbar-expand-lg navbar-light mt-lg-3 mt-md-0 mt-0">
        <div class="container">
            <a class="navbar-brand me-lg-5 me-md-0  me-0" href="#">
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
                        <a class="nav-link mt-lg-2 mt-md-0 mt-0 pt-lg-3 pt-md-0 pt-0 active" href="../View/category.php">စာအုပ်များ</a>
                    </li>
                    <li class="nav-item nav-color me-lg-4 me-md-0 me-0 px-lg-2 px-md-2 px-2 py-lg-0 py-md-2 py-2">
                        <a class="nav-link  mt-lg-2 mt-md-0 mt-0 pt-lg-3 pt-md-0 pt-0 active" href="../View/authorList.php">စာရေးဆရာများ</a>
                    </li>
                    <!---To show and hide acc name before and after login-->
                    <?php session_start();
                    if (isset($_SESSION['status'])) {
                        echo ' <li class="nav-item dropdown color ms-lg-5 ms-md-5 ms-0 me-lg-3 me-md-0 me-0 px-lg-2 px-md-2 px-2 py-lg-0 py-md-2 py-2">
                        <a class="nav-link dropdown-toggle text-dark ms-lg-5 ms-md-5 ms-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../resource/image/Vector.png" alt="" class="useracc "/>
                            <span class="acc-name ps-3 ps-md-1 ps-2">' . $_SESSION['username'] . '</span>
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-dark" href="#userSetting" data-bs-toggle="modal">ကိုယ်​ရေးအချက်အလက်များပြင်ဆင်မည်</a></li>
                            <li><a class="dropdown-item text-dark" href="#orderHistory" data-bs-toggle="modal">မှာယူခဲ့သည့်စာရင်းများ</a></li>
                            <li><a class="dropdown-item text-dark" href="../View/logout.php"><i class="bi bi-box-arrow-right text-dark fs-5 me-2"></i>အ​ကောင့်မှထွက်ရန်</a></li>
                        </ul>
                    </li>';
                    } else {
                            echo '<li class="nav-item   nav-color me-lg-4 me-md-0 me-0 px-lg-2 px-md-2 px-2 py-lg-0 py-md-2 py-2">
                            <a class="nav-link  mt-lg-2 mt-md-0 mt-0 pt-lg-3 pt-md-0 pt-0 active" href="../View/login.php">အကောင့်သို့ဝင်ရန်</a>
                                </li>';
                    }
                    ?>

                    <!-- <li class="nav-item   nav-color me-lg-4 me-md-0 me-0 px-lg-2 px-md-2 px-2 py-lg-0 py-md-2 py-2">
                        <a class="nav-link  mt-lg-2 mt-md-0 mt-0 pt-lg-3 pt-md-0 pt-0 active" href="../View/login.php">အကောင့်သို့ဝင်ရန်</a>
                    </li> -->
                    <li class="nav-item  d-flex d-md-flex d-lg-none  nav-color me-lg-4 me-md-0 me-0 px-lg-2 px-md-2 ps-0 py-lg-0 py-md-2 py-2">
                        <button type="button" class="btn searchBorder" data-bs-toggle="modal" data-bs-target="#search-modal">
                            <span class="text-dark">ရှာဖွေရန်</span> <i class="bi bi-search  fw-bold fs-5 text-center "></i>
                        </button>

                        <div class="modal fade search" id="search-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="input-group text-dark selectNav">
                                            <button class=" text-dark btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">ရှာဖွေရန်</button>
                                            <input type="text" class="form-control searchInput ps-3" aria-label="Text input with dropdown button" placeholder="သင်ဘာကိုရှာဖွေချင်ပါသလဲ?">
                                            <button class="btn" type="button" id="button-addon2">
                                                <i class="bi bi-search fw-bold fs-5"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end of searchbar-->
                    </li>
                    <!-- <li class="nav-item dropdown color me-lg-4 me-md-0 me-0 px-lg-2 px-md-2 px-2 py-lg-0 py-md-2 py-2">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../resource/image/Vector.png" alt="" class="useracc "/>
                            <span class="acc-name ps-3 ps-md-1 ps-2">အကောင့်အမည်</span>
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-dark" href="#userSetting" data-bs-toggle="modal">ကိုယ်​ရေးအချက်အလက်များပြင်ဆင်မည်</a></li>
                            <li><a class="dropdown-item text-dark" href="#orderHistory" data-bs-toggle="modal">မှာယူခဲ့သည့်စာရင်းများ</a></li>
                            <li><a class="dropdown-item text-dark" href=""><i class="bi bi-box-arrow-right text-dark fs-5 me-2"></i>အ​ကောင့်မှထွက်ရန်</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item color  position-relative mt-lg-3  mt-0 mt-md-0  ms-0 ms-md-0 ms-lg-2 px-md-2 px-2 py-lg-0 py-md-2 py-2">
                        <a href="#cartPopUp" class="text-dark text-decoration-none" data-bs-toggle="modal">
                            <span class="d-inline d-lg-none d-md-inline">လူကြီးမင်း၏​စျေးခြင်း</span>
                            <i class="bi bi-basket2-fill fs-2 mt-lg-5 mt-md-5 mt-0  ms-0 ms-lg-1"></i>
                            <span class="position-absolute top-0  badge bg-danger">2</span>
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--searchbar for large screen-->
    <div class="top-0 mt-lg-0 mt-md-3 mt-5 pt-lg-1 pt-md-5 pt-5 input-group text-dark d-none d-md-none d-lg-flex search">
        <button class=" text-dark btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">ရှာဖွေရန်</button>
        <input type="text" class="form-control searchInput" aria-label="Text input with dropdown button" placeholder="သင်ဘာကိုရှာဖွေချင်ပါသလဲ? ဒီကနေ ဝင်ရှာလို့ရပါတယ်">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">
            <i class="bi bi-search text-dark  fs-5 search-icon"></i>
        </button>
    </div>
    <!--end of searchbar-->