<?php
require_once "../Model/dbConnection.php";

if (isset($_POST)) {
    $state = $_POST['state'];
    $township = $_POST['township'];
    $fee = $_POST['fee'];
    $id = $_POST['id'];
    $del_flg = 0;

    $db = new DBConnect();
    $dbconnect = $db->connect();
    $sql = $dbconnect->prepare(
        "UPDATE delivery SET 
        state_id = :state,
        township_id=:township,
        delivery_fee=:fee,
        updated_date=:updated_date,
        updated_by=:updated_by
        WHERE delivery_id = :id"
    );
    $sql->bindValue(":state", $state);
    $sql->bindValue(":township", $township);
    $sql->bindValue(":fee", $fee);
    $sql->bindValue(":updated_date", date("d/m/Y"));
    $sql->bindValue(":updated_by", "myat kaung khant");
    $sql->bindValue(":id", $id);
    $sql->execute();

    require "../Controller/deliveryEditController.php";
}
