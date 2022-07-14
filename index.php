<?php
require("connection.php");
$sql = "SELECT * FROM `product` ";
$result = mysqli_query($conn,$sql);
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
                        <li><a href = "index_men.php">Men</a></li>
                        <li><a href = "index_women.php">Women</a></li>
                        <li><a href = "register.php">Sign Up</a></li>
                        <li><a href = "login2.php">Login</a></li>
                    </ul>
                </nav>
                <img src = "images/cart.png" width = "30px" height = "30px">
            </div>
        </div>
        <div class = "row">
            <div class="column_2">
                <h1>So Fresh, So Clean</h1>
                <p>Experience the best active and sportsware from our finest collection.<br></br>
                    Keep up to date with the latest trends and get fit in the process. Your 
                    time has come.
                </p>
                <a href = "" class = "btn">Explore Now &#8594;</a>
            </div>
            <div class = "column_2">
                <img src = "images/picture.png">
            </div>
        </div>
    </div>
    

    <!-----Categories----->
    <div class = "categories">
        <div class = "small-container">
            <div class = "row">
                <div class = "column_3">
                    <img src = "images/category-1.jpg">
                </div>
                <div class = "column_3">
                    <img src = "images/category-2.jpg">
                </div>
                <div class = "column_3">
                    <img src = "images/category-3.jpg">
                </div>
        </div>
    </div>

    <!----Featured Products---->
    <div class = "small-container">
        <h2 class = "title">Featured Products</h2>
        <div class="row">
        <?php if(mysqli_num_rows($result)>0)
                {
                    foreach($result as $row)
                    {
                        
                        ?>
                               <div class="column_4">
                               <a href = "<?php printf('%s?product_id=%s','product_details.php',$row['product_id'])?>"><img src = "<?php echo "images/".$row['product_image'];?>"></a>
                                <h4><?php echo $row['product_description']; ?></h4>
                        
                                <p><?php echo $row['unit_price']; ?></p>
                                <a href = "login2.php" class = "btn">Add To Cart</a>
                                </div>
                        <?php
                    }
                }
                else
                {
                    ?>

                    <?php
                }
			?>
            <div class="column_4">
    
            </div>
    
        </div>
    </div>
       
       

   
    <!----- offer ----->
    <div class = "offer">
        <div class="small-container">
            <div class="row">
                <div class="column_2">
                  <img src = "images/exclusive.png" class = "offer-img">  
                </div>
                <div class = "column_2">
                    <p>Exclusively available on Kimono</p>
                    <h1>Smart Band 4</h1>
                    <small>The Mi Smart Band 4 features a 39.9% larger
                        (than Mi Band 3) AMOLED color full-touch display with
                        adjustable brightness, so everything is clear as can
                        be.</small><br></br>
                        <a href = '' class = "btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>
    
    <!----testimonial---->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="column_3">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 
                        the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        
                        <img src = "images/user-1.png">
                        <h3>Mary Sue</h3>
                </div>
                <div class="column_3">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 
                        the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        
                        <img src = "images/user-2.png">
                        <h3>John Smith</h3>
                </div>
                <div class="column_3">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 
                        the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        
                        <img src = "images/user-3.png">
                        <h3>Sarah Parker</h3>
                </div>
            </div>
        </div>
    </div>

    <!----bransds---->
    <div class="brands">
        <div class = "small-container">
            <div class="row">
                <div class="column_5">
                    <img src = "images/logo-coca-cola.png">
                </div>
                <div class="column_5">
                    <img src = "images/logo-godrej.png">
                </div>
                <div class="column_5">
                    <img src = "images/logo-oppo.png">
                </div>
                <div class="column_5">
                    <img src = "images/logo-paypal.png">
                </div>
                <div class="column_5">
                    <img src = "images/logo-philips.png">
                </div>
            </div>
        </div>
    </div>



<?php
include_once("footer.php");
?>
</body>
</html>
