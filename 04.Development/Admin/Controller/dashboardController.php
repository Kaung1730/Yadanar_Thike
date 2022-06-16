<?php
require_once "../../Model/dbConnection.php";

$db = new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare(
    "SELECT COUNT(customer_id) FROM customer WHERE del_flg=0"
);
$sql->execute();
$totalUser = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $dbconnect->prepare(
    "SELECT COUNT(view_count) FROM book_m WHERE del_flg=0"
);
$sql->execute();
$totalView = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $dbconnect->prepare(
    "SELECT AVG(ord.total_price + del.delivery_fee) FROM `order` AS ord LEFT JOIN delivery AS del ON ord.delivery_id=del.delivery_id"
);
$sql->execute();
$income = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $dbconnect->prepare(
    "SELECT COUNT(order_number) FROM `order` WHERE del_flg=0"
);
$sql->execute();
$order = $sql->fetchAll(PDO::FETCH_ASSOC);

