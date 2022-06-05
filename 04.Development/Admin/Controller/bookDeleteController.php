<?php

require_once "../Model/dbConnection.php";

$id = $_GET['id'];
// call db connection
$db = new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare(
    "UPDATE book_m SET del_flg=1 WHERE book_id = :id"
);

$sql->bindValue(":id", $id);
$sql->execute();

header("Location: ../View/bookInfo.php");
