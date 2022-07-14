<?php
include "process_login1.php";
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
                        <li><a href = "register.php">Sign Up</a></li>
                       
                    </ul>
                </nav>
                <img src = "images/cart.png" width = "30px" height = "30px">
            </div>
        </div>
        </div>
        
        <!----account page---->
        <div class="account_page">
            <div class="container">
                <div class="row">
                    <div class="column_2">
                        <img src = "images/picture.png" width = "100%">
                    </div>
                    <div class="column_2">
                       <div class="form_container">
                            <div class="form_btn">
                                <span>Login</span>
                            </div>
    
                            <form class = "register_form" action = "process_login1.php" method = "post" >
                                <input type = "text" placeholder = "Username" name = 'username'>
                                <input type = "password" placeholder = "Password" name = "password">
                                <input type = "text" placeholder = "role" name = "usertype">
                                <button type = "submit" class = "btn" name = "login">Login</button>
                                <p>Dont have an account? </p>
                                <a href = "user page.php">Register</a>
                                <a href = "admin page.php">Admin Login</a>
                            </form>
                       </div>
                    </div>
                </div>
                
            </div>
        </div>

  
   
   
   <?php 
   include_once('footer.php');
   ?>
</body>
</html>