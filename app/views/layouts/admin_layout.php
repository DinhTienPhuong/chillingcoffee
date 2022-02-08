<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>
        <?php 
            echo !empty($page_title) ? $page_title : 'Dashboard';
         ?>
    </title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/backend/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/backend/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/backend/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->


    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/backend/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/backend/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href=/public/backend/images/favicon.png />
  </head>
  <body> 
      <script src="<?php echo _WEB_ROOT; ?>/public/backend/js/jquery.js"></script> 
      <script scr="<?php echo _WEB_ROOT; ?>/public/backend/ckeditor5/ckeditor.js"></script>
    <div class="container-scroller">
    <!-- load header -->
    <?php 

        if(!empty($data_header)){
            $this->view('blocks.admins.header', $data_header); 
        }else{
            $this->view('blocks.admins.header'); 
        }
            
    ?>
    
    <!-- load content --> 
    <?php 

        if(!empty($sub_content)){
            $this->view($content, $sub_content); 
        }else{
            $this->view($content); 
        }
            
    ?>
    </div>
    <!-- load footer -->
    <?php 

        if(!empty($data_footer)){
            $this->view('blocks.admins.footer', $data_footer); 
        }else{
            $this->view('blocks.admins.footer'); 
        }
            
    ?>

</body>
<script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/translations/vi.js"> </script>
</html>