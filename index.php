<?php
/* Author: Cozy 👽 https://github.com/ItsCosmas */

  include_once('server/server.php');
	//include_once('core/functions/productPost.php');
	//$productPost  = new Main;
	//$check = new Main;
  //$menProducts = $productPost->getAllMenProducts();
  //$womenProducts = $productPost->getAllWomenProducts();
  //$childrenProducts = $productPost->getAllChildrenProducts();
 // $check_login = $check->logged_in();
  //$itemsInCart = $productPost->getCartCount();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>afyaCentre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/site images/icon.jpg" type="image/x-icon">

<link rel="stylesheet" href="extensions/animate.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">    
    <!--<link rel="stylesheet" type="text/css" media="screen" href="CSS/style.css" />-->
    <!--<link rel="stylesheet" type="text/css" media="screen" href="CSS/bootstrap.min.css" />-->
    <!--<script src="js/bootstrap/bootstrap.min.js"></script>-->
    <!--<script src="js/bootstrap/popper.min.js"></script>-->
    <!--<script src="js/jquery/jquery-2.2.4.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!--<script src="extensions/jquer.js"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="extensions/assist.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<style>
  /* Styling the Carousel Text*/ 
.carousel-content-text, .carousel-header-text{
    color: #ffffff !important;
    font-size: 24px;

}
.carousel-header-text{
    text-transform: uppercase !important;
    font-weight: bold;    
}
.carousel-caption-div{
  background-color:#1a0000;
  opacity:0.7;
}
</style>
</head>
<body>
<div class="pop_timer" style="display:none">jhjrnfdjnjfduf</div>
  

  <?php
   include('header.php')
   ?>
  <!-- Shopping Cart and User Icons from font-awesome -->
  

<!-- End of Navbar -->

<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left pageBelowNav">
<!-- Image Slider -->
<div id="mySlider" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#mySlider" data-slide-to="0" class="active"></li>
    <li data-target="#mySlider" data-slide-to="1"></li>
    <li data-target="#mySlider" data-slide-to="2"></li>
    <li data-target="#mySlider" data-slide-to="3"></li>
    <li data-target="#mySlider" data-slide-to="4"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/marcel.jpg" alt="Beauty Casual Curly" width="1200" height="450">
      <div class="carousel-caption carousel-caption-div">
        <h3 class="carousel-header-text">Afya Centre</h3>
        <p class="carousel-content-text">We care your healthy</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/martha.jpg" alt="Chicago" width="1200" height="450">
      <div class="carousel-caption carousel-caption-div">
        <h3 class="carousel-header-text" >Afya Centre</h3>
        <p class="carousel-content-text"> your Healthy is our consideration</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/rawpixel-760103.jpg" alt="New York" width="1200" height="450">
      <div class="carousel-caption carousel-caption-div">
        <h3 class="carousel-header-text" >Afya Centre</h3>
        <p class="carousel-content-text">We value you</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/brandon.jpg" alt="adult beautiful lady" width="1200" height="450">
      <div class="carousel-caption carousel-caption-div">
        <h3 class="carousel-header-text" >Afya Centre</h3>
        <p class="carousel-content-text">Wish you quick recovery.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/dominguez.jpg" alt="automobile" width="1200" height="450">
      <div class="carousel-caption carousel-caption-div">
        <h3 class="carousel-header-text">Afya Centre</h3>
        <p class="carousel-content-text">Feel free to inquire about something</p>
      </div>   
    </div>

    
  </div>
  </div>
  <a class="carousel-control-prev" href="#mySlider" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#mySlider" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
</div>



 
  
      
   <!-- <h4 style="margin-left: 7%;margin-top:10px;"><i>Patient</i></h4>-->
     
  <div style=" float: left;margin-left: 4%;margin-top:20px; width:10%;"  class="theHomeDiv">
      
     
      <img src="images/patient.jpg" alt="" width="220" height="220"></a>
      <p class="para"><i>Patient profile </i></p>
      <a  class ="linker" href="login.php">Click here</a>
    </div>


     
    <div style=" float: left;margin-left: 27%;margin-top:20px; width:10%;"  class="theHomeDiv">
      
     
      <img src="images/doc.jpg" alt="" width="220" height="220"></a>
      
      <p class="para"><i>Doctor profile </i></p>
      <a  class ="linker" href="login.php">Click here</a>
    </div>
    <div style=" float: left; margin-left: 28%;margin-top:20px; width:20%; "  class="theHomeDiv">
      
     
      <img src="images/adm3.jpg" alt="" width="220" height="220"></a>

      <p class="para"><i>Admin profile </i></p>
      <a  class ="linker" href="admin/admin.php">Click here</a>
    
      
    </div>



	<!--foote section-->
  <?php
include('footer.php');
?>

</body>


</html> 