<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Admin Dashboard</title>
    <link rel = "stylesheet" href = "websites.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
</head>
<body>
<div class="container">
            <div class = "navbar">
                <div class = "logo">
                    <img src = "images/logo1.png" width = "125px">
                </div>
                <nav>
                    <ul>
                        <li><a href = "">Home</a></li>
                        <li><a href = "view_product1.php">View Products</a></li>
                        <li><a href = "products1.php">Insert Products</a></li>
                        <li><a href = "register.php">Add User</a></li>
                        <li><a href = "view_users2.php">View Users</a></li>
                        <li><a href = "order_view.php">View Orders</a></li>
                        <li><a href = "">Welcome <?php echo $_SESSION['login'];?></a></li>
                        <li><a href = "logout.php">Log Out</a></li>
                    </ul>
                </nav>
                
            </div>
        </div>
 
        
       <!--admin page-->
       <div class="row">
        <div class="column_2">
            <h1>What would you like to do?<h1>
                <a href = ''>Check Inventory</a>
                <a href = ''>Check users</a>
                <a href = ''>View orders</a>
        </div>
       </div>
    

   

        </div>
    </div>
</body>
</html>

