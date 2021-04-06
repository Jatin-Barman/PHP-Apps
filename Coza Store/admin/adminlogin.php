<?php
session_start();
include "adminpartials/head.php";

if(isset($_POST['login'])){

include "../partials/config.php";

$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM admins WHERE username='$email' AND password='$password'";
$result=mysqli_query($link,$sql);
$final=mysqli_fetch_assoc($result);

$_SESSION['email']=$final['username'];
$_SESSION['password']=$final['password'];



if ($email=$final['username'] AND $password=$final['password']){

    header('location: adminindex.php');
}else{
    header('location: adminlogin.php');
}


}

?>
<div class="row">

<div class="col-sm-4">    
</div>


<div class="col-sm-4">
    <!-- Horizontal Form -->
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Admin Login</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->  
<form class="form-horizontal" action="adminlogin.php" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info" name="login">Sign in</button>
                </div>
                <!-- /.card-footer -->
              </form>  
</div>


<div class="col-sm-4">    
</div>

</div>