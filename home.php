<!DOCTYPE html>
<?php
    session_start();
    if(!ISSET($_SESSION['user_id'])){
        header('location:index.php');
    }
?>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    </head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
        </div>
    </nav>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-primary">PHP - Display Username After Login</h3>
        <hr style="border-top:1px dotted #ccc;"/>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1>WELCOME:</h1>
            <?php
                require('connection.php');
 
 
                $query = mysqli_query($conn, "SELECT * FROM `user` WHERE `user_id`='$_SESSION[user_id]'") or die(mysqli_error());
                $fetch = mysqli_fetch_array($query);
 
                echo "<h2 class='text-success'>".$fetch['username']."</h2>";
            ?>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>	
</html>