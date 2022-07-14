<?php 
require("connection.php");
$id = $_GET['updateid'];
$query = "SELECT * FROM product WHERE `product_id` =$id";
$result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conn), E_USER_ERROR);

while($row = mysqli_fetch_assoc($result))
{
    $product_id = $row["product_id"];
	$product_name = $row["product_name"];
	$product_desc = $row["product_description"];
	$product_image = $row["product_image"];
	$categories = $row["categories"];
	$unit_price = $row["unit_price"];
	$avb_quantity = $row["available_quantity"];
	$created_at = $row["created_at"];
	$updated_at = $row["updated_at"];
	$added_by = $row["added_by"];
	$deleted = $row["is_deleted"];
}
?>

<html>
	<head>
		<title>Update Products Form</title>
	</head>
	
	<link rel= "stylesheet" href = "registration.css">
	<body>
	<h1 align = "center">Update Products </h1>
	
                <form action = "update1.php?id=<?php echo $product_id?>" method = "post" enctype = "multipart/form-data"> 
		
		<div>
		<label for = "product_id">Product ID<label>
		<input type = "number" id = "product_id" name = "product_id" value = "<?php echo $product_id?>">
		</div>
		
		<div>
		<label for = "product_name">Product Name<label>
		<input type = "text" id = "product_name" name = "product_name" value = "<?php echo $product_name?>">
		</div>
		
		<div>
		<label for = "product desc">Product Description<label>
		<input type = "text" id = "product_desc" name = "product_desc" value = "<?php echo $product_desc?>">
		</div>
		
		<div>
		<label for = "product image">Product Image<label>
		<input type = "file" id = "product_image" name = "product_image" value = "<?php echo $product_image?>">
		</div>

		<div class = "Category">
		<label for = "categories">Categories</label>
		<select name = "category">
		<option value = "">Select category</option>
		<option value = "Men">Men</option>
		<option value = "Women">Women</option>
		</select>
		<br></br>
		</div>
		
		<div>
		<label for = "unit price">Unit price<label>
		<input type = "number" id = "unit_price" name = "unit_price" value = "<?php echo $unit_price?>">
		</div>
		
		<div>
		<label for = "avb_quantity">Available quantity<label>
		<input type = "number" id = "avb_quantity" name = "avb_quantity" value ="<?php echo $avb_quantity?>">
		</div>

		<div>
		<label for = "created at">Created at<label>
		<input type = "date" id = "created_at" name = "created_at" value = "<?php echo $created_at?>">
		</div>
		
		<div>
		<label for = "updated at">Updated at<label>
		<input type = "date" id = "updated_at" name = "updated_at" value = "<?php echo $updated_at?>">
		</div>
		
		<div>
		<label for = "added by">Added by<label>
		<input type = "number" id = "added_by" name = "added_by" value = "<?php echo $added_by?>">
		</div>
		
		<div>
		<label for = "deleted">Deleted<label>
		<input type = "number" id = "deleted" name = "deleted" value ="<?php echo $deleted?>">
		</div>
		
		
		
		<button type = "submit" name = "update">update</button> 
	    
		
		
	</form>
    
    
	
	</body>
	
<html>

