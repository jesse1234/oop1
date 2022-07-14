<!DOCTYPE html>
<html>
	<head>
		<title>Register Form</title>
	</head>
	
	<link rel= "stylesheet" href = "registration.css">
	<body>
	<h1 align = "center">Customer Registration Form</h1>
	<form action = "process_register.php" method = "post"> 
		<div>
		<label for = "username">Username<label>
		<input type = "text" id = "username" name = "username" placeholder = "Please write your username" >
		</div>
		
		<div>
		<label for = "password">Password<label>
		<input type = "password" id = "password" name = "password" placeholder = "Please write your password">
		</div>
		
		<div>
		<label for = "email">Email<label>
		<input type = "text" id = "Email" name = "email" placeholder = "Please enter your email">
		</div>
		
		<div>
		<label for = "age">Age<label>
		<input type = "number" id = "age" name = "age" min = "1" max = "200">
		</div>
		
		<div>
		<label for = "gender">Gender<label>
		</div>
		
		<div>
		<input type = "radio" name = "gender" id = "Female" value = "female">Female
		</div>
		
		<div>
		<input type = "radio" name = "gender" id = "Male" value = "male">Male
		</div>
		
		<div>
		<label for = "message">Message<label>
		<textarea id = "message" name = "message"></textarea>
		</div>
		
		
		<button type = "submit">Submit</button> 
	    
		<div>
		<button type ="reset">Reset</button>
		</div>
	</form>
	
	</body>
	
<html>