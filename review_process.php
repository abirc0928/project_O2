
<?php
session_start();
  $email = $_SESSION['email'];
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(
        isset($_POST['name']) &&
        isset($_POST['review']) && isset($_POST['uemail'])
        
       
        &&!empty($_POST['name'])
         &&!empty($_POST['review']) &&
        !empty($_POST['uemail'])   
    )
    { 
        $name=$_POST['name'];
        $email=$_POST['uemail'];
        $review=$_POST['review'];


        try{
            $conn= new PDO('mysql:host=localhost:3306;dbname=project_o2','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

           $sql="INSERT INTO reviews VALUES(NULL,'$name','$review','$email')";
            $conn->exec($sql);

            ?>
              <script>location.assign('userhome.php')</script>
            <?php
        }
        catch(PDOException $ex){
            ?>
                <script>location.assign('give_review_product.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>location.assign('give_review_product.php')</script>
        <?php
    }
}
else{
    ?>
     <script>location.assign('give_review.php')</script>;
     <?php
}
?>
