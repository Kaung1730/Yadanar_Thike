<?php session_start();
require_once("../Model/DBConnection.php");
//get data from insert form
    if(isset($_POST)){
        $userName = $_POST['username'];
        $password = $_POST['password'];
        $decPassword = md5($password);

        //call db connection
        $db = new DBConnect();
        $dbConnect = $db->connect();
        $sql = $dbConnect -> prepare("
                SELECT * FROM customer
                WHERE customer_name = :name
                AND
                customer_password = :password
                AND
                del_flg = :del_flg
                AND
                valid = :valid
        ");
        $sql -> bindValue(":name",$userName);
        $sql -> bindValue(":valid",0);
        $sql -> bindValue(":password",$decPassword);
        $sql -> bindValue(":del_flg",0);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        //to get id bcz want to use for the user setting
        if(count($result) > 0){
            $_SESSION['username'] = $userName;
            $_SESSION['status-customer'] = "login";
            $_SESSION['customer_id'] = $result[0]['customer_id'];
            echo "success";
            
        }
        elseif (empty($result)) {
            echo "ban";
        }
        else{
            echo "wrong";
        }
    
    }

?>