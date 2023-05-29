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
        //$num = mysqli_num_rows($run);
        // if ($num1 != 0) {
        //     echo "yes";
        //     $_SESSION['add_product'] = "Succesfully added in database";
        // } else {
        //     echo "Error creating database: " . mysqli_error($conn);
        // }
          
        $_SESSION['add_product'] = "Successfully Added in the Database";
        // closing connection
        header('location:addproduct.php');
        $con->close();
        echo $num1;
        
        
    
?>  
