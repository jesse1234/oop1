<?php
require("connection.php");
if(isset($_POST['submit'])){
    if(empty($_POST['username'] || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['gender']) || empty($_POST['message'])))
    {
        echo 'Fill in the blanks';
    }
    else{
        
	$user_name = $_POST["username"];
	$pass_value = $_POST["password"];
	$hashpass = password_hash($pass_value,PASSWORD_DEFAULT);
	$email_address = $_POST["email"];
	$gender = $_POST["gender"];
	$message_value =$_POST["message"];

    $sql = "INSERT INTO `users`(`username`, `password`, `email`, `age`, `gender`, `message`) VALUES ('$user_name','$hashpass','$email_address','$age_number','$gender','$message_value')";
	$result = mysqli_query($conn, $sql);

    if($result){
        header("location:view_users2.php");
    }
    else{
        echo 'Please check your query';
    }
    }
}

?>