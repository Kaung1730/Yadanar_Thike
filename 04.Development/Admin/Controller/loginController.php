<?php session_start();
require_once("../Model/DBConnection.php");
//get data from insert form
    if(isset($_POST)){
        $admin_name = $_POST['admin_name'];
        $password = $_POST['admin_password'];

        $decPassword = md5($password);

        //call db connection
        $db = new DBConnect();
        $dbConnect = $db->connect();
        $sql = $dbConnect -> prepare("
                SELECT * FROM admin
                WHERE admin_name = :name
                AND
                admin_password = :password
        ");
        $sql -> bindValue(":name",$admin_name);
        $sql -> bindValue(":password",$decPassword);
        
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        //to get id bcz want to use for the user setting
        if(count($result) > 0){
            $_SESSION['admin_name'] = $result[0]['admin_name'];
            $_SESSION['admin_email'] = $result[0]['admin_email'];
            $_SESSION['status'] = "login";
            $_SESSION['admin_id'] = $result[0]['admin_id'];
            echo "success";
            // echo $_SESSION['admin_id'];
        }
        else{
            echo "wrong";
        }
    
    }
