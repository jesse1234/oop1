<?php
require('connection.php');

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM user_orders WHERE `order_id`=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Delete Successful";
        header('location:view_orders.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>