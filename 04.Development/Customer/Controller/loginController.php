<?php
require_once("../Model/DBConnection.php");
//get data from insert form
    if(isset($_POST)){
        $userName = $_POST['username'];
        $password = $_POST['password'];
    }
    $decPassword = md5($password);

    //call db connection
    $db = new DBConnect();
    $dbConnect = $db->connect();
    $sql = $dbConnect -> prepare("
            SELECT * FROM login
            WHERE username = :name
            ANG
            password = :password;
    ");
    $sql -> bindValue(":name",$userName);
    $sql -> bindValue(":password",$password);
    
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    if(count($result) > 0){
        header("Location: ../View/home.php");
    }
    else{
        header("Location:../View/loginerror.php");
    }

?>