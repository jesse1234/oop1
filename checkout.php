<?php
include_once('header.php');
?>
    
    <div class = "row">
    <?php
    if(!isset($_SESSION['username'])){
    include("login.php");
    }else{
        include("payment.php");
    }
    ?>
        </div>
<?php
include_once('footer.php')

?>