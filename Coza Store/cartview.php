<?php
session_start();
foreach($_SESSION['cart'] as $value) {
    echo '<pre>';
    echo $value;
    echo '<pre>';
    # code...
}
session_destroy();
?>