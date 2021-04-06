<?php
include "../partials/config.php";
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];
if($password==$password2){
   #code...
   $sql="INSERT INTO customers(username,password) VALUES ('$email','$password')";
   $query=mysqli_query($link,$sql);
   echo "<script>
    alert('You Are Registered...');
    window.location.href='../customerforms.php';
    </script>";
}else{
    echo "<script>
    alert('Password did not match');
    window.location.href='../customerforms.php';
    </script>";
}




?>