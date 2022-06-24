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
}
