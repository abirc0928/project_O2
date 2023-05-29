<?php
    include '_dbconnect.php';
    session_start();
        $name = $_POST['name'];
        $image = $_POST['image'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        
        
        $q =  "INSERT INTO `package`(`id`, `name`, `img`, `price`, `description`) VALUES ('','$name','$image','$price','$description');";
        $run = mysqli_query($con, $q);
        /*if (mysqli_query($conn, $q)) {
            echo "Database created successfully with the name newDB";
        } else {
            echo "Error creating database: " . mysqli_error($conn);
        }*/
          
        // closing connection
        $_SESSION['add_package'] = "Successfully Added in the Database";
        header('location:entry_package_front.php');
        $con->close();
    
?>  
