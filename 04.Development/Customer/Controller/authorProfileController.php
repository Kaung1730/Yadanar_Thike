<?php

require_once "../Model/dbConnection.php";
$id = $_GET['id'];
//call dbConnection
$db2 = new DBConnect();
$dbconnect = $db2->connect();


$sql = $dbconnect->prepare("SELECT * From author WHERE author_id=:id");
$sql->bindValue(":id", $id);
//go to run
$sql->execute();


$result = $sql->fetchAll(PDO::FETCH_ASSOC);
?>