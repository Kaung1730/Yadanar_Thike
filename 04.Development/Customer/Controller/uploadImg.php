<?php
session_start();
$customer_id = $_SESSION['customer_id'];
if(isset($_POST)){
    $file = $_FILES['file']['name'];
    $location = $_FILES['file']['tmp_name'];
    //to show img when user click btn
    if (file_exists($_FILES['file']['tmp_name'])) {
        if (move_uploaded_file($location, "../resource/customerimg/" . $file)) {
            $response = "../resource/customerimg/".$file;
            echo $response;
            $_SESSION['customer_img'] = $response;
        }
    }
    //Call DB Connection
        // $db =  new DBConnect();
        // $dbconnect = $db->connect();
        // $sql = $dbconnect->prepare(
        //     "UPDATE customer SET
        //     customer_profileImg = :img,
        //     updated_date = :updated_date,
        //     updated_by = :updated_by
        //     WHERE customer_id = :id"
        // );
        // $sql->bindValue(":img", $file);
        // $sql->bindValue(":id", $customer_id);
        // $sql->bindValue(":updated_date", date("d/m/Y"));
        // $sql->bindValue(":updated_by", "KaungKaung");
        // $sql->execute();
}
