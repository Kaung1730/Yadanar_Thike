<?php


require_once "../Model/dbConnection.php";
//call dbConnection
$db2 = new DBConnect();
$dbconnect = $db2->connect();


$sql = $dbconnect->prepare("SELECT * FROM category WHERE del_flg = 0
");

//go to run
$sql->execute();


$result = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);

//connect with View
// require "../View/authorList.php";
// header("Location:../View/authorList.php");