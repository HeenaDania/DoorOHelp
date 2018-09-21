 <section class="content-header">
          <h1>
            Verify Professional
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
                      <p><i class="icon fa fa-check"></i> Professional Verified Sucessfully ...</p>
                    </div>
                    <?php }
                     $select = "select * from professionals where id = '$_GET[id]'";
                        $res = mysqli_query($con, $select);
                        $data = mysqli_fetch_assoc($res);  
                    ?>
                    <div class="form-group">
                      <label>Full Name</label>
                      <input type="text" class="form-control" required name="name" value="<?php echo $data['name']; ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control" required name="address" value="<?php echo $data['address']; ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label>Primary Profession</label>
                      <select class="form-control" name="profession" required readonly>
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
                      <label>Experience</label>
                      <input type="text" class="form-control" required name="experience" value="<?php echo $data['experience']; ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label>Phone Number</label>
                      <input type="number" class="form-control" required name="phone" value="<?php echo $data['phone']; ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" required name="email" value="<?php echo $data['email']; ?>">
                    </div>
                    <div class="form-group">
                    <div class="pull-left image">
                      <label>Profile Pic.</label>
                    <img src="<?php echo $data['image']; ?>" alt="Image Thumb" style="width: 60%;">
                    </div>
                    </div>
                  </div>
                    <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="verify" class="btn btn-primary" style="width: 100%;">Verified</button>
                  </div>
                </form>
               </div>


          <!-- Your Page Content Here -->

        </section><!-- /.content -->
<?php 
if (isset($_POST['verify'])) {
    $query="update professionals set verified=1 where id = '$_GET[id]'";
    mysqli_query($con, $query)or die(mysqli_error($con));

            $to      = $email; 
            $subject = 'Successfull Registration'; // Give the email a subject 
            $message = '
                         
                        Successfull Registration :

                        This message is to inform you that you have been registered successfully with the Door-O-Help.
                        Now you will be available to our users to provide services to them.
                         
                        '; // Our message above including the link
                                             
                        $headers = 'From:contact@thelegalway.com' . "\r\n"; // Set from headers
                        mail($to, $subject, $message, $headers); // Send our email
      header("location:main.p   hp?pg=verifyProfessional&id=$_GET[id]&s=101");
}
?>





