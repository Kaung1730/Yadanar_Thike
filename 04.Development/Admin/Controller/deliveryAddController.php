<?php
require_once "../Model/dbConnection.php";

if(isset($_POST)){
    $state = $_POST['state'];
    $township = $_POST['township'];
    $fee = $_POST['fee'];
    $del_flg= 0;

    $db = new DBConnect();
    $dbconnect = $db->connect();
    $sql = $dbconnect->prepare(
        "INSERT INTO delivery
            (
                state_id,
                township_id,
                delivery_fee,
                del_flg,
                created_date,
                created_by
            )
            VALUES
            (
                :state,
                :township,
                :fee,
                :del_flg,
                :created_date,
                :created_by
            )"
    );
    $sql->bindValue(":state", $state);
    $sql->bindValue(":township", $township);
    $sql->bindValue(":fee", $fee);
    $sql->bindValue(":del_flg", $del_flg);
    $sql->bindValue(":created_date", date("d/m/Y"));
    $sql->bindValue(":created_by", "myat kaung khant");
    $sql->execute();

    header("Location: ../View/deliverycontrolList.php");
}