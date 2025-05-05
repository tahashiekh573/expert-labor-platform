<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link href="css/index.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
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
       
        <li><a href="About Us.html">ABOUT US</a>
       </li>
       
        
        <li><a href="Event.html">BLOGS</a></li>
        <li><a href="Menu.php">SERVICES</a></li>
        <li><a href="Contact.html">CONTACT</a></li>
        <li style="border-right:none"><a href="Login.html">MEMBERSHIP</a></li>
        <i class="fa fa-bars fa-10x" aria-hidden="true"></i>
      </div>
    </div>
    
    <div id="message">
      <br><br>
    
      <center><div class="col" id="feedback">We Value Your Feedback</div></center>
      <br>
    
      <div class="row">
        <div class="col-md-2"></div>
          <div class="col-md-8" id="message-box">
            <br><br>
            <form method="post" action="feedback.php">
              
            <div class="row" id="boxes">
            
              <div class="col-md-4">
                <label id="label-name">Name</label><span class="star">*</span>
                <input type="text" name="uname" class="form-control">
              </div>
              
              <div class="col-md-4">
                <label id="label-message">Message</label><span class="star">*</span>
                <input type="text" name="msg" class="form-control">
              </div>
      
              <div class="col-md-4">
                <br>
                <button type="submit" class="btn btn-danger" id="message-button" style="width:80%">Send</button>
      
              </div>
              
           </div> </form>
     
          </div>
        <div class="col-md-2"></div>
      </div>
      
      <div class="row" id="about-restaurant">
     
      <div class="col-md-2"></div>
      <div class="col-md-2">
      <!-- <img  src="images/shop.png">
      <div class="about-figure">
      <span>6</span>
      <br>Restaurant
      </div> -->
      </div>
      <div class="col-md-2" style="margin-left:-80px">
      <img src="images/client.png" style="width:100px; height:100px" >
      <div class="about-figure">
      <span>1400</span>
      <br>Customers
      </div>
      </div>
      <div class="col-md-2">
      <img  src="images/winn.png" style="width:100px; height:100px " >
      <div class="about-figure">
      <span>13</span>
      <br>Awards
      </div>
      </div>
      <div class="col-md-2">
      <img  src="images/ss.png"style="width:100px; height:100px" >
      <div class="about-figure">
      <span>10</span>
      <br>Services
      </div>
      </div>
      <div class="col-md-2"></div>
      </div>
    </div>
  
    <div id="partners">
    <div id="details">
    <br>
      <center>
      <h2 style="font-size:40px">Come & Experience Our Best of World Class Services</h2><br>
      <h3>What We Do?</h3>
      <p><br>We aim to make home maintenance and handyman services more accessible,<br> efficient, and easy-on-the-pocket for our customers.
      Our mission is to make the booking <br>of plumbing,  electrician, cleaning, carpentry, and fixing services risk-free and guaranteed. </p>
    
      </center>
      
      <!-- <div class="row">
        <div class="col">
            <div class="partners-logo" style="margin-left:6%;">
              <img src="images/top-restaurant1.png">
            </div>
            
            <div class="partners-logo">
              <img src="images/top-restaurant2.png">
            </div>
            
            <div class="partners-logo">
              <img src="images/top-restaurant3.png">
            </div>
            
            <div class="partners-logo">
              <img src="images/top-restaurant4.png">
            </div>
            
            <div class="partners-logo">
              <img src="images/top-restaurant5.png">
            </div>
            
            <div class="partners-logo">
              <img src="images/top-restaurant6.png">
            </div> -->
          <br><br>
        </div>
      </div>
    </div>
  
  </div>
    
    <div id="services">
      <div id="services-box">
        <div id="services-text">
          <center><h2 style="font-size:40px">Come & Experience Our Best of World Class Services</h2>
          <h3>Our Services</h3>
         
          <p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit <br>
          sed do eiusmod tempor incididunt ut labore.</p>
          </center>
          
          <div id="deals" class="row">
             <div class="col-md-4">
             <center>
               <img src="images/plumber.png" style="width:250px;height:200px">
               <h4>Plumber</h4>
               <p>Lorem Ipsum is simply dummy text of the<br> printing and typesetting industry</p>
               </center>
             </div>
            
             <div class="col-md-4">
             <center>
             <img src="images/elec.png" style="width:250px;height:200px">
             <h4>Electrician</h4>
             <p>Lorem Ipsum is simply dummy text of the<br> printing and typesetting industry</p>
             </center>
             </div>
           
             <div class="col-md-4">
             <center>
             <img src="images/paint.png" style="width:250px;height:200px">
             <h4>Painter</h4>
             <p>Lorem Ipsum is simply dummy text of the<br> printing and typesetting industry</p>
             </center>
             </div>
             
          </div>
        </div>
       
    </div>
    </div>
    
    <div id="offers">
      <center>
      <h2 style="font-size:40px">Home Maintenance made Easy !!</h2>
      <h3 style="font-size:30px">We offer this today</h3>
      <p><br>Connecting customers and technicians for <br> quick, safe and affordable bookings</p>
      </center>
      
      <div class="row">
        <div class="col-1"></div>
        <div id="deal-block" class="col-5">
          <div class="row">
            
            <div class="col-4">
              <img src="images/housepaint.jpg" style="width:170px; height:170px">
              <a href="">House Paint</a><br>
              <span>Rs. 2000</span>
             
            </div>
            <div class="col-4">
              <img src="images/door polish.png" style="width:170px ;height:170px">
              <a href="">Door Polish</a><br>
              <span>Rs. 1500</span>
            
            </div>
            <div class="col-4">
               <img src="images/tablepol.jpg" style="width: 170px;height:170px">
               <a href="">Table Polish</a><br>               <span>Rs. 350</span>
              
            </div>
            
          </div>
        </div>
        <div class="col-5">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/door.jpg" class="d-block w-100"  alt="First slide" >
    </div>
    <div class="carousel-item">
      <img src="images/sofa.jpeg" class="d-block w-100" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="images/car.png" class="d-block w-100" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
        <div class="col-1"></div>
      </div>
    </div>
    
    <div class="row" id="information">
      <div id="info-block" class="col-md-4">
        <h5>Info Home Clean</h5>
        <br>
     <p>Punjab University
           <br>
           +123456789
           <br>
           </p>
           <a href="https://www.facebook.com"><i id="fb" class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="https://www.twitter.com"><i id="twitter" class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="https://www.google.com"><i id="google" class="fa fa-google-plus" aria-hidden="true"></i></a>
          <a href="https://web.whatsapp.com"><i id="whatsapp" class="fa fa-whatsapp" aria-hidden="true"></i></a>
      </div>
      <div id="photos-block" class="col-md-4">
         <h5>Photos</h5>
         <div class="row">
           <div id="photos-images1" class="col">
             <img src="images/car.png" style="width: 120px ; height:120px">
             <img src="images/pic1.jpg" style="width: 120px ; height:120px">
             <img src="images/door.jpg" style="width: 120px ; height:120px">
           </div>
         </div>
         
         <div class="row">
           <div id="photos-images2" class="col">
             <img src="images/pic2.jpg" style="width: 120px ; height:120px">
             <img src="images/tablepol.jpg" style="width: 120px ; height:120px">
             <img src="images/service.jpg" style="width: 120px ; height:120px">
           </div>
         </div>
      </div>
         
      <div id="news-block" class="col-md-4">
         <h5>Latest News</h5>
         <br>
         <p><a href="#">The Making of a Legacy: First Steps in the Trump Era</a>
         <br>
         04 May 2025
         <br><br>
         <a href="#">How Marching for Science Risks Politicizing It</a>
         <br>
         04 May 2025
         <br><br>
         <a href="#">After Setbacks and Suits, Miami to Open Science Museum</a>
         <br>
         04 May 2025
         </p>
         
      </div>
      
    </div>
    
    <div id="footer" class="row" style="height:100px">
      <div class="col">
        <center>
       <br><br>
       <p>Final Year Project
        
       
        </p>
        </center>
      </div>
    
    </div>
    
    
  
</div>
</body>

</html>
