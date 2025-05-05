<?php
	
    include 'db.php';
	session_start();
	if(isset($_GET['ID']))
	{
		$id=$_GET['ID'];
		$move="insert into cart (Select *from products where ID='$id')";
	mysqli_query($conn, $move);
	}
    
	
	
	
	$select = "Select *from cart";
	$result=mysqli_query ($conn,$select);
	
	if(mysqli_num_rows($result) == 0)
	{
		   $message = "Cart is empty";
            echo "<script type='text/javascript'>alert('$message');
			window.location='Menu.php'
			</script>";
					   
	}

	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cart</title>
<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.css">
<link href="css/cart.css" rel="stylesheet" type="text/css">
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
	  
	  if (isset ($_SESSION["user"])){
	  
	  $user = $_SESSION["user"];
	  echo "Hi, ";
	  echo"$user"; ?>
      
	  <a href="logout.php" style="margin-left:4%; color:orange; font-size:14px;">Logout</a>
	  <?php
      }
	  
	  else {echo "You are not logged in.";}
	  
	    ?></span>

   </div>
    </div>
    </div>
    <div class="row" id="main-menu">
      <div class="col-lg-4" id="site-logo">
        <img src="images/logo6.png" >
      </div>
     
      <div class="col-lg-7" id="menu-items">
        <li><a href="Index.php">HOME</a></li>
        <li><a href="About us.html">ABOUT US</a></li>
        <li><a href="Event.html">EVENTS</a></li>
        <li><a href="Menu.php">MENU</a></li>
        <li><a href="Contact.html">CONTACT</a></li>
        <li style="border-right:none"><a href="Membership.html">MEMBERSHIP</a></li>
        <i class="fa fa-bars fa-10x" aria-hidden="true"></i>
      </div>
    </div>
  <center>
    <table class="table table-bordered" style="margin-top: 10%; width: 80%;">
    <thead>
      <tr>
        <th>Product Detail</th>
        <th>Quantity</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
     
      <?php while($row=mysqli_fetch_assoc($result))
	  {
      ?>
       <tr>
        <td style="width:50%">
        
        <span><img src="images/<?php echo $row['Image'] ?>" style="width:15%"></span>
            <span style="font-weight:900; font-size: 17px;"><?php echo $row['Name']?></span>
         
         </td>
        <td>
            <input type="number" min="1" max="5" value="1" style="width:15%; margin-top:5%">
            <a href="delete.php?ID=<?php echo $row['ID'] ?>"><i class="fa fa-trash-o" aria-hidden="true" style="color:grey"></i></a>
        </td>
        <td><p style="margin-top:10%"><?php echo $row['Price']?></p></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
   </center>
   
   <center><a href="Menu.php"><button type="button" style="background-color:orange;" class="btn btn-danger">Continue Shopping</button></a>
   <a href="checkout.php"><button type="button" style="background-color:orange;" class="btn btn-danger">Checkout</button></a>
   </center>
   <br><br>
    <div class="row" id="information">
      <div id="info-block" class="col-md-4">
        <h5>Info What's Cooking</h5>
        <br>
        <p>262 Milacina Mrest Street Behansed.
           <br>
           +84 3333 6789.
           <br>
           support@yoursiteurl.com</p>
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
        <p>Copyright © 2019 All Rights Reserved.
        <br>
        Powered by: <span id="passionates">The Passionates</span>
        <br><br>
        </p>
        </center>
      </div>
    
    </div>
</div>

</body>
</html>
