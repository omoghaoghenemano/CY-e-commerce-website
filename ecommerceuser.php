<?php

include('config.php');

session_start();

if(!isset($_SESSION['username']))
{
 header("location:login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
    body{
        background-color: #B3C7D6FF;
        font-family:'Times New Roman', Times, serif;
        

    }
    .dropdown {
  float: left;
  overflow: hidden;
}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 679px;
  position: relative;
  
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 10%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.prev{
  cursor: pointer;
  position:absolute;
  
  width: 40px;
  height: 60px;
  padding: 16px;
  margin-top: -185px;
  margin-left: -160px;
  color: rgb(168, 163, 163);
  font-weight:none;
  font-size: 60px;
  background-position: left top;
  transition: 3s ease-out;
  border-radius: 85px;
  user-select:none;

}

.next{
  cursor: pointer;
  position:absolute;
  width: 40px;
  height: 60px;
  padding: 16px;
  margin-top: -185px;
  margin-right: -480px;
  color:rgb(168, 163, 163);
  background-position: left top;
  
 
  font-weight:none;
  font-size: 60px;
  transition: 3s ease;

  border:1px;
  border-radius: 85px;
  user-select:none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  
  
}

/* On hover, add a grey background color */
.prev:hover, .next:hover {
  background-color: white;
  color: #ed017f;
  opacity: 0.2;
}
/* The dots/bullets/indicators */
.dot {
  height: -10px;
  width: -10px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: white;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
.mySlides1, .mySlides2 {display: none}
img {vertical-align: middle;}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
  .navbar{width: 300px}
}
.sideform{
    height:360px;
    width: 300px;
    color:rgb(114, 113, 112);
    overflow-block:inherit;
    overflow-anchor:unset;
    background-color: whitesmoke;


}
.chat{
    position: absolute;
    z-index: 1;
    left: 0px;
    right: 0px;
    bottom: 1px;
    transition: opacity 150ms cubic-bezier(0.33, 0, 0.67, 1) 50ms;
    display: flex;
    width: 32px;
    height: 32px;
    -moz-box-align: center;
    align-items: center;
    -moz-box-pack: center;
    justify-content: center;
    opacity: 0;
}
.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color:white;
}
.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:active{
    color: rgb(209, 100, 191);
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 30px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: white;
}

.dropdown:hover .dropdown-content {
  display: block;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

li {
   float:left;
  
  
}
a.n1:hover,a.n1:active{text-decoration: underline; co}
a.ex1:hover, a.ex1:active {color: whitesmoke}
a.ex2:hover, a.ex2:active {color: black;}

nav a{
    width: 120px;
    display: block;
    padding: 40px; 

}
a:link{text-decoration: none;}
a:hover{text-decoration: underline;}
a.num1:hover{text-decoration: underline;}

form.example input[type=text] {/*/ for input/*/
  padding: 7px;
  font-size: 17px;
  border: 1px solid grey;
  border-radius:   10px 3px 2px;
  float: left;
  width: 80%;
  
  background: #f1f1f1;
}
 a{
     color:#9b9b9b;
 }
form.example button { /*/ for button/*/
  float: left;
  width: 7%;
  padding: 7px;
  height: 36px;
  ;
  background-color: rgb(250, 163, 1);
  color: white;
  font-size: 17px;
  border-radius:  2px 10px 5px 0px;
  border: 1px  grey;
      
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #5c755c;
}
li a {
  display: block;
  padding: 8px;
  
  font-size: 16px;
  color:rgb(247, 244, 244);
}
.drink{
    height: 1px;
}

</style>
</head>
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
      
      
      
    <a href="#" style="font-size:12px;"><i class="fa fa-user icon" style="color:#3F5B66; font-size: 16px;"> &nbsp;</i>Account</a>
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
<div class="slideshow-container" style="margin-left: 169px;  ">


    
  <div class="mySlides1">
    <img src="phone.jpeg" style="width:199.9% ;height: 250px;margin-left:-180px; background-color:black;">
  </div>

  <div class="mySlides1">
    <img src="estate.jpeg" style="width:199.9% ;height: 250px;margin-left:-180px; background-color:black;">
  </div>

  <div class="mySlides1">
    <img src="teams.jpeg" style="width:199.9%;height: 250px; margin-left:-180px;background-color:black;">
  </div>

  <a class="prev" style="text-decoration: none;" onclick="plusSlides(-1, 0)">&#x2039;</a>
  <a class="next" style="text-decoration: none;" onclick="plusSlides(1, 0)">&#x203A;</a>
</div>

</nav>
<nav style="background-color: whitesmoke; margin-top: 20px; margin-left: -10px;width: 101.2%;">
  <ul>
    <li><p style="margin-left: 230px;" >You are on Preno.com. Check out our amazing offers and awesome product with fast local delivery.</p></li>
    <li><a href="" style="color: blue; width: 100%; margin-top: 9px;"> Click here for more.</a></li>
  </ul>
  
</nav>
<nav style="background-color:whitesmoke; margin-top: -60px;">
<div class="sideform" style="margin-top: 80px; margin-left: -10px;">
  <ul>
    <li><h2 style="margin-left: 30px;font-size: 18px;color: black;">Shop by Categories</h2></li>
  </ul>
  <div>
    <li><a href="" style="color: black;  font-size: 13px; text-decoration: none; margin-left: 15px"><img src="hp.jpg" style =" height: 80px;"> Computer & Accessories </a>
      <li><a href="" style="color: black; font-size: 13px; text-decoration: none; "><img src="toys.jpg" style =" height: 90px; margin-left: -13px;"> Toys & Games</a>
        
  </div>
  
  <div>
    <li><a href=""  style="color: black; font-size: 13px; text-decoration: none; margin-left: 15px"><img src="xbox.jpg" style =" height: 80px;"> Video Games</a>
      <li><a href=""  style="color: black; font-size: 13px; text-decoration: none; "><img src="books.jpg" style ="height: 80px;">Books</a>
       <br> <br>
  </div>
  <a href="" class="num1" style=" color:#152238;  ">  Shop Now  </a>



</div>
<div class="sideform" style="margin-left: 340px; margin-top: -360px;">
  <ul>
    <li><h2 style="margin-left: 30px;font-size: 18px;color: black;">Explore Cyprus Homes</h2></li>
  </ul>
  <li><a href=""  style="color: black; font-size: 13px; text-decoration: none; "><img src="housedesign.jpg" style ="height: 180px; margin-top: -130px; "></a>
    <a href="" class="num1" style=" margin-top: 70px; color:#152238; text-overflow: ellipsis ; ">  Shop Now  </a>
</div> 
<div class="sideform" style="margin-left: 690px; margin-top: -360px;">
  <ul>
    <li><h2 style="margin-left: 30px; font-size: 18px; color: black;">Beauty Picks</h2></li>
  </ul>
    <div>
      
        <li><a href="" style="color: black; font-size: 13px; text-decoration: none; "><img src="makeup.jpg" style =" height: 220px; margin-top: -140px;"> </a>
          <a href="" class="num1" style=" margin-top: 39px; color:#152238; text-overflow: ellipsis ; ">  Shop Now  </a>
    </div>
    

</div>
<div class="sideform" style="margin-left: 1030px; margin-top: -360px;">
  <div class="slideshow-container">
  <ul>
    <li><h2 style="margin-left: 30px; font-size: 18px; color: black;">Men CLoths</h2></li>
    <div class="mySlides fade">
    <a href=""><img src="mens.jpg" style=" height: 220px; margin-left: -30px;"></a>
  </div>
  <div class="mySlides fade">
    <a href=""><img src="blackjeans.jpg" style="height: 220px; margin-left: -30px;"></a>
  </div>
  <div class="mySlides fade">
    <a href=""><img src="sports.jpg" style="height: 220px; margin-left: -30px;"></a>
  </div>
  <div class="mySlides fade">
    <a href=""><img src="casual.jpg" style=" height: 220px; margin-left: -30px;"></a>
  </div>

  </ul>

 
  <a href="" class="num1" style=" margin-top: -30px; color:#152238; text-overflow: ellipsis ; ">  Shop Now  </a>
  
</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


</div>



</nav>
<nav style="margin-top: 1200px; ">
  <ul style="background-color:black; height: 90px; margin-left: -8px;margin-top: -10px; margin-right: -6px; text-align: center;" >
   

    
    <li><a href="#news"  style = "text-decoration: none;  font-size: 12px; margin-left: 20px; " class="ex3">Help  Center</a></li>
    <li><a href="#news"  style = "text-decoration: none;  font-size: 12px; margin-left: 60px; " class="ex3">Contact Us</a></li>
    <li><a href="#news"  style = "text-decoration: none; font-size: 12px; margin-left: 60px;" class="ex3">Terms & Conditions</a></li>
    <li><a href="#news"  style = "text-decoration: none; font-size: 12px; margin-left: 60px;" class="ex3">Become a seller</a></li>
    <li><a href="#news"  style = "text-decoration: none;  font-size: 12px;margin-left: 60px; "class="ex3">Report a Products</a></li>
    <li><a href="#news"  style = "text-decoration: none;  font-size: 12px;margin-left: 90px; " class="ex3">Advertise your Products</a></li>
    <br>
    <br>
    
    <hr style="width: 1000px; margin-right: 260px;">
    
   
    <li><p style=" color: #8c8f8c27; font-size: 12px; text-align: center; margin-left: 600px;">@All Right Reserved</p></li>
    
    
  </ul>
  <script>
    var slideIndex = 0;
    showSlides();
    
    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
	 
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
     

      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
      
    }
	
    </script>
	<script>
	var slideIndexx= [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlidexs(1, 0);
showSlidexs(1, 1);

function plusSlides(n, no) {
  showSlidexs(slideIndexx[no] += n, no);
}

function showSlidexs(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndexx[no] = 1}    
  if (n < 1) {slideIndexx[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndexx[no]-1].style.display = "block";  
}
</script>

  



</body>
</html>