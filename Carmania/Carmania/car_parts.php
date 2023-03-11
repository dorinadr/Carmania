<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Parts</title>
    <link rel='icon' href="img/logo.png">

    <link rel="stylesheet" href="css/styleCP.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="header">
        <div class="container">
         <div class="navbar">
             <div class="logo">
                 <a href="index.html"><img src="img/logo.png" width="125px" style="border-radius: 10px;"></a>
             </div>
             <nav>
                 <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="cars.php">Cars</a></li>
                    <li><a href="car_parts.php">Car Parts</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="Cart.php">Cart&nbsp</a><a href="cart.php"><img src="img/cart.png" width="30px" height="30px"></a></li>
                <li style="color: ghostwhite;"> Welcome, <?php echo $user_data['user_name']; ?></li>
            <li><a href="logout.php">LOGOUT</a></li>
 </ul>
             </nav>
        </div>






        <div class="cart-container" style="float: right; display: none; ">

            <h1><ins><i class='fa fa-shopping-cart'></i> Shopping Cart</ins></h1>
            <div class="row">
                <div>
                    <button id="clear">Clear cart</button>
                     <button>Checkout</button>
                </div>
            </div>
            <div id="products">Loading cart...</div>
            TOTAL: <span id="total"></span>
        </div>








        <div>


  <div class="small-container">



    <h2 class="title">Car Parts</h2>

       <div class="row">
           <div class="col-4">
               <div class="card" name="Head Lights" costs = "100" id="1">
    <img src="img/headlights.jpg" alt="headlights" style="width:100%; height: 180px;" />
    <h4><a href="#">Head Lights</a></h4>
   <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
               </div>
               <p>$100.00</p>
    <input type="text" class="amount" value="1" style="width:10%"/>
    <button class="btn"><i class='fa fa-shopping-cart'></i> Add To Cart</button>
</div>
           </div>



<div class="col-4">
               <div class="card" name="Tail Lights" costs = "100" id="2">
    <img src="img/taillights.jpg" alt="taillights" style="width:100%; height: 180px;" />
    <h4><a href="#">Head Lights</a></h4>
   <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
               </div>
               <p>$100.00</p>
    <input type="text" class="amount" value="1" style="width:10%"/>
    <button class="btn"><i class='fa fa-shopping-cart'></i> Add To Cart</button>
</div>
           </div>

           <div class="col-4">
               <div class="card" name="bumpers" costs = "100" id="3">
    <img src="img/bumpers.jpg" alt="bumpers" style="width:100%; height: 180px;" />
    <h4><a href="#">Bumpers</a></h4>
   <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
               </div>
               <p>$100.00</p>
    <input type="text" class="amount" value="1" style="width:10%"/>
    <button class="btn"><i class='fa fa-shopping-cart'></i> Add To Cart</button>
</div>
           </div>

  <div class="col-4">
               <div class="card" name="hoods" costs = "90" id="4">
    <img src="img/hoods.jpg" alt="hoods" style="width:100%; height: 180px;" />
    <h4><a href="#">hoods</a></h4>
   <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
               </div>
               <p>$90.00</p>
    <input type="text" class="amount" value="1" style="width:10%"/>
    <button class="btn"><i class='fa fa-shopping-cart'></i> Add To Cart</button>
</div>
           </div>

           



         <div class="row">

<div class="col-4">
               <div class="card" name="Seats" costs = "90" id="5">
    <img src="img/Seats.jpg" alt="Seats" style="width:100%; height: 180px;" />
    <h4><a href="#">Seats</a></h4>
   <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
               </div>
               <p>$90.00</p>
    <input type="text" class="amount" value="1" style="width:10%"/>
    <button class="btn"><i class='fa fa-shopping-cart'></i> Add To Cart</button>
</div>
           </div>


