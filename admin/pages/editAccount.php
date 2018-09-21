 <section class="content-header">
          <h1>
            Edit Account
            <small></small>
          </h1>
          
        </section>
 <!-- Main content -->
        <section class="content">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">My Account</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                  <?php 
                  if (isset($_SESSION['admin'])) {
                    $uname=$_SESSION['admin'];
                    if (isset($_GET['s']) && $_GET['s']==101) {
                    ?>
                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <p><i class="icon fa fa-check"></i> Data Modified Sucessfully ...</p>
                    </div>
                    <?php } elseif (isset($_GET['s']) && $_GET['s']==103) {
                      ?>
                      <div class="alert alert-warning alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <p><i class="icon fa fa-sign-out"></i> Please type a valid email id !!</p>
                      </div>
                      <?php } elseif (isset($_GET['s']) && $_GET['s']==102) {
                      ?>
                      <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <p><i class="icon fa fa-sign-out"></i> Password donot matches!!</p>
                     </div>
                      <?php }
                     $select = "select * from admin where username = '$uname'";
                        $res = mysqli_query($con, $select);
                        $data = mysqli_fetch_assoc($res);  
                        $pass=base64_decode($data['password']);
                    ?>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" required name="username" value="<?php echo $data['username']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Email Id</label>
                      <input type="text" class="form-control" required name="email" value="<?php echo $data['email']; ?>">
                    </div>
                    <div class="form-group">
                    
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" required name="password" value="<?php echo $pass; ?>">
                    </div>
                    <div class="form-group">
                      <label>Confirm Password</label>
                      <input type="password" class="form-control" required name="cpassword" value="<?php echo $pass; ?>">
                    </div>
                    <div class="form-group">
                    <div class="pull-left image">
                    <label>Image</label>
                      <input type="file" id="exampleInputFile" name="img">
                      <p class="help-block">Attached Image</p>
                      <img src="<?php echo $data['image']; ?>" class="img-circle" alt="Admin image" style="width: 20%;" ></div>
                    </div>
                    <?php } ?>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="edit" class="btn btn-primary" style="width: 100%;">Edit</button>
                  </div>
                </form>
               </div>


          <!-- Your Page Content Here -->

        </section><!-- /.content -->
<?php 
if (isset($_POST['edit'])) {
  $username=mysql_real_escape_string($_POST['username']);
  $email=mysql_real_escape_string($_POST['email']);
  $password=mysql_real_escape_string(base64_encode($_POST['password']));
  $cpassword=mysql_real_escape_string(base64_encode($_POST['cpassword']));
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
    {
     header("location:main.php?pg=editAccount&uname=$username&s=103");
    }
    else{
  if ($cpassword==$password) {

    $name = $_FILES["img"]["name"];
  $size = $_FILES["img"]["size"];
  $type = $_FILES["img"]["type"];
  $temp_name = $_FILES["img"]["tmp_name"];
  if (isset($name) && !empty($name)){
    
    $location='./../images/';
    $path=$location.$name;
    if (move_uploaded_file($temp_name,$path)){
    $query="update admin set username='$username', password='$password', email='$email',image='$path' where username='$uname'";
    }
    }
    else{
        $query="update admin set username='$username', password='$password', email='$email' where username='$uname'";
    }

     mysqli_query($con, $query)or die(mysqli_error($con));
    $_SESSION['admin']=$username;
     header("location:main.php?pg=editAccount&uname=$username&s=101");
  }
  else {
    header("location:main.php?pg=editAccount&uname=$username&s=102");
  }
}}
?>