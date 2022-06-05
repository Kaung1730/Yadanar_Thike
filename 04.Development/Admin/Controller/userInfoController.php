<?php 
require_once "../Model/dbConnection.php";

$db = new DBConnect();
$dbconnect=$db->connect();
$sql = $dbconnect->prepare("SELECT * FROM customer WHERE del_flg=0");

$sql->execute();
$result=$sql->fetchAll(PDO::FETCH_ASSOC);