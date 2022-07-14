<?php

$conn = mysqli_connect("localhost", "jesse", "Truedat12", "clothes");

if(!$conn){
	die("Could not connect".mysqli_connect_error());
}
else{
	echo "Connected successfully";
}


?>