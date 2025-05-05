<?php
include 'db.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Menu</title>
<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.css">
<link href="css/menu.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
<div class="container-fluid">
 
    <div id="logos">
      <div class="row">
        <div id="logos-left" class="col-lg-8">
          <a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="https://www.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
          <a href="https://web.whatsapp.com"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>
      
        <div id="logos-right" class="col-lg-4">
      <i class="fa fa-user-circle" aria-hidden="true"></i>
      <span style="font-size:14px;"><?php 
	  session_start();
	  if (isset ($_SESSION["user"])){
	  
	  $user = $_SESSION["user"];
	  echo "Hi, ";
	  echo"$user"; ?>
      
	  <a href="logout.php" style="margin-left:4%; color:orange; font-size:14px;">Logout</a>
	  <?php
      }
	  
	  else {echo "<a href='login.html' style='color:#a7a7a7'>You are not logged in.</a>";}
	  
	    ?></span>

      </div>
    </div>
    </div>
    <div class="row" id="main-menu">
      <div class="col-lg-4" id="site-logo">
        <img src="images/log.png" style="width: 110px; margin-top:-15px; margin-left: 40px " >
      </div>
     
      <div class="col-lg-7" id="menu-items">
        <li><a href="Index.php">HOME</a></li>
        <li><a href="About Us.html">ABOUT US</a></li>
        <li><a href="Event.html">EVENTS</a></li>
        <li><a href="Menu.php">SERVICES</a></li>
        <li><a href="Contact.html">CONTACT</a></li>
        <li style="border-right:none"><a href="Login.html">MEMBERSHIP</a></li>
        <i class="fa fa-bars fa-10x" aria-hidden="true"></i>
      </div>
    </div>
    <span style="float:right; margin-right:2%;">
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
     <a href="Cart.php" style="color:orange;">Cart</a></span>
    <div class="row" id="omenu">
      
      <div class="col">
      
      <center><h3>Our Services</h3></center>
      
      </div>
      
    </div>

    <div class="row" id="menu">
      
      <div class="col-2"></div>
      <div class="col-8" id="items">
       
        <div class="row">
           <?php

				$query = "SELECT * FROM products";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
          <div class="col-4" style="padding-bottom:8%">
            <form method="POST" action="Cart.php?action=add&ID=<?php echo $row["ID"]; ?>" enctype="multipart/form-data">
            <center>
            <img src="images/<?php echo $row["Image"]; ?>">
            <a id="name" href=""><?php echo $row["Name"]; ?></a>
            <br>
              <span>Rs. <?php echo $row["Price"]; ?></span>
              <hr>
              <input class="number-box" name="quantity" type="number" value="1" min="1">
              <input type="hidden" name="hname" value="<?php echo $row["Name"]; ?>">
              <input type="hidden" name="hprice" value="<?php echo $row["Price"]; ?>">
              <input type="hidden" name="himg" value="<?php echo $row["Image"]; ?>">
              <button id="button-clr1" name="atc" type="submit" class="btn btn-success">Add to Cart</button>
              <hr>
            </center>
            </form>
          </div> 
           <?php
					}
				}
			?>
        </div>
       
      </div>
      <div class="col-2"></div>
    </div>
    
    
    <div class="row" id="information">
      <div id="info-block" class="col-md-4">
        <h5>Final Year Project</h5>
        <br>
        <p>UMT
           <br>
           +123456789
           <br>
           f2018100000@umt.edu.pk</p>
           <a href="https://www.facebook.com"><i id="fb" class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="https://www.twitter.com"><i id="twitter" class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="https://www.google.com"><i id="google" class="fa fa-google-plus" aria-hidden="true"></i></a>
          <a href="https://web.whatsapp.com"><i id="whatsapp" class="fa fa-whatsapp" aria-hidden="true"></i></a>
      </div>
      <div id="photos-block" class="col-md-4">
         <h5>Photos</h5>
         <div class="row">
           <div id="photos-images1" class="col">
             <img src="images/g7.jpg">
             <img src="images/g8.jpg">
             <img src="images/g9.jpg">
           </div>
         </div>
         
         <div class="row">
           <div id="photos-images2" class="col">
             <img src="images/g2.jpg">
             <img src="images/g4.jpg">
             <img src="images/g6.jpg">
           </div>
         </div>
      </div>
         
      <div id="news-block" class="col-md-4">
         <h5>Latest News</h5>
         <br>
         <p><a href="#">The Making of a Legacy: First Steps in the Trump Era</a>
         <br>
         08 October 2018
         <br><br>
         <a href="#">How Marching for Science Risks Politicizing It</a>
         <br>
         08 October 2018
         <br><br>
         <a href="#">After Setbacks and Suits, Miami to Open Science Museum</a>
         <br>
         08 October 2018
         </p>
         <br><br>
      </div>
      
    </div>
    
    <div id="footer" class="row">
      <div class="col">
        <center>
       <br><br>
        <p>Final Year Project
        <br>
        <br><br>
        </p>
        </center>
      </div>
    
    </div>
    
    
  
</div>
</body>
</html>
