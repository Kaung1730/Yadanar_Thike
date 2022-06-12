<?php
    session_start();
    $customer_id = $_SESSION['customer_id'];
    $data = json_decode($_POST["send"],true);
    $book_id = $data['book_id'];
    $quantity = 1;
    $del_flg = 0;
    require_once "../Model/DBConnection.php";

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

        //to check duplicate cart item
        $checkDuplicate = $dbconnect -> prepare("
                SELECT * FROM cart
                WHERE
                customer_id = :customer_id AND
                book_id = :book_id AND
                del_flg = :del_flg
            ");
            $checkDuplicate -> bindValue(":customer_id",$customer_id);
            $checkDuplicate -> bindValue(":book_id",$book_id);
            $checkDuplicate -> bindValue(":del_flg",$del_flg);
            $checkDuplicate->execute();
            $duplicateResult = $checkDuplicate->fetchAll(PDO::FETCH_ASSOC);
            
            if(count($duplicateResult) > 0){
                //to update duplicate item by quantity
                $newQuantity = $duplicateResult[0]['quantity'] + $quantity;
                $duplicateId = $duplicateResult[0]['cart_id'];
                $updateData = $dbconnect -> prepare("
                UPDATE cart SET
                quantity = :quantity,
                updated_date= :updated_date,
                updated_by= :updated_by
                WHERE cart_id = :cart_id
                ");
                $updateData -> bindValue(":quantity",$newQuantity);
                $updateData -> bindValue(":cart_id",$duplicateId);
                $updateData->bindValue(":updated_date", date("d/m/Y"));
                $updateData->bindValue(":updated_by", "KaungKaung");
                $updateData->execute();
            }
            else{
                $sql = $dbconnect -> prepare("
                    INSERT INTO cart
                    (customer_id,book_id,
                    quantity,del_flg,created_date,created_by)
                    VALUES (:customer_id,:book_id,:quantity,
                    :del_flg,:created_date,:created_by)");
                $sql->bindValue(":customer_id", $customer_id);
                $sql->bindValue(":book_id", $book_id);
                $sql->bindValue(":quantity", $quantity);
                $sql->bindValue(":del_flg", $del_flg);
                $sql->bindValue(":created_date", date("d/m/Y"));
                $sql->bindValue(":created_by", "KaungKaung");
                $sql->execute();
                $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            }

