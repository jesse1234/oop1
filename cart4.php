<?php
session_start();
$product_ids = array();
//session_destroy();

if(filter_input(INPUT_POST, 'add_to_cart')){
    if(isset($_SESSION['shopping_cart'])){
    $count = count($_SESSION['shopping_cart']);

    $product_ids = array_column($_SESSION['shopping_cart'], 'product_id');
   
       if(!in_array(filter_input(INPUT_GET,'product_id'),$product_ids)){
        $_SESSION['shopping_cart'][$count] = array(
            'product_id' => filter_input(INPUT_GET,'product_id'),
            'name' => filter_input(INPUT_POST,'name'),
            'price' => filter_input(INPUT_POST,'price'),
            'quantity' => filter_input(INPUT_POST,'quantity')
        );
       }else{
        for($i = 0; $i < count($product_ids); $i++){
            $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST,'quantity');
        }
       }
}
    else{
        $_SESSION['shopping_cart'][0] = array(
            'product_id' => filter_input(INPUT_GET,'product_id'),
            'name' => filter_input(INPUT_POST,'name'),
            'price' => filter_input(INPUT_POST,'price'),
            'quantity' => filter_input(INPUT_POST,'quantity'),
        );
    }
}

if(filter_input(INPUT_GET,'action')== 'delete'){
    foreach($_SESSION['shopping_cart'] as $key => $product){
        if($product['product_id'] == filter_input(INPUT_GET,'product_id')){
            unset($_SESSION['shopping_cart'][$key]);
        }
    }
    $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}

//pre_r($_SESSION);
function pre_r($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
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
                        <li><a href = "">Welcome <?php echo $_SESSION['login'];?></a></li>
                        <li><a href = "logout.php">Log Out</a></li>
                    </ul>
                </nav>
                <img src = "images/cart.png" width = "30px" height = "30px">
            </div>
        </div>
        
        <div class = "small-container">
        <h2 class = "title"> Shopping Cart</h2>
        <div class="row">
        <?php
		$connect = mysqli_connect('localhost', 'jesse', 'Truedat12','clothes');
		$query = 'SELECT * FROM product ORDER BY product_id ASC';
		$result = mysqli_query($connect,$query);
		
		if($result):
			if(mysqli_num_rows($result)>0):
				while($product = mysqli_fetch_assoc($result)):
					?>
                    <div class="column_4">
                        <form method = "post" action = "cart4.php?action=add&product_id=<?php echo $product['product_id']?>">
                        
                        <img src = "<?php echo "images/".$product['product_image'];?>">
                        <h4><?php echo $product['product_description'];?></h4>
                        <h4><?php echo $product['unit_price'];?></h4>
                        <input type = "text" name = "quantity" value = "1">
                        <input type = "hidden" name = "name" value ="<?php echo $product['product_description'];?>" >
                        <input type = "hidden" name = "price" value ="<?php echo $product['unit_price'];?>" >
                        <input type = "submit" name = "add_to_cart" class = "btn" value = "Add to Cart">
                    </div>
                        </form>
                   
                    <?php
                endwhile;
            endif;
        endif;
                ?>
             <div class="small-container cart_page">
            <table>
                <tr><th colspan = "5"><h3>Order Details</h3></th></tr>
                <tr>
                    <th width = "40%">Product Name</th>
                    <th width = "10%">Quantity</th>
                    <th width = "20%">Price</th>
                    <th width = "15%">Total</th>
                    <th width = "5%">Action</th>
                </tr>
                <?php
                if(!empty($_SESSION['shopping_cart'])):
                    $total = 0;

                    foreach($_SESSION['shopping_cart'] as $key => $product):
                ?>
                <tr>
                    <td><?php echo $product['name'];?></td>
                    <td><?php echo $product['quantity'];?></td>
                    <td><?php echo $product['price'];?></td>
                    <td><?php echo number_format($product['quantity']*$product['price'],2);?></td>
                    <td>
                        <a href="cart4.php?action=delete&product_id=<?php echo $product['product_id'];?>">
                            <button class = "btn">Remove</button>
                        </a>
                    </td>
                </tr>
                <?php
                    $total = $total + ($product['quantity'] * $product['price']);
                    endforeach;
                ?>
                <tr>
                    <td colspan = "3" align = "right">Total</td>
                    <td align = "right">Ksh<?php echo number_format($total,2);?></td>
                    <td></td>
                </tr>
                <td colspan = "5">
                <?php    
                    if(isset($_SESSION['shopping_cart'])):
                    if(count($_SESSION['shopping_cart'])>0):
                    ?>
                    <a href="checkout.php" class = "btn">Proceed to Checkout</a>
                    <?php endif; endif;?>
                </td>
                <tr>
                    <?php
                    endif;
                    ?>
                </tr>
            </table>
            
            </div>
    
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