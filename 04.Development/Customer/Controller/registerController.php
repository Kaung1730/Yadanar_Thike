<?php
require_once("../Model/DBConnection.php");
//get data from insert form
    if(isset($_POST)){
        $userName = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        $phone = $_POST['phone'];
        $valid = 0;
        $del_flg = 0;
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
                SELECT * FROM customer
                WHERE 
                customer_name = :username AND
                customer_email = :email AND
                del_flg = :del_flg OR
                customer_email = :email AND
                del_flg = :del_flg 
            ");
            $checkDuplicate -> bindValue(":username",$userName);
            $checkDuplicate -> bindValue(":email",$email);
            $checkDuplicate -> bindValue(":del_flg",$del_flg);
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
                INSERT INTO customer 
                (customer_name,
                customer_phno,
                customer_email,
                customer_password,
                valid,
                del_flg,
                created_date,
                created_by)
                VALUES (
                :username,
                :phone,
                :email,
                :realpassword,
                :valid,
                :del_flg,
                :created_date,
                :created_by)");
                $sql -> bindValue(":username",$userName);
                $sql -> bindValue(":email",$email);
                $sql -> bindValue(":realpassword",$password);
                $sql -> bindValue(":phone",$phone);
                $sql -> bindValue(":valid",$valid);
                $sql -> bindValue(":del_flg",$del_flg);
                $sql -> bindValue(":created_date","6/1/2022");
                $sql -> bindValue(":created_by","KaungKaung");
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