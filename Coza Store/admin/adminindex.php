<!DOCTYPE html>
<html>
<?php
include "adminpartials/head.php" ;
include "adminpartials/session.php"; 
?>   

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
<?php
include "adminpartials/header.php"
?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
include "adminpartials/sidebar.php"
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="adminindex.php">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <a href="product.php">
      <button style="color: green;">Add Products</button>            
      </a><hr>
      <a href="categories.php">
      <button style="color: green;">Add category</button>            
      </a><hr>
      <a href="orders.php">
      <button style="color: green;">View Order</button>            
      </a><hr>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
 include "adminpartials/footer.php"
 ?>
</body>
</html>
