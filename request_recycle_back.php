<?php
   
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php'; 
    $email = $_SESSION['email'];
    $address= $_POST['address'];
    $description= $_POST['description'];
    



    $q2 = "INSERT INTO `recycle`(`id`, `email`, `address`, `description`, `status`) VALUES ('', '$email','$address','$description','Pending')";
            $run = mysqli_query($con, $q2);
            $_SESSION['add_req'] = "Successfully Added in the Database";
            header("Location:request_recycle_front.php");

            exit();
            
        
    }
?>