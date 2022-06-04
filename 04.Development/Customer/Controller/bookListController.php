<?php
require_once "../Model/DBConnection.php";

//Call DB Connection
//call db connection
$db = new DBConnect();
$dbConnect = $db->connect();
$category_name =  $dbConnect->prepare("
 SELECT * FROM category
 ");
$yokePya = $dbConnect->prepare("
 SELECT * FROM book_m where category_id = 1
 ");
$novel = $dbConnect->prepare("
 SELECT * FROM book_m where category_id = 2
 ");
$language = $dbConnect->prepare("
 SELECT * FROM book_m where category_id = 3
 ");
$health = $dbConnect->prepare("
 SELECT * FROM book_m where category_id = 4
 ");
$politic = $dbConnect->prepare("
 SELECT * FROM book_m where category_id = 5
 ");
$poem = $dbConnect->prepare("
 SELECT * FROM book_m where category_id = 6
 ");
$success = $dbConnect->prepare("
 SELECT * FROM book_m where category_id = 7
 ");
$biography = $dbConnect->prepare("
 SELECT * FROM book_m where category_id = 8
 ");
$other = $dbConnect->prepare("
 SELECT * FROM book_m where category_id = 9
 ");
$category_name->execute();
$yokePya->execute();
$novel->execute();
$language->execute();
$health->execute();
$politic->execute();
$poem->execute();
$success->execute();
$biography->execute();
$other->execute();
$result = $category_name->fetchAll(PDO::FETCH_ASSOC);
$yokePyaResult = $yokePya->fetchAll(PDO::FETCH_ASSOC);
$novelResult = $novel->fetchAll(PDO::FETCH_ASSOC);
$languageResult = $language->fetchAll(PDO::FETCH_ASSOC);
$healthResult = $health->fetchAll(PDO::FETCH_ASSOC);
$politicResult = $politic->fetchAll(PDO::FETCH_ASSOC);
$poemResult = $poem->fetchAll(PDO::FETCH_ASSOC);
$successResult = $success->fetchAll(PDO::FETCH_ASSOC);
$biographyResult = $biography->fetchAll(PDO::FETCH_ASSOC);
$otherResult = $other->fetchAll(PDO::FETCH_ASSOC);
