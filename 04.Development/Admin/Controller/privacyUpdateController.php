<?php
require_once "../Model/dbConnection.php";

if (isset($_POST)) {
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $id = $_POST['id'];
    $del_flg = 0;

    $db = new DBConnect();
    $dbconnect = $db->connect();
    $sql = $dbconnect->prepare(
        "UPDATE privacy_policy SET 
        question = :ques,
        answer = :ans,
        updated_date = :updated_date,
        updated_by = :updated_by  
        WHERE pp_id = :id"
    );
    $sql->bindValue(":ques", $question);
    $sql->bindValue(":ans", $answer);
    $sql->bindValue(":updated_date", date("d/m/Y"));
    $sql->bindValue(":updated_by", "Myat Kaung Khant");
    $sql->bindValue(":id", $id);
    $sql->execute();

    require "../Controller/privacyEditController.php";
}
