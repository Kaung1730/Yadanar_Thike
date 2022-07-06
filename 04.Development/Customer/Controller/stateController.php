<?php
    require_once"../Model/DBConnection.php";
    //call dbConnection
    $db1 = new DBConnect();
    $dbconnect1 = $db1->connect();

    $sql1 = $dbconnect1 -> prepare("SELECT * FROM state WHERE del_flg = :del_flg");
    //go to run
    $sql1 -> bindValue(":del_flg",0);
    $sql1 -> execute();
    $result1 = $sql1 -> fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($result1);