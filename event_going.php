<?php
session_start();

if(
        isset($_SESSION['email'])
    &&  !empty($_SESSION['email'])
){      //login already
   
    
            isset($_GET['id']);
       
             $email=$_SESSION['email'];
             $eventid= $_GET['id'];
           
               

                
           
               try{
                   $conn=new PDO('mysql:host=localhost:3306;dbname=project_o2;','root','');
                   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                   
                   $sqlquerystring="SELECT name FROM user WHERE email='$email'";
                   $returnobj=$conn->query($sqlquerystring); 
                   $name=$returnobj->fetchAll();
                   $username=$name[0]['name'];
                   
                   $sqlquerystring1="SELECT name FROM event WHERE id='$eventid'";
                   $returnobj1=$conn->query($sqlquerystring1); 
                   $table=$returnobj1->fetchAll();
                   $eventname=$table[0]['name'];
                   
                   
                   $sqlquerystring2= "INSERT INTO event_going VALUE('$eventname',' $username','$email')";
                   $conn->exec($sqlquerystring2);
                   
                   ?>
                   <script>location.assign('userhome.php')</script>
                
                   <?php
                   
               }catch(PDOException $ex){
                 
                    ?>
                <script>location.assign('userhome.php')</script>
                
                <?php
                
               }
               
  


}
  else{
      
      echo"<script>location.assign('userhome.php')</script>";
  }
    
 ?>