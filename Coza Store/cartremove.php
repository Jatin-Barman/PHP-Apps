<?php
session_start();
if(isset($_POST['remove'])) {
    foreach($_SESSION['cart'] as $key => $value)  {
        if($value['item_name']==$_POST['item_name']) {
            unset($_SESSION['cart'][$key]);#code...
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo "<script>
            alert('Item Removed');
            window.location.href='cart.php';
            </script>";
    }
    #code...
}

}




?>