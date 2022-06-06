<?php
// $customer_id = $_SESSION['customer_id'];
$book_id = $_SESSION['book_id'];
require_once "../Model/DBConnection.php";

//call db connection
$db = new DBConnect();
$dbConnect = $db->connect();
$comment_count =  $dbConnect->prepare("
 SELECT count(comment) FROM review_rating
 WHERE del_flg = 0 AND book_id = :id
    ");
$comment_count->bindValue(":id", $book_id);
$comment_count->execute();
$commentResult = $comment_count->fetchAll(PDO::FETCH_ASSOC);

//to pull out customer_name who write comment

$reviewer_info =  $dbConnect->prepare("
 SELECT customer.customer_name, customer.customer_profileImg,
review_rating.review_date, review_rating.rating, review_rating.comment 
FROM customer,review_rating
WHERE customer.customer_id =review_rating.customer_id AND  review_rating.del_flg = 0 
AND review_rating.book_id = :id
    ");
$reviewer_info->bindValue(":id", $book_id);
$reviewer_info->execute();
$reviewrResult = $reviewer_info->fetchAll(PDO::FETCH_ASSOC);

//to pull out each book average rating
$book_rating = $dbConnect->prepare("
    SELECT avg(rating) FROM
    review_rating WHERE del_flg = 0 AND
    book_id = :id
");
$book_rating->bindValue(":id", $book_id);
$book_rating->execute();
$bookRatingResult = $book_rating->fetchAll(PDO::FETCH_ASSOC);