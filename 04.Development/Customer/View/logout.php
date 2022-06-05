<?php
 session_start();
 unset($_SESSION['status']);
 unset($_SESSION['username']);
 unset($_SESSION['customer_id']);
 header("location: ./homePage.php");
?>
