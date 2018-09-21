 <section class="content-header">
          <h1>
            Edit Professional
            <small></small>
          </h1>
          
        </section>
 <!-- Main content -->
        <section class="content">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Professional</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                  <?php if (isset($_GET['s']) && $_GET['s']==101) {
                    ?>
                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <p><i class="icon fa fa-check"></i> Data Modified Sucessfully ...</p>
                    </div>
                    <?php }
                     $select = "select * from professionals where id = '$_GET[id]'";
                        $res = mysqli_query($con, $select);
                        $data = mysqli_fetch_assoc($res);  
                    ?>
                    <div class="form-group">
                      <label>Full Name</label>
                      <input type="text" class="form-control" required name="name" value="<?php echo $data['name']; ?>">
                    </div>
                    <div class="form-group">
                      <label>City</label>
                      <input type="text" class="form-control" required name="city" value="<?php echo $data['city']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Primary Profession</label>
                      <select class="form-control" name="profession" required>
                        <option disabled selected value="<?php echo $data['profession']; ?>"><?php echo $data['profession']; ?></option>
                        <?php
                          $get="select * from services";
                          $exe=mysqli_query($con,$get);
                          while($data1=mysqli_fetch_array($exe)){
                        ?>
                        <option value="<?php echo $data1['name']; ?>"><?php echo $data1['name']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Phone Number</label>
                      <input type="number" class="form-control" required name="phone" value="<?php echo $data['phone']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" required name="email" value="<?php echo $data['email']; ?>">
                    </div>
                    <div class="form-group">
                    <div class="pull-left image">
                      <label>Profile Pic.</label>
                      <input type="file" id="exampleInputFile" name="img">
                      <p class="help-block">Attached Image</p>
                    <img src="<?php echo $data['image']; ?>" alt="Image Thumb" style="width: 60%;">
                    </div>
                    </div>
                  </div>
                    <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="edit" class="btn btn-primary" style="width: 100%;">Edit</button>
                  </div>
                </form>
               </div>


          <!-- Your Page Content Here -->

        </section><!-- /.content -->
<?php 
if (isset($_POST['edit'])) {
  $fullName=mysql_real_escape_string($_POST['name']);
  $city=mysql_real_escape_string($_POST['city']);
  $profession=mysql_real_escape_string($_POST['profession']);
  $phone=mysql_real_escape_string($_POST['phone']);
  $email=mysql_real_escape_string($_POST['email']);
  $name = $_FILES["img"]["name"];
  $size = $_FILES["img"]["size"];
  $type = $_FILES["img"]["type"];
  $temp_name = $_FILES["img"]["tmp_name"];
  if (isset($name) && !empty($name)){
    $location='./../images/';
    $path=$location.$name;
    if (move_uploaded_file($temp_name,$path)){
    $query="update professionals set name='$fullName', city='$city', profession='$profession', phone='$phone', email='$email', image='$path' where id = '$_GET[id]'";
    }
    }
    else{
        $query="update professionals set name='$fullName', city='$city', profession='$profession', phone='$phone', email='$email' where id = '$_GET[id]'";
    }

     mysqli_query($con, $query)or die(mysqli_error($con));
     header("location:main.php?pg=editProfessional&id=$_GET[id]&s=101");
}
?>





