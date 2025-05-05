<?php
include 'db.php';
$name=$_POST['name1'];
$email=$_POST['email'];
$subject=$_POST['name2'];
$message=$_POST['message'];


	$query="insert into contact(name,email,subject,message) values('$name','$email','$subject','$message'); ";


if(mysqli_query($conn, $query)){
					    $message = "Message Sent Successfully";
            echo "<script type='text/javascript'>alert('$message');
			window.location='Contact.html'
			</script>";
					   
					}

