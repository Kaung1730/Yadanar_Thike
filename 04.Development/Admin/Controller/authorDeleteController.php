<?php

require_once "../Model/dbConnection.php";

$id = $_GET['id'];
// call db connection
$db = new DBConnect();
$dbconnect = $db -> connect();
$sql = $dbconnect -> prepare(
    "UPDATE author SET del_flg=1 WHERE author_id = :id"
);

$sql->bindValue(":id",$id);
$sql->execute();

header("Location: ../View/authorList.php");