<?php
session_start();
$data = json_decode($_POST["send"],true);
require_once "../Model/DBConnection.php";

//Call DB Connection
$db =  new DBConnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare("
    SELECT *
    FROM book_m 
    WHERE 
    book_id = :id and del_flg = 0;
    ");
$sql->bindValue(":id", $data['book_id']);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
if(isset($_SESSION['status'])){
        $_SESSION['cart'] = array();
        array_push($_SESSION['cart'],$result);
}

print_r(json_encode($_SESSION['cart']));
