<?php
    $data = json_decode($_POST["send"],true);
    $customer_id = $data['customer_id'];
    $del_flg = 0;
    require_once("../Model/DBConnection.php");
    $db = new DBConnect();
    $dbConnect = $db->connect();
    $sql = $dbConnect -> prepare("
    SELECT cart.cart_id, cart.customer_id, cart.quantity, cart.book_id, book_m.*
    FROM cart, book_m
    WHERE cart.book_id = book_m.book_id AND
    cart.customer_id = :customer_id AND
    cart.del_flg = :del_flg
    ");
    $sql -> bindValue(":customer_id",$customer_id);
    $sql -> bindValue(":del_flg",$del_flg);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    print_r(json_encode($result));
?>