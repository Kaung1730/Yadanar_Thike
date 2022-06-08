<?php
session_start();
    $data = json_decode($_POST["send"],true);
    // print_r($data['star']);
    if(!(isset($_SESSION['customer_id']))){
        echo "login";
    }
    else{
        // $book_id = $_SESSION['book_id'];
        // $customer_id = $_SESSION['customer_id'];
        // $today = date("F j, Y");
        $del_flg = 0;
        require_once("../Model/DBConnection.php");
        $db = new DBConnect();
        $dbConnect = $db->connect();
        $sql = $dbConnect -> prepare("
                INSERT INTO contact_us (
                username,
                phone,
                contact,
                del_flg,
                created_date,
                created_by)
                VALUES (
                :username,
                :phone,
                :contact,
                :del_flg,
                :created_date,
                :created_by)");
                $sql -> bindValue(":username",$data['name']);
                $sql -> bindValue(":phone",$data['phone']);
                $sql -> bindValue(":contact",$data['text']);
                $sql -> bindValue(":del_flg",$del_flg);
                $sql -> bindValue(":created_date",date("d/m/Y"));
                $sql -> bindValue(":created_by","KaungKaung");
                $sql->execute();
                $result = $sql->fetchAll(PDO::FETCH_ASSOC);
                echo "success";
    }   
?>