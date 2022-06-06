<?php
require_once "../Model/dbConnection.php";
// get data from author add
if (isset($_POST)) {
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $del_flg = 0;
    $icon = $_FILES['icon']['name'];
    $location = $_FILES['icon']['tmp_name'];

    if (move_uploaded_file($location, "../resource/upload_img/" . $icon)) {
        // call db connection
        $db = new DBConnect();
        $dbconnect = $db->connect();
        $sql = $dbconnect->prepare(
            "INSERT INTO service
            (
                question,
                answer,
                icon,
                del_flg,
                created_date,
                created_by
            )
            VALUES
            (
                :ques,
                :ans,
                :icon,
                :del_flg,
                :created_date,
                :created_by
            );"
        );
        $sql->bindValue(":ques", $question);
        $sql->bindValue(":ans", $answer);
        $sql->bindValue(":icon", $icon);
        $sql->bindValue(":del_flg", $del_flg);
        $sql->bindValue(":created_date", "6/6/2022");
        $sql->bindValue(":created_by", "myat kaung khant");
        $sql->execute();

        header("location: ../View/serviceList.php");
    }
}
