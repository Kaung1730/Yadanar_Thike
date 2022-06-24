<?php


require_once "../Model/dbConnection.php";
//call dbConnection
$db2 = new DBConnect();
$dbconnect = $db2->connect();


$sql = $dbconnect->prepare("SELECT * FROM privacy_policy WHERE del_flg = :del_flg");

//go to run
$sql -> bindValue(":del_flg",0);
$sql->execute();


$result = $sql->fetchAll(PDO::FETCH_ASSOC);
