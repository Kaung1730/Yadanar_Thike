<?php session_start();
 if(isset($_SESSION['status'])){
    $id = $_SESSION['customer_id'];
    require_once "../Model/DBConnection.php";

    //Call DB Connection
    $db2 =  new DBConnect();
    $dbconnect2 = $db2->connect();

    $sql = $dbconnect2->prepare("SELECT * From customer WHERE del_flg = 0 AND customer_id = :id");
    $sql -> bindValue(":id",$id);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    print_r($result);
    require "../View/commonLayout/userSetting.php";
 }
