<?php

	$id = $_GET["id"];

	try{
        $conn=new PDO('mysql:host=localhost:3306;dbname=project_o2;','root','');
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sqlquerystring="DELETE FROM product WHERE id='$id'";

        $conn->exec($sqlquerystring);

            ?>
              <script>location.assign('product_list.php')</script>
            <?php
    }
    catch (PDOException $ex){
        ?>
            <script>location.assign('porduct_list.php')</script>
        <?php
    }
    session_start();
	$_SESSION['delete'] = "Successfully deleted in the Database";


?>