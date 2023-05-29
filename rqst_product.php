<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<?php
  session_start();
  $email = $_SESSION['email'];
  if($email==null){
    header('location:login.php?id=home');
  }
?>
<?php
    $msg = $_SESSION['add_req'];
    $_SESSION['add_req'] = null;
?>
<!DOCTYPE html>

        <html lang="en">
        <head> 
            <link rel = "icon" href="img/fav.png">
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
            <title>Request For Plant</title>
            <style>
                body{
                background-image:url(img/pos/10.jpg);
                background-position:center;
                background-size:cover;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                
            }
            *{
                font-family:  sans-serif;
                box-sizing: border-box;
            }
            form{
                border: 2px solid #ccc;
                padding: 92px;
                background: #19412F99;
                border-radius: 20px;
            }
            h2{
                font-family: 'Montserrat', sans-serif;
                text-align: center;
                margin-bottom: 40px;
                color: #fff;
            }
            input{
                display: block;
                border: 2px solid #ccc;
                width: 95%;
                padding: 10px;
                margin: 10px auto;
                border-radius: 5px;
            }
            textarea{
                display: block;
                border: 2px solid #ccc;
                width: 95%;
                padding: 10px;
                margin: 10px auto;
                border-radius: 5px;
            }
            label{
                color: rgb(233, 230, 230);
                font-size: 18px;
                padding: 10px;
            }
            button {
                float: right;
                background: #2e3a38f2;
                padding: 10px 22px;
                color: #fff;
                border-radius: 8px;
                margin-right: 17px;
                border: none;
            }
            button:hover{
                opacity: .7;
                cursor: pointer;
            }
            input:hover{
                opacity: .7;
            }
            .dec{
                color:white;
            }
            .c{
                text-align: center;
            }
            </style>
        </head>
        <body>
            <form action="rqst_product_entry.php" method="POST">
                <h2>Please Enter the Details of Your Plant Request</h2>
                <?php if ($msg) { ?>                                  
                        <div class="alert alert-success dec" role="alert">
                            <p class="c"><?php echo $msg ?></p>
                        </div>
                <?php } ?>
                <input type=hidden name=email value='<?php echo $email; ?>'>
                <input type=hidden name=name value='<?php echo $name; ?>'>
               
                <label for="pname">Plant name: </label>
                <p> 
                <input type="text" name="pname" id="pname" placeholder="Enter Plant Name" required>
                <p>
                <label for="description">Plant Description: </label></p>   
                <textarea id="description" name="description" rows="4" cols="50" placeholder="Enter Plant Description" required></textarea>

                <button type='submit'>Submit</button>
                <button onclick="window.location.href='userhome.php'" type="button"><i class="fa-solid fa-house"></i> Return Home</button>
                

            </form>
        </body>
</html>
