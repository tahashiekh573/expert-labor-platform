<?php
include 'db.php';
$name=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email'];
$pass=$_POST['password'];

$select = "select Email from user where Email='$email'";

$result = mysqli_query($conn,$select);

$data = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) > 0)
{
if($data['Email']==$email)
{
      echo"Email already Taken!!!!!!";
}
}
else if (mysqli_num_rows($result) == 0)
{
	$query="insert into user(FirstName,LastName,Email,password) values('$name','$lname','$email','$pass'); ";
$result=mysqli_query($conn,$query);
echo"Done";
}





?>