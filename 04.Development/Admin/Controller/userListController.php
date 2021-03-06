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
        valid = :valid,
        updated_date = :updated_date,
        updated_by = :updated_by  
        WHERE customer_id = :id"
    );
    $sql->bindValue(":valid", $check);
    $sql->bindValue(":updated_date", date("d/m/Y"));
    $sql->bindValue(":updated_by", "Myat Kaung Khant");
    $sql->bindValue(":id", $user_id);
    $sql->execute();

    // require "../Controller/privacyEditController.php";
}



