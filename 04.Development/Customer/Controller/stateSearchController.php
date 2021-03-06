<?php
    $data = json_decode($_POST["send"],true);
    $state = $data['state'];
    $del_flg = 0;
    require_once("../Model/DBConnection.php");
    $db = new DBConnect();
    $dbConnect = $db->connect();
    $sql = $dbConnect -> prepare("
        SELECT township.* FROM
        township, state
        WHERE state.state_id = township.state_id AND
        state.state_name = :state_name AND
        state.del_flg = :del_flg
    ");
    $sql -> bindValue(":state_name",$state);
    $sql -> bindValue(":del_flg",$del_flg);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    print_r(json_encode($result));

