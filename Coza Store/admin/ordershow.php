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

                            <?php
                            include "../partials/config.php";

                            $id = $_GET['pro_id'];
                            $sql = "SELECT * FROM orders WHERE id=$id";
                            $query = mysqli_query($link, $sql);
                            $result = mysqli_fetch_assoc($query);
                            ?>

                            <h3>Customer No : <?php echo $result['customer_id'] ?></h3>
                            <hr><br>
                            <h3>Total : <?php echo $result['total'] ?></h3>
                            <hr><br>
                            <h3>Address : <?php echo $result['address'] ?></h3>
                            <hr><br>
                        </div>
                        <div class="col-md-9">

                            <?php
                            

                            $id = $_GET['pro_id'];
                            $sql = "SELECT * FROM order_details WHERE id=$id";
                            $query = mysqli_query($link, $sql);
                            $result = mysqli_fetch_assoc($query);
                            ?>

                            <h3>Product No : <?php echo $result['product_id'] ?></h3>
                            <hr><br>
                            <h3>Quantity : <?php echo $result['quantity'] ?></h3>
                            <hr><br>

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