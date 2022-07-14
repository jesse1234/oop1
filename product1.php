<html>
	<head>
		<title>Products Form</title>
	</head>
	
	<link rel= "stylesheet" href = "registration.css">
	<body>
	<h1 align = "center">Products Form</h1>
	<form action = "process_products1.php" method = "post" enctype = "multipart/form-data"> 
		
		<div>
		<label for = "product_id">Product ID<label>
		<input type = "number" id = "product_id" name = "product_id">
		</div>
		
		<div>
		<label for = "product_name">Product Name<label>
		<input type = "text" id = "product_name" name = "product_name">
		</div>
		
		<div>
		<label for = "product desc">Product Description<label>
		<input type = "text" id = "product_desc" name = "product_desc">
		</div>
		
		<div>
		<label for = "product image">Product Image<label>
		<input type = "file" id = "product_image" name = "product_image">
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
		<input type = "number" id = "unit_price" name = "unit_price">
		</div>
		
		<div>
		<label for = "avb_quantity">Available quantity<label>
		<input type = "number" id = "avb_quantity" name = "avb_quantity">
		</div>

		<div>
		<label for = "created at">Created at<label>
		<input type = "date" id = "created_at" name = "created_at">
		</div>
		
		<div>
		<label for = "updated at">Updated at<label>
		<input type = "date" id = "updated_at" name = "updated_at">
		</div>
		
		<div>
		<label for = "added by">Added by<label>
		<input type = "number" id = "added_by" name = "added_by">
		</div>
		
		<div>
		<label for = "deleted">Deleted<label>
		<input type = "number" id = "deleted" name = "deleted">
		</div>
		
		
		
		<button type = "submit">Submit</button> 
	    
		
		
	</form>
	
	</body>
	
<html>