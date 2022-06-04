<?php

require_once "../Model/dbConnection.php";

$id = $_GET['author_id'];
// call db connection
$db = new DBConnect();
$dbconnect = $db -> connect();
$sql = $dbconnect -> prepare(
    "SELECT * FROM author WHERE author_id=:id AND del_flg=0"
);
$sql-> bindValue(":id",$id);
$sql-> execute();
$result = $sql -> fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);
