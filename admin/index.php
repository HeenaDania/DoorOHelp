<?php ob_start();
session_start();
include '../config.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Door O Help- Admin | Log in</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
    </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="index.php"><b>Door O Help</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <?php if(isset($_GET['m'])){
        if ($_GET['m']==500) {
          ?>
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><i class="icon fa fa-sign-out"></i> You Have Been Logged out !!</p>
       </div>
       <?php }elseif ($_GET['m']==200) { ?>
       <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><i class="icon fa fa-sign-out"></i> Please Login to Continue !!</p>
       </div>
        <?php }elseif ($_GET['m']==300) { ?>
       <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><i class="icon fa fa-sign-out"></i> Incorrect Password !!</p>
       </div>
       <?php }elseif ($_GET['m']==800) { ?>
      <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <p><i class="icon fa fa-check"></i> Password has been reset</p>
          </div>
       <?php }elseif ($_GET['m']==900) { ?>
       <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><i class="icon fa fa-check"></i> Password reset link has been send to your email</p>
       </div>
       <?php }} ?>
        <form action="" method="post">
          <div class="form-group has-feedback">
              <input type="text" class="form-control" name="username" placeholder="Username" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            
            <div class="col-xs-12">
              <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button><br>
              <a href="pages/forgetPassword.php"><u><font color='red'>Forget Password</font></u></a>
            </div><!-- /.col -->
          </div>
        </form>

        
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  
   
  </body>
</html>
<?php 
if (isset($_POST['login'])) {
  $username=mysql_real_escape_string($_POST['username']);
  $password=mysql_real_escape_string(base64_encode($_POST['password']));
  $query="select * from admin where username='$username' and password='$password'";
  $exe=mysqli_query($con,$query) or die(mysqli_error($con));
  if (mysqli_num_rows($exe)==1) {
  $data=mysqli_fetch_array($exe);
  if ($data['username']==$username && $data['password']==$password) {
    $_SESSION['admin']=$data['username'];
    header("location:main.php");
  }
 }else header("location:index.php?m=300");
}
?>