<?php
include "../partials/config.php";
$name=$_POST['name'];
$price=$_POST['price'];
$description=$_POST['description'];
$category=$_POST['category'];

$target="../uploads/";
$file_path=$target.basename($_FILES['file']['name']);
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$file_store="../uploads/".$file_name;

move_uploaded_file($file_tmp,$file_store);

$sql="INSERT INTO products(name,price,picture,description,category_id) VALUES ('$name','$price','$file_name','$description','$category')";

$run=mysqli_query($link,$sql);
// $link->query($sql);
header('location:productsshow.php')

?>