<?php
    session_start();
    $data = json_decode($_POST["send"],true);
    $book_id = $data['book_id'];
    $view_count = $data['view_count'];
    $current_view = $data['currentView'];
    $del_flg = 0;
    require_once "../Model/DBConnection.php";

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

        $viewCount = $dbconnect -> prepare("
            UPDATE book_m SET
            view_count = :view_count,
            updated_date = :updated_date,
            updated_by = :updated_by
            WHERE
            book_id = :book_id AND
            del_flg = :del_flg
        ");
        $viewCount -> bindValue(":view_count",$current_view+$view_count);
        $viewCount -> bindValue(":book_id",$book_id);
        $viewCount -> bindValue(":del_flg",$del_flg);
        $viewCount->bindValue(":updated_date", date("d/m/Y"));
        $viewCount->bindValue(":updated_by", "KaungKaung");
        $viewCount->execute();
        $viewCountResult = $viewCount->fetchAll(PDO::FETCH_ASSOC);
        print_r(json_encode($book_id));