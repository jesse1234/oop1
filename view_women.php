<html>
	<head>
		<title>View Mens Collection</title>
	</head>
	<link rel = "stylesheet" href = "table.css">
	<body>
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

				$sql = "SELECT * FROM `products` WHERE (`categories`='Women');";
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result)>0)
                {
                    foreach($result as $row)
                    {
                        echo $row["product_id"];
                        ?>
                        <tr>
                            <td><?php echo $row['product_id']; ?></td>
                            <td><?php echo $row['product_name']; ?></td>
                            <td><?php echo $row['product_description']; ?></td>
                            <td>
                               <img src = "<?php echo "images/".$row['product_image'];?>" alt = "image" width = "100px"> 
                            </td>
                            <td><?php echo $row['categories']; ?></td>
                            <td><?php echo $row['unit_price']; ?></td>
                            <td><?php echo $row['available_quantity']; ?></td>
                            <td><?php echo $row['subcategories_id']; ?></td>
                            <td><?php echo $row['created_at']; ?></td>
                            <td><?php echo $row['updated_at']; ?></td>
                            <td><?php echo $row['added_by']; ?></td>
                            <td><?php echo $row['is_deleted']; ?></td>
                            <td>
                                <button name = "Edit">Edit</button>
                            </td>
                            <td>
                                <button name = "Cart">Add to Cart</button>
                            </td>

                        </tr>
                        <?php
                    }
                }
                else
                {
                    ?>
                        <tr>
                            <td>No record available<td>    
                        <tr>

                    <?php
                }
			?>
		</tbody>	
	</table>

	</body>
</html>