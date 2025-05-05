<?php 

include 'db.php';

$uname = $_POST['uname'];
$msg = $_POST['msg'];

$query = "Insert into feedback (Name, Message) values ('$uname' , '$msg');";

if(mysqli_query($conn,$query))
{
    $message = "Message Sent Successfully";
            echo "<script type='text/javascript'>alert('$message');
			window.location='index.php'
			</script>";
					   
	}

else {echo "error";}

?>