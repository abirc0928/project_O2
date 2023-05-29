<?php
    include '_dbconnect.php';
    session_start();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $designation = $_POST['designation'];
        $specialized = $_POST['specialized'];
        $contact = $_POST['contact'];
        
        
        $q =  "INSERT INTO `consult`(`id`, `name`, `designation`, `specialized`, `whtsapp_no`, `email`) VALUES ('','$name','$designation','$specialized','$contact','$email');";
        $run = mysqli_query($con, $q);
       
        $_SESSION['add_consult'] = "Consultant added successfully";
        header('location:add_consult.php');
        $con->close();
    
?>  
