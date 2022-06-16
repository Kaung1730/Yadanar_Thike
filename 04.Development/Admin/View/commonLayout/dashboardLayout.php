<?php require "../../Controller/dashboardController.php" ?>
<div class="d-flex justify-content-around box_group">
    <div class="total_user">
        <div class="d-flex justify-content-around box">
            <img src="../resource/img/person icon.png" alt="" class="person_icon pt-3">
            <!-- <span class="pt-3 fs-2 text-success fw-bold font-num">5000</span> -->
            <span class="pt-3 fs-2 text-success fw-bold font-num">
                <?php echo $totalUser[0]['COUNT(customer_id)'] ?>
            </span>
        </div>
        <p class="user_text">Total Users</p>
    </div>
    <div class="total_viewers">
        <div class="d-flex justify-content-around box">
            <img src="../resource/img/person icon.png" alt="" class="person_icon pt-3">
            <!-- <span class="pt-3 fs-2 text-danger fw-bold font-num">2000</span> -->
            <span class="pt-3 fs-2 text-danger fw-bold font-num">
                <?php echo $totalView[0]['COUNT(view_count)'] ?>
            </span>
        </div>
        <p class="viewer_text">Total Viewers</p>
    </div>
    <div class="income">
        <div class="d-flex justify-content-around box">
            <img src="../resource/img/person icon.png" alt="" class="person_icon pt-3">
            <!-- <span class="pt-3 fs-2 text-primary fw-bold font-num">1.5k</span> -->
            <span class="pt-3 fs-2 text-primary fw-bold font-num">
                <?php echo ceil($income[0]['AVG(ord.total_price + del.delivery_fee)']) ?>
            </span>
        </div>
        <p class="income_text">Income</p>
    </div>
    <div class="order">
        <div class="d-flex justify-content-around box">
            <img src="../resource/img/person icon.png" alt="" class="person_icon pt-3">
            <!-- <span class="pt-3 fs-2 text-info fw-bold font-num">300</span> -->
            <span class="pt-3 fs-2 text-info fw-bold font-num">
                <?php echo $order[0]['COUNT(order_number)'] ?>
            </span>
        </div>
        <p class="order_text">Order</p>
    </div>
</div>