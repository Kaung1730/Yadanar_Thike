<?php


 require_once "../Model/DBConnection.php";
//call dbConnection
  $db2= new DBConnect();
   $dbconnect = $db2->connect();

   //write query 
$sql = $dbconnect->prepare("SELECT * From m_book WHERE del_flg = 0");

//go to run
$sql->execute();

//YA LAR tal SELECT yae result ko $result htal htae
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);

//connect with View(show data FROM insertBookController)
require "../View/showData.php";
