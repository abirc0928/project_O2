<?php

	$id = $_GET["id"];

	try{
        $conn=new PDO('mysql:host=localhost:3306;dbname=project_o2;','root','');
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sqlquerystring="UPDATE recycle SET status = 'Accepted' WHERE id='$id'";

        $conn->exec($sqlquerystring);

            ?>
              <script>location.assign('manage_recycle.php')</script>
            <?php
    }
    catch (PDOException $ex){
        ?>
            <script>location.assign('manage_recycle.php')</script>
        <?php
    }
	


?>