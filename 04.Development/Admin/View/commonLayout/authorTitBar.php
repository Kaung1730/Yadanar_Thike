<?php session_start(); ?>
<span class="com-edit">
    <span class="title mt-1 mx-3 fs-4">Author</span>
    <br />
    <span class="title_list ms-3 com-editC" id="adminCl">Author</span>
    <span class="title_list com-editC">></span>
    <span class="title_list com-editC">Author Lists</span>
</span>
<!-- <span class="box-search title-list ms-5 mb-3">
    <input class="form-control me-2 search-box mt-2" type="search" placeholder="Search" aria-label="Search">
</span>
<span class="title-list mt-3 ms-5 i-edit float-end title-wd">
    <a href=""><img src="../resource/img/message.png" alt="" class="nav_img mx-4 float-end"></a>
    <i class="bi bi-chat-left-text-fill ms-5 fs-4 i-edit"></i>
</span>
<span class="title-list mt-3 i-edit">
    <a href=""><img src="../resource/img/cart.png" alt="" class="nav_img mx-4 float-end"></a>
    <i class="bi bi-cart4 ms-5 fs-4 fw-bold i-edit"></i>
</span> -->
<span class="title-list mt-1 ms-5 i-edit float-end title-wd">
    <img src="../resource/img/person icon.png" alt="" class="nav_img mt-2 ms-2 img-me float-end">
    <br />
    <br />
    <span class="admin_name text-center mb-3 ms-5 float-end"><?php echo $_SESSION['admin_name'] ?></span>
</span>