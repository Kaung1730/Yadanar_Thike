<?php

require_once "../Model/dbConnection.php";

$id = $_GET['id'];
// call db connection
$db = new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare(
    "SELECT * FROM book_m WHERE book_id=:id AND del_flg=0"
);

$sql->bindValue(":id", $id);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $dbconnect->prepare("SELECT author_id,author_name FROM author WHERE del_flg=0");
$sql->execute();

$authorList = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $dbconnect->prepare("SELECT category_id,category_name FROM category WHERE del_flg=0");
$sql->execute();

$categoryList = $sql->fetchAll(PDO::FETCH_ASSOC);


if (count($result) == 0) {
    header("Location: ../View/bookInfo.php");
}

// echo "<pre>";
// print_r($result);
