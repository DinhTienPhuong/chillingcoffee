<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    <?php
    echo !empty($page_title) ? $page_title : 'Trang chủ';
    ?>
  </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/backend/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/backend/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/backend/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/backend/css/style.css">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/admin/css/sweetalert.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?php echo _WEB_ROOT; ?>/public/backend/images/favicon.png" />

</head> 

<body>
  <style>
    .color_placehodel::placeholder {
      color: white;
    }
  </style>
  <?php
  if (!empty($sub_content)) {
    $this->view($content, $sub_content);
  } else {
    $this->view($content);
  }

  ?>
  <script src="<?php echo _WEB_ROOT; ?>/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo _WEB_ROOT; ?>/js/off-canvas.js"></script>
  <script src="<?php echo _WEB_ROOT; ?>/js/hoverable-collapse.js"></script>
  <script src="<?php echo _WEB_ROOT; ?>/js/misc.js"></script>
</body>

</html>