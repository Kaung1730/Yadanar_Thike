<?php
session_start();
if(isset($_SESSION['status-customer'])){
    $customer_id = $_SESSION['customer_id'];
    $del_flg = 0;
    require_once "../Model/DBConnection.php";
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();
    //to show cart item number on basket badge
    $cartNumber = $dbconnect -> prepare("
    SELECT count(cart_id) 
    FROM cart
    WHERE
    customer_id = :customer_id AND
    del_flg = :del_flg
");
$cartNumber -> bindValue(":customer_id",$customer_id);
$cartNumber -> bindValue(":del_flg",$del_flg);
$cartNumber->execute();
$cartNumberResult = $cartNumber->fetchAll(PDO::FETCH_ASSOC);
echo $cartNumberResult[0]['count(cart_id)'];
}