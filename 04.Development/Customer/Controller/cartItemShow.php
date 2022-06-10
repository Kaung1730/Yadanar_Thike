<?php
if(isset($_SESSION['status'])){
    $customer_id = $_SESSION['customer_id'];
    require_once "../../Model/DBConnection.php";
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    //to check duplicate cart item
    $cartData = $dbconnect -> prepare("
                    SELECT  cart.quantity,book_m.book_id, book_m.book_name, book_m.book_img, book_m.book_price
                    FROM cart, book_m
                    WHERE 
                    cart.book_id = book_m.book_id AND
                    cart.customer_id = :customer_id AND
                    cart.del_flg = :del_flg
                ");
    $cartData -> bindValue(":customer_id",$customer_id);
    $cartData -> bindValue(":del_flg",0);
    $cartData->execute();
    $cartDataResult = $cartData->fetchAll(PDO::FETCH_ASSOC);        
}
?>