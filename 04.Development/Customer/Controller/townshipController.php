<?php
    require_once"../Model/dbConnection.php";
    //call dbConnection
    $db = new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect -> prepare("SELECT * FROM township");
    //go to run
    $sql -> execute();
    $result = $sql -> fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($result);