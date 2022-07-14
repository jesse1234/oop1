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
                <th>ID</th>
					<th>Username</th>
					<th>Password</th>
					<th>Email</th>
					<th>Gender</th>
					<th>Message</th>
					<th>User Type</th>
					<th>Operations</th>
				</tr>
			</thead>
            <tbody>
			<?php
				require ("connection.php");

				$sql = "SELECT * FROM user_details";
				$result = mysqli_query($conn,$sql);

				if($result){
                    while($row = mysqli_fetch_assoc($result)){
                    $id = $row['user_id'];
                    $username = $row['username'];
                    $password = $row['password'];
                    $email = $row['email'];
                    $gender = $row['gender'];
                    $message = $row['message'];
					$usertype = $row['usertype'];

                    echo "<tr>
								<td>".$id."</td>
								<td>".$username."</td>
								<td>".$password."</td>
								<td>".$email."</td>
								<td>".$gender."</td>
								<td>".$message."</td>
								<td>".$usertype."</td>
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