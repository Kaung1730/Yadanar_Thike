<?php
require_once "../Model/dbConnection.php";

// if (isset($_POST)) {
//     $data = json_decode($_POST["send"], true);
//     $state = json_decode($data['state_id']);
    $db = new DBConnect();
    $dbconnect = $db->connect();
    $sql = $dbconnect->prepare(
        "SELECT * FROM township WHERE state_id"
    );
    // $sql->bindValue(":id",$state);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    $_township = json_encode($result);
    // echo "<pre>";
    // print_r($_township);
// }
