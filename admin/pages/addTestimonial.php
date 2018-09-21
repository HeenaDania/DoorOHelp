 <section class="content-header">
          <h1>
            Testimonials
          </h1>
          
        </section>
 <!-- Main content -->
        <section class="content">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Testimonial</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="box-body">
                    <?php if (isset($_GET['s']) && $_GET['s']==101) {
                      ?>
                      <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <p><i class="icon fa fa-check"></i> Data Uploaded Sucessfully ...</p>
                      </div>
                     <?php } ?>
                    <div class="form-group">
                      <label>User Name</label>
                      <input type="text" class="form-control" required name="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label>Feedback</label>
                      <textarea class="form-control" required name="feedback" placeholder="Enter Feedback"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">User Profile Pic</label>
                      <input type="file"  name="img" required>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="add" class="btn btn-primary" style="width: 100%">Add</button>
                  </div>
                </form>
              </div>


          <!-- Your Page Content Here -->

        </section><!-- /.content -->
<?php 
if (isset($_POST['add'])) {
  $userName=mysql_real_escape_string($_POST['name']);
  $feedback=mysql_real_escape_string($_POST['feedback']);
  $name = $_FILES["img"]["name"];
  $size = $_FILES["img"]["size"];
  $type = $_FILES["img"]["type"];
  $temp_name = $_FILES["img"]["tmp_name"];
  $location='./../images/';
  $path=$location.$name;

  if (move_uploaded_file($temp_name,$path)){ 
    $query="insert into testimonials (name,image,feedback) VALUES ('$userName','$path','$feedback')";
    mysqli_query($con,$query) or die(mysqli_error($con));
  }
    header("location:main.php?pg=addTestimonial&s=101");
  }
?>