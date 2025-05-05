<?php

include 'db.php';

$name = $_POST['dish_name'];
$price = $_POST['price'];
$desc = $_POST['description'];
$image = strtolower($_FILES['img']['name']);

$query = "insert into products(Name,Price,Description,Image) 
          values ('$name','$price','$desc','$image') ";

mysqli_query($conn,$query);
echo 'inserted';

$uploaddir = 'C:\xampp\htdocs\HomeClean\images/';
$uploadfile = $uploaddir.$image;

if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
  echo "File is valid, and was successfully uploaded.\n";
} else {
   echo "Upload failed";
}


?>