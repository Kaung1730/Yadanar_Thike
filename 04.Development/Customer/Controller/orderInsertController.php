<?php
    $data = json_decode($_POST["send"],true);
    $customer_id = $data['customer_id'];
    $customer_name = $data['customer_name'];
    $state = $data['state'];
    $phno = $data['phno'];
    $town = $data['town'];
    $address = $data['address'];
    $cart_id;
    $delivery_id = $data['delivery_id'];
    $delivery_fee = $data['delivery_fee'];
    $total_price = $data['total_price'];
    $del_flg = 0;
    $today = date("F j, Y");
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
        $sql -> bindValue(":order_date",$today);
        $sql -> bindValue(":del_flg",$del_flg);
        $sql -> bindValue(":created_date",date("d/m/Y"));   
        $sql -> bindValue(":created_by","KaungKaung");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        print_r(json_encode($result));


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
    
                    //to get book quantity in the cart
                    $qty_cart = $dbConnect -> prepare("
                        SELECT quantity, book_id
                        FROM cart WHERE
                        del_flg = :del_flg AND
                        cart_id = :cart_id
                    ");
                    $qty_cart -> bindValue(":del_flg",0);
                    $qty_cart -> bindValue(":cart_id",$cart_id);
                    $qty_cart->execute();
                    $qtyData = $qty_cart->fetchAll(PDO::FETCH_ASSOC);
                    $bookQtyCart = $qtyData[0]['quantity'];
                    $book_id = $qtyData[0]['book_id'];
    
                    //to get book quantity in the book_m
                    $bookQty = $dbConnect -> prepare("
                        SELECT stock_number
                        FROM book_m WHERE
                        del_flg = :del_flg AND
                        book_id = :book_id
                    ");
                    $bookQty -> bindValue(":del_flg",0);
                    $bookQty -> bindValue(":book_id", $book_id); 
                    $bookQty->execute();
                    $bookQtyData = $bookQty->fetchAll(PDO::FETCH_ASSOC);
                    $stock_number = $bookQtyData[0]['stock_number'];
    
    
                    //to decrease book_stock number after order 
                    $reduceBookStock = $dbConnect -> prepare("
                    UPDATE book_m SET
                    book_m.stock_number = :stock_number,
                    updated_date = :updated_date,
                    updated_by = :updated_by
                    WHERE book_id = :book_id
                    ");
                    $reduceBookStock -> bindValue(":updated_date",date("d/m/Y"));   
                    $reduceBookStock -> bindValue(":updated_by","KaungKaung");
                    $reduceBookStock -> bindValue(":stock_number",$stock_number - $bookQtyCart);
                    $reduceBookStock -> bindValue(":book_id",$book_id);
                    $reduceBookStock->execute();
                    $reduceResult = $sql->fetchAll(PDO::FETCH_ASSOC);
                    }
            }
    };
    ?>