<?php
  session_start();
  $admin = $_SESSION['admin'];
  if($admin==null){
    header('location:login.php?id=home');
  }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Adminhome</title>
  <link rel="stylesheet" href="css/userhome.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel = "icon" href="img/fav.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <section id="title">
    <div class="container-fluid" id="cf">
        
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar navbar-light bg-light">
    <div class="logo">
      <a href="userhome.php">
      <img class = "logo" src="img/LOGO3.png" alt="img">
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="adminhome.php"><i class="fa-solid fa-house-user"></i> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-solid fa-dollar fa-ic"></i> Donation Management</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view_feedback.php"><i class="fa-solid fa-comment"></i> View Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view_product_requests.php"><i class="fa-solid fa-list-check"></i> Requested Plants</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://dashboard.tawk.to/#/dashboard/620fecc01ffac05b1d7a99a7"><i class ="fa-brands fa-rocketchat"></i> Live Chat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create_admin.php"><i class="fa-solid fa-address-book"></i> Create New Admin</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fa-solid fa-user"></i> Logout</a>
      </li>
      
    </ul>
    </div>
    </nav>
    
    
    <section id="cta">
        <h3 class="cta-heading">WELCOME ADMIN</h3>
        
    </section>
    </div>
    
  </section>

  <section id="Sec">
    

    <div class="row">

    <div class="p-col col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title"><i class="fa-brands fa-pagelines"></i> Product Management</h5>
        <a href="addproduct.php" class="btn btn-lg btn-block btn btn-success downbtn2">Add Product</a>
        <a href="product_list.php" class="btn btn-lg btn-block btn btn-success downbtn2">Product List</a>
        </div>
        </div>
    </div>

    <div class="p-col col-lg-4 col-md-6 col-sm-12">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title"><i class="fa-solid fa-box"></i> Package Management</h5>
        <a href="entry_package_front.php" class="btn btn-lg btn-block btn btn-info downbtn2">Add Package</a>
        <a href="package_list.php" class="btn btn-lg btn-block btn btn-info downbtn2">Package List</a>
        </div>
        </div>
    </div>

    <div class="p-col col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title"><i class="fa-solid fa-calendar"></i> Event Management</h5>
        <a href="event.php" class="btn btn-lg btn-block btn btn-dark downbtn2">Add Event</a>
        <a href="event_list.php" class="btn btn-lg btn-block btn btn-dark downbtn2">Event List</a>
        </div>
        </div>
    </div>

    <div class="p-col col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title"><i class="fa-solid fa-clover"></i> Blog Management</h5>
        <a href="blog.php" class="btn btn-lg btn-block btn btn-secondary downbtn2">Add Blog</a>
        <a href="update_blog.php" class="btn btn-lg btn-block btn btn-secondary downbtn2">Update Blog</a>
        </div>
        </div>
    </div>

    <div class="p-col col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title"><i class="fa-solid fa-person"></i> Consultant Management</h5>
        <a href="add_consult.php" class="btn btn-lg btn-block btn btn-warning downbtn2">Add Consultant</a>
        <a href="update_consult.php" class="btn btn-lg btn-block btn btn-warning downbtn2">Update Consultant</a>
        </div>
        </div>
    </div>
    <div class="p-col col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title"><i class="fa-solid fa-user-group"></i> Customer Management</h5>
        <a href="manage_order.php" class="btn btn-lg btn-block btn btn-danger downbtn2">Manage Order</a>
        <a href="manage_recycle.php" class="btn btn-lg btn-block btn btn-danger downbtn2">Manage Recycles</a>
        </div>
        </div>
    </div>
    <div class="p-col col-lg-4 col-md-12 col-sm-12">
        
    </div>
    
   
    

  </div>

  </section>


  


  <!-- Footer -->

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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>

</html>