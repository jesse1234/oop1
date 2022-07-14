<?php
session_start();
?>

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

				$sql = "SELECT * FROM user_orders" ;
				$result = mysqli_query($conn,$sql);

				if($result){
                    while($row = mysqli_fetch_assoc($result)){
                    $id = $row['order_id'];
                    $itemname = $row['item_name'];
                    $price = $row['price'];
                    $quantity = $row['quantity'];
               

                    echo "<tr>
								<td>".$id."</td>
								<td>".$itemname."</td>
								<td>".$price."</td>
								<td>".$quantity."</td>
								
                                <td>
                                    <button  color = 'white'><a href='delete2.php?deleteid=".$id."'>Delete</a></button>
                                </td>
							</tr>";	
                    }
                    
                }
			?>

		</tbody>	
	</table>

	</body>
</html>