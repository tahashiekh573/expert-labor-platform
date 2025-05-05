<?php
include('db.php');

$d_id=$_GET['id'];


$delete="delete from products WHERE ID='$d_id'";
if(mysqli_query($conn, $delete))
{
	   $message = "Service Deleted Successfully";
            echo "<script type='text/javascript'>alert('$message');
			window.location='Admin Dashboard.php'
			</script>";
					   
	
}



?>