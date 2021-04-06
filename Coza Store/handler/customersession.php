<?php 
if(empty($_SESSION['email'] AND $_SESSION['password'])) {
    echo "<script>
    alert ('Please Log On');
    window.location.href='customerforms.php';
    </script>";
}



?>