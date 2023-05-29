<?php
    session_start();
    $email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Give Review</title>
    <style>

        body{
            background-color:aliceblue;
            background-image :url('R.png');
            background-position:center;
            background-size:cover;
            display: flex;
            justify-content: center;
            align-items: center;
              height: 110vh;
            
                }
                .posts {
                    display: relative;
                    background: linear-gradient(
                        to left top,
                        rgba(255, 255, 255, 0.9),
                        rgba(255, 255, 255, 0.9)
                    );
                    border-radius: 1rem;
                    margin: 2rem 3rem;
                    padding: 1rem;
                    box-shadow: 6px 6px 20px rgba(122, 122, 122, 0.212);
                    justify-content: space-between;
                }
                .button{
                    width: 130px;
                    padding: 10px 0;
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
<body><center>
           
      <form action="review_process.php"method="POST">
         <div class="posts"> 
          <br>
          <label for="name"><b>Product Name:</b></label>
          <input type="text" placeholder="Write product name here" id="name" name="name" style="height:30px; width:260px" />
          <br>
          <br>
          <label for="review"><b>Review:</b></label>
         <input type="text" placeholder="Write your review here" id="review" name="review" style="height:30px; width:260px" />
          <br>
          <br>
           <label for="uemail"><b>Email:</b></label>
          <input type="text" value="<?php echo $email ?>" id="uemail" name="uemail" readonly style="height:30px; width:260px" />
          <br>
          <br>
         
             <button type='submit' id="s" style="height:30px; width:200px">Enter</button>
             
              <script>
                        let btn= document.querySelector('#s');
                        let name;
                        btn.addEventListener('click', function (){
                            fetch('http://localhost/project_o2/project_o2/ava_ajax.php')
                            .then(response => response.json())
                            .then(myObj => {
                                name = myObj.content[0].name;
                                alert("Are you sure to submit your review  ?");		
                            })
                        });
                    </script>
          </div>
          
    </form>
    </center>
</body>
</html>
