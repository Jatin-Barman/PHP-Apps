<?php 

session_start();

include "../partials/config.php";

$total=$_POST['total'];

$phone=$_POST['phone'];

$address=$_POST['address'];

$customerid=$_SESSION['customerid'];
$payment=$_POST['payment'];

$sql="INSERT INTO orders(customer_id,address,phone,total,pay_method) VALUES ('$customerid','$address','$phone','$total','$payment')";

$query=mysqli_query($link,$sql);


$sql2="SELECT id FROM orders order by id DESC limit 1";
$result=mysqli_query($link,$sql);
$final=mysqli_fetch_assoc($result);
$orderid=$final['id'];


foreach($_SESSION['cart'] as $key => $value) {
    $proid=$value['item_id'];
    $quantity=$value['quantity'];

    $sql="INSERT INTO order_details(order_id,product_id,quantity) VALUES ('$orderid','$proid','$quantity')";
    $connect=mysqli_query($link,$sql);
   }if($payment=="paypal"){
    $_SESSION['total']=$total;
    header('location: paypal.php');
  }else{
   echo "<script>
   alert('YOUR ORDER IS PLACED');
   window.location.href='../index.php';
   </script>";
}
unset($_SESSION['cart']);
?>