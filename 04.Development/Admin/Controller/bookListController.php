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
    book.*,
    cate.category_name,
    aut.author_name
    FROM
        book_m AS book
    LEFT JOIN category AS cate
    ON
        book.category_id = cate.category_id
    LEFT JOIN author AS aut
    ON
    book.author_id = aut.author_id
    WHERE book.del_flg=0"
);
$sql->execute();
$rawResult = $sql->fetchAll(PDO::FETCH_ASSOC);
$total = ceil(count($rawResult) / $numOfres);

$sql = $dbconnect->prepare(
    "SELECT
    book.*,
    cate.category_name,
    aut.author_name
    FROM
        book_m AS book
    LEFT JOIN category AS cate
    ON
        book.category_id = cate.category_id
    LEFT JOIN author AS aut
    ON
    book.author_id = aut.author_id
    WHERE book.del_flg=0 LIMIT $offset,$numOfres"
);
$sql->execute();
$bookResult = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $dbconnect->prepare("SELECT author_id,author_name FROM author WHERE del_flg=0");
$sql->execute();

$authorList = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $dbconnect->prepare("SELECT category_id,category_name FROM category WHERE del_flg=0");
$sql->execute();

$categoryList = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $dbconnect->prepare("SELECT publisher_id,publisher_name FROM publisher WHERE del_flg=0");
$sql->execute();

$publisherList = $sql->fetchAll(PDO::FETCH_ASSOC);
