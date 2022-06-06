<?php
$data = json_decode($_POST["send"],true);


$del_flg = 0;
        require_once("../Model/DBConnection.php");
        $db = new DBConnect();
        $dbConnect = $db->connect();
        $sql = $dbConnect -> prepare("
        SELECT * FROM book_m
        WHERE book_id = :id
        ");
        $sql -> bindValue(":id",$data['book_id']);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        print_r(json_encode($result));
?>