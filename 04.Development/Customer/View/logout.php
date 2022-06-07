<?php
 session_start();
 unset($_SESSION['status']);
 unset($_SESSION['username']);
 unset($_SESSION['customer_id']);
 unset($_SESSION['cart']);
 header("location: ./homePage.php");
?>
