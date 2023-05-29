<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>

<?php
  session_start();
  $email = $_SESSION['email'];
  if($email==null){
    header('location:login.php?id=home');
  }
?>
<?php
  include '_dbconnect.php';
  $queries = array();
    parse_str($_SERVER['QUERY_STRING'], $queries);
    $id = $queries['id'];
  $q =  "SELECT * FROM `product` WHERE id = $id";
        $run = mysqli_query($con, $q);
        if(mysqli_num_rows($run)>0){
            while($row = $run->fetch_assoc()){
               $name=$row["name"];
               $price=$row["price"];
               $details=$row["details"];
               
            }
          
        }
echo "$name";
echo "$details";
echo "$price";
echo "$email";
  $q2 = "INSERT INTO `cart`(`name`, `details`, `price`, `email`, `quantity`) VALUES ('$name','$details','$price','$email','1')";
        $run = mysqli_query($con, $q2);

        header('location:viewcart.php');
?>
