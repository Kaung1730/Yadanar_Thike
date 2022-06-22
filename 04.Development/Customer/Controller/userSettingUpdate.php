<?php
session_start();
$data = json_decode($_POST["send"],true);
$customer_id = $_SESSION['customer_id'];
$customer_name = $data['userName'];
$customer_email = $data['email'];
$customer_password = md5($data['password']);
$customer_phone = $data['phone'];
$imgNew = $data['img'];
require_once "../Model/DBConnection.php";
     //Call DB Connection
        $db =  new DBConnect();
        $dbconnect = $db->connect();
        //only image
        
            $sql = $dbconnect->prepare(
                "UPDATE customer SET
                customer_name = :name,
                customer_phno = :phno,
                customer_email =  :email,
                customer_password = :password,
                customer_profileImg = :customer_profileImg,
                updated_date = :updated_date,
                updated_by = :updated_by
                WHERE customer_id = :id"
            );
    
            $sql->bindValue(":name", $customer_name);
            $sql->bindValue(":phno", $customer_phone);
            $sql->bindValue(":email", $customer_email);
            $sql->bindValue(":customer_profileImg", $imgNew);
            $sql->bindValue(":password", $customer_password);
            $sql->bindValue(":id", $customer_id);
            $sql->bindValue(":updated_date", date("d/m/Y"));
            $sql->bindValue(":updated_by", "KaungKaung");
            $sql->execute();
    
            echo "success";