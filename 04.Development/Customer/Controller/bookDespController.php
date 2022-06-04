<?php

require_once "../Model/DBConnection.php";

$id = $_GET['book_id'];

//Call DB Connection
$db =  new DBConnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare("
            SELECT * FROM book_m
            WHERE book_id = :id;
    ");

$sql->bindValue(":id", $id);

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);


