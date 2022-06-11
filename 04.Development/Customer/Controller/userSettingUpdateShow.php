<?php
session_start();
$img = $_SESSION['customer_img'];
require_once "../Model/DBConnection.php";
     //Call DB Connection
        $db =  new DBConnect();
        $dbconnect = $db->connect();
        $sql = $dbconnect->prepare("
        SELECT * 
        FROM customer
        WHERE customer_id = :customer_id
        ");
        $sql->bindValue(":customer_id", $customer_id);
        $sqlResult = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    if(isset($_SESSION['customer_id'])){
        $_SESSION['username'] = $sqlResult[0]['customer_name'];
        $_SESSION['customer_profileImg'] = $sqlResult[0]['customer_profileImg'];
    }