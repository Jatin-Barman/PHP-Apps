<?php
include "../partials/config.php";
$email=$_POST['email'];
$msg=$_POST['msg'];

$sql="INSERT INTO contact(email,msg) VALUES ('$email','$msg')";

$run=mysqli_query($link,$sql);
// $link->query($sql);

?>