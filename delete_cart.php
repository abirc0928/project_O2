<?php
    include '_dbconnect.php';
    
    session_start();
    
    $queries = array();
    parse_str($_SERVER['QUERY_STRING'], $queries);
    $id = $queries['id'];
    $sql = "DELETE FROM cart WHERE id = $id";
    
    $result = mysqli_query($con, $sql);
    
    
    $con->close();
header("Location:viewcart.php");
exit();
?>