<?php 
    include '_dbconnect.php';
    

    $q4 =  "DELETE FROM cart WHERE  `email`='$email';";
    $run4 = mysqli_query($con, $q4);

    
    session_start();
    $_SESSION['view_cart1'] = 'Successfully Purchased';
    
   header("Location: viewcart.php");
?>