<?php
include('config.php');

session_start();



?>
<!DOCTYPE html>  
<html>  
 <head>  
  <title>Welcome Admin</title>  


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <link rel="stylesheet" href="css/pagestyle2.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="css/pagestyle.css">

  
  <style>


.sidebar {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:#111;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  padding-top:15px;
  font-size: 16px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: white;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
 </head>  
 <body> 

 <div class="sidebar">
   
  <a href="#home" style ="color:rgb(250, 163, 1);"><i class="fa fa-dashboard"></i> Dashboard <p style = "margin-left:170px; margin-top:-23px;"> ›</p></a>
  
  <a href="#services" style ="color:rgb(250, 163, 1);"><i class="fa fa-fw fa-wrench"></i> Settings <p style = "margin-left:170px; margin-top:-23px;"> ›</p></a>
  <a href="#clients" style ="color:rgb(250, 163, 1);"><i class="fa fa-address-book"></i> Page Management <p style = "margin-left:170px; margin-top:-23px;"> ›</p></a>
  <a href="#contact" style ="color:rgb(250, 163, 1);"><i class="fa fa-database"></i> Metadata <p style = "margin-left:170px; margin-top:-23px;"> ›</p></a>
  <a href="#contact" style ="color:rgb(250, 163, 1);"><i class="fa fa-image"></i> Slider Management <p style = "margin-left:170px; margin-top:-23px;"> ›</p></a>
  <a href="#contact" style ="color:rgb(250, 163, 1);"><i class="fa fa-group"></i> Team Management <p style = "margin-left:170px; margin-top:-23px;"> ›</p></a>
  <a href="#contact" style ="color:rgb(250, 163, 1);"><i class="fa fa-phone"></i> Service Management <p style = "margin-left:170px; margin-top:-23px;"> ›</p></a>
  <a href="#contact" style ="color:rgb(250, 163, 1);"><i class="fa fa-envelope-square"></i> Portfolio Management <p style = "margin-left:170px; margin-top:-23px;"> ›</p></a>
  <a href="#contact" style ="color:rgb(250, 163, 1);"><i class="fa fa-comments"></i> Enquiry Management <p style = "margin-left:170px; margin-top:-23px; color:rgb(250, 163, 1);"> ›</p></a>
</div>

<nav style = "margin-left:200px; background-color: #23395d;height:70px" >
<div>
<ul>
<li><img src = "LOGO.jpeg" style = "height:70px;"><li>
  <li><h2 style = "color:  rgb(250, 163, 1); margin-left:400px;"> Control Panel</h2>
  
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <div class="dropdown" style="text-decoration: none;  margin-top:-60px ;">
    <li><button class="dropbtn" style="text-decoration: none;   margin-left: 900px; transition: 3s;"><i class="fa fa-user icon" style = "margin-left:-2px;"></i> Welcome <br>&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['username'];  ?>
      <i class="fa fa-caret-down"></i>
    </button>
    </div>
    
</ul>
</div>
</nav>

<div style = "margin-left:200px">  
       <ul><li> <a href = "ecommerceuser.php" style="font-size: 12px;  color: rgb(2, 2, 2);font-weight: bolder;" >Home </a> 
        <li><p class="code">›</p>
        <li><p  class = "set" style="font-size: 12px; color:rgb(250, 163, 1);font-weight: bolder">Slider Management</p>
        
        
</div>

 
  <div class="container" style="width:900px; ">  
   
   <br />
   <div align="right">
    <button type="button" name="add" id="add" class="btn btn-success" style ="background-color:rgb(250, 163, 1);">Add</button>
   </div>
   <br />
   <div id="image_data">

   </div>
  </div>  
 </body>  
</html>

<div id="imageModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Add Image</h4>
   </div>
   <div class="modal-body">
    <form id="image_form" method="post" enctype="multipart/form-data">
     <p><label>Select Image</label>
     <input type="file" name="image" id="image" /></p><br />
     <input type="hidden" name="action" id="action" value="insert" />
     <input type="hidden" name="image_id" id="image_id" />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
      
    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
 
<script>  
$(document).ready(function(){
 
 fetch_data();

 function fetch_data()
 {
  var action = "fetch";
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#image_data').html(data);
   }
  })
 }
 $('#add').click(function(){
  $('#imageModal').modal('show');
  $('#image_form')[0].reset();
  $('.modal-title').text("Add Image");
  $('#image_id').val('');
  $('#action').val('insert');
  $('#insert').val("Insert");
 });
 $('#image_form').submit(function(event){
  event.preventDefault();
  var image_name = $('#image').val();
  if(image_name == '')
  {
   alert("Please Select Image");
   return false;
  }
  else
  {
   var extension = $('#image').val().split('.').pop().toLowerCase();
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#image').val('');
    return false;
   }
   else
   {
    $.ajax({
     url:"action.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
     success:function(data)
     {
      alert(data);
      fetch_data();
      $('#image_form')[0].reset();
      $('#imageModal').modal('hide');
     }
    });
   }
  }
 });
 $(document).on('click', '.update', function(){
  $('#image_id').val($(this).attr("id"));
  $('#action').val("update");
  $('.modal-title').text("Update Image");
  $('#insert').val("Update");
  $('#imageModal').modal("show");
 });
 $(document).on('click', '.delete', function(){
  var image_id = $(this).attr("id");
  var action = "delete";
  if(confirm("Are you sure you want to remove this image from database?"))
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{image_id:image_id, action:action},
    success:function(data)
    {
     alert(data);
     fetch_data();
    }
   })
  }
  else
  {
   return false;
  }
 });
});  
</script>
<script>
    function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}
    </script>
