 <section class="content-header">
          <h1>
            Appointment
            <small></small>
          </h1>
          
        </section>
 <!-- Main content -->
        <section class="content">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Appointment</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <?php
                      $select = "select * from appointments where id = '$_GET[id]'";
                      $res = mysqli_query($con, $select);
                      $data = mysqli_fetch_assoc($res);  
                    ?>
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label>Date</label>
                      <input type="date" class="form-control" name="date" value="<?php echo $data['date']; ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label>Time</label>
                      <input type="time" class="form-control" name="time" value="<?php echo $data['time']; ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label>Lawyer</label>
                      <input type="text" class="form-control" name="lawyer" value="<?php echo $data['lawyer']; ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label>Message</label>
                      <textarea class="form-control" name="message" readonly><?php echo $data['message']; ?></textarea>
                    </div>
                  </div>
                    <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="back" class="btn btn-primary" style="width: 100%;">Back</button>
                  </div>
                </form>
               </div>


          <!-- Your Page Content Here -->

        </section><!-- /.content -->
<?php 
if (isset($_POST['back'])) {
  header("location:main.php?pg=listAppointments");
}
?>





