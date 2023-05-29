<?php 
session_start();
    $_SESSION['view_cart'] = 'Payment Failed, Please Try Again';
     
   header("Location: premium.php");
?>