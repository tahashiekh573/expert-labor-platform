<?php
	
  include 'db.php';
  if(isset($_GET['ID'])){
  $id = $_GET['ID'];
  $s = "select * from products where ID = '$id'";
  $r = mysqli_query($conn, $s);
  $row = mysqli_fetch_assoc($r);
  }

  session_start();
  
  if (isset($_POST['atc'])) {
    if(isset($_SESSION['cart'] ))
    {
      $item_arr_id = array_column($_SESSION['cart'],"id");
      if(!in_array($_GET['ID'] , $item_arr_id))
      {
        $count = count($_SESSION['cart']);
        $item_arr = array (

          'id' => $_GET['ID'],
          'name' => $_POST['hname'],
          'price' => $_POST['hprice'],
          'img' => $row['Image'],
          'quantity' => $_POST['quantity'],
        );
        $_SESSION['cart'][$count] = $item_arr;

      }
      else {
        echo '<script>alert("Item Already Added")</script>';
        echo '<script>window.location="Menu.php"</script>';
      }

    }
    else 
    {
      $item_arr = array (

        'id' => $_GET['ID'],
        'name' => $_POST['hname'],
        'price' => $_POST['hprice'],
        'img' => $row['Image'],
        'quantity' => $_POST['quantity'],
      );
      $_SESSION['cart'][0] = $item_arr;
    }
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
<link href="balance.js">

<script>function add () {
	
	
	var n = document.getElementById("quantity").value;
	
	 var c=document.getElementById('price');
	 
	var total = parseInt(n) * parseInt(c.getAttribute("data-price"));

	
	document.getElementById("price").value=total;
}

function increaseValue() {
  var value = parseInt(document.getElementById('quantity').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('quantity').value = value;
  price = p * value;
  document.getElementById('price').value=price;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('quantity').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('quantity').value = value;
  price = p * value;
  document.getElementById('price').value=price;
}
var p='15.49';
price = p ;
document.getElementById('price').value=price;
	
    </script>

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
        <img src="images/logo6.png" style="width:40%">
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

  <center>
    <table class="table table-bordered" style="margin-top: 10%; width: 80%;">
    <thead>
      <tr>
        <th>Product Detail</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
      </tr>
    </thead>
    
    <?php 

    if (!empty($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $key => $value) {     
    
    ?>

    <tbody> 
     <form action="cupdate.php?ID=<?php echo $value["id"] ?>" method="post">
     
       <tr>
        <td style="width:50%">
        
        <span><img src="images/<?php echo $value["img"] ?>" style="width:15%"></span>
            <span style="font-weight:900; font-size: 17px;"><?php echo$value["name"]?></span>
         
         </td>
        <td>
      
         <?php echo $value["quantity"] ?>
         <a href="delete.php?ID=<?php echo $value["id"] ?>"><i class="fa fa-trash-o" aria-hidden="true" style="color:grey; margin-left:5%;"></i></a>
  

            
        </td>
        <td>Rs. 
          <?php echo $value["price"] ?>
        </td>

        <td>Rs. <?php echo number_format($value['quantity'] * $value['price']); ?></td>


      </tr>
     
      </form> 
    </tbody><?php }}?>
  </table>
   </center>
   
   <center><a href="Menu.php"><button type="button" style="background-color:orange;" class="btn btn-danger">Continue Shopping</button></a>
   <a href="checkout.php"><button type="button" style="background-color:orange;" class="btn btn-danger">Checkout</button></a>
      
   </center>
   <br><br>
   
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
