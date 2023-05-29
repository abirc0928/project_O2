
<?php
    $num= 0 ;
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php'; 
    $email = $_SESSION['email'];
    $pname= $_POST['pname'];
    $description= $_POST['description'];
    

    $q1 = "SELECT `name` FROM `user` WHERE email = '$email';";

    $run1 = mysqli_query($con, $q1);
    $num1 = mysqli_num_rows($run1);

    if ($num1 > 0) {
        while ($row = $run1->fetch_assoc()) {      
            $name =  $row['name'] ;
        }
    }
    

    $q2 = "INSERT INTO `r_product`(`id`, `u_name`, `u_email`, `p_name`, `description`, `time`) VALUES ('', '$name', '$email','$pname','$description',NOW())";
            $run = mysqli_query($con, $q2);
            $_SESSION['add_req'] = "Successfully Added in the Database";
            header("Location:rqst_product.php");

            exit();
            
        
    }
?>