<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>
<!DOCTYPE html>

<html>
	
	<head>
	<title> CarMania</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style2.css">
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
<style type="text/css">
    body{
  background-image: url("css/images/cart1.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
}
button {
  border: none;
  padding: 10px;
  color: ghostwhite;
  background-color: rgba(0, 0, 0, 0.8);
  border-radius: 30px 30px 30px 30px;
  text-align: center;
  font-size: 15px;
}
button:hover{
    text-decoration: underline;
    background-color: rgba(19, 165, 235, 0.5);
    transition: .3s;
}
.cart-container {
  padding: 3%;
 width: 25%;
  color: #e3e3e3;
  border-radius: 30px 30px 30px 30px;
  background-color: rgba(0, 0, 0, 0.5);
  box-shadow: 0 0 50px #91231c;
}
</style>
<body>

    <nav>
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


<center>
        <div class="cart-container" style="float: none; text-align: center; font-size: 90%;">

            <h1><ins><i class='fa fa-shopping-cart'></i> Shopping Cart</ins></h1>
            <div class="row">
                <div>
                    <button id="clear">Clear cart</button>
                     <button>Checkout</button>
                </div>
            </div>
            <div id="products">Loading cart...</div>
            <br>
            <hr>
            <span style=" font-size: 300%;">TOTAL:</span> <span id="total" style=" font-size: 300%;"></span>
        </div>
      </center>
  









      <script type="text/template" id="cartT">
  <% _.each(items, function (item) { %> <div class = "panel"> <h3> <%= item.name %> </h3>  <span class="label">
<%= item.amount %><% if(item.amount > 1)
{%>
<%}%> Quantity <%= item.cost %>$</span > </div>
<% }); %>
</script>
  


<script src='https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js'></script>

<script  src="script/scriptcart.js"></script>
      


</body>

</html>