<?php
require_once "../Model/dbConnection.php";
// get data from author add
if (isset($_POST)) {
    $del_flg = 0;
    $slide = $_FILES['slide']['name'];
    $location = $_FILES['slide']['tmp_name'];
    $id = $_POST['id'];
    // call db connection
    $db = new DBConnect();
    $dbconnect = $db->connect();
    if (file_exists($_FILES['slide']['tmp_name'])) {
        if (move_uploaded_file($location, "../resource/image/" . $slide)) {

            $sql = $dbconnect->prepare(
                "UPDATE slider SET slider_image = :image WHERE slider_id = :id"
            );
            $sql->bindValue(":image", $slide);
            $sql->bindValue(":id", $id);

            $sql->execute();

            // require "./authorEditController.php";

        }
    }
    header("Location: ../View/slidechangeList.php");
}
