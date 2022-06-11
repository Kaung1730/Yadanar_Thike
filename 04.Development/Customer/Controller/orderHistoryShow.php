<?php
    session_start();
    $customer_id = $_SESSION['customer_id'];
    require_once("../Model/DBConnection.php");
    //call db connection
    $db = new DBConnect();
    $dbConnect = $db->connect();
    $orderHistory =  $dbConnect->prepare("
    SELECT `order`.*, cart.*, book_m.*
    FROM `order` , cart, book_m
    WHERE `order`.del_flg = :del_flg AND
    `order`.cart_id = cart.cart_id AND
    book_m.book_id = cart.book_id AND
    `order`.customer_id = :customer_id;
    ");
    $orderHistory->bindValue(":customer_id", $customer_id);
    $orderHistory->bindValue(":del_flg", 0);
    $orderHistory->execute();
    $orderHistoryResult = $orderHistory->fetchAll(PDO::FETCH_ASSOC);
    print_r(json_encode($orderHistoryResult));