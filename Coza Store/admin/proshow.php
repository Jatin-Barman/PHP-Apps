<!DOCTYPE html>
<html>
<?php
include "adminpartials/head.php" 
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-9">
            
          <?php
            include "../partials/config.php";

            $id=$_GET['pro_id'];
            $sql="SELECT * FROM products WHERE id=$id";
            $query=mysqli_query($link,$sql);
            $result=mysqli_fetch_assoc($query);
          ?>

          <h3>Name : <?php echo $result['name']?><hr><br>
          <h3>Price : <?php echo $result['price']?><hr><br>
          <h3>Description : <?php echo $result['description']?><hr><br>
            <img src="<?php echo $result['picture'] ?>" alt="No File" style="height:300px;width:300px">
            </div>
    <!-- Main content -->
    <section class="content">
  
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
 include "adminpartials/footer.php"
 ?>
</body>
</html>
