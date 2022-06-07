<?php
require_once "../Model/dbConnection.php";

if(isset($_POST)){
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $weltxt = $_POST['weltxt'];
    $avaTime = $_POST['avaTime'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['insta'];
    $twitter = $_POST['twitter'];
    $slide_1 = $_FILES['sl_1']['name'];
    $location = $_FILES['sl_1']['tmp_name'];
    $slide_2 = $_FILES['sl_2']['name'];
    $location = $_FILES['sl_2']['tmp_name'];
    $del_flg = 0;

    if(move_uploaded_file($location , "../resource/upload_img/". $slide_1 || move_uploaded_file($location , "../resource/upload_img/". $slide_2))){

        $db = new DBConnect();
        $dbconnect = $db->connect();
        $sql = $dbconnect->prepare(
            "INSERT INTO site_master
            (
                phone,
                address,
                email,
                slider_1,
                slider_2,
                welcome_text,
                available_time,
                facebook,
                instagram,
                twitter,
                del_flg,
                created_date,
                created_by
            )
            VALUES
            (
                :phone,
                :address,
                :email,
                :slide_1,
                :slide_2,
                :weltxt,
                :avatime,
                :facebook,
                :instagram,
                :twitter,
                :del_flg,
                :created_date,
                :created_by
            );"
        );
        $sql->bindValue(":phone", $phone);
        $sql->bindValue(":address", $address);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":slide_1", $slide_1);
        $sql->bindValue(":slide_2", $slide_2);
        $sql->bindValue(":weltxt", $weltxt);
        $sql->bindValue(":avatime", $avaTime);
        $sql->bindValue(":facebook", $facebook);
        $sql->bindValue(":instagram", $instagram);
        $sql->bindValue(":twitter", $twitter);
        $sql->bindValue(":del_flg", $del_flg);
        $sql->bindValue(":created_date", "6/1/2022");
        $sql->bindValue(":created_by", "myat kaung khant");
        $sql->execute();

        header("location: ../View/contactEdit.php");
    }
}