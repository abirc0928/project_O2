<?php 

    include '_dbconnect.php';
    $id = $_GET['id'];
    $sql = "UPDATE `order` SET `d_status` = 'Delivered' WHERE `order`.`id` = $id;
    ";
    mysqli_query($con,$sql);
    header("Location: manage_order.php");
?>