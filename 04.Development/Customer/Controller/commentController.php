<?php
session_start();
require_once("../Model/DBConnection.php");
//get data from insert form
    if(isset($_POST)){
        $comment = $_POST['comment'];
        $rating = $_SESSION['rating'];
        echo $rating;
        // //call db connection
        // $db = new DBConnect();
        // $dbConnect = $db->connect();
        // $sql = $dbConnect -> prepare("
        //         SELECT * FROM customer
        //         WHERE customer_name = :name
        //         AND
        //         customer_password = :password
        // ");
        
        // $sql->execute();
        // $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        // if(count($result) > 0){
        //     $_SESSION['username'] = $userName;
        //     $_SESSION['status'] = "login";
        //     $_SESSION['customer_id'] = $id;
        //     echo "success";
        // }
        // else{
        //     echo "wrong";
        // }
    }

?>