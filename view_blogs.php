<?php
  session_start();
  $email = $_SESSION['email'];
  if($email==null){
    header('location:login.php?id=home');
  }
?>
<?php
        $id = $_GET["id"];
        include '_dbconnect.php';
        $q =  "SELECT * FROM blog where id=$id;";
        $run = mysqli_query($con, $q);
        $html = "";
        if(mysqli_num_rows($run)>0){
            while($row = $run->fetch_assoc()){
                $Title = $row["b_title"];
                $Name = $row["name"];
                $Time = $row["time"];
                $Content = $row["content"];
                //$html = $html. "<tr><td>" . $row["name"] . "</td><td>" . "<img src='product img/" . $row["img"] . "' width = 300px class='rounded mx-auto d-block'>" . "</td><td>" . '<h4 class="taka">৳</h4>'. $row["price"] . "</td><td>". $row["stock"] . "</td><td>". $row["description"] . "</td><td>". '<a class="btn btn-lg btn-block btn btn-outline-info" href="mycart.php?id=' . $row["id"] .'"><i class="fa-solid fa-bag-shopping"></i> Add To Cart</a>' ."</td></tr>";
               
            }
          
        }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>View Blog</title>
    <link rel = "icon" href="img/fav.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/blogs.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap" rel="stylesheet">
</head>

<body>
    
    <?php 
    include('header3.html');
    ?>

    <div class="blog">
    <div class="container-fluid" id="cf">
        <div class = "header1">
        <h1><?php echo $Title?></h1>
        </div>
        <div class = "header2">
        <h5><i class="fa-solid fa-user"></i> &nbsp &nbsp<?php echo $Name?><h5>
        <h5><i class="fa-solid fa-calendar"></i> &nbsp &nbsp<?php echo $Time?></h5>
        </div>
        <p class="txt"><?php echo $Content?></p>

    </div>
    <button onclick="window.location.href='view_blog_list.php'" type="button" class="CA btn btn-lg btn-block btn btn-success rounded-pill gap2">Return to Blog List</button>
    </div> 
    

   
    
    <footer id="footer">
    <a id="icon-fb" href="#">
      <i class="s-icons fa-brands fa-facebook"></i>
    </a>
    <a id="icon-insta" href="#">
      <i class="s-icons fa-brands fa-instagram"></i>
    </a>
    <a id="icon-mail" href="mailto:#">
      <i class="s-icons fa-solid fa-envelope" href=""></i>
    </a>
    
    
    <p>© Copyright ProjectO2</p>

   </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#example').DataTable();
        } );
    </script>
    <script src="https://use.fontawesome.com/2c7ebecd35.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
