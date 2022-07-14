<?php
require("connection.php");
if(isset($_POST['update']))
{
    $id = $_GET['id'];
    $username = $_POST['username'];
	$password = $_POST['password'];
    $email = $_POST['email'];	
	$gender = $_POST['gender'];
    $message = $_POST['message'];
	$usertype = $_POST['usertype'];

    $query = "UPDATE `user_details` SET `username`='" .$username. "',`password`='" .$password. "',`email`='" .$email. "',`gender`='" .$gender. "',`message`='" .$message. "',`usertype`='" .$usertype. "' WHERE `user_id` = '" .$id."'";
    $result = mysqli_query($conn,$query);

    if($result)
    {
        header("location:view_users2.php");
    }
    else
    {
        echo 'Please check your query';
    }
}
else 
{
    header("location:view_users2.php");
}
?>