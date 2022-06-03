<?php
 require_once "../Model/DBConnection.php";

 //Call DB Connection
 $db2 =  new DBConnect();
 $dbconnect2 = $db2->connect();

$book = $dbconnect2->prepare("SELECT * From book_m  WHERE del_flg = 0  group by category_id");
$categoryTitle = $dbconnect2->prepare("SELECT category_name From category  WHERE del_flg = 0");
$book->execute();
$categoryTitle->execute();
$bookResult = $book->fetchAll(PDO::FETCH_ASSOC);
$categoryTitle = $categoryTitle->fetchAll(PDO::FETCH_ASSOC);
