<?php

require_once "../Model/dbConnection.php";

$id = $_GET['id'];
// call db connection
$db = new DBConnect();
$dbconnect = $db -> connect();
$sql = $dbconnect -> prepare(
    "SELECT * FROM author WHERE id=:id AND del_flg=0"
);
$sql-> bindValue(":id",$id);
$sql-> execute();
$result = $sql -> fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);
<<<<<<< HEAD
require "../View/authorEdit.php";
=======
>>>>>>> origin/main
