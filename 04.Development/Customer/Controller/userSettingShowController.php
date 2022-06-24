<?php session_start();
  require_once "../../Model/DBConnection.php";
 if(isset($_SESSION['status-customer'])){
    $id = $_SESSION['customer_id'];

    //Call DB Connection
    $db2 =  new DBConnect();
    $dbconnect2 = $db2->connect();

    $sql = $dbconnect2->prepare("SELECT * FROM customer WHERE del_flg = 0 AND customer_id = :id");
    $sql -> bindValue(":id",$id);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
 }
?>
