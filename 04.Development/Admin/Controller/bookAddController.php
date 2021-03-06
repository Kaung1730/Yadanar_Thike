<?php

require_once "../Model/dbConnection.php";

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
    $stock = $_POST['stock'];
    $bookPublisher = $_POST['book_pub'];
    $bookImage = $_FILES['book_img']['name'];
    $location = $_FILES['book_img']['tmp_name'];
    $bookPdf = $_FILES['book_pdf']['name'];
    $pdfLocation = $_FILES['book_pdf']['tmp_name'];
    $del_flg = 0;

    if (move_uploaded_file($location, "../resource/image/" . $bookImage) && move_uploaded_file($pdfLocation, "../resource/pdf/" . $bookPdf)) {

        $db = new DBConnect();
        $dbconnect = $db->connect();
        $sql = $dbconnect->prepare(
            "INSERT INTO book_m
                (
                    book_name,
                    book_price,
                    author_id,
                    book_desp,
                    category_id,
                    publisher_id,
                    page_number,
                    size,
                    book_img,
                    stock_number,
                    book_pdf,
                    del_flg,
                    created_date,
                    created_by
                )
                VALUES
                (
                    :bName,
                    :bPrice,
                    :author,
                    :bDesp,
                    :category,
                    :publisher,
                    :bPg,
                    :bSize,
                    :bImg,
                    :stock,
                    :bPdf,
                    :del_flg,
                    :created_date,
                    :created_by
                )"
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
        $sql->bindValue(":stock", $stock);
        $sql->bindValue(":bPdf", $bookPdf);
        $sql->bindValue(":del_flg", $del_flg);
        $sql->bindValue(":created_date", date("d/m/Y"));
        $sql->bindValue(":created_by", "myat kaung khant");
        $sql->execute();

        header("Location: ../View/bookInfo.php");
    }
}
