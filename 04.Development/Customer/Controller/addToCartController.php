<?php
session_start();
$data = json_decode($_POST["send"],true);
$quantity = $data['qty'];
require_once "../Model/DBConnection.php";

//Call DB Connection
$db =  new DBConnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare("
    SELECT book_id,book_img,book_name,book_price, :q as quantity
    FROM book_m 
    WHERE 
    book_id = :id and del_flg = 0;
    ");
$sql->bindValue(":id", $data['book_id']);
$sql->bindValue(":q", $quantity);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if(isset($_SESSION['status'])){
    if(empty($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }
        array_push($_SESSION['cart'],$result);
}

print_r(json_encode($_SESSION['cart']));
