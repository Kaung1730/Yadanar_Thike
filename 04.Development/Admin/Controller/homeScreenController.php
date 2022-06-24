<?php
require_once "../Model/dbConnection.php";

if (isset($_POST)) {
    $shopName = $_POST['shop'];
    $logo = $_FILES['logo']['name'];
    $location1 = $_FILES['logo']['tmp_name'];
    $icon = $_FILES['icon']['name'];
    $location2 = $_FILES['icon']['tmp_name'];
    $del_flg = 0;
    $id = $_POST['id'];

    if (move_uploaded_file($location1, "../resource/image/" . $logo && move_uploaded_file($location2, "../resource/image/" . $icon))) {

        $db = new DBConnect();
        $dbconnect = $db->connect();
        $sql = $dbconnect->prepare(
            "UPDATE home_master SET
                logo = :logo,
                icon = :icon,
                name = :name,
                updated_date = :updated_date,
                updated_by = :updated_by"
        );
        $sql->bindValue(":logo", $logo);
        $sql->bindValue(":icon", $icon);
        $sql->bindValue(":name", $shopName);
        // $sql->bindValue(":id",$id);
        $sql->bindValue(":updated_date", date("d/m/Y"));
        $sql->bindValue(":updated_by", "myat kaung khant");
        $sql->execute();

        header("location: ../View/homeScreen.php");
    }else{
        $db = new DBConnect();
        $dbconnect = $db->connect();
        $sql = $dbconnect->prepare(
            "UPDATE home_master SET
                name = :name,
                updated_date = :updated_date,
                updated_by = :updated_by"
        );
        $sql->bindValue(":name", $shopName);
        // $sql->bindValue(":id",$id);
        $sql->bindValue(":updated_date", date("d/m/Y"));
        $sql->bindValue(":updated_by", "myat kaung khant");
        $sql->execute();

        header("location: ../View/homeScreen.php");
    }
}
