 <section class="content-header">
          <h1>
            Edit Service
            <small></small>
          </h1>
          
        </section>
 <!-- Main content -->
        <section class="content">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Service</h3>
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
                     $select = "select * from services where id = '$_GET[id]'";
                        $res = mysqli_query($con, $select);
                        $data = mysqli_fetch_assoc($res);  
                    ?>
                    <div class="form-group">
                      <label>Service Name</label>
                      <input type="text" class="form-control" required name="name" value="<?php echo $data['name']; ?>">
                    </div>
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
  $name=mysql_real_escape_string($_POST['name']);
  $query="update services set name='$name' where id = '$_GET[id]'";
  mysqli_query($con, $query)or die(mysqli_error($con));
  header("location:main.php?pg=editService&id=$_GET[id]&s=101");
}
?>
