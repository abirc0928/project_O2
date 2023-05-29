<!DOCTYPE html>
<html>
    <head><center>
        <br>
        <br>
        <br>
        <br>
        <meta charset="uff-8">
        <title>Make Donation</title></center>
        
    </head>
    <body><center>
        <p style="text-align:center;"></p>
     <h1><font color="Blue">Donation </font></h1>
        <br>
        <br>
        
        <form action="make_donationpro.php" method="POST">    
             <lable for="uname" > User Name : </lable>
            <input type="text"  id="uname" name="uname" style="height:25px; width:200px" />
            <br>
            <br>
            <lable for="utid" > Transaction_ID: </lable>
            <input type="text" placeholder="type your transaction id here" id="utid" name="utid" style="height:25px; width:200px" />
            <br>
            <br>
            
            <lable for="uamnt" > Amount: </lable>
            <input type="number"  id="uamnt" name="uamnt"  style="height:25px; width:200px" />
            <br>
            <br>
            
            <br>
            <input type="submit" id =s value="Click to Donation" style="height:30px; width:160px" />       
            
            <script>
                        let btn= document.querySelector('#s');
                        let name;
                        btn.addEventListener('click', function (){
                            fetch('http://localhost/pre_final/ava_ajax.php')
                            .then(response => response.json())
                            .then(myObj => {
                                name = myObj.content[0].name;
                                alert("Are you sure to make donation ?");		
                            })
                        });
                    </script>
            
        
        </form>
    </center>
    </body>
        

</html>