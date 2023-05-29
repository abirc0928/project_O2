<?php
  session_start();
  $email = $_SESSION['email'];
  if($email==null){
    header('location:login.php?id=home');
  }
?>
<?php
    $num= 0 ;
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php'; 
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $feedback= $_POST['feedback'];

    $q1 = "SELECT `name` FROM `user` WHERE email = '$email';";

    $run1 = mysqli_query($con, $q1);
    $num1 = mysqli_num_rows($run1);

    if ($num1 > 0) {
        while ($row = $run1->fetch_assoc()) {      
            $name =  $row['name'] ;
        }
    }

    $q2 = "INSERT INTO `feedback`(`name`, `id`, `email`, `feedback`, `upload_time`) VALUES ('$name','','$email','$feedback',Now())";
            $run = mysqli_query($con, $q2);
            $_SESSION['add_feedback'] = "Successfully Added in the Database";
            header("Location:feedback.php");

            exit();
            
        
    }
?>