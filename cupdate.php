<?php 
include('db.php');

$id = $_GET['ID'];
$q = $_POST['quantity'];
$p= $_POST['price'];

if(mysqli_query($conn,"update cart set Price = '$p', Quantity='$q' where ID = '$id'")){
header('location:Cart.php');
}

?>