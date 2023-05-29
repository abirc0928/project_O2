<?php
    session_start();
  $email = $_SESSION['email'];
?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>ALL Review </title>

        <style>
        body{
              background-image:url(v.jpg);
              background-position:center;
              background-size:cover;
              background-attachment: fixed;
              justify-content: center;
              align-items: center;
              height: 100vh;
            }
        #ptable{
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%,-50%);
          border-collapse: collapse;
          width: 1000px;
          height: 200px;
          border: 1px solid #bdc3c7;
          box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
          background: #d6d6d6c9;
        }

        tr {
        transition: all .2s ease-in;
        cursor: pointer;
        font-family: calibri;
        }
        tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
        }

        th, td {
          padding: 12px;
          text-align: center;
          border-bottom: 1px solid #ddd;
        }
        .button2{
                    width: 150px;
                    padding: 15px 0;
                    text-align: center;
                    text-shadow: black;
                    margin: 20px 10px;
                    border-radius: 25px;
                    font-weight: bold;
                    border: 4px solid aqua;
                    background: #0000009c;
                    color: white;
                    cursor: pointer;
                    position: relative;
                    overflow: hidden;
                }

    </style>

</head>
<body>
    <br>
    <br>
    <h1><center><font color="White">All Reviews </font> </center></h1>
    <br><br>

            <table id="ptable">
                <thead>
                    <tr>
                        <th>Review No</th>
                        <th>Product Name</th>
                        <th>Review</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    try{

                        $conn=new PDO('mysql:host=localhost:3306;dbname=project_o2;','root','');
                        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                         $sqlquerystring="SELECT review_no,product_name,review,email
                                         FROM reviews ";
                        $returnobj=$conn->query($sqlquerystring);

                        if($returnobj->rowCount()==0){
                          ?>
                          <tr>
                            <td colspan="4">No data found</td>
                        </tr>
                        <?php
                    }


                    else{
                        $tabledata=$returnobj->fetchAll();

                        foreach($tabledata AS $row){
                         ?>

                         <tr>
                            <td><?php echo $row['review_no']; ?></td>
                            <td><?php echo $row['product_name']; ?></td>
                            <td><?php echo $row['review']; ?></td>
                            <td><?php echo $row['email']; ?></td>

                        </tr>
                        <?php 
                    }
                    ?>
                   
             <?php
         }
     }

     catch (PDOException $ex){
         ?>
                <script>location.assign('give_review_product.php')</script>
            <?php
       

    }
    ?>

</tbody>
</table>
</body>
</html>