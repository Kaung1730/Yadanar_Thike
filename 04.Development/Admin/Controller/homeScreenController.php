<?php
require_once "../Model/dbConnection.php";

if (isset($_POST)) {
    $shopName = $_POST['shop'];
    $logo = $_FILES['logo']['name'];
    $location = $_FILES['logo']['tmp_name'];
    $icon = $_FILES['icon']['name'];
    $location = $_FILES['icon']['tmp_name'];
    $del_flg = 0;

    if (move_uploaded_file($location, "../resource/upload_img/" . $logo || move_uploaded_file($location, "../resource/upload_img/" . $icon))) {

        $db = new DBConnect();
        $dbconnect = $db->connect();
        $sql = $dbconnect->prepare(
            "INSERT INTO home_master
            (
                logo,
                icon,
                name,
                del_flg,
                created_date,
                created_by
            )
            VALUES
            (
                :logo,
                :icon,
                :name,
                :del_flg,
                :created_date,
                :created_by
            );"
        );
        $sql->bindValue(":logo", $logo);
        $sql->bindValue(":icon", $icon);
        $sql->bindValue(":name", $shopName);
        $sql->bindValue(":del_flg", $del_flg);
        $sql->bindValue(":created_date", date("d/m/Y"));
        $sql->bindValue(":created_by", "myat kaung khant");
        $sql->execute();

        header("location: ../View/homeScreen.php");
    }
}
