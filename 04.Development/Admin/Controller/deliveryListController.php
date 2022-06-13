<?php
require_once "../Model/dbConnection.php";
if (!empty($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$numOfres = 5;
$offset = ($pageno - 1) * $numOfres;
// call db connection
$db = new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare(
    "SELECT delivery.delivery_id,delivery.delivery_fee,state.state_name,township.township_name FROM delivery
    INNER JOIN state ON delivery.state_id = state.state_id 
    INNER JOIN township ON delivery.township_id = township.township_id
    WHERE delivery.del_flg=0"
);
$sql->execute();
$rawResult = $sql->fetchAll(PDO::FETCH_ASSOC);
$total = ceil(count($rawResult) / $numOfres);

$sql = $dbconnect->prepare(
    "SELECT delivery.delivery_id,delivery.delivery_fee,state.state_name,township.township_name FROM delivery
    INNER JOIN state ON delivery.state_id = state.state_id 
    INNER JOIN township ON delivery.township_id = township.township_id
    WHERE delivery.del_flg=0 LIMIT $offset,$numOfres"
);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);