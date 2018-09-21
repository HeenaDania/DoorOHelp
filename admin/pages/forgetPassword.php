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
        <a href="index.php"><b>Door O Help</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Enter you email id</p>
        <?php if (isset($_GET['m'])) {
          if ($_GET['m']==300) { ?>
          <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><i class="icon fa fa-sign-out"></i> Please type a valid email id !!</p>
       </div>
       <?php } elseif ($_GET['m']==305) { ?>
       <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><i class="icon fa fa-sign-out"></i> The email id you have entred is not registered!!</p>
       </div>
       <?php }}  ?>
        <form action="" method="post">
          <div class="form-group has-feedback">
              <input type="text" class="form-control" name="email" placeholder="Enter Email Id" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="row">
            
            <div class="col-xs-12">
              <button type="submit" name="send" class="btn btn-primary btn-block btn-flat">Mail Link</button>
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
if (isset($_POST['send'])) {
  $email=$_POST['email'];
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
    {
        header("location:forgetPassword.php?m=300");
    }
    else
    {
        $query = "select id FROM admin where email='".$email."'";
        $result = mysqli_query($con,$query);
        $Results = mysqli_fetch_array($result);
        $id=$Results['id'];
 
        if(count($Results)!=0)
        {
            $encrypt = ($Results['id']);
            $to      = $email; 
            $subject = 'Reset Password'; // Give the email a subject 
            $message = '
                         
                        Reset Passowrd :

                        Click on the link given below to to reset your password :

                        http://localhost/DOH/admin/pages/resetPassword.php?encrypt='.$encrypt.'
                         
                        '; // Our message above including the link
                                             
                        $headers = 'From:contact@thelegalway.com' . "\r\n"; // Set from headers
                        mail($to, $subject, $message, $headers); // Send our email
            header("location:../index.php?m=900");

        }
        else
        {
            header("location:forgetPassword.php?m=305");
        }
    }
}
?>