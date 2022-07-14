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
                        <li><a href = "products.html">Men</a></li>
                        <li><a href = "products_women.html">Women</a></li>
                        <li><a href = "products_kids.html">Children</a></li>
                        <li><a href = "">Account</a></li>
                    </ul>
                </nav>
                <img src = "images/cart.png" width = "30px" height = "30px">
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
                                <span>Register</span>
                            </div>
    
                            <form class = "register_form" action = "process_register.php" method = "post">
                                <input type = "text" placeholder = "Username" name = "username" id = "username">
                                <input type = "password" placeholder = "Password" name = "password">
                                <input type = "text" placeholder = "Email" name = "email">
                                <input type = "number" placeholder = "Age" name = "age">
                                <label for = "gender">Gender:</label>
                                <input type = "radio" name = "gender" id = "Male" value = "Male">Male
                                <input type = "radio" name = "gender" id = "Female" value = "Female">Female
                                <input type = "message" placeholder = "Message" name = message>
                                <button type = "submit" class = "btn">Register</button>
                                <p>Already a user? </p>
                                <a href = "user.html">Login</a>
                            </form>
                       </div>
                    </div>
                </div>
                
            </div>
        </div>

   <?php
        require_once("footer.php")

   ?>
</body>
</html>