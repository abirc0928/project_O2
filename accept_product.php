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
    $queries = array();
    parse_str($_SERVER['QUERY_STRING'], $queries);
    $id = $queries['id'];
    //echo $id;
    $_SESSION['request_id'] = $id;
    $sql = "select * FROM r_product WHERE id = $id";
    $result1 = mysqli_query($con, $sql);
    
    $num1 = mysqli_num_rows($result1);
    $html = "";
    
    if ($num1 > 0) {
        if ($row = $result1->fetch_assoc()) {
            $p_name = $row["p_name"];
            $description= $row["description"];
         
        }
    }
    //echo $description;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Add Requseted Product</title>
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
        <form class="form" action="insert_request_product.php" method="POST">
          <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12" id=col1>
              <div id="log-title">
                <h3 class="cta-heading"><i class="fa-brands fa-pagelines"></i> Add Requested Product</h3>
                
              </div>
              <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" name="name" placeholder="Product Name"  value="<?php echo $p_name ?>" required>
              </div>
              <div class="form-group">
                <label for="Product Image">Product Image</label>
                <input type="file" class="form-control" name="image" required>
              </div>
              <div class="form-group">
                <label for="Product Price">Product Price</label>
                <input type="text" class="form-control" name="price" placeholder="Product Price" required>
              </div>
              <div class="form-group">
                  <label for="Product Type">Product Type</label>
                  <select class="form-control" name="type">
                    <option value="Flower Plants">Flower Plants</option>
                    <option value="Fruit Plants">Fruit Plants</option>
                    <option value="Vegetable Plants">Vegetable Plants</option>
                    <option value="Decorative Plants">Decorative Plants</option>
                    <option value="Flower Seeds">Flower Seeds</option>
                    <option value="Fruit Seeds">Fruit Seeds</option>
                    <option value="Vegetable Seeds">Vegetable Seeds</option>
                    <option value="Decorative Seeds">Decorative Seeds</option>
                    <option value="Pots">Pots</option>
                    <option value="Merch">Merch</option>
                    <option value="Recycled Product">Recycled Product</option>
                  </select>
              </div>
              <div class="form-group">
              <label for="Product Details">Product Details</label>
              <textarea class="form-control" name="description" rows="4" cols="50" placeholder="Enter Product Description"  required><?php echo $description ?></textarea>
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
    
</body>
</html>
