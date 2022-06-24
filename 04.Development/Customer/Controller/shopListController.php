<?php
    require_once"../Model/dbConnection.php";
    //call dbConnection
    $db = new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect -> prepare("SELECT shop_Cate, GROUP_CONCAT(shop_name) as shopName,GROUP_CONCAT(address) as address,GROUP_CONCAT(phone_no) as phoneno FROM shop_list WHERE del_flg=0 GROUP BY shop_Cate ORDER BY shop_Cate");
    //go to run
    $sql -> execute();
    $result = $sql -> fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($result);