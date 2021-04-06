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
    <section class="content" >
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="producthandler.php" method="POST" enctype="multipart/form-data">
                  <h1>Products</h1>
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Product Name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" placeholder="Enter Product Price" name="price">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="file">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="5" placeholder="Enter Description" name="description"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="category">Category</label>
                     <select id="category" name="category">
                       <?php
                          include "../partials/config.php";
                          $cat="SELECT * FROM categories";
                          $result=mysqli_query($link,$cat);
                          while($row=mysqli_fetch_assoc($result)){
                         echo "<option value=".$row['id'].">".$row['name']."</option>";
                        }
                        ?>
                     </select> 
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
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
