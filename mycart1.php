<?php
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
                        <li><a href = "index2.php">Men</a></li>
                        <li><a href = "index_women.php">Women</a></li>
                        <li><a href = "">Welcome <?php echo $_SESSION['login'];?></a></li>
                        <li><a href = "logout.php">Log Out</a></li>
                    </ul>
                </nav>
                <img src = "images/cart.png" width = "30px" height = "30px">
            </div>
        </div>
        
        <div class = "small-container">
        <h2 class = "title"> Shopping Cart Table</h2>
        <div class="row">
             <div class="small-container cart_page">
            <table>
            <thead>    
            <tr><th colspan = "7"><h3>Order Details</h3></th></tr>
                <tr>
                    <th>Serial No</th>
                    <th width = "50%">Product Name</th>
                    <th width = "10%"></th>
                    <th width = "20%">Price</th>
                    <th width = "20%">Quantity</th>
                    <th width = "30%">Total</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            if(isset($_SESSION['cart']))
            {
                foreach($_SESSION['cart'] as $key => $value)
            {
                $sr = $key+1;
                ?>
                <tr>
                <td><?php echo $sr?></td>    
                <td><?php echo $value['Item_Name']?><td>
                    <td><?php echo $value['Price']?><input type = "hidden" class = "iprice" value = "<?php echo $value['Price']?>"></td>
                    <td><input type = 'number' class = "iquantity" value = "<?php echo $value['Quantity']?>"  onchange = "subTotal();" min = '1' max = '10'></td>
                    <td class = "itotal"><td>
                    <td>
                    <form action = 'manage_cart1.php' method = 'POST'>
                    <button name = 'Remove_Item' class = 'btn'>Remove</button>
                    <input type = 'hidden' name = 'Item_Name' value ="<?php echo $value['Item_Name']?>" >
                    </form>
                    <td>
                
                </tr>
                <?php    
            }
            }
            
            ?>
            </tbody>
            </table>
            </div>

            <div>
                <h3>Total</h3>
                    <h4 id = 'gtotal'></h4>
                    <br>
                <?php 
                    if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                    {
                ?>
                    <form action="purchase.php" method = "POST">
                    <div>
                        <label>Username</label>
                        <input type="text" name = 'username' required>
                    </div>
                    <div>
                        <label>Phone No.</label>
                        <input type="number" name = 'phone_no' required>
                    </div>
                    <div>
                        <label>Address</label>
                        <input type="text" name = 'address' required>
                    </div>
                    <div>
                        <label>Pay Mode</label>
                        <input type="text" name = 'pay_mode' required>
                    </div>
                    <button class = "btn" name = "purchase">Make Purchase</button>
                </form>
                   <?php 
                    }
                    ?>
            </div>
    
        </div>
    </div>

    <script>
        var gt=0;
        var iprice=document.getElementsByClassName('iprice');
        var iquantity=document.getElementsByClassName('iquantity');
        var itotal=document.getElementsByClassName('itotal');
        var gtotal=document.getElementById('gtotal');

        function subTotal()
        {
            gt=0;
            for(i=0;i<iprice.length;i++)
            {
                itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                
                gt=gt+(iprice[i].value)*(iquantity[i].value);
            }
            gtotal.innerText=gt;
        }

        subTotal();

    </script>



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
