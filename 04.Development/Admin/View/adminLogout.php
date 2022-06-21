<?php
session_start();
 unset($_SESSION['status']);
 unset($_SESSION['admin_name']);
 unset($_SESSION['admin_email']);
 header("location: ./dashBoard.php");
?>