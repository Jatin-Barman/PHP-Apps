<?php
session_start();
if(empty($_SESSION['cart'])) {
    $_SESSION['cart']=array();
}
array_push($_SESSION['cart'],$_GET['cart_id']);

?>
<p>Addition Successful <a href="cartview.php">Click To View</a></p>