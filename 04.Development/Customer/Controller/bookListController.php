<?php

 require_once "../Model/DBConnection.php";

 //Call DB Connection
 $db2 =  new DBConnect();
 $dbconnect2 = $db2->connect();

$sql = $dbconnect2->prepare("SELECT * From category WHERE del_flg = 0");

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($result);
// foreach ($result as $key => $value) {
//     echo $value['category_name'];
// }
require "../View/category.php";