<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>This is the user page</h1>
</body>
</html>

<?php
require("connection.php");
$query = mysqli_query($conn, "SELECT * FROM `users` WHERE `ID`='$_SESSION[id]'") or die(mysqli_error());
                $fetch = mysqli_fetch_array($query);
 
                echo "<h2 class='text-success'>".$fetch['username']."</h2>";
?>
<a href="logout.php">Logout</a>