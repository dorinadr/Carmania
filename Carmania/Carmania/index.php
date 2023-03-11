<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
  <meta name = "viewport" content="with-device-width, initial-SCALE=1.0 ">
  <title> CarMania</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,
600&family=Roboto&family=Roboto+Mono:ital,wght@0,400;1,200&display=swap"
rel="stylesheet">
<link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>
  <body>
    <section class="header">
      <div class="full-page">
        <div class="navbar">
          <div>
      <nav>
         <a href="index.php"><img src="css/images/logo.png"></a>
         <div class="nav-links" id="navLinks">
           <i class="fa fa-times" onclick="hideMenu()"></i>
           <ul id="MenuItems">
             <li><a href="index.php">HOME</a></li>
             <li><a href="cars.php">CARS</a></li>
             <li><a href="car_parts.php">CAR PARTS</a></li>
             <li><a href="about.php">ABOUT</a></li>
             <li><a href="cart.php">CART</a></li>
          <li style="color: ghostwhite;"> Welcome, <?php echo $user_data['user_name']; ?></li>
            <li><a href="logout.php">LOGOUT</a></li>
             

          </ul>
        </nav>

        </div>
   </div>
       
   <div class="text-box">
     <h1>CarMania</h1>
     <p></p>
     <a href="" class="hero-btn"> Visit us to know more</a>

    </section>
<!--last model ----->
<section class="model">
  <h1>THE LATEST CARS 2022 MODEL</h1>
  <div class="row">
    <div class="model-col">
      <h3> All Cars</h3>
    </div>
      <div class="model-col">
        <h3>Car Parts</h3>
      </div>
      <div class="model-col">
        <h3>Last Models</h3>
      </div>
</section>

<!---Best Sellers--->
<section class="seller">
  <h1> Best Sellers </h1>

  <div class="row">
    <div class="seller-col">
      <img src="css/images/car1.jpg">
      <div class="layer">
        <h3>MERCEDES</h3>
      </div>
    </div>
    <div class="seller-col">
      <img src="css/images/car2.jpg">
      <div class="layer">
        <h3>RANGE OVER</h3>
      </div>
    </div>
    <div class="seller-col">
      <img src="css/images/car3.jpg">
      <div class="layer">
        <h3>BMW</h3>
      </div>
    </div>
</section>

<!---Car Parts---->

<section class="carParts">
  <h1>Car Parts </h1>


   <div class="row">
     <div class="carParts-col">
       <img src="css/images/parts1.jpg">
       <h3> Engine </h3>
       <p> description for parts</p>
     </div>
     <div class="carParts-col">
       <img src="css/images/parts2.jpg">
       <h3>Car Tires  </h3>
       <p> description for parts</p>
     </div>
     <div class="carParts-col">
       <img src="css/images/parts3.jpg">
       <h3> Precision Turbo  </h3>
       <p> description for parts</p>
     </div>
   </div>

</section>


<!--footer---->
<footer>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Company</h4>
          <ul>
            <li><a href="#"></a></li>
                   <li><a href="">about us</a></li>
                   <li><a href="">contact us</a></li>
                   <li><a href="#">privacy policy</a></li>

          </ul>
        </div>
        <div class="footer-col">
          <h4>Get Help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">order status</a></li>
            <li><a href="#">payment options</li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Online shop</h4>
          <ul>
            <li><a href="#"></a></li>
          </ul>
        </div>
      <div class="footer-col">
        <h4>follow us</h4>
        <div class="social-links">
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-tiktok"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>


    </body>
    </html>























