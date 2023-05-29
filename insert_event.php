<?php
    include '_dbconnect.php';
    session_start();
        $name = $_POST['name'];
        $image = $_POST['image'];
        $location = $_POST['location'];
        $time = $_POST['time'];
        $description = $_POST['description'];
        
        
        $q =  "INSERT INTO `event`(`id`, `name`, `details`, `e_time`, `location`, `img`) VALUES ('','$name','$description','$time','$location','$image');";
        $run = mysqli_query($con, $q);
        /*if (mysqli_query($con, $q)) {
            echo "Database created successfully with the name newDB";
        } else {
            echo "Error creating database: " . mysqli_error($con);
        }*/
          
        // closing connection
        $_SESSION['add_event'] = "Successfully Added in the Database";
        header('location:event.php');
        $con->close();
        
        
    
?>  
