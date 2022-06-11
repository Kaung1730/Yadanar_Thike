<?php
require_once "../Model/dbConnection.php";
if (!empty($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$numOfres = 5;
$offset = ($pageno - 1) * $numOfres;
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
$rawResult = $sql->fetchAll(PDO::FETCH_ASSOC);
$total = ceil(count($rawResult) / $numOfres);

$sql = $dbconnect->prepare(
    "SELECT
    ord.*,
    book.book_name
    FROM
        `order` AS ord
    LEFT JOIN book_m AS book
    ON
        ord.book_id = book.book_id  LIMIT $offset,$numOfres"
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
