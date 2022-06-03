<?php session_start();

require_once "../Model/DBConnection.php";
// Get Data from Insert Book From
if(isset($_POST)){
    $customer_name = $_POST['username'];
    $customer_email = $_POST['email'];
    $customer_password = $_POST['password'];
    $customer_phone = $_POST['phone'];
    $id = $_SESSION['customer_id'];
    
    $file = $_FILES['photo']['name'];
    $location = $_FILES['photo']['tmp_name'];
    if (move_uploaded_file($location, "../resource/customerimg/" . $file)) {
        //Call DB Connection
        $db =  new DBConnect();
        $dbconnect = $db->connect();

        $sql = $dbconnect->prepare(
            "UPDATE customer SET
            customer_name = :name,
            customer_phno = :phno,
            customer_email =  :email,
            customer_password = :password,
            customer_profileImg = :img,
            WHERE customer_id = :id"
        );

        $sql->bindValue(":name", $customer_name);
        $sql->bindValue(":phno", $customer_phone);
        $sql->bindValue(":email", $customer_email);
        $sql->bindValue(":password", $customer_password);
        $sql->bindValue(":img", $file);
        $sql->bindValue(":id", $customer_id);
        $sql->execute();

        echo "Success";

    } else {
        echo "Error";
    }

}