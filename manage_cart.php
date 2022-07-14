<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['Add_to_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
           $my_items = array_column($_SESSION['cart'], 'Item_Name');
           if(in_array($_POST['Item_Name'], $my_items))
           {
            echo "<script>
            alert('Item already added');
            window.location.href='mycart.php';
            </script>";

           }
           else
           {
           $count = count($_SESSION['cart']);
           $_SESSION['cart'][$count] = array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'], 'Quantity'=>1);
           echo "<script>
                alert('Item added');
                window.location.href='mycart.php';
                </script>";
           }
        }
        else
        {
            $_SESSION['cart'][0] = array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'], 'Quantity'=>1);
            echo "<script>
                alert('Item added');
                window.location.href='mycart.php';
                </script>";
        }
    }
    if(isset($_POST['Remove_Item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Item_Name']==$_POST['Item_Name'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "<script>
                alert('Item Removed');
                window.location.href='mycart.php';
                </script>";
            }
        }
    }
    if(isset($_POST['Mod_Quantity']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Item_Name']==$_POST['Item_Name'])
            {
                $_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];
        
                echo "<script>
                window.location.href='mycart.php';
                </script>";
            }
        }
    }
}


?>
