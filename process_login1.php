<?php
  session_start();
  
  require("connection.php");                  
$message = "";
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user_details WHERE username= '$username' AND `password`= '$password'";
    $result = mysqli_query($conn,$query);


    if(mysqli_num_rows($result) > 0){
       while($row = mysqli_fetch_assoc($result))
       {
        if($row['usertype'] == 'admin')
    {
        $_SESSION['login'] = $row["username"];
        header('location:admin page.php');
    }else{
        $_SESSION['login'] = $row["password"]; 
        header('location:index2.php');
    }

       } 
    }
    else{
        header("location:login.php");
    }
}


?>