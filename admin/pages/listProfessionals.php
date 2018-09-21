 <section class="content-header">
          <h1>
            All Professionals
            <small>Edit | List Professionals</small>
          </h1>
          
        </section>
 <!-- Main content -->
        <section class="content">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Professionals</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php if (isset($_GET['d']) && $_GET['d']==501) {
                    ?>
                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <p><i class="icon fa fa-check"></i> Professional Deleted Sucessfully ...</p>
                    </div>
                    <?php } ?>
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Full Name</th>
                    <th>City</th>
                    <th>Profession</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Profile Pic.</th>
                    <th>EDIT/DELETE</th>
                  </tr>
                </thead>
                <tbody>
                <?php $sno=1;
                  $get="select * from professionals";
                  $exe=mysqli_query($con,$get);
                  while($data=mysqli_fetch_array($exe)){
                 ?>
                  <tr>
                    <td><?php echo $sno; ?></td>
                    <td><?php echo $data['name']; ?></td>                   
                    <td><?php echo $data['city']; ?></td>
                    <td><?php echo $data['profession']; ?></td>
                    <td><?php echo $data['phone']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td style="width: 15%;"><img class="img img-responsive" src="<?php echo $data['image']; ?>" alt=""></td>
                    <td><a class="btn btn-sm btn-warning" href="main.php?pg=editProfessional&id=<?php echo $data['id'] ?>">Edit</a> <a class="btn btn-sm btn-danger" onclick="deleteConfirm(<?php echo $data['id'] ?>)">Delete</a></td>
                  </tr>
                  <?php $sno++; } ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>S.No.</th>
                    <th>Full Name</th>
                    <th>City</th>
                    <th>Profession</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Profile Pic.</th>
                    <th>EDIT/DELETE</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>


          <!-- Your Page Content Here -->
  
        </section><!-- /.content -->
<script>
  function deleteConfirm(id){
   var d = confirm("Do you really want to delete ?");
   if(d == true){
      window.location.href = "pages/deleteProfessional.php?id="+id;
   }
   
  }
  </script>