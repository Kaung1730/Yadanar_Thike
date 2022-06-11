<?php
require_once "../Model/dbConnection.php";
if (!empty($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$numOfres = 5;
$offset = ($pageno - 1) * $numOfres;
// call db connection
$db = new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare(
    "SELECT
    review.*,
    book.book_name
    FROM
        review_rating AS review
    LEFT JOIN book_m AS book
    ON
        review.book_id = book.book_id WHERE review.del_flg=0"
);
$sql->execute();
$rawResult = $sql->fetchAll(PDO::FETCH_ASSOC);
$total = ceil(count($rawResult) / $numOfres);

$sql = $dbconnect->prepare(
    "SELECT
    review.*,
    book.book_name
    FROM
        review_rating AS review
    LEFT JOIN book_m AS book
    ON
        review.book_id = book.book_id WHERE review.del_flg=0 LIMIT $offset,$numOfres"
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
