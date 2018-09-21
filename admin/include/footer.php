      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          &copy; 2018 All rights reserved
        </div>
        <!-- Default to the left -->
        <strong>Maintained By <a href="http://localhost/doorohelp/index.php"> Door O Help</a></strong>
      </footer>

    
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="plugins/datatables/extensions/TableTools/js/dataTables.tableTools.js"></script>
    <script>
    $("#example1").DataTable( {
    dom: 'T<"clear">lfrtip',
    tableTools: {
      "aButtons": [
        "copy",
        "csv",
        "xls",
        "pdf",
        "print"
      ],
      "sSwfPath": "plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
        
    }
  } );

    </script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>