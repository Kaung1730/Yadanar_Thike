<?php
session_start();
    $data = json_decode($_POST["send"],true);
    // print_r($data['star']);
    if(!(isset($_SESSION['customer_id']))){
        echo "login";
    }
    else{
        $book_id = $_SESSION['book_id'];
        $customer_id = $_SESSION['customer_id'];
        $today = date("F j, Y");
        $del_flg = 0;
        require_once("../Model/DBConnection.php");
        $db = new DBConnect();
        $dbConnect = $db->connect();
        $sql = $dbConnect -> prepare("
                INSERT INTO review_rating 
                (book_id,
                customer_id,
                comment,
                review_date,
                rating,
                del_flg,
                created_date,
                created_by)
                VALUES (
                :book_id,
                :customer_id,
                :comment,
                :review_date,
                :rating,
                :del_flg,
                :created_date,
                :created_by)");
                $sql -> bindValue(":book_id",$book_id);
                $sql -> bindValue(":customer_id",$customer_id);
                $sql -> bindValue(":comment",$data['textComment']);
                $sql -> bindValue(":review_date",$today);
                $sql -> bindValue(":rating",$data['star']);
                $sql -> bindValue(":del_flg",$del_flg);
                $sql -> bindValue(":created_date","6/5/2022");
                $sql -> bindValue(":created_by","KaungKaung");
                $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            echo "success";
    }   
?>