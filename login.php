<?php
include 'db.php';

session_start();
   


$email=$_POST['Email'];
$pass=$_POST['Password'];

if($email == "usman@gmail.com" && $pass=="123" )
{


if($email == "usman@gmail.com" && $pass=="123" ) {header("location:/HomeClean/Admin Dashboard.php");}
else{echo "Invalid Credentials";}
}


else {
$select = "select * from user where Email='$email' and password='$pass'";

$result = mysqli_query($conn,$select);

$data = mysqli_fetch_assoc($result);

          $_SESSION["user"]=$data['FirstName'];

if(mysqli_num_rows($result) > 0)
{
if($data['Email']==$email && $data['password']==$pass)
{
header("location:/HomeClean/Index.php");
}
}
else if(mysqli_num_rows($result) == 0)
{
	echo'Wrong Email or Password';
	
}
}
   
?>


</body>

</html>