
<?php
require_once "../Model/dbConnection.php";
// get data from author add
if (isset($_POST)) {
    $authorName = $_POST['author_name'];
    $authorDescription = $_POST['author_des'];
    $authorCategory = $_POST['author_category'];
    $authorBorn = $_POST['born_years'];
    $authorDie = $_POST['die_years'];
    $del_flg = 0;
    $authorImage = $_FILES['author_img']['name'];
    $location = $_FILES['author_img']['tmp_name'];
    $id = $_POST['id'];
    // call db connection
    $db = new DBConnect();
    $dbconnect = $db->connect();
    if (file_exists($_FILES['author_img']['tmp_name'])) {
        if (move_uploaded_file($location, "../resource/upload_img/" . $authorImage)) {

            $sql = $dbconnect->prepare(
                "UPDATE author SET
            author_image = :img,
            author_name = :name,
            author_about = :description,
            author_life = :life,
            author_category = :category WHERE author_id = :id"
            );
            $sql->bindValue(":image", $authorImage);
            $sql->bindValue(":name", $authorName);
            $sql->bindValue(":description", $authorDescription);
            $sql->bindValue(":life", $authorBorn . "-" . $authorDie);
            $sql->bindValue(":category", $authorCategory);
            $sql->bindValue(":id", $id);

            $sql->execute();

            require "../Controller/authorEditController.php";
        }
    }
}
