<?php
require_once "../Model/dbConnection.php";
// get data from author add
if (isset($_POST)) {
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $del_flg = 0;
    $icon = $_FILES['icon']['name'];
    $location = $_FILES['icon']['tmp_name'];
    $id = $_POST['id'];
    // call db connection
    $db = new DBConnect();
    $dbconnect = $db->connect();
    if (file_exists($_FILES['icon']['tmp_name'])) {
        if (move_uploaded_file($location, "../resource/image/" . $icon)) {

            $sql = $dbconnect->prepare(
                "UPDATE service SET
            question = :ques,
            answer = :ans,
            icon = :icon WHERE service_id = :id"
            );
            $sql->bindValue(":ques", $question);
            $sql->bindValue(":ans", $answer);
            $sql->bindValue(":icon", $icon);
            $sql->bindValue(":id", $id);

            $sql->execute();

            // require "./authorEditController.php";

        }
    } else {
        $sql = $dbconnect->prepare(
            "UPDATE service SET
            question = :ques,
            answer = :ans WHERE service_id = :id"
        );
        $sql->bindValue(":ques", $question);
        $sql->bindValue(":ans", $answer);
        $sql->bindValue(":id", $id);

        $sql->execute();
    }
    header("Location: ../View/serviceList.php");
}
