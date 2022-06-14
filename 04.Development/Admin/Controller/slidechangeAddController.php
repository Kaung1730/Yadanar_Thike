<?php
require_once "../Model/dbConnection.php";
// get data from author add
if (isset($_POST)) {
    $del_flg = 0;
    $slide = $_FILES['slide']['name'];
    $location = $_FILES['slide']['tmp_name'];

    if (move_uploaded_file($location, "../resource/image/" . $slide)) {
        // call db connection
        $db = new DBConnect();
        $dbconnect = $db->connect();
        $sql = $dbconnect->prepare(
            "INSERT INTO slider
            (
                slider_image,
                del_flg,
                created_date,
                created_by
                
            )
            VALUES
            (
                :image,
                :del_flg,
                :created_date,
                :created_by
            );"
        );
        $sql->bindValue(":image", $slide);
        $sql->bindValue(":del_flg", $del_flg);
        $sql->bindValue(":created_date", date("d/m/Y"));
        $sql->bindValue(":created_by", "myat kaung khant");
        $sql->execute();

        header("location: ../View/slidechangeList.php");
    }
}
