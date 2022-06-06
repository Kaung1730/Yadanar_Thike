<?php
require_once "../Model/dbConnection.php";

if(isset($_POST)){
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $weltxt = $_POST['weltxt'];
    $avaTime = $_POST['avaTime'];
    $slide_1 = $_FILES['sl_1']['name'];
    $location = $_FILES['sl_1']['tmp_name'];
    $slide_1 = $_FILES['sl_1']['name'];
    $location = $_FILES['sl_1']['tmp_name'];
}