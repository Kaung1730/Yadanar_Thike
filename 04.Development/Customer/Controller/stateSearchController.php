<?php
    $data = json_decode($_POST["send"],true);
    $state = $data['state'];
    $del_flg = 0;
    require_once("../Model/DBConnection.php");
    $db = new DBConnect();
    $dbConnect = $db->connect();
    $sql = $dbConnect -> prepare("
    SELECT state.*, delivery.*, cart.*, book_m.*
    FROM state, delivery, cart, book_m
    WHERE state.delivery_id = delivery.delivery_id AND
    cart.book_id = book_m.book_id AND
    state.state_name = :state_name AND
    state.del_flg = :del_flg
    ");
    $sql -> bindValue(":state_name",$state);
    $sql -> bindValue(":del_flg",$del_flg);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    print_r(json_encode($result));

