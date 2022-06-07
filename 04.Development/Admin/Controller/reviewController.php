<?php
require_once "../Model/dbConnection.php";

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

$result = $sql->fetchAll(PDO::FETCH_ASSOC);
