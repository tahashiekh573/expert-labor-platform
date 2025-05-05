<?php 

include('db.php');
session_start();



$iname= implode("," , $_POST['iname']);
$total=$_POST['total'];
$quantity=implode("," , $_POST['iq']);

$uname=$_POST['name'];
$phn=$_POST['phn'];
$add=$_POST['address'];

$query="insert into orders(Name,Phone,Address,Item,Quantity,Total,Date)
values ('$uname','$phn','$add','$iname','$quantity','$total','NOW()')";



if(mysqli_query($conn,$query)){

	unset($_SESSION['cart']);

	$message = "Order Placed Successfully.";
            echo "<script type='text/javascript'>alert('$message');
			window.location='index.php'
			</script>"; 
			
	
}


?>