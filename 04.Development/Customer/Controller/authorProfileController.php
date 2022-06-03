<?php


require_once "../Model/dbConnection.php";
$id = $_GET['id'];
//call dbConnection
$db2 = new DBConnect();
$dbconnect = $db2->connect();


$sql = $dbconnect->prepare("SELECT * From author WHERE id=:id");
$sql->bindValue(":id", $id);
//go to run
$sql->execute();


$result = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);

//connect with View
// require "../View/authorProfile.php";
