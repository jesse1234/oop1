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
                <th>Order ID</th>
					<th>Item Name</th>
					<th>Price</th>
					<th>Quantity</th>
				</tr>
			</thead>
            <tbody>
			<?php
				require ("connection.php");

				$sql = "SELECT * FROM user_orders";
				$result = mysqli_query($conn,$sql);

				if($result){
                    while($row = mysqli_fetch_assoc($result)){
                    $id = $row['order_id'];
                    $item_name = $row['item_name'];
                    $price = $row['price'];
                    $quantity = $row['quantity'];
                    

                    echo "<tr>
								<td>".$id."</td>
								<td>".$item_name."</td>
								<td>".$price."</td>
								<td>".$quantity."</td>


							</tr>";	
                    }
                    
                }
			?>

		</tbody>	
	</table>

	</body>
</html>