<?php
session_start();
    $data = json_decode($_POST["send"],true);
    $text = $data['text'];
        $book_id = $_SESSION['book_id'];
        $customer_id = $_SESSION['customer_id'];
        $today = date("F j, Y");
        $del_flg = 0;
        require_once("../Model/DBConnection.php");
        $db = new DBConnect();
        $dbConnect = $db->connect();
        $sql = $dbConnect -> prepare("
        SELECT book_name, book_id
        FROM book_m
        WHERE book_id = :name AND
        del_flg = 0
        ");
        $sql -> bindValue(":name",1);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        if(count($result) > 0){
            print_r(json_encode('/bookDescription.php?:book_id='.$result[0]['book_id']));
        }
        print_r($result);

?>