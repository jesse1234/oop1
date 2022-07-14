<?php
require("connection.php");
session_start();
?>

<html lang="en">
<head>

    <title>Document</title>
    <link rel = "stylesheet" href = "websites.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
</head>
<body>
<div class="header">
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
                        <li><a href = "">Welcome <?php echo $_SESSION['login'];?></a></li>
                        <li><a href = "logout.php">Log Out</a></li>
                    </ul>
                </nav>
                <img src = "images/cart.png" width = "30px" height = "30px">
            </div>
        </div>
        
    </div>

<div class="container">
    <div class="row">
        <div>
            <h2>View Orders</h2>
            <br>
            <table>
                <thead>
                    <tr>
                        <th scope = "col">Order ID</th>
                        <th scope = "col">Username </th>
                        <th scope = "col">Phone No</th>
                        <th scope = "col">Address</th>
                        <th scope = "col">Orders</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "SELECT * FROM `order_manager`";
                    $user_result = mysqli_query($conn,$query);
                    while($user_fetch=mysqli_fetch_assoc($user_result))
                    {
                        echo "<tr>
								<td>".$user_fetch['order_id']."</td>
								<td>".$user_fetch['username']."</td>
								<td>".$user_fetch['phone_no']."</td>
								<td>".$user_fetch['address']."</td>
                                <td>".$user_fetch['pay_mode']."</td>
                                <td>
                                <table>
                                <thead>
                                    <tr>
                                        <th scope = 'col'>Item_Name</th>
                                        <th scope = 'col'>Price </th>
                                        <th scope = 'col'>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";

                            $order_query = "SELECT * FROM `user_orders` WHERE `order_id` = ".$user_fetch['order_id']." ";
                            $order_result = mysqli_query($conn,$order_query);
                            while($order_fetch = mysqli_fetch_assoc($order_result))
                            {
                                echo '
                                "<tr>
								<td>'.$order_fetch['item_name'].'</td>
								<td>'.$order_fetch['price'].'</td>
								<td>'.$order_fetch['quantity'].'</td>
                                </tr>
                                
                                ';
                            }
                            echo"
                            </tbody>
                            </table>    
                            </td>
							</tr>";	
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>




    <?php
include_once("footer.php");
?>
</body>
</html>
    