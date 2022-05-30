<?php
require_once("../Model/DBConnection.php");
//get data from insert form
    if(isset($_POST)){
        $userName = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        $phone = $_POST['phone'];

        $decO_Password = md5($password);
        $decC_Password = md5($c_password);
        //check confirm password
        if($decO_Password == $decC_Password){
            $password = $decC_Password;

            //call db connection
            $db = new DBConnect();
            $dbConnect = $db->connect();

            //To check duplicate account
            $checkDuplicate = $dbConnect -> prepare("
                SELECT * FROM login
                WHERE 
                username = :username AND
                password = :password
            ");
            $checkDuplicate -> bindValue(":username",$userName);
            $checkDuplicate -> bindValue(":password",$password);
            $checkDuplicate->execute();
            $duplicateResult = $checkDuplicate->fetchAll(PDO::FETCH_ASSOC);
            
            if(count($duplicateResult) > 0){
                //to show duplicate message
                echo "duplicate";
            }
            else{
                //To insert new account data after checking where there is duplicate acc
                echo "success";
                $sql = $dbConnect -> prepare("
                INSERT INTO login 
                (username, email, password, phone)
                VALUES (
                :username,
                :email,
                :realpassword,
                :phone)");
                $sql -> bindValue(":username",$userName);
                $sql -> bindValue(":email",$email);
                $sql -> bindValue(":realpassword",$password);
                $sql -> bindValue(":phone",$phone);
                $sql->execute();
            }
        }
        //if password and confirm password are not equal
        else{
            //will go back to register agian with the text of Password and Confirm password are not equal
            echo "password";
        }
        }
    
?>