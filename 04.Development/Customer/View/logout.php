<?php
 session_start();
 unset($_SESSION['status-customer']);
 unset($_SESSION['username']);
 unset($_SESSION['customer_id']);
 unset($_SESSION['cart']);
 unset($_SESSION['customer_profileImg']);
 header("location: ./homePage.php");
?>
