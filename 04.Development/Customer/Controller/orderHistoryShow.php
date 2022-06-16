<?php
    session_start();
    $customer_id = $_SESSION['customer_id'];
    require_once("../Model/DBConnection.php");
    //call db connection
    $db = new DBConnect();
    $dbConnect = $db->connect();
    $orderHistory =  $dbConnect->prepare("
    SELECT `order`.*, cart.*, book_m.*, delivery.*, GROUP_CONCAT(book_m.book_name) as bookName, SUM(`order`.total_price) as totalPrice
    , SUM(delivery.delivery_fee) as deliveryFee , DATE_FORMAT(`order`.order_date, '%b %d,%Y') as orderDate
    FROM `order` , cart, book_m, delivery
    WHERE `order`.del_flg = :del_flg AND
    `order`.cart_id = cart.cart_id AND
    book_m.book_id = cart.book_id AND
    `order`.delivery_id = delivery.delivery_id AND
    `order`.customer_id = :customer_id
    GROUP BY `order`.order_number;

    ");
    $orderHistory->bindValue(":customer_id", $customer_id);
    $orderHistory->bindValue(":del_flg", 0);
    $orderHistory->execute();
    $orderHistoryResult = $orderHistory->fetchAll(PDO::FETCH_ASSOC);
    print_r(json_encode($orderHistoryResult));