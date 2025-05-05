<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Dashboard</title>
<link href="bootstrap-4.4.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/admin dashboard.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

 
<body>
<div class="container-fluid">
 
    <div id="logos">
      <div class="row">
        <div id="logos-left" class="col-lg-6">
          <a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="https://www.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
          <a href="https://web.whatsapp.com"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>
      
       <div id="logos-right" class="col-lg-4">
      <i class="fa fa-user-circle" aria-hidden="true"></i>
      <span style="font-size:14px;">
      
	  <a href="logout.php" style="margin-left:4%; color:orange; font-size:14px;">Logout</a>
	  </span>

      </div>
    </div>
    </div>
    <center><h1 style="padding:2%; border-top:1px solid #ddd; letter-spacing:2px;">ADMIN DASHBOARD</h1></center>
    <div class="row" id="main-menu">
      <div class="col-lg-4" id="site-logo">
	  <a href="Index.php">
        <img src="images/log.png"style="width: 110px; margin-top:-15px; margin-left: 40px ">
		</a>
      </div>
     
      <div class="col-lg-7" id="menu-items">
       <li><a href="#add">ADD SERVICES</a></li>
       
        <li><a href="#allitems">MANAGE SERVICES</a>
       </li>
        
        
        <li><a href="#feedbackk">FEEDBACK</a></li>
        <li style="border-right:none"><a href="#query" >QUERIES</a></li>
         
        
   
        <i class="fa fa-bars fa-10x" aria-hidden="true"></i>
      </div>
    </div>
     
    
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    
    <script>
	mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
	</script>
    <div class="labels" id="add" class="col-sm-12 col-lg-12">
    <h3>Add a Service</h3>
    <p>Dashboard / Add Service</p>
    </div>
    
    <div id="form" class="signup-form" >
    <form action="add_item.php" method="post" enctype="multipart/form-data">
		<h3 style="color:white; text-align: center;">Add Service</h3>
		<!-- <p class="hint-text">Add a new Service</p> -->
        <div class="form-group">
		
		<input type="text" class="form-control" name="dish_name" placeholder="Service Name" required="required">
				   	
        </div>
		
        <div class="form-group">
        	<input type="number" class="form-control" name="price" placeholder="Service Price" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="description" placeholder="Description" required="required">
        </div>
        
        
		<label>Service Image</label>
           <input type="file" id="img" name="img" required style="padding-bottom:5%;">
             
        
		<div class="form-group">
            <button id="r-button" name="submit" type="submit" class="btn btn-success btn-lg btn-block">Add to Service</button>
        </div>
    </form>

</div>

    <div class="labels" id="allitems" class="col-sm-12 col-lg-12" style="margin-top:3%; margin-bottom:6%;">
    <h3>Manage Services</h3>
    <p>Dashboard / Manage Service</p>
    </div>
    
    <div class="allitems"  style="padding-bottom: 6%;">
    <center>
<h1>Services</h1>
<br><br>


<table class="table-bordered" style=" border:2px solid orange; text-align:center;">
<tr><th style="text-align:center">ID</th><th style="text-align:center">Name</th><th>Price</th><th style="text-align:center">Description</th><th style="text-align:center">Picture</th><th>Delete</th><th>Update</th></tr>

<?php
include 'db.php';
$select = "select * from products ";
$result = mysqli_query($conn,$select);

while($data = mysqli_fetch_assoc($result)){
echo "<tr><td>{$data['ID']}</td>";
echo "<td>{$data['Name']}</td>";
echo "<td>{$data['Price']}</td>";
echo "<td>{$data['Description']}</td>";
echo "<td>{$data['Image']}</td>";
echo"<td><a href='delitem.php?id=".$data['ID']."'><button>Delete</button></td>";
echo"<td><a href='edit.php?id=".$data['ID']."'><button>Update</button></td></tr>";
}
?>
</table>
</center>
    
    </div>
     <div class="labels" id="allitems" class="col-sm-12 col-lg-12" style="margin-top:3%; margin-bottom:6%;">
    <h3>Service Details</h3>
    <p>Dashboard / Order Service</p>
    </div>
      <div id="order" class="allitems"  style="padding-bottom: 6%;">
    <center>
<h1>Service</h1>
<br><br>


<table class="table-bordered" style=" border:2px solid orange; text-align:center;">
<tr><th style="text-align:center">ID</th><th style="text-align:center">Name</th><th style="text-align:center">Phone</th><th>Address</th><th style="text-align:center">Item</th><th style="text-align:center">Quantity</th><th>Total</th></tr>

<?php
include 'db.php';
$select = "select * from orders ";
$result = mysqli_query($conn,$select);

while($data = mysqli_fetch_assoc($result)){
echo "<tr><td>{$data['ID']}</td>";
echo "<td>{$data['Name']}</td>";
echo "<td>{$data['Phone']}</td>";
echo "<td>{$data['Address']}</td>";
echo "<td>{$data['Item']}</td>";
echo "<td>{$data['Quantity']}</td>";
echo "<td>{$data['Total']}</td>";}
?>
</table>
</center>
    
    </div>
    
     <div class="labels" id="feedbackk" class="col-sm-12 col-lg-12" style="margin-top:3%; margin-bottom:6%;">
    <h3>Feedbacks</h3>
    <p>Dashboard / Feedbacks</p>
    </div>
 
   
    <h3><center>Feedback From Users</center></h3>
    <div class="row">
    
    <div class="col" id="feedback">
    <div class="row" >
      <?php
	
		     $select = "select * from feedback ";
             $result = mysqli_query($conn,$select);
			 $count=1;
			 
			 while($data=mysqli_fetch_assoc($result)){
				 echo "<div class='col-6' style='border:1px solid orange'><h3>Name: {$data['Name']}</h3>
				 <br>
				 <p>Message {$data['Message']}</p>
				 
				 </div>
				 
				 "
				 ;
				 
			 }
				 ?>
          </div>       
    
		  </div>
</div>

 <div class="labels" id="query" class="col-sm-12 col-lg-12" style="margin-top:3%; margin-bottom:6%;">
    <h3>Query Messages</h3>
    <p>Dashboard / Queries</p>
    </div>
 
   
    <h3><center>Queries From Users</center></h3>
    <div class="row">
    
    <div class="col" id="queries">
    <div class="row" >
      <?php
	
		     $select = "select * from contact ";
             $result = mysqli_query($conn,$select);
			 $count=1;
			 
			 while($data=mysqli_fetch_assoc($result)){
				 echo "<div class='col-6' style='border:1px solid orange'><h3>Subject: {$data['subject']}</h3>
				 <br>
				 <p>Message {$data['message']}
				 <br>
				 <br>
				 <b>From: {$data['email']}</b>
				 </p>
				 
				 
				 </div>
				 
				 "
				 ;
				 
			 }
				 ?>
          </div>       
    
		  </div>
</div>





</div>
    </div>
   
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
