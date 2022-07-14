<?php
session_start();
require("connection.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
        $query1 = "INSERT INTO `order_manager`(`username`, `phone_no`, `address`, `pay_mode`) VALUES ('$_POST[username]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
        if(mysqli_query($conn,$query1))
        {   
            $order_id = mysqli_insert_id($conn);
            $query2 = "INSERT INTO `user_orders`(`order_id`, `item_name`, `price`, `quantity`) VALUES (?,?,?,?)";
            $stmt = mysqli_prepare($conn,$query2);
            
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isii",$order_id,$Item_Name,$Price,$Quantity);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $Item_Name=$values['Item_Name'];
                    $Price=$values['Price'];
                    $Quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo "<script>
                alert('Order Placed');
                window.location.href=index2.php;
                </script>";
            }
            else
            {
                echo "<script>
                alert('SQL Query Error');
                window.location.href=mycart.php;
            </script>";
            }
        }
        else
        {
            echo "<script>
                alert('SQL Query Error');
                window.location.href=mycart.php;
            </script>";
        }
    }
}
?>