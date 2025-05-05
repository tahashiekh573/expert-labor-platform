<?php
include 'db.php';

$del = "TRUNCATE cart";

if(mysqli_query($conn,$del))
{
	header("location:Menu.php");
	
	}

else
{echo "Failed";}

?>