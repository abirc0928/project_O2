<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $add = $_POST['add'];
    $p_num = $_POST['p_num'];
    $gender = $_POST['gender'];
    
    $password= $_POST['password'];
    $cpassword= $_POST['cpassword'];

    if($password == $cpassword){
        $sql2 = "SELECT * FROM user WHERE email = '$email'";
        $result1 = mysqli_query($con, $sql2);
        $num1 = mysqli_num_rows($result1);
        
        
        if ($num1 == 0) {
        $sql = "INSERT INTO `user` (`email`, `name`, `address`, `p_number`, `password`, `role`, `premium`, `gender`)
         VALUES ('$email', '$name', '$add', '$p_num', '$password', 'admin', 'not premium', '$gender');";
            $result = mysqli_query($con, $sql);
            $_SESSION['success'] = "Account created successfully";
            header("Location:signup.php");
            exit();
        }
        else{
            $_SESSION['not_success'] = "Email already used before";
        header("Location:signup.php");
         exit();   
        }
             
    }
    
        $_SESSION['pasword'] = "Password did not matched";
        header("Location:signup.php");
         exit(); 
    
}
?>