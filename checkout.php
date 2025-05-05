<?php
include('db.php');
session_start();
if(isset($_SESSION['user'])){
$n=$_SESSION['user'];
$total = "0";
$edit="select * from user WHERE FirstName='$n'";
$result=mysqli_query($conn, $edit);

$row=mysqli_fetch_assoc($result);
$FirstName=$row['FirstName'];
$Email=$row['Email'];
}
else
{
	header('location:Login.html');}

$select = "Select *from cart";
	$result=mysqli_query ($conn,$select);
	
$r=mysqli_query($conn,"SELECT SUM(Price) FROM cart;");
$s=mysqli_fetch_assoc($r);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Checkout</title>
<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.css">
<link href="css/checkout.css" rel="stylesheet" type="text/css">
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
	  
	  else {echo "<a href='login.html' style='color:#a7a7a7'>You are not logged in.</a>";}
	  
	    ?></span>

      </div>
    </div>
    </div>
    <div class="row" id="main-menu">
      <div class="col-lg-4" id="site-logo">
        <img src="images/logo6.png">
      </div>
     
      <div class="col-lg-7" id="menu-items">
        <li><a href="Index.php">HOME</a></li>
        <li><a href="About us.html">ABOUT US</a></li>
        <li><a href="Event.html">EVENTS</a></li>
        <li><a href="Menu.php">SERVICES</a></li>
        <li><a href="Contact.html">CONTACT</a></li>
        <li style="border-right:none"><a href="Login.html">MEMBERSHIP</a></li>
        <i class="fa fa-bars fa-10x" aria-hidden="true"></i>
      </div>
    </div>
  
  <form method="post" action="Order.php" enctype="multipart/form-data" >
  <div class="row" id="bill">
    <div class="col-6" id="user" >
    
      



<center><h3>User Details</h3></center>
<div class="form-group">
<label>Name</label>
<input class="form-control" type="text" name="name" value="<?php echo $FirstName;?>"></div>


<div class="form-group">
<label>Email Address</label>
<input class="form-control" type="text" name="email" value="<?php echo $Email;?>"></div>


<div class="form-group">
<label>Phone No.</label>
<input class="form-control" type="text" name="phn" value="" placeholder="Enter Phone No*" required></div>


<div class="form-group">
<label>Address</label>
<input class="form-control" type="text" name="address" value="" placeholder="Enter Address*" required></div>




    
    </div>
    
    <div class="col-6" id="items" >
    <center><h3>Service Details</h3>
    <table class="table-bordered" style=" border:2px solid black; text-align:center;width:100%;">
<thead style="padding:2%;"><th style="text-align:center">ID</th><th style="text-align:center">Name</th><th>Quantity</th><th style="text-align:center">Price</th><th style="text-align:center">Total</th></thead>

<?php
 if (!empty($_SESSION['cart'])) {
  foreach ($_SESSION['cart'] as $key => $value) {   
?>

<tr><td><?php echo $value['id'] ?></td>
<td><?php echo $value['name'] ?></td>
<td><?php echo $value['quantity'] ?></td>

<td id="price"><?php echo $value['price'] ?></td>
<td>Rs. <?php echo number_format($value['quantity'] * $value['price']); ?></td>

<input type="hidden" name="iname[]" value="<?php echo $value['name'] ?>">
<input type="hidden" name="iq[]" value="<?php echo $value['quantity'] ?>">
</tr>

<?php
$total = $total + ($value['quantity'] * $value['price']);

?>  




<?php }} ?>
  </table> 
  <div class="col-sm" style="margin-top:5%;">
  <h4>Grand Total: <?php echo"Rs. "; echo number_format($total,2); echo" /-"; ?></h4>
  <input type="hidden" name="total" value="<?php echo $total ?>">
    </div></center> 
    </div>
   <div class="col"><center> <button id="btnn" class="btn-success btn-block" type="submit" value="Save" name="submit" style="width:50%">Place Order.</button> </center></div>
  </div>
 </form> 
 
 
 <div class="row" id="information">
      <div id="info-block" class="col-md-4">
        <h5>Info Home Clean</h5>
        <br>
     <p>UMT
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
         08 August 2022
         <br><br>
         <a href="#">How Marching for Science Risks Politicizing It</a>
         <br>
         08 August 2022
         <br><br>
         <a href="#">After Setbacks and Suits, Miami to Open Science Museum</a>
         <br>
         08 August 2022
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