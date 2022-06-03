<?php
 require_once "../Model/DBConnection.php";

 //Call DB Connection
 //call db connection
 $db = new DBConnect();
 $dbConnect = $db->connect();
 $sql = $dbConnect -> prepare("
 SELECT book_m.book_name, book_m.book_img, category.category_name
 FROM book_m LEFT JOIN category
 ON book_m.category_id = category.category_id
 WHERE category.category_id=1
 ORDER BY category.category_name
 ");
$sql->execute();
 $result = $sql->fetchAll(PDO::FETCH_ASSOC);
 echo "<pre>";
 print_r($result);