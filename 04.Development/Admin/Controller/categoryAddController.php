<?php

    require_once "../Model/dbConnection.php";

    if(isset($_POST)){
        $categoryName = $_POST['cate_name'];
        $del_flg = 0;

        $db = new DBConnect();
        $dbconnect = $db->connect();
        $sql = $dbconnect->prepare(
        "INSERT INTO category
            (
                category_name,
                del_flg,
                created_date,
                created_by
            )
            VALUES
            (
                :category_name,
                :del_flg,
                :created_date,
                :created_by
            )"
        );
        $sql->bindValue(":category_name",$categoryName);
        $sql->bindValue(":del_flg", $del_flg);
        $sql->bindValue(":created_date", "6/5/2022");
        $sql->bindValue(":created_by", "myat kaung khant");
        $sql->execute();

        header("Location: ../View/categoriesList.php");
    }
