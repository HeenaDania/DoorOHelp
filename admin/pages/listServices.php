 <section class="content-header">
          <h1>
            All Services
            <small>Edit | List Services</small>
          </h1>
          
        </section>
 <!-- Main content -->
        <section class="content">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Services</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php if (isset($_GET['d']) && $_GET['d']==501) {
                    ?>
                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <p><i class="icon fa fa-check"></i> Service Deleted Sucessfully ...</p>
                    </div>
                    <?php } ?>
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>EDIT/DELETE</th>
                  </tr>
                </thead>
                <tbody>
                <?php $sno=1;
                  $get="select * from services";
                  $exe=mysqli_query($con,$get);
                  while($data=mysqli_fetch_array($exe)){
                 ?>
                  <tr>
                    <td><?php echo $sno; ?></td>
                    <td><?php echo $data['name']; ?></td>                   
                    <td><a class="btn btn-sm btn-warning" href="main.php?pg=editService&id=<?php echo $data['id'] ?>">Edit</a> <a class="btn btn-sm btn-danger" onclick="deleteConfirm(<?php echo $data['id'] ?>)">Delete</a></td>
                  </tr>
                  <?php $sno++; } ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>S.No.</th>
                    <th>Name</th>
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
      window.location.href = "pages/deleteService.php?id="+id;
   }
   
  }
  </script>