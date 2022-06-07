<?php


require_once "../Model/dbConnection.php";
//call dbConnection
$db2 = new DBConnect();
$dbconnect = $db2->connect();


$sql = $dbconnect->prepare("SELECT * From author");

//go to run
$sql->execute();


$result = $sql->fetchAll(PDO::FETCH_ASSOC);
