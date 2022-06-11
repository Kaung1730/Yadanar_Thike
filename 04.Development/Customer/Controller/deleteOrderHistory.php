<?php
session_start();
$data = json_decode($_POST["senddata"],true);
$order_number = $data['order_number'];
$customer_id = $_SESSION['customer_id'];
$del_flg = 1;
require_once "../Model/DBConnection.php";
//Call DB Connection
$db =  new DBConnect();
$dbconnect = $db->connect();

//to check duplicate cart item
$checkDuplicate = $dbconnect -> prepare("
    UPDATE `order` SET
    del_flg = :del_flg,
    updated_date= :updated_date,
    updated_by= :updated_by
    WHERE customer_id = :customer_id AND
    `order_number` = :order_number
    ");
    
    $checkDuplicate -> bindValue(":del_flg",$del_flg);
    $checkDuplicate -> bindValue(":updated_date",date("d/m/Y"));
    $checkDuplicate -> bindValue(":updated_by","KaungKaung");
    $checkDuplicate -> bindValue(":order_number",$order_number);
    $checkDuplicate -> bindValue(":customer_id",$customer_id);
    $checkDuplicate->execute();
    $duplicateResult = $checkDuplicate->fetchAll(PDO::FETCH_ASSOC);
    echo "success";



