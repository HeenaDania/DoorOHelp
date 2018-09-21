 <section class="content-header">
          <h1>
            Edit Testimonial
            <small></small>
          </h1>
          
        </section>
 <!-- Main content -->
        <section class="content">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Testimonials</h3>
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
                     $select = "select * from testimonials where id = '$_GET[id]'";
                        $res = mysqli_query($con, $select);
                        $data = mysqli_fetch_assoc($res);  
                    ?>
                    <div class="form-group">
                      <label>User Name</label>
                      <input type="text" class="form-control" required name="name" value="<?php echo $data['name']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Feedback</label>
                      <textarea class="form-control" required name="feedback"><?php echo $data['feedback']; ?></textarea>
                    </div>
                    <div class="form-group">
                    <div class="pull-left image">
                      <label>User Profile Pic.</label>
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
  $userName=mysql_real_escape_string($_POST['name']);
  $feedback=mysql_real_escape_string($_POST['feedback']);
  $name = $_FILES["img"]["name"];
  $size = $_FILES["img"]["size"];
  $type = $_FILES["img"]["type"];
  $temp_name = $_FILES["img"]["tmp_name"];
  
  if (isset($name) && !empty($name)){
    $location='./../images/';
    $path=$location.$name;
    if (move_uploaded_file($temp_name,$path)){
    $query="update testimonials set name='$userName', feedback='$feedback', image='$path' where id = '$_GET[id]'";
    }
    }
    else{
    $query="update testimonials set name='$userName', feedback='$feedback' where id = '$_GET[id]'";
    }

     mysqli_query($con, $query)or die(mysqli_error($con));
     header("location:main.php?pg=editTestimonial&id=$_GET[id]&s=101");
}
?>





