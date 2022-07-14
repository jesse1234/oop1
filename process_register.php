<?php
require("connection.php");

	

	$user_name = $_POST["username"];
	$pass_value = $_POST["password"];
	$hashpass = password_hash($pass_value,PASSWORD_DEFAULT);
	$email_address = $_POST["email"];
	$gender = $_POST["gender"];
	$message_value =$_POST["message"];


	$select_query = "SELECT * FROM `user_details` WHERE username = '$user_name' OR email = '$email_address'";
	$result1 = mysqli_query($conn,$select_query);
	$rows_count = mysqli_num_rows($result1);
	if($rows_count>0){
		echo "Username already exists";
	}else{

	$sql = "INSERT INTO `users`(`username`, `password`, `email`, `age`, `gender`, `message`) VALUES ('$user_name','$hashpass','$email_address','$age_number','$gender','$message_value')";
	$result = mysqli_query($conn, $sql);
	}
	



?>