<div class="col-4">
               <div class="card" name="Seats" costs = "90" id="6">
    <img src="img/Seats.jpg" alt="Seats" style="width:100%; height: 180px;" />
    <h4><a href="#">Seats</a></h4>
   <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
               </div>
               <p>$90.00</p>
    <input type="text" class="amount" value="1" style="width:10%"/>
    <button class="btn"><i class='fa fa-shopping-cart'></i> Add To Cart</button>
</div>
           </div>

<div class="col-4">
               <div class="card" name="Steerings" costs = "90" id="7">
    <img src="img/Steerings.jpg" alt="Steerings" style="width:100%; height: 180px;" />
    <h4><a href="#">Seats</a></h4>
   <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
               </div>
               <p>$90.00</p>
    <input type="text" class="amount" value="1" style="width:10%"/>
    <button class="btn"><i class='fa fa-shopping-cart'></i> Add To Cart</button>
</div>
           </div>


<div class="col-4">
               <div class="card" name="Batteries" costs = "90" id="8">
    <img src="img/battery.jpg" alt="Batteries" style="width:100%; height: 180px;" />
    <h4><a href="#">Batteries</a></h4>
   <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
               </div>
               <p>$90.00</p>
    <input type="text" class="amount" value="1" style="width:10%"/>
    <button class="btn"><i class='fa fa-shopping-cart'></i> Add To Cart</button>
</div>
           </div>



        <div class="col-4">
               <div class="card" name="Engines" costs = "90" id="9">
    <img src="img/engine.jpg" alt="Engines" style="width:100%; height: 180px;" />
    <h4><a href="#">Engines</a></h4>
   <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
               </div>
               <p>$100.00</p>
    <input type="text" class="amount" value="1" style="width:10%"/>
    <button class="btn"><i class='fa fa-shopping-cart'></i> Add To Cart</button>
</div>
           </div>




<div class="col-4">
               <div class="card" name="Stereo" costs = "100" id="10">
    <img src="img/stereo.jpg" alt="Stereo" style="width:100%; height: 180px;" />
    <h4><a href="#">Stereo</a></h4>
   <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
               </div>
               <p>$100.00</p>
    <input type="text" class="amount" value="1" style="width:10%"/>
    <button class="btn"><i class='fa fa-shopping-cart'></i> Add To Cart</button>
</div>
           </div>


<div class="col-4">
               <div class="card" name="Transmission" costs = "110" id="11">
    <img src="img/transmission.jpg" alt="Transmission" style="width:100%; height: 180px;" />
    <h4><a href="#">Transmission</a></h4>
   <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
               </div>
               <p>$110.00</p>
    <input type="text" class="amount" value="1" style="width:10%"/>
    <button class="btn"><i class='fa fa-shopping-cart'></i> Add To Cart</button>
</div>
           </div>

<div class="col-4">
               <div class="card" name="Oils" costs = "75" id="12">
    <img src="img/oils.jpg" alt="Oils" style="width:100%; height: 180px;" />
    <h4><a href="#">Oils</a></h4>
   <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
               </div>
               <p>$75.00</p>
    <input type="text" class="amount" value="1" style="width:10%"/>
    <button class="btn"><i class='fa fa-shopping-cart'></i> Add To Cart</button>
</div>
           </div>

<div class="col-4">
               <div class="card" name="Exhausts" costs = "100" id="13">
    <img src="img/exhaust.jpg" alt="Exhausts" style="width:100%; height: 180px;" />
    <h4><a href="#">Exhausts</a></h4>
   <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
               </div>
               <p>$100.00</p>
    <input type="text" class="amount" value="1" style="width:10%"/>
    <button class="btn"><i class='fa fa-shopping-cart'></i> Add To Cart</button>
</div>
           </div>

         
       </div>
   </div>
        </div>


       <!--------------- footer ------------------>
        <section class="footer">

            <ul class="list">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Cart</a>
                </li>
                <li>
                    <a href="#">Terms</a>
                </li>
                <li>
                    <a href="#">Privacy Policy</a>
                </li>
            </ul>
            <p class="copyright">
                Car Mania @ 2021
            </p>


       </section>
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
