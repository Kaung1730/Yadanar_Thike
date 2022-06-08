<?php
require_once "../Model/dbConnection.php";

// call db connection
$db = new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT * FROM admin WHERE del_flg=0");
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);
