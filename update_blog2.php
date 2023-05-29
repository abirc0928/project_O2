<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<?php
  session_start();
  $admin = $_SESSION['admin'];
  if($admin==null){
    header('location:login.php?id=home');
  }
?>


<?php
include '_dbconnect.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];
  $bname = $_POST['bname'];
  $uname = $_POST['uname'];
  $uemail = $_POST['uemail'];
  $time = $_POST['time'];
 
  $description = $_POST['description'];
  //echo $id;
  

      $sql = "UPDATE `blog` SET `name` = '$uname', `email` = '$uemail', `b_title` = '$bname', `content` = '$description', `time` = '$time' WHERE `blog`.`id` = $id;";

      $result = mysqli_query($con, $sql);
      session_start();
      $_SESSION['update'] = "Successfully updated in the Database";
      
      header("Location: update_blog.php");
      $con->close();
      exit();
      
  
}

    $queries = array();
    parse_str($_SERVER['QUERY_STRING'], $queries);
    $id = $queries['id'];
    //echo $id;
    $_SESSION['request_id'] = $id;
    $sql = "select * FROM blog WHERE id = $id";
    $result1 = mysqli_query($con, $sql);
    
    $num1 = mysqli_num_rows($result1);
    $html = "";
    
    if ($num1 > 0) {
        if ($row = $result1->fetch_assoc()) {
            $name = $row["name"];
            $email = $row["email"];
            $b_title = $row["b_title"];
            $content = $row["content"];      
            $time = $row["time"];
           
       
        }
    }
   
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Update Blogt</title>
    <link rel = "icon" href="img/fav.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/addproduct.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
   
</head>

<body>
<?php
include('header5.html');
?>
    

<section id="cta">
        <form id="update_from" class="form" action="update_blog2.php" method="POST" novalidate>
          <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12" id=col1>
              <div id="log-title">
                <h3 class="cta-heading"><i class="fa-brands fa-pagelines"></i> Update Blog</h3>
               
              </div>
              <div class="form-group"> 
                <input hidden type="text" name="id" value="<?php echo $id ?>">
              </div>
              <div class="form-group">
                <label for="name">Blog Name</label>
                <input type="text" class="form-control" name="bname" placeholder="Product Name" value="<?php echo $b_title ?>"required>
              </div>
              <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" class="form-control" name="uname" placeholder="Product Name" value="<?php echo $name ?>"required>
              </div><div class="form-group">
                <label for="name">User Email</label>
                <input type="text" class="form-control" name="uemail" placeholder="Product Name" value="<?php echo $email ?>"required>
              </div>
              <div class="form-group">
                <label for="Product Price">Time</label>
                <input type="text" class="form-control" name="price" placeholder="Product Price" value="<?php echo $time ?>"required>
              </div>
              
              
              <div class="form-group">
              <label for="Product Details">Blog content</label>
              <textarea class="form-control" name="description" rows="4" cols="50" placeholder="Enter Product Description" required><?php echo $content ?> </textarea>
              </div>

        
              <button type="submit" class="btn btn-lg btn-block btn btn-success">Submit</button>
            </div>
          </div>
        </form>
</section>
    
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
    <script src="https://use.fontawesome.com/2c7ebecd35.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
      $('input[name=image]').on('change', function() {
        var file = $('input[name=image]').get(0).files[0];
        console.log(file);
        var blob = URL.createObjectURL(file)
        document.querySelector('.image-preview').src= blob;
        $('input[name=image_name]').val(file.name);
      });

      $("#update_from").validate({

        rules: {
          name_1: {
                required: true
            },
            price: {
                required: true,
            },
            type: {
                required: true,
            },
            stock: {
                required: true,
            },
            description: {
              required: true,
            },
            image: {
              required: false
            }
        },
        messages: {
          name_1: {
                required: "this field is required"
            },
            price: {
              required: "this field is required"
            },
            type: {
              required: "this field is required"
            },
            stock: {
              required: "this field is required"
            },
            description: {
              required: "this field is required"
            }
        },

          
      });

    </script>
    
</body>
</html>
