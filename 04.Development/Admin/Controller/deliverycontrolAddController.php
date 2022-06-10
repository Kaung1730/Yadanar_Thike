<?php
require_once "../Model/dbConnection.php";


    $db = new DBConnect();
    $dbconnect = $db->connect();
    $sql = $dbconnect->prepare(
        "SELECT * FROM township WHERE state_id"
    );
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
