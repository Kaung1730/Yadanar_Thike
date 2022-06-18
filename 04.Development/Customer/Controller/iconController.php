<?php
    require_once("../Model/DBConnection.php");
    //call db connection
    $db = new DBConnect();
    $dbConnect = $db->connect();
    $icon =  $dbConnect->prepare("
    SELECT icon FROM home_master
    WHERE del_flg = :del_flg
    ");
    $icon->bindValue(":del_flg", 0);
    $icon->execute();
    $iconResult = $icon->fetchAll(PDO::FETCH_ASSOC);