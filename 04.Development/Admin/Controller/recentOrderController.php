<?php
require_once "../Model/dbConnection.php";

$db = new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT
    ord.*,
    cat.cart_id,
    user.customer_name
    FROM
        `order` AS ord
    LEFT JOIN cart AS cat
    ON
        ord.cart_id = cat.cart_id
        LEFT JOIN customer AS user
    ON
        cat.customer_id = user.customer_id
        WHERE ord.del_flg=0 ORDER BY ord.order_date DESC LIMIT 5");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);