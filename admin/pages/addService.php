 <section class="content-header">
          <h1>
            Service
          </h1>
          
        </section>
 <!-- Main content -->
        <section class="content">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Service</h3>
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
                      <label>Service Name</label>
                      <input type="text" class="form-control" required name="name" placeholder="Enter Service Name">
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
  $name=mysql_real_escape_string($_POST['name']);
  $query="insert into services (name) VALUES ('$name')";
    mysqli_query($con,$query) or die(mysqli_error($con));
    header("location:main.php?pg=addService&s=101");
  }
?>