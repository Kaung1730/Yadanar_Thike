<?php

require_once "../Model/dbConnection.php";

if (isset($_POST)) {
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $del_flg = 0;

    $db = new DBConnect();
    $dbconnect = $db->connect();
    $sql = $dbconnect->prepare(
        "INSERT INTO user_guide
            (
                userguide_title,
                userguide_text,
                del_flg,
                created_date,
                created_by
            )
            VALUES
            (
                :ques,
                :ans,
                :del_flg,
                :created_date,
                :created_by
            )"
    );
    $sql->bindValue(":ques", $question);
    $sql->bindValue(":ans", $answer);
    $sql->bindValue(":del_flg", $del_flg);
    $sql->bindValue(":created_date", "6/5/2022");
    $sql->bindValue(":created_by", "myat kaung khant");
    $sql->execute();

    // header("Location: ../View/categoriesList.php");
}
