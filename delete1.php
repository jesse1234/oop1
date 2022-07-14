<?php
require('connection.php');

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM product WHERE `product_id`=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Delete Successful";
        header('location:view_product1.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>