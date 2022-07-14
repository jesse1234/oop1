<?php
require("connection.php");
session_start();

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
                        <li><a href = "index_men.php">Men</a></li>
                        <li><a href = "index_women.php">Women</a></li>
                        <li><a href = "">Welcome <?php echo $_SESSION['login'];?></a></li>
                        <li><a href = "logout.php">Log Out</a></li>
                    </ul>
                </nav>
                <img src = "images/cart.png" width = "30px" height = "30px">
            </div>
        </div>

    <!----Featured Products---->
  
    
    <div class = "small-container">
        <h2 class = "title">Featured Products</h2>
        <div class="row">
        <?php
		$connect = mysqli_connect('localhost', 'jesse', 'Truedat12','clothes');
		$query = 'SELECT * FROM product WHERE categories = "Men"';
		$result = mysqli_query($connect,$query);
		
		if($result):
			if(mysqli_num_rows($result)>0):
				while($product = mysqli_fetch_assoc($result)):
					?>
                    <div class="column_4">
                    <form action="manage_cart.php" method = "POST">
                        
                    <a href = "<?php printf('%s?product_id=%s','product_details.php',$product['product_id'])?>"><img src = "<?php echo "images/".$product['product_image'];?>"></a>
                        <h4><?php echo $product['product_description']; ?></h4>
                
                        <p><?php echo $product['unit_price']; ?></p>

                        <button type = "submit" class = "btn" name = "Add_to_Cart">Add To Cart</button>
                        <input type="hidden" name = "Item_Name" value = "<?php echo $product['product_description']; ?>">
                        <input type="hidden" name = "Price" value = "<?php echo $product['unit_price']; ?>">
                    </div>
                        </form>
                   
                    <?php
                endwhile;
            endif;
        endif;
                ?>
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