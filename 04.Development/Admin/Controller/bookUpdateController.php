<?php
require_once "../Model/dbConnection.php";
// get data from author add
if (isset($_POST)) {
    $bookName = $_POST['book_name'];
    $bookCategory = $_POST['book_cate'];
    $bookAuthor = $_POST['book_author'];
    $bookPrice = $_POST['book_price'];
    $bookDesc = $_POST['book_desc'];
    $bookPg = $_POST['book_pg'];
    $bookLen = $_POST['length'];
    $bookWid = $_POST['width'];
    $bookHig = $_POST['height'];
    $bookPublisher = $_POST['book_pub'];
    $bookImage = $_FILES['book_img']['name'];
    $location = $_FILES['book_img']['tmp_name'];
    $del_flg = 0;
    $id = $_POST['id'];
    // call db connection
    $db = new DBConnect();
    $dbconnect = $db->connect();
    if (file_exists($_FILES['book_img']['tmp_name'])) {
        if (move_uploaded_file($location, "../resource/upload_img/" . $bookImage)) {

            $sql = $dbconnect->prepare(
                "UPDATE book_m SET
            book_name = :bName,
            book_price = :bPrice,
            author_id = :author,
            book_desp = :bDesp,
            category_id = :category,
            publisher_id = :publisher,
            page_number = :bPg,
            size = :bSize,
            book_img = :bImg,
            updated_date = :updated_date,
            updated_by = :updated_by 
            WHERE book_id = :id"
            );
            $sql->bindValue(":bName", $bookName);
            $sql->bindValue(":bPrice", $bookPrice);
            $sql->bindValue(":author", $bookAuthor);
            $sql->bindValue(":bDesp", $bookDesc);
            $sql->bindValue(":category", $bookCategory);
            $sql->bindValue(":publisher", $bookPublisher);
            $sql->bindValue(":bPg", $bookPg);
            $sql->bindValue(":bSize", $bookLen . "x" . $bookWid . "x" . $bookHig);
            $sql->bindValue(":bImg", $bookImage);
            $sql->bindValue(":updated_date", date("d/m/Y"));
            $sql->bindValue(":updated_by", "Myat Kaung Khant");
            $sql->bindValue(":id", $id);

            $sql->execute();
            // require "./authorEditController.php";

        }
    } else {
        $sql = $dbconnect->prepare(
            "UPDATE book_m SET
            book_name = :bName,
            book_price = :bPrice,
            author_id = :author,
            book_desp = :bDesp,
            category_id = :category,
            publisher_id = :publisher,
            page_number = :bPg,
            size = :bSize,
            updated_date = :updated_date,
            updated_by = :updated_by 
            WHERE book_id = :id"
        );

        $sql->bindValue(":bName", $bookName);
        $sql->bindValue(":bPrice", $bookPrice);
        $sql->bindValue(":author", $bookAuthor);
        $sql->bindValue(":bDesp", $bookDesc);
        $sql->bindValue(":category", $bookCategory);
        $sql->bindValue(":publisher", $bookPublisher);
        $sql->bindValue(":bPg", $bookPg);
        $sql->bindValue(":bSize", $bookLen . "x" . $bookWid . "x" . $bookHig);
        $sql->bindValue(":updated_date", date("d/m/Y"));
        $sql->bindValue(":updated_by", "Myat Kaung Khant");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
    header("Location: ../View/bookInfo.php");
}
