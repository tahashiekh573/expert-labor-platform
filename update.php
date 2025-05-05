<?php

include('db.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
	
$u_id=$_POST['id'];
$E_name=$_POST['name'];
$E_price=$_POST['price'];
$E_desc=$_POST['desc'];
$E_image = strtolower($_FILES['image']['name']);
$uploaddir = 'C:\xampp\htdocs\HomeClean\images/';
$uploadfile = $uploaddir.$E_image;

if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
  echo "File is valid, and was successfully uploaded.\n";
} else {
   echo "Upload failed";
}
	

$update="update products SET Name='$E_name', Price='$E_price' , Description='$E_desc', Image='$E_image' WHERE ID='$u_id'";

if(mysqli_query($conn, $update))
{
	   $message = "Data Updated Successfully";
            echo "<script type='text/javascript'>alert('$message');
			window.location='Admin Dashboard.php'
			</script>";
					   
}

else
{
	echo"Errrrrrror!!!!!!!!!!!";

}
}


?>