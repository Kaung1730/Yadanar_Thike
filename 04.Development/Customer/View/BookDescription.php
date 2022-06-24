<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>စာအုပ်ဖော်ပြမှု</title>
    <?php require "../Controller/iconController.php"; ?>
    <link rel="shortcut icon" href="../../Admin/resource/image/<?php echo $iconResult[0]['icon']; ?>" >
    <!--Customize CSS-->
    
    <link rel="stylesheet" href="../resource/css/commonUser.css">
    <link rel="stylesheet" href="../resource/css/userSetting.css">
    <link rel="stylesheet" href="../resource/css/cartPop.css">
    <link rel="stylesheet" href="../resource/css/orderHistory.css">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/order.css">
    <link rel="stylesheet" href="../resource/css/footer.css ">
    <link rel="stylesheet" href="../resource/css/bookDescription.css">
    <!--Bootstrap CSS & JavaScript-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!--Sweet Alert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--JS-->
    <script src="../resource/js/jquery3.6.0.js"></script>
    <script src="../resource/js/nav.js"></script>
    <script src="../resource/js/comment.js"></script>
    <script src="../resource/js/cart.js"></script>
    <script src="../resource/js/cartShow.js"></script>
    <script src="../resource/js/calc.js"></script>
    <script src="../resource/js/viewCount.js"></script>
    <!--star rating-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
</head>

