<?php
require_once "../Model/dbConnection.php";
    // get data from author add
if(isset($_POST)){
    $authorName = $_POST['author_name'];
    $authorImage = $_POST['author_img'];
    $authorDescription = $_POST['author_des'];
    $authorBorn = $_POST['born_years'];
    $authorDie = $_POST['die_years'];
    $del_flg = 0;

    // call db connection
    $db =new DBConnect();
    $dbconnect = $db->connect();
    $sql = $dbconnect -> prepare(
        "INSERT INTO author
        (
            author_image,
            author_name,
            author_about,
            author_life,
            del_flg,
            created_date,
            created_by
        )
        VALUES
        (
            :image,
            :name,
            :description,
            :born,
            :die,
            :del_flg,
            :created_date,
            :created_by
        )"
    );
    $sql->bindValue(":image", $authorImage);
    $sql->bindValue(":name", $authorName);
    $sql->bindValue(":description", $authorDescription);
    $sql->bindValue(":born", $authorBorn);
    $sql->bindValue(":die", $authorDie);
    $sql->bindValue(":del_flg", $del_flg);
    $sql->bindValue(":created_date", "6/1/2022");
    $sql->bindValue(":created_by", "myat kaung khant");
    $sql->execute();
    
}
?>