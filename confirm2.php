<?php 
    include '_dbconnect.php';
    $email = $_GET['email'];
    echo $email;
    $sql = "UPDATE `user` SET `premium` = 'premium' WHERE `user`.`email` = '$email';";
    mysqli_query($con,$sql);
    header("Location: premium.php");

    
    session_start();
    $_SESSION['view_cart1'] = 'Congratulations You Are Now A Premium User ';
    
    header("Location: premium.php");
?>