<body>
    <!--Nav-->
    <div class="nav-bar"></div>
    <div class="setting"></div>
    <div class="cart"></div>
    <div class="order"></div>
    <div class="orderHistory"></div>
    <div class="pdf"></div>
    <!-- Start of Book Description -->

    <?php  session_start();
    require "../Controller/bookDespController.php";
    require "../Controller/showCommentController.php";
    $_SESSION['book_id'] = $result[0]['book_id'];?>
        
    <input type="hidden" name="book_id" value ="<?php echo $result[0]['book_id']?>" id="bookDespValue">
    <div class="container-fluid px-0  mt-5">
        <!--Start of the book des-->
        <div class="container">
            <div class="upper-part">
                <div class="row">
                    <div class="col-lg-4 col-12  col-md-4 col-xl-4 ps-5 ps-lg-0 ps-md-0">
                        <img src= "../../Admin/resource/image/<?php echo $result[0]['book_img']; ?>"  class="ms-5 ms-lg-0 ms-md-0 py-4 py-lg-0 py-md-0" />
                        <!-- book preview -->
                        <div class=" d-flex d-lg-block d-md-block justify-content-center">
                            <a href="#pdf" data-bs-toggle="modal" class="ms-lg-5 ms-md-3 my-4 px-3 view-more-btn btn  text-dark book-d-text">
                                <i class="bi bi-eye-fill fs-6 me-3 book-d-text"></i>ပိုမိုကြည့်ရန်
                            </a>
                        </div>
                        <div class="my-1 book-d-text"> <span>စာမျက်နှာ - </span> <?php echo $result[0]['page_number']; ?></div>
                        <div class="my-1 book-d-text"> <span>စာအုပ်အရွယ်အစား -</span> <?php echo $result[0]['size']; ?> inches</div>
                        <div class="my-1 book-d-text"> <span>ပုံနှိပ်မှတ်တမ်း -</span> <?php echo $result[0]['publisher_name']; ?></div>
                        <div class="OrderBtnContainer  d-flex d-lg-block d-md-block justify-content-center">
                            <button  id="cart-btn" class="cart-btn ms-lg-5 ms-md-3 me-4  my-3 px-4 py-2 text-dark text-decoration-none btn order-btn my-3 book-d-text" data-bs-toggle="modal" id="addToCart" value="<?php echo $result[0]['book_id']; ?>">
                                အမှာတင်မည်
                            </button>
                        </div>
                        
                    </div>
                    <div class="col-4 d-none d-md-block d-lg-block d-xl-block"></div>
                    <div class="col-lg-4 col-md-4 col-xl-4 col-12 pt-5 pt-md-0 pt-lg-0 ps-5 ps-lg-0 ps-md-0">
                        <div class="book-des-title fs-5"><?php echo $result[0]['book_name']; ?></div>
                        <div class="author-name my-3"><?php echo $result[0]['author_name']; ?></div>
                        <?php if(isset($result[0]['discount_price'])){?>
                            <span class='book-fee fs-5 text-decoration-line-through'><?php echo $result[0]['book_price']?>(ကျပ်)</span>
                            <span class="book-fee fs-5 text-danger"><?php echo $result[0]['discount_price']; ?>(ကျပ်)</span>
                        <?php } else{ ?>
                            <div class="book-fee fs-5"><?php echo $result[0]['book_price']; ?>(ကျပ်)</div>
                        <?php } ?>
                        <!--rating for the book-->
                        <div class="rating-container d-flex">
                            <?php if(count($bookRatingResult)> 0) {
                                if(ceil($bookRatingResult[0]['avg(rating)']) == 1 ){
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star"></i></div>'; 
                                }
                                else if(ceil($bookRatingResult[0]['avg(rating)']) == 2 ){
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star"></i></div>'; 
                                }
                                else if(ceil($bookRatingResult[0]['avg(rating)']) == 3 ){
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star"></i></div>'; 
                                }
                                else if(ceil($bookRatingResult[0]['avg(rating)']) == 4 ){
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star"></i></div>'; 
                                }
                                else if(ceil($bookRatingResult[0]['avg(rating)']) == 5 ){
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>'; 
                                }
                                else{
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star"></i></div>';
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star"></i></div>';
                                }
                            }?>
                        </div>
                        <div class="stock-number fs-6 my-3">
                            လက်ကျန်စာအုပ်​ရေ -<span id="stockNumber"> <?php echo $result[0]['stock_number']; ?> </span> အုပ်</div>
                        <div class="des-text book-d-text lh-lg">
                            <?php echo $result[0]['book_desp']; ?>
                        </div>
                        <!-- To increase book number or decrecase -->
                        <div class="mb-3 mt-4">
                                <div class="input-group mb-3 d-flex mt-2 numberContainer text-center align-item-center">
                                    <button class="input-group-text fw-bold text-dark decrease-btn">ー</button>
                                    <input type="text" class="form-control fw-bold text-dark text-center qty" disabled value="1">
                                    <button class="input-group-text fw-bold text-dark increase-btn">+</button>
                                </div>
                        </div>
                        <?php  if(isset($_SESSION['status-customer'])) { ?>
                            <input type="hidden" id="customer_id" value="<?php echo $_SESSION['customer_id']?>">
                        <?php }?>
                        <div>
                            <button  id="cart-btn" class=" cart-btn text-dark text-decoration-none btn order-btn my-3 book-d-text" data-bs-toggle="modal" id="addToCart" value="<?php echo $result[0]['book_id']; ?>">
                            ခြင်းတောင်းထဲထည့်ရန်
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!--To show feedback about book-->
            <?php require "../Controller/showCommentController.php";?>
            <div class="feedback-shown-area mt-5">
                <div class="review-title">​ဝေဖန်သုံးသပ်မှုများ <span><?php echo "(".$commentResult[0]['count(comment)']. ")"?></span></div>
                <?php if(count($reviewrResult) >0) {?>
                    <div class="review-box mx-3 mt-3 pb-1">
                        <?php foreach ($reviewrResult as $key => $value) {?>
                        <div class="row g-0 border-bottom border-light">
                            <div class="col-1 ps-lg-4 ps-md-0 ps-0 pt-lg-2 pt-md-0 pt-0 border-left d-none d-md-block d-lg-block">
                                <?php if(isset($value['customer_profileImg'])){  ?>
                                    <img src="<?php echo $value['customer_profileImg']; ?>" class="rounded-circle img-circle img-fluid" />
                                <?php }else {?>
                                    <img src="../resource/image/Vector.png" class="rounded-circle img-circle img-fluid" />
                                <?php }?>
                            </div>
                            <div class="col-10">
                                <div class="row pt-2">
                                    <div class="col-9 col-lg-4 reviewer">
                                        <span class="reviewer px-lg-3 px-1 px-md-3 fw-bold"><?php echo $value['customer_name']; ?></span>
                                        <span class="review-date"><?php echo $value['review_date']; ?></span>
                                    </div>
                                    <div class="col-6 d-none d-lg-block d-md-done"></div>
                                    <div class="col-2 float-end ps-lg-5 ps-md-0 ps-0">
                                        <div class="rating-container d-flex flex-end ps-lg-5 ps-md-0 ps-0">
                                            <?php 
                                                if(($value['rating']) == 1) {
                                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                                }
                                                else if(($value['rating']) == 2) {
                                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                                }
                                                else if(($value['rating']) == 3) {
                                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                                }
                                                else if(($value['rating']) == 4) {
                                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                                }
                                                else if(($value['rating']) == 5){
                                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                                }
                                                else{
                                                    echo '<div>No Rating Stars</div>';
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 ps-lg-4 px-4 book-d-text">
                                        <?php echo $value['comment']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } else {?>
                    <div class="mt-2">ဤစာအုပ်အတွက် ​ဝေဖန်သုံးသပ်ချက် မရှိ​သေးပါ။</div>
                <?php } ?>
            </div>
            <!-- To give some review -->
            <div class="review-give mt-5">
                <div class="review-give-title mt-3">လူကြီးမင်း၏​ဝေဖန်သုံးသပ်ချက်ကို မျှ​ဝေ​ပေးပါ။</div>
                <form id="commentForm">
                    
                    <div class="form-group mt-4">
                        <label for="star" class="book-d-text">တန်ဖိုးရှိမှုနှုန်း</label>
                        <div class="mt-3">
                            <div class="rating-container d-flex flex-end ">
                                <!--star rating-->
                                <div id="rateYo"></div>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <label for="review-text" class="book-d-text">ဝေဖန်သုံးသပ်လို​သောစာကို​ရေးပါ။</label>
                            <textarea name="comment" class="form-control mt-3 bg-transparent form-border" id="review-text" cols="30" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn review-btn my-4 book-d-text" id="comment-btn">​ပေးပို့ရန်</button>
                </form>
            </div>
            <!--Book list related to the author-->
            <div class="related-book-area mt-3">
                <div class="author-book-title">
                    <span class="author">​<?php echo $result[0]['author_name']; ?></span>
                    <span class="book">စာအုပ်များ</span>
                </div>
                <div class="text-center book-box d-flex flex-wrap flex-lg-nowrap flex-md-nowrap justify-content-center">
                    <?php 
                    for ($i=0; $i < count($relatedResult); $i++) { 
                        if(isset($relatedResult[$i]['book_img'])) { ?>
                        <div>
                            <?php  $_SESSION['each_book_id'] = $relatedResult[$i]['book_id'] ?>
                            <a href='../View/bookDescription.php?book_id=<?php echo $relatedResult[$i]['book_id'] ?>'>
                                <button class="viewcount" value="<?php echo $relatedResult[$i]['book_id'] ?>" >
                                <img src="../../Admin/resource/image/<?php echo $relatedResult[$i]['book_img']; ?>" class="img-fluid" alt=""/>
                                </button>
                            </a>
                            <div class="book-title book-d-text"><?php echo $relatedResult[$i]['book_name']; ?></div>
                            <div class="ratingEachBook  d-flex justify-content-center">
                            
                            <?php if(count($ratingEachResult[$i])> 0) {
                                for ($j=0; $j < ceil($ratingEachResult[$i][0]['avg(rating)']); $j++)
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star-fill"></i></div>';
                                for ($j=0; $j < (5 - ceil($ratingEachResult[$i][0]['avg(rating)'])); $j++)
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star"></i></div>';
                            }
                            else{
                                for ($k=0; $k < 5; $k++)
                                    echo '<div class="ps-lg-1 ps-md-1 ps-0 fw-bold fs-5"><i class="bi bi-star"></i></div>';
                            }
                            ?>
                            </div>
                        </div>
                    <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---End of the book des-->
    <!--footer-->
    <div class="footer d-flex py-3 px-2 text-center mt-4"></div>
    </div>

</body>

</html>