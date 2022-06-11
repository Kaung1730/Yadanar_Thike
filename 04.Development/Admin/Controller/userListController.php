<?php
require_once "../Model/dbConnection.php";


if (isset($_POST)) {
    $data = json_decode($_POST["send"], true);
    $user_id = $data['user_id'];
    $check = $data['check'];

    $db = new DBConnect();
    $dbconnect = $db->connect();
    $sql = $dbconnect->prepare(
        "UPDATE customer SET 
        valid = :valid
        WHERE customer_id = :id"
    );
    $sql->bindValue(":valid", $check);
    $sql->bindValue(":id", $user_id);
    $sql->execute();

    // require "../Controller/privacyEditController.php";
}



