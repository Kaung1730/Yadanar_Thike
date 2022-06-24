<?php
    require_once"../Model/dbConnection.php";
    //call dbConnection
    $db = new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect -> prepare("SELECT * FROM user_guide WHERE del_flg = :del_flg");
    //go to run
    $sql -> bindValue(":del_flg",0);
    $sql -> execute();
    $result = $sql -> fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($result);