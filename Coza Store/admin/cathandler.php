<?php
include "../partials/config.php";
$categories=$_POST['name'];

$sql="INSERT INTO categories(name) VALUES ('$categories')";

$run=mysqli_query($link,$sql);
// $link->query($sql);
header('location:productsshow.php')
?>