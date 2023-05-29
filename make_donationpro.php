<?php

   if($_SERVER['REQUEST_METHOD']=="POST")
   {
     
       if(
            isset($_POST['uname']) && isset($_POST['utid'])
           && isset($_POST['uamnt']) 
           
           && !empty($_POST['uname']) && !empty ($_POST['utid'])
           && !empty ($_POST['uamnt'])
        
          ){
               $tid=$_POST['utid'];
               $amnt=$_POST['uamnt'];
               $email="mim@gmail.com";
               $name=$_POST['uname'];
               
               
               try{
                   $conn=new PDO('mysql:host=localhost:3306;dbname=project_o2;','root','');
                   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                   //echo "a";
                    $sqlquerystring1="INSERT INTO donation VALUE ('$name','$email',$tid,'$amnt')";
                   $conn->exec($sqlquerystring1);
                   //echo $sqlquerystring1;
                   
                  
                 ?>
                <script>location.assign('userhome.php')</script>
                
                <?php
               
//                 
               }catch(PDOException $ex){
                   
                
                 ?>
                <script>location.assign('make_donation.php')</script>
                
                <?php
               
               }
               
           } else{
               
                 ?>
                <script>location.assign('make_donation.php')</script>
                
                <?php
               
           }
       
   }
    
  else{
      
      echo"<script>location.assign('make_donation.php')</script>";
  }


 ?>