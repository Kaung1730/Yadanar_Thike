<?php
require_once "../Model/dbConnection.php";

//call dbConnection
$db = new DBConnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare("SELECT * FROM site_master WHERE del_flg = :del_flg");
//go to run
$sql -> bindValue(":del_flg",0);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);


