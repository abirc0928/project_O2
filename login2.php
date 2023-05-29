<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $id = $_SESSION['id'];
    

    $sql2 = " SELECT * FROM user WHERE email = '$email' and password = '$password'";
    $result1 = mysqli_query($con, $sql2);
    $num1 = mysqli_num_rows($result1);

   

    if ($num1 == 1) {
        
        while ($row = $result1->fetch_assoc()) {
            $role = $row["role"];
            if($role == 'user'){
                if($id == 'flower'){
                    $_SESSION['email'] = $email;
                    header("Location:Flower_Plants.php");
                }
                if($id == 'fruit'){
                    $_SESSION['email'] = $email;
                    header("Location:Fruit_Plants.php");
                }
                if($id == 'vagitable'){
                    $_SESSION['email'] = $email;
                    header("Location:Vegetable_Plants.php");
                }
                if($id == 'decorative'){
                    $_SESSION['email'] = $email;
                    header("Location:Decorative_Plants.php");
                }
                if($id == 'flower_seeds'){
                    $_SESSION['email'] = $email;
                    header("Location:Flower_Seeds.php");
                }
                if($id == 'fruit_seeds'){
                    $_SESSION['email'] = $email;
                    header("Location:Fruit_Seeds.php");
                }
                if($id == 'vegitable_seeds'){
                    $_SESSION['email'] = $email;
                    header("Location:Vegetable_Seeds.php");
                }
                if($id == 'decorative_seeds'){
                    $_SESSION['email'] = $email;
                    header("Location:Decorative_Seeds.php");
                }
                if($id == 't_shirt'){
                    $_SESSION['email'] = $email;
                    header("Location:#.php");
                }
                if($id == 'recycle'){
                    $_SESSION['email'] = $email;
                    header("Location:Recycled_Product.php");
                }
                if($id == 'exchange'){
                    $_SESSION['email'] = $email;
                    header("Location:#.php");
                }
                if($id == 'package'){
                    $_SESSION['email'] = $email;
                    header("Location:Package_Product.php");
                }
                if($id == 'special'){
                    $_SESSION['email'] = $email;
                    header("Location:#.php");
                }
                if($id == 'blog'){
                    $_SESSION['email'] = $email;
                    header("Location:#.php");
                }
                if($id == 'pots'){
                    $_SESSION['email'] = $email;
                    header("Location:pot.php");
                }
                if($id == 'home'){
                    $_SESSION['email'] = $email;
                    header("Location:userhome.php");
                }
            }else if($role == 'admin'){
                $_SESSION['admin'] = $email;
                 header("Location:adminhome.php");
            }
        }
    }
    else{
        $_SESSION['wrong'] = "Wrong Email or Password";
         header("Location:login.php?id=home");
          exit(); 
    }
}