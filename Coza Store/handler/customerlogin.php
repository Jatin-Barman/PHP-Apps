<?php
session_start();

if(isset($_POST['login'])){

include "../partials/config.php";

$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM customers WHERE username='$email' AND password='$password'";
$result=mysqli_query($link,$sql);
$final=mysqli_fetch_assoc($result);

$_SESSION['email']=$final['username'];
$_SESSION['password']=$final['password'];

$_SESSION['customerid']=$final['id'];

if ($email=$final['username'] AND $password=$final['password']){

    header('location: ../cart.php');
}else{
    echo "<script>
    alert ('Credentials are wrong');
    window.location.href='../customerforms.php';
    </script>";
}


}

?>


