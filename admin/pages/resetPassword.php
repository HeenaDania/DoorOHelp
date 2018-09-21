<?php ob_start();
session_start();
include '../../config.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Door O Help- Admin | Log in</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="index.php"><b>Door O Help/b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Reset Your password</p>
        <form action="" method="post">
          <?php if (isset($_GET['msg']) && $_GET['msg']==4) {
          ?>
          <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <p><i class="icon fa fa-sign-out"></i> Password donot matches !!</p>
       </div>
          <?php } ?>
         <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Enter new password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button name="submit" type="submit" class="btn btn-primary btn-block btn-flat" style="margin-left:'20px';">Reset
              </button><br>
            <a href="../index.php"><u><font color='blue'>Login</font></u></a><br>

            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>

<?php
$encrypt=$_GET['encrypt'];
if (isset($_POST['submit'])) {
  $password= mysql_real_escape_string(base64_encode($_POST['password']));
  $c_password= mysql_real_escape_string(base64_encode($_POST['confirm_password']));
  if ($password!=$c_password) {
        header("location:resetPassword.php?encrypt=$encrypt&msg=4");
  } else {
    $query = "SELECT id FROM admin where (id)='$encrypt'";
    $result = mysqli_query($con,$query);
    $Results = mysqli_fetch_array($result);
    if (count($Results)>=1) {
      $query = "update admin set password='".$password."' where id='".$Results['id']."'";
        mysqli_query($con,$query);
        header("location:../index.php?m=800");
    }
    
  }
  
}
?>