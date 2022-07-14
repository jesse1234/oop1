<?php

function emptyInputSignUp($username,$password,$email,$age,$gender,$message){
    $result;
    if(empty($username) || empty($password) || empty($email) || empty($age) || empty($gender) || empty($message)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUsername($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $result = true;
}
else{
    $result = false;
}
return $result;
}

function usernameExists($conn, $username,$email) {
    $sql = "SELECT * FROM users WHERE ID = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ./user page.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,'ss',$username.$email);
    mysqli_stmt_execute($stmt);
      
      $resultdata= mysqli_stmt_get_result($stmt);

      if($row = mysqli_fetch_assoc($resultdata)){
            return $row;
      }else{
        $result = false;
        return $result;
      }
      mysqli_stmt_close($stmt);
    }

    

    function createUser($conn,$username,$password,$email,$age,$gender,$message) {
        $sql = "INSERT INTO `users`(`username`, `password`, `email`, `age`, `gender`, `message`) VALUES (?, ?. ?, ?, ?, ?); ";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ./user page.php?error=stmtfailed");
            exit();
        }
    
        $hashedpass = password_hash($password,PASSWORD_DEFAULT);
        
        mysqli_stmt_bind_param($stmt,'ssssss',$username,$hashedpass,$email,$age,$gender,$message);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_close($stmt);
          header("Location: ./user page.php?error=none");
        }
    
        
