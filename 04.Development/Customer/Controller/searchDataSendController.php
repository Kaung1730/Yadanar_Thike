<?php
    $del_flg = 0;
    require_once("../Model/DBConnection.php");
    $db = new DBConnect();
    $dbConnect = $db->connect();
            $searchValue = $_GET['search'];
            $sql = $dbConnect -> prepare("
                SELECT book_m.* , author.* FROM book_m, author
                WHERE book_m.book_name LIKE '%$searchValue%' AND
                book_m.author_id = author.author_id AND
                book_m.del_flg = :del_flg;
            ");
            $sql -> bindValue(":del_flg",$del_flg);
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            // require("../View/commonLayout/nav.php");
            require("../View/searchResult.php");

?>