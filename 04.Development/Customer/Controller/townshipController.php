<?php
    require_once"../Model/DBConnection.php";
    //call dbConnection
    $db = new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect -> prepare("SELECT * FROM township 
    INNER JOIN state ON township.state_id=state.state_id
    WHERE township.state_id=:id AND township.del_flg = :del_flg");
    //go to run
    $sql -> bindValue(":del_flg",0);
    $sql->bindValue(":id", $id);
    $sql -> execute();
    $result = $sql -> fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($result);