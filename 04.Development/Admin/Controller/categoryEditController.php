<?php

require_once "../Model/dbConnection.php";

$id = $_GET['id'];
$db = new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare(
    "SELECT * FROM category WHERE category_id=:id AND del_flg=0"
);
$sql->bindValue(":id", $id);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
if (count($result) == 0) {
    header("Location: ../View/categoriesList.php");
}