<?php
    session_start();
    require("connection.php");

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["product_id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["product_id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                
            }
     
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
    
                }
            }
        }
    }
?>

<!DOCTYPE html>
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
                        <li><a href = "products.html">Men</a></li>
                        <li><a href = "products_women.html">Women</a></li>
                        <li><a href = "products_kids.html">Children</a></li>
                        <li><a href = "">Account</a></li>
                    </ul>
                </nav>
                <img src = "images/cart.png" width = "30px" height = "30px">
            </div>
        </div>
        
        <div class="small-container cart_page">
            <h2>Shopping Cart</h2>
            <div class="row">
            <?php
            $query = "SELECT * FROM product";
            $result = mysqli_query($conn,$query);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    ?>
               
                    <form method = "post" action = "cart2.php?action=add&id =<?php echo $row['product_id'];?>">
                    <div class="column_4">
                        <img src = <?php echo "images/".$row['product_image'];?>>
                        <h4><?php echo $row['product_description'];?></h4>
                        <h4><?php echo $row['unit_price'];?></h4>
                        <input type = 'text' name = 'quantity' value = '1'>
                        <input type = "hidden" name = "hidden_name" value = "<?php echo $row['product_name']?>">
                        <input type = "hidden" name = "hidden_price" value = "<?php echo $row['unit_price']?>">
                        <input type = "submit" name = "add" class = "btn" value = "Add to Cart">
                    </div>
                </form>
                </div>
            <?php
                }
            } 
            ?>
            </div>
        </div>
		
		<div>
            <h3>Shopping cart details</h3>
            <div class = "table">
            <table>    
            <tr>
                    <th width = 30%>Product Name</th>
                    <th width = 10%>Quantity</th>
                    <th width = 10%>Product Price</th>
                    <th width = 10%>Total Price</th>
                    <th width = 10%>Remove Item</th>
                </tr>
                <?php 
                if(!empty($_SESSION['cart'])){
                    $total = 0;
                    foreach($_SESSION['cart'] as $key => $value){
                        ?>
                <tr>
                    <td><?php echo $value['item_name'];?></td>
                    <td><?php echo $value['item_quantity'];?></td>
                    <td>Ksh<?php echo $value['product_price'];?></td>
					<td>
                                Ksh <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                    <td>
                    <td><a href = "cart2.php?action=delete&id=<?php echo $value['product_id']; ?>">Remove Item</a></td>
                </tr>
                <?php 
                $total = $total + ($value["item_quantity"] * $value["product_price"]);    
                }
                ?>
                <tr>
                    <td colspan = "3" align = "right">Total</td>
                    <th align = "right">Ksh<?php echo number_format($total, 2); ?></th>
                </tr>
                <?php
                }
                ?>
                </table>
            </div>
        </div>


    <!---footer--->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-column-1">
                    <p>Download App for Android and iOS phones</p>
                </div>
                <div class="footer-column-2">
                    <img src = "images/logo1.png">
                    <p>Our goal is to make the benefits of fitness 
                        to be more accessible</p>
                </div>
                <div class = "footer-column-3">
                    <h3>Useful links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Posts</li>
                        <li>Return Policies</li>
                        <li>Affiliaton</li>
                    </ul>
                </div>
                <div class = "footer-column-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                        <li>Twitter</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</body>
</html>

    