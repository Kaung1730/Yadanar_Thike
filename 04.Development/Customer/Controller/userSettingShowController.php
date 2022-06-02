<?php session_start();

 if(isset($_SESSION['status'])){
    $id = $_SESSION['customer_id'];
    require_once "../Model/DBConnection.php";

    //Call DB Connection
    $db2 =  new DBConnect();
    $dbconnect2 = $db2->connect();

    $sql = $dbconnect2->prepare("SELECT * From customer WHERE del_flg = 0 AND customer_id = :id");
    $sql -> bindValue(":id",$id);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    //testing for error
    $_SESSION['customer_name'] = $result[0]['customer_name'];
    $_SESSION['customer_phno'] = $result[0]['customer_phno'];
    $_SESSION['customer_email'] = $result[0]['customer_email'];
    $_SESSION['customer_password'] = $result[0]['customer_password'];
    print_r($result);
   //  echo $_SESSION['customer_name'];
   //  require_once "../View/commonLayout/userSetting.php";
 }
?>