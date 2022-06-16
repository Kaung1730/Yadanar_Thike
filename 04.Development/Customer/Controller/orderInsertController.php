<?php
    $data = json_decode($_POST["send"],true);
    $customer_id = $data['customer_id'];
    $customer_name = $data['customer_name'];
    $state = $data['state'];
    $phno = $data['phno'];
    $town = $data['town'];
    $address = $data['address'];
    // $cart_id;
    $delivery_id = $data['delivery_id'];
    $delivery_fee = $data['delivery_fee'];
    $total_price = $data['total_price'];
    $del_flg = 0;
    // $today = date("F j, Y");
    require_once("../Model/DBConnection.php");
    $db = new DBConnect();
    $dbConnect = $db->connect();
    foreach ($data['cart_id'] as $key => $value) {
        $cart_id = $value;
        $price = $total_price[$key];

        $sql = $dbConnect -> prepare("
        INSERT INTO `order`
        (order_number,cart_id,customer_id,customer_name,customer_division, customer_town,
        customer_address, total_price, delivery_id,
        order_status, order_date, del_flg, created_date,created_by)
        VALUES (:order_number,:cart_id,:customer_id,:customer_name,:customer_division,:customer_town,
        :customer_address, :total_price, :delivery_id,
        :order_status, :order_date,
        :del_flg,:created_date,:created_by)
        ");
        $sql -> bindValue(":order_number",$customer_id.date("d").$customer_id.date("i"));
        $sql -> bindValue(":customer_id",$customer_id);
        $sql -> bindValue(":customer_name",$customer_name);
        $sql -> bindValue(":customer_division",$state);
        $sql -> bindValue(":customer_town",$town);
        $sql -> bindValue(":cart_id",$cart_id);
        $sql -> bindValue(":customer_address",$address);
        $sql -> bindValue(":total_price",$price);
        $sql -> bindValue(":delivery_id",$delivery_id);
        $sql -> bindValue(":order_status",0);
        $sql -> bindValue(":order_date", date("d/m/Y"));
        $sql -> bindValue(":del_flg",$del_flg);
        $sql -> bindValue(":created_date",date("d/m/Y"));   
        $sql -> bindValue(":created_by","KaungKaung");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        // print_r(json_encode($result));


            //to clear item in the cart after order
            if($result > 0){
                foreach ($data['cart_id'] as $key => $value) {
                    $cart_id = $value;
                    $clearData = $dbConnect -> prepare("
                    UPDATE cart SET
                    del_flg = :del_flg,
                    updated_date= :updated_date,
                    updated_by= :updated_by
                    WHERE cart_id = :cart_id
                    ");
                    $clearData -> bindValue(":del_flg",1);
                    $clearData -> bindValue(":updated_date",date("d/m/Y"));   
                    $clearData -> bindValue(":updated_by","KaungKaung");
                    $clearData -> bindValue(":cart_id",$cart_id);
                    $clearData->execute();
                    $resultData = $sql->fetchAll(PDO::FETCH_ASSOC);
    
                    
                    }
            }
    };
    ?>