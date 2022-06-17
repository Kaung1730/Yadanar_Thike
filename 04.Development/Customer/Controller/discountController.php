<?php


require_once "../Model/dbConnection.php";

//call dbConnection
$db2 = new DBConnect();
$dbconnect = $db2->connect();



$sql = $dbconnect->prepare("SELECT * FROM book_m 
LEFT JOIN author
ON book_m.author_id = author.author_id  WHERE book_m.book_id=14; 
");

//go to run
$sql->execute();


$result = $sql->fetchAll(PDO::FETCH_ASSOC);
