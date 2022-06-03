<?php
 require_once "../Model/DBConnection.php";

 //Call DB Connection
 $db2 =  new DBConnect();
 $dbconnect2 = $db2->connect();

$poem = $dbconnect2->prepare("SELECT book_name From book_m  WHERE del_flg = 0  group by category_id ");
$categoryTitle = $dbconnect2->prepare("SELECT category_name From category  WHERE del_flg = 0");
$poem->execute();
$categoryTitle->execute();
$pResult = $poem->fetchAll(PDO::FETCH_ASSOC);
$categoryTitle = $categoryTitle->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
 print_r($pResult);
foreach ($pResult as $key => $value) {
    echo $value['book_name']."<br>";
}
require_once "../View/category.php";