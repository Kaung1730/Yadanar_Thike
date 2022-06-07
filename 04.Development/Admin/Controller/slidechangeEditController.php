<?php

require_once "../Model/dbConnection.php";

$id = $_GET['id'];
// call db connection
$db = new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare(
    "SELECT * FROM slider WHERE slider_id=:id AND del_flg=0"
);
$sql->bindValue(":id", $id);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
if (count($result) == 0) {
    header("Location: ../View/slidechangeList.php");
}

// echo "<pre>";
// print_r($result);
