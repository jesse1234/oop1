<html>
	<head>
		<title>View Users</title>
	</head>
	<link rel = "stylesheet" href = "websites.css">
	<body>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>Password</th>
					<th>Email</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Message</th>
					<th>Operations</th>
				</tr>
			</thead>

			<tbody>
			<?php
				require ("connection.php");

				$sql = "SELECT ID,username, `password`, email, age, gender, `message` FROM user_details";
				$result = mysqli_query($conn,$sql);

				if (!$result){
					die("Invalid query: " . $conn->error);
				}
					while($row = $result -> fetch_assoc()){
						echo "<tr>
								<td>".$row["ID"]."</td>
								<td>".$row["username"]."</td>
								<td>".$row["password"]."</td>
								<td>".$row["email"]."</td>
								<td>".$row["age"]."</td>
								<td>".$row["gender"]."</td>
								<td>".$row["message"]."</td>
								<td><a href = 'update.php'>Update</a>
								<td><a href = 'update.php'>Update</a>
								</td>
								</td>
							</tr>";	
					}
					echo "</table>";
				
				
			?>
		</tbody>	
	</table>

	</body>
</html>



