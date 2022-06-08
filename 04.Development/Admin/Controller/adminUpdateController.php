<?php
require_once "../Model/dbConnection.php";

if (isset($_POST)) {
    $name = $_POST['ad_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $decPassword = md5($password);
    $role = $_POST['role'];
    $id = $_POST['id'];
    $del_flg = 0;

    $db = new DBConnect();
    $dbconnect = $db->connect();
    $sql = $dbconnect->prepare(
        "UPDATE admin SET 
        admin_email = :email,
        admin_name = :name,
        admin_password = :password,
        role = :role,
        updated_date= :updated_date,
        updated_by= :updated_by
        WHERE admin_id = :id"
    );
    $sql->bindValue(":email", $email);
    $sql->bindValue(":name", $name);
    $sql->bindValue(":password", $decPassword);
    $sql->bindValue(":role", $role);
    $sql->bindValue(":updated_date", date("d/m/Y"));
    $sql->bindValue(":updated_by", "myat kaung khant");
    $sql->bindValue(":id", $id);
    $sql->execute();

    require "../Controller/adminEditController.php";
}
