<?php
require_once "../Model/dbConnection.php";
$data = json_decode($_POST["send"], true);
$state = $data['state_id'];
// echo $state;
$db = new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare(
    "SELECT * FROM township WHERE state_id = :id"
);
$sql->bindValue(":id",$state);
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);
$township = json_encode($result);
    // echo "<pre>";
print_r($township);

