<?php
    require_once"../Model/dbConnection.php";
    //call dbConnection
    $db = new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect -> prepare("SELECT * FROM township 
    INNER JOIN state ON township.state_id=state.state_id
    WHERE township.state_id=:id");
    //go to run
    $sql->bindValue(":id", $id);
    $sql -> execute();
    $result = $sql -> fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($result);