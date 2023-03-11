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
    <title>About Us</title>
    <link rel='icon' href="img/logo.png">

    <link rel="stylesheet" href="css/style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="script.js"></script>
</head>
<body>

    <div class="header">
        <div class="container">
         <div class="navbar">
             <div class="logo">
                 <a href="index.php"><img src="img/logo.png" width="125px" style="border-radius: 10px;"></a>
             </div>
             <nav>
                 <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="cars.php">Cars</a></li>
                    <li><a href="car_parts.php">Car Parts</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="Cart.php">Cart</a><img src="img/cart.png" width="30px" height="30px"></a></li>
                <li style="color: ghostwhite;"> Welcome, <?php echo $user_data['user_name']; ?></li>
            <li><a href="logout.php">LOGOUT</a></li>
                 </ul>
             </nav>

        </div>



        <div>



               <h2 class="title">About Us</h2>
                <div class="col-2">
                     <h1>Car Mania</h1>
                     <p>Best Quality Cars and Car Parts<br> For Car Enthusiasts<br> </p>
                     <p>Car Mania was started in 2022 to meet the on going inceasesd demand of cars and car parts. Our team decided to launch an online platform where byers would be able to get the top rated Cars through a reliable online store  </p>
                </div>

                        <div class="contact-section">

                            <div class="border"></div>
                            <h2 class="title">Contact Us</h2>
                            <form class="contact-form" action="index.html" method="post">
                              <input type="text" class="contact-form-text" placeholder="Your name">
                              <input type="email" class="contact-form-text" placeholder="Your email">
                              <input type="text" class="contact-form-text" placeholder="Your phone">
                              <textarea class="contact-form-text" placeholder="Your message"></textarea>
                              <input type="submit" class="contact-form-btn" value="Send">
                            </form>
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

</body>
</html>
