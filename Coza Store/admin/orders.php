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
include "adminpartials/session.php";
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
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-9">
              <div style="margin-bottom: 50px;">

                
            
          <?php
            include "../partials/config.php";

            $sql="SELECT * FROM orders";
            $query=mysqli_query($link,$sql);
            while($result=mysqli_fetch_assoc($query)){?>

               <a href="ordershow.php?pro_id=<?php echo $result['id']?>">
               
               <h3><?php echo $result['id']?>:<?php echo $result['phone']?><br> Total:<?php echo $result['total']?></h3><br>
                
                </a>
                
                <a href="orderdelete.php?del_id=<?php echo $result['id'] ?>">
                 <button style="color: red;">Delete</button>
             </a><hr>


           <?php }
          ?>

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
