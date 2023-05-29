<?php
    $num= 0 ;
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php'; 
    $email = $_SESSION['admin'];
    $title= $_POST['title'];
    $content= $_POST['content'];

    $q1 = "SELECT `name` FROM `user` WHERE email = '$email';";

    $run1 = mysqli_query($con, $q1);
    $num1 = mysqli_num_rows($run1);

    if ($num1 > 0) {
        while ($row = $run1->fetch_assoc()) {      
            $name =  $row['name'] ;
        }
    }
    

    $q2 = "INSERT INTO blog VALUES ('', '$name', '$email','$title','$content',NOW())";
            $run = mysqli_query($con, $q2);
            $_SESSION['add_blog'] = "Successfully Added in the Database";
            header("Location:blog.php");

            exit();
            
        
    }
?>