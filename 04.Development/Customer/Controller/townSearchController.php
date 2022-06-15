<?php
    $data = json_decode($_POST["send"],true);
    $town = $data['town'];
    $del_flg = 0;
    require_once("../Model/DBConnection.php");
    $db = new DBConnect();
    $dbConnect = $db->connect();
    $sql = $dbConnect -> prepare("
        SELECT township.*, delivery.*, cart.*, book_m.*
        FROM township, delivery, cart, book_m
        WHERE township.delivery_id = delivery.delivery_id AND
        cart.book_id = book_m.book_id AND
        township.township_name = :township_name AND
        township.del_flg = :del_flg
    ");
    $sql -> bindValue(":township_name",$town);
    $sql -> bindValue(":del_flg",$del_flg);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    print_r(json_encode($result));

