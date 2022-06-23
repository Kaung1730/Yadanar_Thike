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
    $location1 = $_FILES['sl_1']['tmp_name'];
    $slide_2 = $_FILES['sl_2']['name'];
    $location2 = $_FILES['sl_2']['tmp_name'];
    $del_flg = 0;

    if(move_uploaded_file($location1 , "../resource/image/". $slide_1 && move_uploaded_file($location2 , "../resource/image/". $slide_2))){

        $db = new DBConnect();
        $dbconnect = $db->connect();
        $sql = $dbconnect->prepare(
            "UPDATE site_master SET
                phone = :phone,
                address = :address,
                email = :email,
                slider_1 = :slide_1,
                slider_2 = :slide_2,
                welcome_text = :weltxt,
                available_time = :avatime,
                facebook = :facebook,
                instagram = :instagram,
                twitter = :twitter,
                updated_date = :updated_date,
                updated_by = :updated_by"
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
        $sql->bindValue(":updated_date", date("d/m/Y"));
        $sql->bindValue(":updated_by", "myat kaung khant");
        $sql->execute();

        header("location: ../View/contactEdit.php");
    }
    // else{
    //     $db = new DBConnect();
    //     $dbconnect = $db->connect();
    //     $sql = $dbconnect->prepare(
    //         "INSERT INTO site_master
    //         (
    //             phone,
    //             address,
    //             email,
    //             welcome_text,
    //             available_time,
    //             facebook,
    //             instagram,
    //             twitter,
    //             del_flg,
    //             created_date,
    //             created_by
    //         )
    //         VALUES
    //         (
    //             :phone,
    //             :address,
    //             :email,
    //             :weltxt,
    //             :avatime,
    //             :facebook,
    //             :instagram,
    //             :twitter,
    //             :del_flg,
    //             :created_date,
    //             :created_by
    //         );"
    //     );
    //     $sql->bindValue(":phone", $phone);
    //     $sql->bindValue(":address", $address);
    //     $sql->bindValue(":email", $email);
    //     $sql->bindValue(":weltxt", $weltxt);
    //     $sql->bindValue(":avatime", $avaTime);
    //     $sql->bindValue(":facebook", $facebook);
    //     $sql->bindValue(":instagram", $instagram);
    //     $sql->bindValue(":twitter", $twitter);
    //     $sql->bindValue(":del_flg", $del_flg);
    //     $sql->bindValue(":created_date", date("d/m/Y"));
    //     $sql->bindValue(":created_by", "myat kaung khant");
    //     $sql->execute();

    //     header("location: ../View/contactEdit.php");
    // }
}