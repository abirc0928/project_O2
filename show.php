<?php 

    include '_dbconnect.php';
    $todo_id = $_GET['todo_id'];
    $id = $_GET['id'];
    $sql = "UPDATE cart
    SET quantity = '$todo_id'
    WHERE id= '$id';";
    mysqli_query($con,$sql);
    header("Location: viewcart.php");
?>