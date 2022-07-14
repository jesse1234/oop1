<html>
	<head>
		<title>View Users</title>
	</head>
	<link rel = "stylesheet" href = "websites.css">
	<body>
    </div>
		<table>
			<thead>
				<tr>
                <th>Product_ID</th>
					<th>Product Name</th>
					<th>Product Desc</th>
					<th>Product Image</th>
					<th>Categories</th>
					<th>Unit_Price</th>
					<th>Available Quantity</th>
                    <th>Subcategories_ID</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Added by</th>
                    <th>Deleted</th>
				</tr>
			</thead>
            <tbody>
			<?php
				require ("connection.php");

				$sql = "SELECT * FROM product";
				$result = mysqli_query($conn,$sql);

				if($result){
                    while($row = mysqli_fetch_assoc($result)){
                    $id = $row['product_id'];
                    $productname = $row['product_name'];
                    $product_desc = $row['product_description'];
                    $prod_image = $row['product_image'];
                    $categories = $row['categories'];
                    $price = $row['unit_price'];
					$quantity = $row['available_quantity'];
                    $created = $row['created_at'];
                    $updated = $row['updated_at'];
                    $added = $row['added_by'];
                    $deleted = $row['is_deleted'];

                    echo "<tr>
								<td>".$id."</td>
								<td>".$productname."</td>
								<td>".$product_desc."</td>
								<td>
                               <img src = "<?php echo 'images/'.$row['product_image'];?>">
                                </td>
								<td>".$categories."</td>
								<td>".$price."</td>
								<td>".$quantity."</td>
                                <td>".$created."</td>
								<td>".$updated."</td>
								<td>".$updated."</td>
                                <td>".$deleted."</td>

                                
                                <td>
                                    <button  color = 'white'><a href='view_users_form.php?updateid=".$id."'>Update</a></button>
                                    <button  color = 'white'><a href='delete.php?deleteid=".$id."'>Delete</a></button>
                                </td>
							</tr>";	
                    }
                    
                }
			?>

		</tbody>	
	</table>

	</body>
</html>