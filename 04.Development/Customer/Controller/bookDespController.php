<?php
// session_start();
require_once "../Model/DBConnection.php";

$id = $_GET['book_id'];
$_SESSION['book_id'] = $id;
//Call DB Connection
$db =  new DBConnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare("
    SELECT book_m.*,author.*, publisher.*
    FROM book_m , author , publisher
    WHERE book_m.author_id = author.author_id AND
    book_m.publisher_id = publisher.publisher_id AND
    book_m.book_id = :id;
    ");
$sql->bindValue(":id", $id);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

$author_id = $result[0]['author_id'];
$related = $dbconnect-> prepare("
SELECT *
FROM book_m
WHERE author_id = :author_id
LIMIT 4;
");
$related->bindValue(":author_id", $author_id);
$related->execute();
$relatedResult = $related->fetchAll(PDO::FETCH_ASSOC);

//rating for realted each book

$ratingEachResult = [];
foreach ($relatedResult as $key => $value) {
    $ratingEachBook = $dbconnect-> prepare("
    SELECT avg(rating) FROM
    review_rating WHERE del_flg = 0 AND
    book_id = :id 
    GROUP BY book_id
    ORDER BY rating;
");
//  $ratingEachBook->bindValue(":author_id", $author_id);
$ratingEachBook->bindValue(":id", $value['book_id']);
$ratingEachBook->execute();
array_push($ratingEachResult,$ratingEachBook->fetchAll(PDO::FETCH_ASSOC));

}



