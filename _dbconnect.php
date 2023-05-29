<?php
 $server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "project_o2";
 
 $con = mysqli_connect($server,$username,$password,$dbname);
 if(!$con){
   die("error " . mysqli_connect_error(). "no_connetion") ;
   
 }
 
 ?>