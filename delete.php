<?php

include 'db.php';
session_start();

foreach ($_SESSION['cart'] as $key => $value) {
	if ($value['id'] == $_GET['ID']) {
		unset($_SESSION['cart'][$key]);
		
		header('location:\HomeClean\cart.php');
	}
}


	


?>