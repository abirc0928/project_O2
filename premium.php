<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Project O2</title>
  <link rel="stylesheet" href="css/styels2.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel = "icon" href="img/fav.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>


  <!-- Pricing -->
  
  <section id="pricing">
  <img class = "size" src="img/LOGO.png" alt="img">
    <h2>A Plan Every Person Needs</h2>
    <p>Simple and affordable price plan for you.</p>

    <div class="row">
    <div class="p-col col-lg-6 col-md-6 col-sm-6">
      <div class="card">
        <div class="card-header">
          <h3>Premium Membership</h3>
        </div>
        <div class="card-body">
          <h2>৳ 99 / Mo</h2>
            <p><i class="fa-solid fa-check"></i> Unlimited Contacts of Plant Specialist</p>
            <p><i class="fa-solid fa-check"></i> 24 Hour Support</p>
            <p><i class="fa-solid fa-check"></i> Connect with them via Whatsapp</p>
          <button onclick="window.location.href='payment2.php?amount=99'" class="btn btn-lg btn-block btn-outline-dark" type="button">Premium Membership</button>
          <button onclick="window.location.href='userhome.php?id=home'" class="btn btn-lg btn-block btn-dark" type="button">Return Home</button>
        </div>
      </div>
    </div>
  </div>

  <?php
   session_start();
    $msg = $_SESSION['view_cart'];
    $_SESSION['view_cart']=null;
    $msg1 = $_SESSION['view_cart1'];
    $_SESSION['view_cart1']=null;
      
     
    if($msg1){?>

    <div class="row" id="pad3">
    <div class="col-md-12">
        <div class="alert alert-success" role="alert">
            <?php echo $msg1; ?>
        </div>
    </div>

    </div>

    <?php }
    if($msg){?>

      <div class="row" id="pad3">
      <div class="col-md-12">
          <div class="alert alert-danger" role="alert">
              <?php echo $msg; ?>
          </div>
      </div>
      
      </div>
<?php }?>

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
    
    
    <p>© Copyright Project O2</p>

  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>