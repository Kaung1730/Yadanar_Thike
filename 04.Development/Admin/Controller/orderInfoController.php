<?php
require_once "../Model/dbConnection.php";

$db = new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare(
    "SELECT
    ord.*,
    book.book_name
    FROM
        `order` AS ord
    LEFT JOIN book_m AS book
    ON
        ord.book_id = book.book_id"
);

$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
