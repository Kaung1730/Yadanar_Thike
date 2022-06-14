<?php
require_once "../Model/dbConnection.php";
    // get data from author add
if(isset($_POST)){
    $authorName = $_POST['author_name'];
    $authorDescription = $_POST['author_des'];
    $authorCategory = $_POST['author_category'];
    $authorBorn = $_POST['born_years'];
    $authorDie = $_POST['die_years'];
    $del_flg = 0;
    $authorImage = $_FILES['author_img']['name'];
    $location = $_FILES['author_img']['tmp_name'];

    if(move_uploaded_file($location , "../resource/image/".$authorImage)){
        // call db connection
        $db = new DBConnect();
        $dbconnect = $db->connect();
        $sql = $dbconnect->prepare(
            "INSERT INTO author
            (
                author_image,
                author_name,
                author_about,
                author_life,
                author_category,
                del_flg,
                created_date,
                created_by
            )
            VALUES
            (
                :image,
                :name,
                :description,
                :life,
                :category,
                :del_flg,
                :created_date,
                :created_by
            );"
        );
        $sql->bindValue(":image", $authorImage);
        $sql->bindValue(":name", $authorName);
        $sql->bindValue(":description", $authorDescription);
        $sql->bindValue(":life", $authorBorn . "-" . $authorDie);
        $sql->bindValue(":category", $authorCategory);
        $sql->bindValue(":del_flg", $del_flg);
        $sql->bindValue(":created_date", date("d/m/Y"));
        $sql->bindValue(":created_by", "myat kaung khant");
        $sql->execute();

        header("location: ../View/authorList.php");
    }
    
}

