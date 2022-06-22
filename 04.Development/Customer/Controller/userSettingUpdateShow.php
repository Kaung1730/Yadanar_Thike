<?php
session_start();
$data = json_decode($_POST["send"],true);
$customer_id = $data['customer_id'];
require_once "../Model/DBConnection.php";
     //Call DB Connection
        $db =  new DBConnect();
        $dbconnect = $db->connect();
        $sql = $dbconnect->prepare("
        SELECT * 
        FROM customer
        WHERE customer_id = :customer_id AND
        del_flg = 0
        ");
        $sql->bindValue(":customer_id", $customer_id);
        $sql->execute();
        $sqlResult = $sql->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['username'] = $sqlResult[0]['customer_name'];
        $_SESSION['customer_profileImg'] = $sqlResult[0]['customer_profileImg'];
        $_SESSION['password'] = $sqlResult[0]['password'];
        print_r(json_encode($sqlResult[0]['customer_profileImg']));