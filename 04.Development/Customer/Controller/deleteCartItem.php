<?php
session_start();
$data = json_decode($_POST["senddata"],true);
$book_id = $data['item_id'];

$customer_id = $_SESSION['customer_id'];
$del_flg = 1;
require_once "../Model/DBConnection.php";
//Call DB Connection
$db =  new DBConnect();
$dbconnect = $db->connect();

//to check duplicate cart item
$checkDuplicate = $dbconnect -> prepare("
    UPDATE cart SET
    del_flg = :del_flg,
    updated_date= :updated_date,
    updated_by= :updated_by
    WHERE book_id = :book_id AND
    customer_id = :customer_id
    ");
    
    $checkDuplicate -> bindValue(":del_flg",$del_flg);
    $checkDuplicate -> bindValue(":updated_date",date("d/m/Y"));
    $checkDuplicate -> bindValue(":updated_by","KaungKaung");
    $checkDuplicate -> bindValue(":book_id",$book_id);
    $checkDuplicate -> bindValue(":customer_id",$customer_id);
    $checkDuplicate->execute();
    $duplicateResult = $checkDuplicate->fetchAll(PDO::FETCH_ASSOC);
    echo "success";



