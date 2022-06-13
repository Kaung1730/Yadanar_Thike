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
    cat.book_id,
    book.book_name
    FROM
        `order` AS ord
    LEFT JOIN cart AS cat
    ON
        ord.cart_id = cat.cart_id
    LEFT JOIN book_m AS book
    ON
        cat.book_id = book.book_id 
    WHERE ord.del_flg=0"
);
$sql->execute();
$rawResult = $sql->fetchAll(PDO::FETCH_ASSOC);
$total = ceil(count($rawResult) / $numOfres);

$sql = $dbconnect->prepare(
    "SELECT
    ord.*,
    cat.book_id,
    book.book_name
    FROM
        `order` AS ord
    LEFT JOIN cart AS cat
    ON
        ord.cart_id = cat.cart_id
    LEFT JOIN book_m AS book
    ON
        cat.book_id = book.book_id
    WHERE ord.del_flg=0
    LIMIT $offset,$numOfres"
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
