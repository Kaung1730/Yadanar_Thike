<?php
require_once "../Model/dbConnection.php";

if (isset($_POST)) {
    $categoryName = $_POST['cate_name'];
    $id = $_POST['id'];
    $del_flg = 0;

    $db = new DBConnect();
    $dbconnect = $db->connect();
    $sql = $dbconnect->prepare(
        "UPDATE category SET 
        category_name = :category_name,
        updated_date = :updated_date,
        updated_by = :updated_by  
        WHERE category_id = :id"
    );
    $sql->bindValue(":category_name", $categoryName);
    $sql->bindValue(":updated_date", date("d/m/Y"));
    $sql->bindValue(":updated_by", "Myat Kaung Khant");
    $sql->bindValue(":id", $id);
    $sql->execute();

    require "../Controller/categoryEditController.php";
}
