<?php

require_once "../Model/dbConnection.php";

if (isset($_POST)) {
    $name = $_POST['ad_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $decPassword = md5($password);
    $role = $_POST['role'];
    $del_flg = 0;

    $db = new DBConnect();
    $dbconnect = $db->connect();
    $sql = $dbconnect->prepare(
        "INSERT INTO admin
            (
                admin_email,
                admin_name,
                admin_password,
                role,
                del_flg,
                created_date,
                created_by
            )
            VALUES
            (
                :email,
                :name,
                :password,
                :role,
                :del_flg,
                :created_date,
                :created_by
            )"
    );
    $sql->bindValue(":email", $email);
    $sql->bindValue(":name", $name);
    $sql->bindValue(":password", $decPassword);
    $sql->bindValue(":role", $role);
    $sql->bindValue(":del_flg", $del_flg);
    $sql->bindValue(":created_date", date("d/m/Y"));
    $sql->bindValue(":created_by", "myat kaung khant");
    $sql->execute();

    header("Location: ../View/adminList.php");
}
