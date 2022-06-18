<?php


require_once "../Model/dbConnection.php";
//call dbConnection
$db2 = new DBConnect();
$dbconnect = $db2->connect();


$sql = $dbconnect->prepare("SELECT GROUP_CONCAT(author.author_id) as authorID, GROUP_CONCAT(author.author_name) as authorName ,author_category From author GROUP BY author_category");
// $sql = $dbconnect->prepare("SELECT * From author");

//go to run
// $sql->bindValue(":id", $id);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
$show = json_encode($result);
// echo "<pre>";
// print_r($result);
