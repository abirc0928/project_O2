<?php
    include '_dbconnect.php';
    session_start();
        $name = $_POST['name'];
        $image = $_POST['image'];
        $type = $_POST['type'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        
        
        $q =  "INSERT INTO `product`(`id`, `name`, `img`, `price`, `type`, `details`) 
        VALUES ('','$name','$image','$price','$type','$description')";
        $run = mysqli_query($con, $q);
        
        $_SESSION['update'] = "Accept the product";

       $id = $_SESSION['request_id'];
        $_SESSION['request_id'] = null;
       $q1 =  "DELETE FROM `r_product` WHERE `r_product`.`id` = $id";
       $run = mysqli_query($con, $q1);

        // closing connection
        header('location:view_product_requests.php');
        $con->close();
        
         

        
    
?>  
