 <section class="content-header">
          <h1>
            All Appointments
            <small>Edit | List Appointments</small>
          </h1>
          
        </section>
 <!-- Main content -->
        <section class="content">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Appointments</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Lawyer</th>
                    <th>View</th>
                  </tr>
                </thead>
                <tbody>
                <?php $sno=1;
                  $get="select * from appointments order by date desc";
                  $exe=mysqli_query($con,$get);
                  while($data=mysqli_fetch_array($exe)){
                 ?>
                  <tr>
                    <td><?php echo $sno; ?></td>
                    <td><?php echo $data['name']; ?></td>                   
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['date']; ?></td>
                    <td><?php echo $data['time']; ?></td>
                    <td><?php echo $data['lawyer']; ?></td>
                    <td><a class="btn btn-sm btn-primary" href="main.php?pg=viewAppointment&id=<?php echo $data['id'] ?>">View</a></td>
                  </tr>
                  <?php $sno++; } ?>
                </tbody>
                <tfoot>
                                    <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Lawyer</th>
                    <th>View</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>


          <!-- Your Page Content Here -->
  
        </section><!-- /.content -->