
<?php
if (isset($_POST['submit']) && isset($_FILES['product_image'])){
	$file = $_FILES['product_image'];
	$file_name = $_FILES['product_image']['name'];
	$file_size = $_FILES['product_image']['size'];
	$file_tmpname = $_FILES['product_image']['tmp_name'];
	$file_error = $_FILES['product_image']['error'];
	
	$file_ext = explode('.',$file_name);
	$file_actualext = strtolower(end($file_ext));
	
	$allowed = array('jpg','png','jpeg');
	
	if(in_array($file_actualext,$allowed)){
		if($file_error===0){
			if($file_size <1000000){
				$file_destination = 'images/'.$file_name;
				move_uploaded_file($file_tmpname,$file_destination);
			}else{
				echo "Your file is too big";
			}
		}else{
			echo "There was an error uploading your file";
		}
	}else{
		echo "You cant upload files of that type";
	}
	
}
$db = mysqli_connect("localhost","jesse","Truedat12","clothes");
	$product_id = $_POST["product_id"];
	$product_name = $_POST["product_name"];
	$product_desc = $_POST["product_desc"];
	$product_image = $_FILES["product_image"]["name"];
	$categories = $_POST["category"];
	$unit_price = $_POST["unit_price"];
	$avb_quantity = $_POST["avb_quantity"];
	$created_at = $_POST["created_at"];
	$updated_at = $_POST["updated_at"];
	$added_by = $_POST["added_by"];
	$deleted = $_POST["deleted"];

$sql = "UPDATE `product` SET `product_name`='$product_name',`product_description`='$product_desc',`product_image`='$product_image',`categories`='$categories',`unit_price`='$unit_price',`available_quantity`='$avb_quantity',`created_at`='$created_at',`updated_at`='$updated_at',`added_by`='	$added_by',`is_deleted`='	$deleted' WHERE `product_id` = '" .$product_id."'";
if (mysqli_query($db,$sql)){
	echo "New record created successfully";
    header("location:view_product1.php");
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);

?>
   