<?php
include('db.php');

$E_id=$_GET['id'];
$edit="select * from products WHERE ID='$E_id'";
$result=mysqli_query($conn, $edit);

$row=mysqli_fetch_assoc($result);
$E_name=$row['Name'];
$E_price=$row['Price'];
$E_desc=$row['Description'];
$E_image=$row['Image'];

?>


<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="col-4"></div>

<div class="container">
<br><br>
<center><h1>Update Item</h1></center>
<div class="row">
<div  class="col-4"></div>
<div class="col-4">
<form method="post" action="update.php" enctype="multipart/form-data">


<div class="form-group">
<label>ID</label>
<input class="form-control" type="text" name="id" value="<?php echo $E_id;?>"></div>

<div class="form-group">
<label>Name</label>
<input class="form-control" type="text" name="name" value="<?php echo $E_name;?>"></div>


<div class="form-group">
<label>Price</label>
<input class="form-control" type="text" name="price" value="<?php echo $E_price;?>"></div>


<div class="form-group">
<label>Description</label>
<input class="form-control" type="text" name="desc" value="<?php echo $E_desc;?>"></div>


<div class="form-group">
<label>Image</label>
<input class="form-control" type="file" name="image" value="<?php echo $E_image;?>"></div>


<button class="btn-success btn-block" type="submit" value="Save" name="submit">Submit</button>
</form>
</div>
</div>
</div>
</body>
</html>