<?php
require_once "../Model/dbConnection.php";
    // get data from author add
if(isset($_POST)){
    $authorName = $_POST['author_name'];
    $authorImage = $_POST['author_img'];
    $authorDescription = $_POST['author_des'];
    $authorBorn = $_POST['born_years'];
    $authorDie = $_POST['die_years'];

    // call db connection
    $db =new DBConnect();
    $dbconnect = $db->connect();
    $sql = $dbconnect -> prepare(
        "INSERT INTO Author
        (
            author_image,
            author_name,
            author_about,
            author_life
        )
        VALUES
        (
            :image,
            :name,
            :description,
            :born,
            :die,
        )"
    );
    $sql->bindValue(":image", $authorImage);
    $sql->bindValue(":name", $authorName);
    $sql->bindValue(":description", $authorDescription);
    $sql->bindValue(":born", $authorBorn - ":die",$authorDie);

    $sql->execute();
    
}
?>