<?php
require_once "../Model/dbConnection.php";
$id = $_SESSION['author_id'];
//call dbConnection
$db2 = new DBConnect();
$dbconnect = $db2->connect();



$sql = $dbconnect->prepare(
"SELECT book_m.*, author.*
FROM book_m , author
WHERE author.author_id = :author_id AND
book_m.author_id = author.author_id AND
author.del_flg = 0");
$sql->bindValue(":author_id", $id);
//go to run
$sql->execute();


$result = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);

//connect with View
// require "../View/authorProfile.php";
