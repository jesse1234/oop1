

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
    <link rel = "stylesheet" href = "websites.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="htrtps://fonts.googleapis.com/css2?family=Anek+Latin:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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

        <!----cart items---->
        <div class="small-container cart_page">
            <table>
                <thead>
                <tr>
                <th>Cart ID</th>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Product Size</th>
                <th>Product Price</th>
                <thead>
                <tbody>
			<?php
				require ("connection.php");

				$sql = "SELECT * FROM `cart`";
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result)>0)
                {
                    foreach($result as $row)
                    {
                        echo $row["cart_ID"];
                        ?>
                        <tr>
                            <td><?php echo $row['product_id']; ?></td>
                            <td><?php echo $row['product_name']; ?></td>
                            <td>
                               <img src = "<?php echo "images/".$row['product_image'];?>" alt = "image" width = "100px"> 
                            </td>
                            <td><?php echo $row['product_size']; ?></td>
                            <td><?php echo $row['product_price']; ?></td>
                            <td>
                                <button name = "Edit">Edit</button>
                            </td>
                            <td>
                                <button name = "Cart">Add to Cart</button>
                            </td>
                        </tr>
                        <?php
                    }
                }
                else
                {
                    ?>
                        <tr>
                            <td>No record available<td>    
                        <tr>

                    <?php
                }
			?>
		</tbody>	
            </table>
            
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

