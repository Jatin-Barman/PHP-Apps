<?php
include('../partials/config.php');
$newid=$_GET['del_id'];

$sql="DELETE from products WHERE id='$newid'";

if(mysqli_query($link,$sql)){
    header('location:productsshow.php');
}else{
    echo "Not Delete";
}






?>