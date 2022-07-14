
<?php
require("connection.php");
$id = $_GET['updateid'];
$query = "SELECT * FROM user_details WHERE `user_id` =$id";
$result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conn), E_USER_ERROR);

while($row = mysqli_fetch_assoc($result))
{
    $ID = $row['user_id'];
	$username = $row['username'];
	$password = $row['password'];
    $email = $row['email'];	
	$gender = $row['gender'];
    $message = $row['message'];
	$usertype = $row['usertype'];
}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Update Form</title>
	</head>
	
	<link rel= "stylesheet" href = "registration.css">
	<body>
	<h1 align = "center">Customer Update Form</h1>
	<form action = "update.php?id=<?php echo $ID?>" method = "POST"> 
	
		<div>
		<label for = "username">Username<label>
		<input type = "text" value = "<?php echo $username?>" id = "username" name = "username" placeholder = "Please write your username" >
		</div>
		
		<div>
		<label for = "password">Password<label>
		<input type = "password" value = "<?php echo $password?>"  id = "password" name = "password" placeholder = "Please write your password">
		</div>
		
		<div>
		<label for = "email">Email<label>
		<input type = "text" value = "<?php echo $email?>" id = "Email" name = "email" placeholder = "Please enter your email">
		</div>
		
		<div>
		<label for = "gender">Gender<label>
		</div>
		
		<div>
		<input type = "radio"  name = "gender" id = "Female" value = "female">Female
		</div>
		
		<div>
		<input type = "radio" name = "gender" id = "Male" value = "male">Male
		</div>
		
		<div>
		<label for = "message">Message<label>
		<textarea id = "message" value = "<?php echo $message?>" name = "message" ></textarea>
		</div>

        <div>
		<label for = "usertype">User Type<label>
		<input type = "text" value = "<?php echo $usertype?>" id = "usertype" name = "usertype" placeholder = "Please enter user type">
		</div>

		<button type = "submit" name = 'update'>Update</button> 
	    
		<div>
		<button type ="reset">Reset</button>
		</div>
	</form>
	
	</body>
	
<html>