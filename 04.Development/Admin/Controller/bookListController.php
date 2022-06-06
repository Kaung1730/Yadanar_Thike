<?php
require_once "../Model/dbConnection.php";

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

$bookResult = $sql->fetchAll(PDO::FETCH_ASSOC);
