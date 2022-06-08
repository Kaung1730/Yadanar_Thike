<?php
require_once("../Model/DBConnection.php");
//get data from insert form
    if(isset($_POST)){
        $email = $_POST['admin_email'];
        $admin_name = $_POST['admin_name'];
        $password = $_POST['admin_password'];
        $role = 0;
        $del_flg = 0;
        $dec_password = md5($password);

            //call db connection
            $db = new DBConnect();
            $dbConnect = $db->connect();

            //To check duplicate account
            $checkDuplicate = $dbConnect -> prepare("
                SELECT * FROM admin
                WHERE 
                admin_email = :email AND
                admin_name = :username AND
                del_flg = :del_flg OR
                admin_email = :email AND
                del_flg = :del_flg 
            ");
            $checkDuplicate -> bindValue(":email",$email);
            $checkDuplicate -> bindValue(":username",$admin_name);
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
                INSERT INTO admin 
                (admin_email,
                admin_name,
                admin_password,
                role,
                del_flg,
                created_date,
                created_by)
                VALUES (
                :email,
                :name,
                :password,
                :role,
                :del_flg,
                :created_date,
                :created_by)");
                $sql -> bindValue(":email",$email);
                $sql -> bindValue(":name",$admin_name);
                $sql -> bindValue(":password",$dec_password);
                $sql -> bindValue(":role",$role);
                $sql -> bindValue(":del_flg",$del_flg);
                $sql -> bindValue(":created_date",date("d/m/Y"));
                $sql -> bindValue(":created_by","KaungKaung");
                $sql->execute();
            }
        }
    
?>