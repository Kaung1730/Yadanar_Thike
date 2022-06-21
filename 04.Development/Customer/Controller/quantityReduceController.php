<?php
    $data = json_decode($_POST["send"],true);
    require_once("../Model/dbConnection.php");
    $db = new DBConnect();
    $dbconnect = $db->connect();
    foreach ($data['cart_id'] as $key => $value) {
        $cart_id = $value;
        //to get the current qty in cart of the book
        $sql = $dbconnect -> prepare("
            SELECT quantity, book_id
            FROM cart
            WHERE cart_id = :cart_id AND
            del_flg = :del_flg
        ");
        $sql -> bindValue(":del_flg",1);
        $sql -> bindValue(":cart_id",$cart_id);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        $qtyCart = $result[0]['quantity'];
        $book_id = $result[0]['book_id'];

        //to get the normal stock number
        $stock = $dbconnect->prepare("
            SELECT stock_number 
            FROM book_m
            WHERE book_id = :book_id AND
            del_flg = :del_flg
        ");
        $stock -> bindValue(":book_id", $book_id);
        $stock -> bindValue(":del_flg", 0);
        $stock -> execute();
        $stockResult = $stock -> fetchAll(PDO::FETCH_ASSOC);
        $stock_number = $stockResult[0]['stock_number'];
        $current_stock = $stock_number - $qtyCart;
        //to reduce after user ordered
        $reduce = $dbconnect -> prepare("
            UPDATE book_m SET
            stock_number = :stock_number,
            updated_date= :updated_date,
            updated_by= :updated_by
            WHERE book_id = :book_id AND
            del_flg = :del_flg
        ");
        $reduce->bindValue(":stock_number",$current_stock);
        $reduce->bindValue(":book_id", $book_id);
        $reduce-> bindValue(":del_flg", 0);
        $reduce->bindValue(":updated_date", date("d/m/Y"));
        $reduce->bindValue(":updated_by", "KaungKaung");
        $reduce -> execute();
        // $reduceResult = $reduce -> fetchAll(PDO::FETCH_ASSOC);
        print_r(json_encode($reduceResult));
    }