<?php
include('config.php');

session_start();



?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/pagestyle.css">

<link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <body>
    <nav style="background-color: #f6f6f6; margin-right: -6px; margin-left: -8px; margin-top: -10px;">
    <ul>
   
    <li><a style="width: -3px;  margin-left: 300px;"><img src="logistics.png"style="width: 100px;"></a></li>
    <li><a style="width: -3px; color: rgb(219, 113, 130);">CY+Pay</a></li>
    <li><a style="width: -3px;"><img src="foods.png"style="width: 100px;"></a></li>
    <li><a style="width: -3px;"><img src="drinks.png"style="width: 90px;"></a></li>
    
  </ul>
  </nav>
    
 <nav>   
<ul style="background-color:#23395d; height: 60px; margin-left: -8px;margin-top: 0px; margin-right: -6px;">
   
<li class="ex1"><a href="#home" style = "text-decoration: none ; font-family: sans-serif; font-size: 25; font-style: italic; color: tomato; font-weight: bolder; margin-top: -10px; transition: 3s;""> <img src = "LOGO.jpeg" width=" 70px" ></a></li>
  
  <li><a href="#news" class="ex1" style = "text-decoration: none; padding: 20px; transition: 3s;">Trending</a></li>
  <li><a href="#contact" style = "text-decoration: none;padding: 20px; transition: 3s;" class="ex1">Houses/Rent</a></li>
  <li><a href="#about" style = "text-decoration: none;padding: 20px; transition: 3s; " class="ex1">Best Sellers</a></li>
  <div class="dropdown">
    <button class="dropbtn" style="text-decoration: none;  padding-left: 70px; padding:20px; transition: 3s;">Help 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" style="transition: 3s;">
      <a href="FAQS.html" style="font-size:12px; transition: 3s;">FAQs</a>
      <a href="#" style="font-size:12px; transition: 3s;">Track My Orders</a>
      <a href="#" style="font-size:12px; transition: 3s;">Contact Us</a>
    </div>
  </div> 
  <div class="dropdown">
    <li><button class="dropbtn" style="text-decoration: none;   padding: left -2px;padding:10px; margin-left: 360px; transition: 3s;"><i class="fa fa-user icon" style = "margin-left:-2px;"></i> Hello, <br>&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['username'];  ?>
      <i class="fa fa-caret-down"></i>
    </button>
    
  <div class="dropdown-content" style = "margin-left: 360px;">
      <br>
      
      
      
    <a href="account.php" style="font-size:12px;"><i class="fa fa-user icon" style="color:#3F5B66; font-size: 16px;"> &nbsp;</i>Account</a>
    <a href="#" style="font-size:12px;"><i class="fa fa-credit-card" style="color:#3F5B66; font-size: 16px;"> &nbsp;</i>Orders</a>
    <a href="#" style="font-size:12px;"><i class="fa fa-heart" style="color:#3F5B66;font-size: 16px;"> &nbsp;</i>Saved Items</a>
    <a href="logout.php" style="font-size:12px;"><i class="fa fa-sign-out" style="color:#3F5B66; font-size: 16px;"> &nbsp;</i>Sign out</a>
  </div>
  <li><button href="%"  style="text-decoration: none;  color: white; background-color:rgb(250, 163, 1); margin: 10px; padding:10px; cursor: pointer;  border:none; border-style:none; display:inline-block; border-radius: 3px;"  ><i class="fa fa-shopping-cart">&nbsp;</i>Checkout </button></li>
  
</ul>
</nav>
<nav>
<ul style="background-color:#152238;margin-left: -8px; margin-right: -6px;" >
    <li><span style="font-size:25px;cursor:pointer; color:rgba(250, 250, 244, 0.664); "     onclick="openNav()" >&#9776; </span></li>
    <li><a href="#contact" class="ex2" style = "text-decoration: none; margin-left: 10px; transition: 3s; ">Store Locator</a></li>
    <li><a href="#about" class="ex2" style = "text-decoration: none; padding-left:48px; transition: 3s;">Sell on Cy+</a></li>
    <form class="example" action="/action_page.php" style="margin:auto;max-width:700px">
    
        <input type="text"  name="search2" placeholder="Search for products,brands and categories..." style="border-radius: 3px; font-family: 'Times New Roman', Times, serif;">
        <button type="submit" style="border-radius: 3px;"><i class="fa fa-search"></i></button>
       
      </form>
      <li><a href="#contact" class="ex2" style = "text-decoration: none; width:85% ; padding-left:35px; transition: 3s;">Phones and Acessories</a></li>
    <li><a href="#about" class="ex2" style = "text-decoration: none; width:110%; transition: 3s; margin-left: 40px;">Other categories</a></li>
</ul>
</nav>
</div>

<div style = "margin-left:410px">  
       <ul><li> <a href = "ecommerceuser.php" style="font-size: 12px;  color: rgb(2, 2, 2);font-weight: bolder;" >Home </a> 
        <li><p class="code">›</p>
        <li><p  class = "set" style="font-size: 12px; color:rgb(250, 163, 1);font-weight: bolder">Account info</p>
        <h2 style = "margin-left:-40px">Account Info</h2>
        
</div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class = "sidefm">
    <div class = "formgroup">
    
    <label class = "labelcolor"> Name: </label>
    <br>
    
    <ul><li><? echo '<div class="echocolor" style="color:white; margin-left:11px">' . $_SESSION['username'] . '</div>'?></li>
    <li><button class = "buttonmove"> Edit</button></li>
    
</ul>

<hr class = "line">
</div>
    
    <div class = "formgroup">
    <label class = "labelcolor"> Email:</label>
    <br>
    <ul><li><? echo '<div class="echocolor" style="color:white; margin-left:11px">' . $_SESSION['email'] . '</div>'?></li>
    <li><button class = "buttonmove"> Edit</button></li>
</ul>
    <hr class = "line">   
</div>
<div class = "formgroup">
    <label class = "labelcolor"> Password:</label>
    <br>
    
    <ul><li> <input type = "password" style ="background-color:#23395d; color:white; border-style:none; margin-left:11px;" name = "email" readonly value = "<?php echo $_SESSION['password'];  ?>"></li>
    <li><button class = "buttonmove"> Edit</button></li>
</ul>
<hr class = "line">
</div>
<div class = "formgroup">
    <label class = "labelcolor"> phonenumber:</label>
    <br>
    <ul><li><? echo '<div class="echocolor" style="color:white; margin-left:11px">' . $_SESSION['phonenumber'] . '</div>'?></li>
    <li><button class = "buttonmove"> Edit</button></li>
</ul>
<hr class = "line">
</div>
</form>
        
</body>
</head>
</html>