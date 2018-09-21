<?php include 'include/header.php';
      include 'include/sidebar.php';
?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

       <?php 
        if (isset($_GET['pg'])) {

        switch ($_GET['pg']) {
          case 'listProfessionals':
          include 'pages/listProfessionals.php';
         break;
         case 'verifyProfessionalsList':
          include 'pages/verifyListProfessionals.php';
         break;
         case 'verifyProfessional':
          include 'pages/verifyProfessional.php';
         break;
         case 'editProfessional':
          include 'pages/editProfessional.php';
         break;
          case 'addService':
          include 'pages/addService.php';
         break;
         case 'listServices':
            include 'pages/listServices.php';
         break;
         case 'editService':
            include 'pages/editService.php';
         break;
         case 'addTestimonial':
          include 'pages/addTestimonial.php';
         break;
         case 'listTestimonials':
            include 'pages/listTestimonials.php';
         break;
         case 'editTestimonial':
            include 'pages/editTestimonial.php';
         break;
         case 'editAccount':
         include 'pages/editAccount.php';
         break;
       }
      }
      else{
          include 'pages/listProfessionals.php';
      }

        ?>
<?php include 'include/footer.php'; ?>
