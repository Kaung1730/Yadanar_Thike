<?php
<<<<<<< HEAD

require_once "../Model/DBConnection.php";

$id = $_GET['book_id'];

=======
session_start();
require_once "../Model/DBConnection.php";

$id = $_GET['book_id'];
$_SESSION['book_id'] = $id;
>>>>>>> origin/main
//Call DB Connection
$db =  new DBConnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare("
<<<<<<< HEAD
            SELECT * FROM book_m
            WHERE book_id = :id;
    ");

$sql->bindValue(":id", $id);

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

require "../View/bookDescription.php";
=======
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
    WHERE author_id = :author_id;
");
$related->bindValue(":author_id", $author_id);
$related->execute();
$relatedResult = $related->fetchAll(PDO::FETCH_ASSOC);

>>>>>>> origin/main
