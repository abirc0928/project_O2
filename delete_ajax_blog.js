var deleteData = function(id){
    $.ajax({    
        type: "GET",
        url: "delete_blog.php", 
        data:{deleteId:id},            
        dataType: "html",                  
        success: function(data){   
        $('#msg').html(data);
       $('#table-container').load('fetch-data.php');
           
        }
    });
};